<?php

namespace App\Controller;

use App\Service\ProjectsContextFiller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProjectsController extends AbstractPageController
{
    #[Route('/projects', name: 'app.projects')]
    public function index(ProjectsContextFiller $projectsContextFiller): Response
    {
        $context = [];

        $this->fillContextBase($context);
        $projectsContextFiller->fillContext($context);

        return $this->render('page/index.html.twig', [
            "context" => $context
        ]);
    }

    #[Route('/projects/{id}', name: 'app.projects.index')]
    public function goToSplider(int $id, ProjectsContextFiller $projectsContextFiller): Response
    {
        $context = [];

        $this->fillContextBase($context);
        $projectsContextFiller->fillContext($context);

        return $this->render('page/index.html.twig', [
            "context" => $context,
            'section_id' => $id
        ]);
    }

    #[Route('/pl/projects', name: 'app.projects.pl')]
    public function indexPL(ProjectsContextFiller $projectsContextFiller): Response
    {
        $this->localeSwitcher->setLocale("pl");

        return $this->index($projectsContextFiller);
    }

    #[Route('/pl/projects/{id}', name: 'app.projects.pl.index')]
    public function goToSpliderPL(int $id, ProjectsContextFiller $projectsContextFiller): Response
    {
        $this->localeSwitcher->setLocale("pl");

        return $this->goToSplider($id, $projectsContextFiller);
    }

    #[Route('/ua/projects', name: 'app.projects.ua')]
    public function indexUA(ProjectsContextFiller $projectsContextFiller): Response
    {
        $this->localeSwitcher->setLocale("ua");

        return $this->index($projectsContextFiller);
    }

    #[Route('/ua/projects/{id}', name: 'app.projects.ua.index')]
    public function goToSpliderUA(int $id, ProjectsContextFiller $projectsContextFiller): Response
    {
        $this->localeSwitcher->setLocale("ua");

        return $this->goToSplider($id, $projectsContextFiller);
    }
}