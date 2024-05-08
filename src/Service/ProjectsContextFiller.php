<?php

namespace App\Service;

use App\Service\Abstract\AbstractContextFiller;

class ProjectsContextFiller extends AbstractContextFiller
{
    public function fillContext(array &$context): bool
    {
        if ($this->contextWasFilled($context)) {
            return false;
        }

        $context['projects'] = [
            "title" => $this->translatorInterface->trans('projects.title'),
            "description" => $this->translatorInterface->trans('projects.description'),
            "type" => "slider",
            "router" => $this->translatorInterface->trans('projects.router'),
            "color" => $this->translatorInterface->trans('projects.color'),
            "background" => $this->translatorInterface->trans('projects.background'),
            "sections" => [
                "site_card" => [
                    "title" => $this->translatorInterface->trans('projects.sections.site_card.title'),
                    "description" => $this->translatorInterface->trans('projects.sections.site_card.description'),
                    "section_id" => "site_card",
                    "color" => $this->translatorInterface->trans('projects.sections.site_card.color'),
                    "icon" => $this->translatorInterface->trans('projects.sections.site_card.icon'),
                    "background" => [
                        "color" => $this->translatorInterface->trans('projects.sections.site_card.background.color'),
                        "image" => $this->translatorInterface->trans('projects.sections.site_card.background.image'),
                    ],
                    "github" => $this->translatorInterface->trans('projects.sections.site_card.github'),
                ],
                "site_card_2" => [
                    "title" => $this->translatorInterface->trans('projects.sections.site_card_2.title'),
                    "description" => $this->translatorInterface->trans('projects.sections.site_card_2.description'),
                    "section_id" => "site_card_2",
                    "color" => $this->translatorInterface->trans('projects.sections.site_card_2.color'),
                    "icon" => $this->translatorInterface->trans('projects.sections.site_card_2.icon'),
                    "background" => [
                        "color" => $this->translatorInterface->trans('projects.sections.site_card_2.background.color'),
                        "image" => $this->translatorInterface->trans('projects.sections.site_card_2.background.image'),
                    ],
                    "github" => $this->translatorInterface->trans('projects.sections.site_card_2.github'),
                ],
                "wchat" => [
                    "title" => $this->translatorInterface->trans('projects.sections.wchat.title'),
                    "description" => $this->translatorInterface->trans('projects.sections.wchat.description'),
                    "section_id" => "wchat",
                    "color" => $this->translatorInterface->trans('projects.sections.wchat.color'),
                    "icon" => $this->translatorInterface->trans('projects.sections.wchat.icon'),
                    "background" => [
                        "color" => $this->translatorInterface->trans('projects.sections.wchat.background.color'),
                        "image" => $this->translatorInterface->trans('projects.sections.wchat.background.image'),
                    ],
                    "github" => $this->translatorInterface->trans('projects.sections.wchat.github'),
                ],
                "soleni" => [
                    "title" => $this->translatorInterface->trans('projects.sections.soleni.title'),
                    "description" => $this->translatorInterface->trans('projects.sections.soleni.description'),
                    "section_id" => "soleni",
                    "color" => $this->translatorInterface->trans('projects.sections.soleni.color'),
                    "icon" => $this->translatorInterface->trans('projects.sections.soleni.icon'),
                    "background" => [
                        "color" => $this->translatorInterface->trans('projects.sections.soleni.background.color'),
                        "image" => $this->translatorInterface->trans('projects.sections.soleni.background.image'),
                    ],
                    "github" => $this->translatorInterface->trans('projects.sections.soleni.github'),
                ],
                "getzoo" => [
                    "title" => $this->translatorInterface->trans('projects.sections.getzoo.title'),
                    "description" => $this->translatorInterface->trans('projects.sections.getzoo.description'),
                    "section_id" => "getzoo",
                    "color" => $this->translatorInterface->trans('projects.sections.getzoo.color'),
                    "icon" => $this->translatorInterface->trans('projects.sections.getzoo.icon'),
                    "background" => [
                        "color" => $this->translatorInterface->trans('projects.sections.getzoo.background.color'),
                        "image" => $this->translatorInterface->trans('projects.sections.getzoo.background.image'),
                    ],
                    "github" => $this->translatorInterface->trans('projects.sections.getzoo.github'),
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

        unset($context['projects']);

        return true;
    }

    public function contextWasFilled(array $context): bool
    {
        return array_key_exists('projects', $context);
    }
}