<?php

namespace App\Service\Abstract;

use App\Service\Interface\ContextFillerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

abstract class AbstractContextFiller implements ContextFillerInterface
{
    public function __construct(
        protected TranslatorInterface $translatorInterface
    ) {
    }
}