<?php

namespace App\Service;

use App\Service\Abstract\AbstractContextFiller;
use Symfony\Contracts\Translation\TranslatorInterface;

class HeaderContextFiller extends AbstractContextFiller
{
    private FillerService $fillerService;
    private array $fillers;

    /**
     * @param TranslatorInterface $translatorInterface
     * @param AboutContextFiller $aboutContextFiller
     * @param SkillsContextFiller $skillsContextFiller
     * @param ProjectsContextFiller $projectsContextFiller
     * @param ExperienceContextFiller $experienceContextFiller
     * @param SendMessageContextFiller $sendMessageContextFiller
     */

    public function __construct(
        TranslatorInterface $translatorInterface,
        AboutContextFiller $aboutContextFiller,
        SkillsContextFiller $skillsContextFiller,
        ProjectsContextFiller $projectsContextFiller,
        ExperienceContextFiller $experienceContextFiller,
        SendMessageContextFiller $sendMessageContextFiller,
        FillerService $fillerService
    ) {
        parent::__construct($translatorInterface);
        $this->fillers = [
            $aboutContextFiller,
            $skillsContextFiller,
            $projectsContextFiller,
            $experienceContextFiller,
            $sendMessageContextFiller,
        ];

        $this->fillerService = $fillerService;
    }

    public function fillContext(array &$context): bool
    {
        if ($this->contextWasFilled($context)) {
            return false;
        }

        $context['header'] = [];

        foreach ($this->fillers as $filler) {
            $contextTitle = $this->fillerService->getFillerTitle($filler);
            $context['header'][$contextTitle]["sections"] = $this->fillerService->getContextSections($filler);
            $context["header"][$contextTitle]["title"] = $this->fillerService->getContextTitleName($filler);
            $context['header'][$contextTitle]['router'] = $this->fillerService->getContextRouter($filler);
            $context["header"][$contextTitle]["type"] = $this->fillerService->getContextType($filler);
        }

        return true;
    }

    public function removeContext(array &$context): bool
    {
        if (!$this->contextWasFilled($context)) {
            return false;
        }

        unset($context['header']);

        return true;
    }

    public function contextWasFilled(array $context): bool
    {
        return array_key_exists('header', $context);
    }
}