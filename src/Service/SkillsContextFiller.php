<?php

namespace App\Service;

use App\Service\Abstract\AbstractContextFiller;

class SkillsContextFiller extends AbstractContextFiller
{
    public function fillContext(array &$context): bool
    {
        if ($this->contextWasFilled($context)) {
            return false;
        }

        $context['skills'] = [
            "title" => $this->translatorInterface->trans('skills.title'),
            "description" => $this->translatorInterface->trans('skills.description'),
            "router" => $this->translatorInterface->trans('skills.router'),
            "background" => $this->translatorInterface->trans('skills.background'),
            "type" => "slider",
            "sections" => [
                "php" => [
                    "title" => $this->translatorInterface->trans('skills.sections.php.title'),
                    "description" => $this->translatorInterface->trans('skills.sections.php.description'),
                    "section_id" => "php",
                    "color" => $this->translatorInterface->trans('skills.sections.php.color'),
                    "icon" => $this->translatorInterface->trans("skills.sections.php.icon"),
                    "level" => $this->translatorInterface->trans('skills.sections.php.level'),
                    "background" => [
                        "image" => $this->translatorInterface->trans("skills.sections.php.background.image"),
                        "color" => $this->translatorInterface->trans("skills.sections.php.background.color"),
                    ]
                ],
                "symfony" => [
                    "title" => $this->translatorInterface->trans('skills.sections.symfony.title'),
                    "description" => $this->translatorInterface->trans('skills.sections.symfony.description'),
                    "section_id" => "symfony",
                    "color" => $this->translatorInterface->trans('skills.sections.symfony.color'),
                    "icon" => $this->translatorInterface->trans("skills.sections.symfony.icon"),
                    "level" => $this->translatorInterface->trans('skills.sections.symfony.level'),
                    "background" => [
                        "image" => $this->translatorInterface->trans("skills.sections.symfony.background.image"),
                        "color" => $this->translatorInterface->trans("skills.sections.symfony.background.color"),
                    ]
                ],
                "sass" => [
                    "title" => $this->translatorInterface->trans('skills.sections.sass.title'),
                    "description" => $this->translatorInterface->trans('skills.sections.sass.description'),
                    "section_id" => "sass",
                    "color" => $this->translatorInterface->trans('skills.sections.sass.color'),
                    "icon" => $this->translatorInterface->trans("skills.sections.sass.icon"),
                    "level" => $this->translatorInterface->trans('skills.sections.sass.level'),
                    "background" => [
                        "image" => $this->translatorInterface->trans("skills.sections.sass.background.image"),
                        "color" => $this->translatorInterface->trans("skills.sections.sass.background.color"),
                    ]
                ],
                "react" => [
                    "title" => $this->translatorInterface->trans('skills.sections.react.title'),
                    "description" => $this->translatorInterface->trans('skills.sections.react.description'),
                    "section_id" => "react",
                    "color" => $this->translatorInterface->trans('skills.sections.react.color'),
                    "icon" => $this->translatorInterface->trans("skills.sections.react.icon"),
                    "level" => $this->translatorInterface->trans('skills.sections.react.level'),
                    "background" => [
                        "image" => $this->translatorInterface->trans("skills.sections.react.background.image"),
                        "color" => $this->translatorInterface->trans("skills.sections.react.background.color"),
                    ]
                ],
                "tailwind" => [
                    "title" => $this->translatorInterface->trans('skills.sections.tailwind.title'),
                    "description" => $this->translatorInterface->trans('skills.sections.tailwind.description'),
                    "section_id" => "tailwind",
                    "color" => $this->translatorInterface->trans('skills.sections.tailwind.color'),
                    "icon" => $this->translatorInterface->trans("skills.sections.tailwind.icon"),
                    "level" => $this->translatorInterface->trans('skills.sections.tailwind.level'),
                    "background" => [
                        "image" => $this->translatorInterface->trans("skills.sections.tailwind.background.image"),
                        "color" => $this->translatorInterface->trans("skills.sections.tailwind.background.color"),
                    ]
                ],
                "twig" => [
                    "title" => $this->translatorInterface->trans('skills.sections.twig.title'),
                    "description" => $this->translatorInterface->trans('skills.sections.twig.description'),
                    "section_id" => "twig",
                    "color" => $this->translatorInterface->trans('skills.sections.twig.color'),
                    "icon" => $this->translatorInterface->trans("skills.sections.twig.icon"),
                    "level" => $this->translatorInterface->trans('skills.sections.twig.level'),
                    "background" => [
                        "image" => $this->translatorInterface->trans("skills.sections.twig.background.image"),
                        "color" => $this->translatorInterface->trans("skills.sections.twig.background.color"),
                    ]
                ],
                "scrum" => [
                    "title" => $this->translatorInterface->trans('skills.sections.scrum.title'),
                    "description" => $this->translatorInterface->trans('skills.sections.scrum.description'),
                    "section_id" => "scrum",
                    "color" => $this->translatorInterface->trans('skills.sections.scrum.color'),
                    "icon" => $this->translatorInterface->trans("skills.sections.scrum.icon"),
                    "level" => $this->translatorInterface->trans('skills.sections.scrum.level'),
                    "background" => [
                        "image" => $this->translatorInterface->trans("skills.sections.scrum.background.image"),
                        "color" => $this->translatorInterface->trans("skills.sections.scrum.background.color"),
                    ]
                ],
                "doctrine" => [
                    "title" => $this->translatorInterface->trans('skills.sections.doctrine.title'),
                    "description" => $this->translatorInterface->trans('skills.sections.doctrine.description'),
                    "section_id" => "doctrine",
                    "color" => $this->translatorInterface->trans('skills.sections.doctrine.color'),
                    "icon" => $this->translatorInterface->trans("skills.sections.doctrine.icon"),
                    "level" => $this->translatorInterface->trans('skills.sections.doctrine.level'),
                    "background" => [
                        "image" => $this->translatorInterface->trans("skills.sections.doctrine.background.image"),
                        "color" => $this->translatorInterface->trans("skills.sections.doctrine.background.color"),
                    ]
                ],
                "bootstrap" => [
                    "title" => $this->translatorInterface->trans('skills.sections.bootstrap.title'),
                    "description" => $this->translatorInterface->trans('skills.sections.bootstrap.description'),
                    "section_id" => "bootstrap",
                    "color" => $this->translatorInterface->trans('skills.sections.bootstrap.color'),
                    "icon" => $this->translatorInterface->trans("skills.sections.bootstrap.icon"),
                    "level" => $this->translatorInterface->trans('skills.sections.bootstrap.level'),
                    "background" => [
                        "image" => $this->translatorInterface->trans("skills.sections.bootstrap.background.image"),
                        "color" => $this->translatorInterface->trans("skills.sections.bootstrap.background.color"),
                    ]
                ],
                "mysql" => [
                    "title" => $this->translatorInterface->trans('skills.sections.mysql.title'),
                    "description" => $this->translatorInterface->trans('skills.sections.mysql.description'),
                    "section_id" => "mysql",
                    "color" => $this->translatorInterface->trans('skills.sections.mysql.color'),
                    "icon" => $this->translatorInterface->trans("skills.sections.mysql.icon"),
                    "level" => $this->translatorInterface->trans('skills.sections.mysql.level'),
                    "background" => [
                        "image" => $this->translatorInterface->trans("skills.sections.mysql.background.image"),
                        "color" => $this->translatorInterface->trans("skills.sections.mysql.background.color"),
                    ]
                ],
                "vuejs" => [
                    "title" => $this->translatorInterface->trans('skills.sections.vuejs.title'),
                    "description" => $this->translatorInterface->trans('skills.sections.vuejs.description'),
                    "section_id" => "vuejs",
                    "color" => $this->translatorInterface->trans('skills.sections.vuejs.color'),
                    "icon" => $this->translatorInterface->trans("skills.sections.vuejs.icon"),
                    "level" => $this->translatorInterface->trans('skills.sections.vuejs.level'),
                    "background" => [
                        "image" => $this->translatorInterface->trans("skills.sections.vuejs.background.image"),
                        "color" => $this->translatorInterface->trans("skills.sections.vuejs.background.color"),
                    ]
                ],
                "git" => [
                    "title" => $this->translatorInterface->trans('skills.sections.git.title'),
                    "description" => $this->translatorInterface->trans('skills.sections.git.description'),
                    "section_id" => "git",
                    "color" => $this->translatorInterface->trans('skills.sections.git.color'),
                    "icon" => $this->translatorInterface->trans("skills.sections.git.icon"),
                    "level" => $this->translatorInterface->trans('skills.sections.git.level'),
                    "background" => [
                        "image" => $this->translatorInterface->trans("skills.sections.git.background.image"),
                        "color" => $this->translatorInterface->trans("skills.sections.git.background.color"),
                    ]
                ],
                "shopware" => [
                    "title" => $this->translatorInterface->trans('skills.sections.shopware.title'),
                    "description" => $this->translatorInterface->trans('skills.sections.shopware.description'),
                    "section_id" => "shopware",
                    "color" => $this->translatorInterface->trans('skills.sections.shopware.color'),
                    "icon" => $this->translatorInterface->trans("skills.sections.shopware.icon"),
                    "level" => $this->translatorInterface->trans('skills.sections.shopware.level'),
                    "background" => [
                        "image" => $this->translatorInterface->trans("skills.sections.shopware.background.image"),
                        "color" => $this->translatorInterface->trans("skills.sections.shopware.background.color"),
                    ]
                ],
                "docker" => [
                    "title" => $this->translatorInterface->trans('skills.sections.docker.title'),
                    "description" => $this->translatorInterface->trans('skills.sections.docker.description'),
                    "section_id" => "docker",
                    "color" => $this->translatorInterface->trans('skills.sections.docker.color'),
                    "icon" => $this->translatorInterface->trans("skills.sections.docker.icon"),
                    "level" => $this->translatorInterface->trans('skills.sections.docker.level'),
                    "background" => [
                        "image" => $this->translatorInterface->trans("skills.sections.docker.background.image"),
                        "color" => $this->translatorInterface->trans("skills.sections.docker.background.color"),
                    ]
                ],
                "apiplatform" => [
                    "title" => $this->translatorInterface->trans('skills.sections.apiplatform.title'),
                    "description" => $this->translatorInterface->trans('skills.sections.apiplatform.description'),
                    "section_id" => "apiplatform",
                    "color" => $this->translatorInterface->trans('skills.sections.apiplatform.color'),
                    "icon" => $this->translatorInterface->trans("skills.sections.apiplatform.icon"),
                    "level" => $this->translatorInterface->trans('skills.sections.apiplatform.level'),
                    "background" => [
                        "image" => $this->translatorInterface->trans("skills.sections.apiplatform.background.image"),
                        "color" => $this->translatorInterface->trans("skills.sections.apiplatform.background.color"),
                    ]
                ],
                "typescript" => [
                    "title" => $this->translatorInterface->trans('skills.sections.typescript.title'),
                    "description" => $this->translatorInterface->trans('skills.sections.typescript.description'),
                    "section_id" => "typescript",
                    "color" => $this->translatorInterface->trans('skills.sections.typescript.color'),
                    "icon" => $this->translatorInterface->trans("skills.sections.typescript.icon"),
                    "level" => $this->translatorInterface->trans('skills.sections.typescript.level'),
                    "background" => [
                        "image" => $this->translatorInterface->trans("skills.sections.typescript.background.image"),
                        "color" => $this->translatorInterface->trans("skills.sections.typescript.background.color"),
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

        unset($context['skills']);

        return true;
    }

    public function contextWasFilled(array $context): bool
    {
        return array_key_exists('skills', $context);
    }
}