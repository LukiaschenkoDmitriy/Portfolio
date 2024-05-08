<?php

namespace App\Service;

use App\Service\Abstract\AbstractContextFiller;

class SendMessageContextFiller extends AbstractContextFiller
{
    public function fillContext(array &$context): bool
    {
        if ($this->contextWasFilled($context)) {
            return false;
        }

        $context['send_message'] = [
            "title" => $this->translatorInterface->trans('send_message.title'),
            "router" => $this->translatorInterface->trans('send_message.router'),
            "description" => $this->translatorInterface->trans('send_message.description'),
            "background" => $this->translatorInterface->trans('send_message.background'),
            "form" => [
                "name" => $this->translatorInterface->trans('send_message.form.name'),
                "email" => $this->translatorInterface->trans('send_message.form.email'),
                "theme" => $this->translatorInterface->trans('send_message.form.theme'),
                "message" => $this->translatorInterface->trans('send_message.form.message'),
                "submit" => $this->translatorInterface->trans('send_message.form.submit')
            ],
            "error" => [
                "name" => $this->translatorInterface->trans('send_message.error.name'),
                "email" => $this->translatorInterface->trans('send_message.error.email'),
                "theme" => $this->translatorInterface->trans('send_message.error.theme'),
                "message" => $this->translatorInterface->trans('send_message.error.message'),
                "invalid_email" => $this->translatorInterface->trans('send_message.error.invalid_email')
            ],
            "success" => $this->translatorInterface->trans('send_message.success')
        ];

        return true;
    }

    public function removeContext(array &$context): bool
    {
        if (!$this->contextWasFilled($context)) {
            return false;
        }

        unset($context['send_message']);

        return true;
    }

    public function contextWasFilled(array $context): bool
    {
        return array_key_exists('send_message', $context);
    }
}