<?php

namespace App\Service;

use App\Service\Abstract\AbstractContextFiller;

class ContactContextFiller extends AbstractContextFiller
{
    public function fillContext(array &$context): bool
    {
        if ($this->contextWasFilled($context))
            return false;

        $context['contact'] = [
            "title" => $this->translatorInterface->trans("contact.title"),
            "sections" => [
                "facebook" => [
                    "title" => $this->translatorInterface->trans("contact.sections.facebook.title"),
                    "type" => $this->translatorInterface->trans("contact.sections.facebook.type"),
                    "url" => $this->translatorInterface->trans("contact.sections.facebook.url")
                ],
                "instagram" => [
                    "title" => $this->translatorInterface->trans("contact.sections.instagram.title"),
                    "type" => $this->translatorInterface->trans("contact.sections.instagram.type"),
                    "url" => $this->translatorInterface->trans("contact.sections.instagram.url")
                ],
                "linkedin" => [
                    "title" => $this->translatorInterface->trans("contact.sections.linkedin.title"),
                    "type" => $this->translatorInterface->trans("contact.sections.linkedin.type"),
                    "url" => $this->translatorInterface->trans("contact.sections.linkedin.url")
                ],
                "telegram" => [
                    "title" => $this->translatorInterface->trans("contact.sections.telegram.title"),
                    "type" => $this->translatorInterface->trans("contact.sections.telegram.type"),
                    "url" => $this->translatorInterface->trans("contact.sections.telegram.url")
                ],
                "github" => [
                    "title" => $this->translatorInterface->trans("contact.sections.github.title"),
                    "type" => $this->translatorInterface->trans("contact.sections.github.type"),
                    "url" => $this->translatorInterface->trans("contact.sections.github.url")
                ],
                "email" => [
                    "title" => $this->translatorInterface->trans("contact.sections.email.title"),
                    "type" => $this->translatorInterface->trans("contact.sections.email.type"),
                    "url" => $this->translatorInterface->trans("contact.sections.email.url")
                ],
                "phone_ua" => [
                    "title" => $this->translatorInterface->trans("contact.sections.phone_ua.title"),
                    "type" => $this->translatorInterface->trans("contact.sections.phone_ua.type"),
                    "url" => $this->translatorInterface->trans("contact.sections.phone_ua.url")
                ],
                "phone_pl" => [
                    "title" => $this->translatorInterface->trans("contact.sections.phone_pl.title"),
                    "type" => $this->translatorInterface->trans("contact.sections.phone_pl.type"),
                    "url" => $this->translatorInterface->trans("contact.sections.phone_pl.url")
                ]
            ]
        ];

        return true;
    }

    public function removeContext(array &$context): bool
    {
        if (!$this->contextWasFilled($context))
            return false;

        unset($context['contact']);

        return true;
    }

    public function contextWasFilled(array $context): bool
    {
        return array_key_exists('contact', $context);
    }
}