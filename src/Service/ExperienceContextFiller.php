<?php

namespace App\Service;

use App\Service\Abstract\AbstractContextFiller;

class ExperienceContextFiller extends AbstractContextFiller
{
    public function fillContext(array &$context): bool
    {
        if ($this->contextWasFilled($context)) {
            return false;
        }

        $context['experience'] = [
            'title' => $this->translatorInterface->trans('experience.title'),
            "router" => $this->translatorInterface->trans('experience.router'),
            "description" => $this->translatorInterface->trans('experience.description'),
            "background" => $this->translatorInterface->trans('experience.background'),
            "sections" => [
                "freelance" => [
                    "title" => $this->translatorInterface->trans('experience.sections.freelance.title'),
                    "section_id" => "freelance",
                    "description" => $this->translatorInterface->trans('experience.sections.freelance.description'),
                    "icon" => $this->translatorInterface->trans('experience.sections.freelance.icon'),
                    "color" => $this->translatorInterface->trans('experience.sections.freelance.color'),
                    "background" => [
                        "image" => $this->translatorInterface->trans('experience.sections.freelance.background.image'),
                        "color" => $this->translatorInterface->trans('experience.sections.freelance.background.color'),
                    ]
                ]
            ]
        ];

        return true;
    }

    public function removeContext(array &$context): bool
    {
        if (!$this->contextWasFilled($context)) {
            return false;
        }

        unset($context['experience']);

        return true;
    }

    public function contextWasFilled(array $context): bool
    {
        return array_key_exists('experience', $context);
    }
}