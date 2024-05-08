<?php

namespace App\Controller;

use App\Service\ContactContextFiller;
use App\Service\ExperienceContextFiller;
use App\Service\FooterContextFiller;
use App\Service\HeaderContextFiller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Translation\LocaleSwitcher;

class ExperienceController extends AbstractPageController
{
    #[Route('/experience', name: 'app.experience')]
    public function index(ExperienceContextFiller $experienceContextFiller): Response
    {
        $context = [];

        $this->fillContextBase($context);
        $experienceContextFiller->fillContext($context);

        return $this->render('page/index.html.twig', [
            "context" => $context
        ]);
    }

    #[Route('/pl/experience', name: 'app.experience.pl')]
    public function indexPL(ExperienceContextFiller $experienceContextFiller, ): Response
    {
        $this->localeSwitcher->setLocale('pl');

        return $this->index($experienceContextFiller);
    }

    #[Route('/ua/experience', name: 'app.experience.ua')]
    public function indexUA(ExperienceContextFiller $experienceContextFiller, ): Response
    {
        $this->localeSwitcher->setLocale('ua');

        return $this->index($experienceContextFiller);
    }
}