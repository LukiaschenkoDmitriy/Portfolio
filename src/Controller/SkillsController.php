<?php

namespace App\Controller;

use App\Service\ContactContextFiller;
use App\Service\FooterContextFiller;
use App\Service\HeaderContextFiller;
use App\Service\SkillsContextFiller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Translation\LocaleSwitcher;

class SkillsController extends AbstractPageController
{

    #[Route('/skills', name: 'app.skills')]
    public function index(SkillsContextFiller $skillsContextFiller): Response
    {
        $context = [];

        $this->fillContextBase($context);
        $skillsContextFiller->fillContext($context);

        return $this->render('page/index.html.twig', [
            "context" => $context
        ]);
    }

    #[Route('/skills/{id}', name: 'app.skills.index')]
    public function goToSplider(int $id, SkillsContextFiller $skillsContextFiller, ): Response
    {

        $context = [];

        $this->fillContextBase($context);
        $skillsContextFiller->fillContext($context);

        return $this->render('page/index.html.twig', [
            "context" => $context,
            "section_id" => $id
        ]);
    }

    #[Route('/pl/skills', name: 'app.skills.pl')]
    public function indexPL(SkillsContextFiller $skillsContextFiller): Response
    {

        $this->localeSwitcher->setLocale('pl');
        return $this->index($skillsContextFiller);
    }

    #[Route('/pl/skills/{id}', name: 'app.skills.pl.index')]
    public function goToSpliderPL(int $id, SkillsContextFiller $skillsContextFiller): Response
    {

        $this->localeSwitcher->setLocale('pl');
        return $this->goToSplider($id, $skillsContextFiller);
    }

    #[Route('/ua/skills', name: 'app.skills.ua')]
    public function indexUA(SkillsContextFiller $skillsContextFiller): Response
    {
        $this->localeSwitcher->setLocale('ua');
        return $this->index($skillsContextFiller);
    }

    #[Route('/ua/skills/{id}', name: 'app.skills.ua.index')]
    public function goToSpliderUA(int $id, SkillsContextFiller $skillsContextFiller): Response
    {
        $this->localeSwitcher->setLocale('ua');
        return $this->goToSplider($id, $skillsContextFiller);
    }
}