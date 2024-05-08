<?php

namespace App\Controller;

use App\Service\AboutContextFiller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AboutController extends AbstractPageController
{
    #[Route('/', name: 'app.about')]
    public function index(AboutContextFiller $aboutContextFiller): Response
    {

        $context = [];

        $this->fillContextBase($context);
        $aboutContextFiller->fillContext($context);

        return $this->render('page/index.html.twig', [
            "context" => $context
        ]);
    }

    #[Route('/pl/', name: 'app.about.pl')]
    public function indexPL(AboutContextFiller $aboutContextFiller): Response
    {

        $this->localeSwitcher->setLocale('pl');

        return $this->index($aboutContextFiller);
    }

    #[Route('/ua/', name: 'app.about.ua')]
    public function indexUA(AboutContextFiller $aboutContextFiller): Response
    {

        $this->localeSwitcher->setLocale('ua');

        return $this->index($aboutContextFiller);
    }
}
