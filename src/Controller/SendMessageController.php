<?php

namespace App\Controller;

use App\Service\ContactContextFiller;
use App\Service\FooterContextFiller;
use App\Service\HeaderContextFiller;
use App\Service\SendMessageContextFiller;
use InvalidArgumentException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\InputBag;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Exception\RfcComplianceException;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Translation\LocaleSwitcher;
use Symfony\Contracts\Translation\TranslatorInterface;

class SendMessageController extends AbstractPageController
{
    #[Route("/send", "app.send_message", methods: ["GET"])]
    public function indexGet(SendMessageContextFiller $sendMessageContextFiller): Response
    {
        $context = [];

        $this->fillContextBase($context);
        $sendMessageContextFiller->fillContext($context);

        return $this->render('page/index.html.twig', [
            "context" => $context
        ]);
    }

    #[Route("/send", "app.send_message.post", methods: ["POST"])]
    public function indexPost(
        Request $request,
        MailerInterface $mailerInterface,
        SendMessageContextFiller $sendMessageContextFiller
    ): Response {
        $context = [];

        $this->fillContextBase($context);
        $sendMessageContextFiller->fillContext($context);

        $name = $request->request->get("name");
        $email = $request->request->get("email");
        $theme = $request->request->get("theme");
        $message = $request->request->get("message");

        $cache = [];

        if (!$this->validateRequestData($request->request, $context, $cache)) {
            return $this->render('page/index.html.twig', [
                "context" => $context,
                "cache" => $cache
            ]);
        }

        try {
            $email = (new Email())
                ->from($email)
                ->to("lukiaschenkoff@gmail.com")
                ->priority(Email::PRIORITY_HIGHEST)
                ->subject("[Site Card]" . $theme)
                ->html("<div>" . $name . "</div>" . "<div>" . $message . "</div>");

            $mailerInterface->send($email);
        } catch (RfcComplianceException | InvalidArgumentException $error) {
            $context["error"]["email"] = $this->translatorInterface->trans("send_message.error.invalid_email");
            return $this->render('page/index.html.twig', [
                "context" => $context,
                "cache" => $cache
            ]);
        }

        $context["success"] = $this->translatorInterface->trans("send_message.success");

        return $this->render('page/index.html.twig', [
            "context" => $context
        ]);
    }

    #[Route("/pl/send", "app.send_message.pl", methods: ["GET"])]
    public function indexGetPL(SendMessageContextFiller $sendMessageContextFiller): Response
    {
        $this->localeSwitcher->setLocale("pl");
        return $this->indexGet($sendMessageContextFiller);
    }

    #[Route("/pl/send", "app.send_message.pl.post", methods: ["POST"])]
    public function indexPostPL(Request $request, MailerInterface $mailerInterface, SendMessageContextFiller $sendMessageContextFiller): Response
    {
        $this->localeSwitcher->setLocale("pl");
        return $this->indexPost($request, $mailerInterface, $sendMessageContextFiller);
    }

    #[Route("/ua/send", "app.send_message.ua", methods: ["GET"])]
    public function indexGetUA(SendMessageContextFiller $sendMessageContextFiller): Response
    {
        $this->localeSwitcher->setLocale("ua");
        return $this->indexGet($sendMessageContextFiller);
    }

    #[Route("/ua/send", "app.send_message.ua.post", methods: ["POST"])]
    public function indexPostUA(Request $request, MailerInterface $mailerInterface, SendMessageContextFiller $sendMessageContextFiller): Response
    {
        $this->localeSwitcher->setLocale("ua");
        return $this->indexPost($request, $mailerInterface, $sendMessageContextFiller);
    }

    public function validateRequestData(InputBag $requestBag, &$context, &$cache): bool
    {
        $fields = [
            "name" => $this->translatorInterface->trans("send_message.error.name"),
            "email" => $this->translatorInterface->trans("send_message.error.email"),
            "theme" => $this->translatorInterface->trans("send_message.error.theme"),
            "message" => $this->translatorInterface->trans("send_message.error.message")
        ];

        foreach ($fields as $field => $label) {
            if (empty($requestBag->get($field))) {
                $context["error"][$field] = $label;
            } else {
                $cache[$field] = $requestBag->get($field);
            }
        }

        return empty($context["error"]);
    }
}