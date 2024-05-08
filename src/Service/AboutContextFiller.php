<?php

namespace App\Service;

use App\Service\Abstract\AbstractContextFiller;

class AboutContextFiller extends AbstractContextFiller
{
    public function fillContext(array &$context): bool
    {
        if ($this->contextWasFilled($context)) {
            return false;
        }

        $context["about"] = [
            "title" => $this->translatorInterface->trans("about.title"),
            "description" => $this->translatorInterface->trans("about.description"),
            "is_separate" => true,
            "router" => $this->translatorInterface->trans("about.router"),
            "background" => $this->translatorInterface->trans("about.background"),
            "type" => "default",
            "sections" => [
                "about_me" => [
                    "title" => $this->translatorInterface->trans("about.sections.about_me.title"),
                    "section_id" => "about_me",
                    "description" => $this->translatorInterface->trans("about.sections.about_me.description"),
                    "media" => $this->translatorInterface->trans("about.sections.about_me.media"),
                    "color" => $this->translatorInterface->trans("about.sections.about_me.color"),
                    "background" => [
                        "image" => $this->translatorInterface->trans("about.sections.about_me.background.image"),
                        "color" => $this->translatorInterface->trans("about.sections.about_me.background.color")
                    ],
                ],
                "education" => [
                    "title" => $this->translatorInterface->trans("about.sections.education.title"),
                    "section_id" => "education",
                    "description" => $this->translatorInterface->trans("about.sections.education.description"),
                    "media" => $this->translatorInterface->trans("about.sections.education.media"),
                    "color" => $this->translatorInterface->trans("about.sections.education.color"),
                    "background" => [
                        "image" => $this->translatorInterface->trans("about.sections.education.background.image"),
                        "color" => $this->translatorInterface->trans("about.sections.education.background.color")
                    ]
                ],
                "languages" => [
                    "title" => $this->translatorInterface->trans("about.sections.languages.title"),
                    "section_id" => "languages",
                    "description" => $this->translatorInterface->trans("about.sections.languages.description"),
                    "color" => $this->translatorInterface->trans("about.sections.languages.color"),
                    "background" => [
                        "image" => $this->translatorInterface->trans("about.sections.languages.background.image"),
                        "color" => $this->translatorInterface->trans("about.sections.languages.background.color")
                    ],
                    "columns" => [
                        "ukraine" => [
                            "title" => $this->translatorInterface->trans("about.sections.languages.columns.ukraine.title"),
                            "rate" => "9"
                        ],
                        "russian" => [
                            "title" => $this->translatorInterface->trans("about.sections.languages.columns.russian.title"),
                            "rate" => "8"
                        ],
                        "polish" => [
                            "title" => $this->translatorInterface->trans("about.sections.languages.columns.polish.title"),
                            "rate" => "5"
                        ],
                        "english" => [
                            "title" => $this->translatorInterface->trans("about.sections.languages.columns.english.title"),
                            "rate" => "4"
                        ]
                    ]
                ],
                "personal_skills" => [
                    "title" => $this->translatorInterface->trans("about.sections.personal_skills.title"),
                    "section_id" => "personal_skills",
                    "description" => $this->translatorInterface->trans("about.sections.personal_skills.description"),
                    "color" => $this->translatorInterface->trans("about.sections.personal_skills.color"),
                    "background" => [
                        "image" => $this->translatorInterface->trans("about.sections.personal_skills.background.image"),
                        "color" => $this->translatorInterface->trans("about.sections.personal_skills.background.color")
                    ],
                    "columns" => [
                        "responsibility" => [
                            "title" => $this->translatorInterface->trans("about.sections.personal_skills.columns.responsibility.title"),
                            "rate" => "7"
                        ],
                        "mindfulness" => [
                            "title" => $this->translatorInterface->trans("about.sections.personal_skills.columns.mindfulness.title"),
                            "rate" => "6"
                        ],
                        "communication" => [
                            "title" => $this->translatorInterface->trans("about.sections.personal_skills.columns.communication.title"),
                            "rate" => "6"
                        ],
                        "teamwork" => [
                            "title" => $this->translatorInterface->trans("about.sections.personal_skills.columns.teamwork.title"),
                            "rate" => "6"
                        ],
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

        unset($context["about"]);

        return true;
    }

    public function contextWasFilled(array $context): bool
    {
        return array_key_exists('about', $context);
    }
}