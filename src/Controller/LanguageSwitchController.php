<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Translation\LocaleSwitcher;

class LanguageSwitchController extends AbstractController
{
    private const availableLanguages = ["pl", "ua"];
    #[Route("/language/switch/{locale}", "app.language.switcher")]
    public function index(string $locale, Request $request, LocaleSwitcher $localeSwitcher)
    {
        if (!in_array($locale, self::availableLanguages)) {
            $localeSwitcher->reset();
            return $this->redirectToRoute("app.about");
        }

        $localeSwitcher->setLocale($locale);
        return $this->redirectToRoute("app.about." . $locale);
    }
}