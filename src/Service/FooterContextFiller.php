<?php

namespace App\Service;

use App\Service\Abstract\AbstractContextFiller;
use Symfony\Contracts\Translation\TranslatorInterface;

class FooterContextFiller extends AbstractContextFiller
{
    public function __construct(
        TranslatorInterface $translatorInterface,
        private ContactContextFiller $contactContextFiller,
        private HeaderContextFiller $headerContextFiller
    ) {
        parent::__construct($translatorInterface);
    }

    public function fillContext(array &$context): bool
    {
        if ($this->contextWasFilled($context)) {
            return false;
        }

        $headerContext = [];
        $contactContext = [];

        $this->headerContextFiller->fillContext($headerContext);
        $this->contactContextFiller->fillContext($contactContext);

        $context['footer'] = [
            'header' => $headerContext["header"],
        ];

        return true;
    }

    public function removeContext(array &$context): bool
    {
        return true;
    }

    public function contextWasFilled(array $context): bool
    {
        return array_key_exists('footer', $context);
    }
}