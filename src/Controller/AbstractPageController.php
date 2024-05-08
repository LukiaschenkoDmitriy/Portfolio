<?php

namespace App\Controller;

use App\Service\ContactContextFiller;
use App\Service\FooterContextFiller;
use App\Service\HeaderContextFiller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Translation\LocaleSwitcher;
use Symfony\Contracts\Translation\TranslatorInterface;

abstract class AbstractPageController extends AbstractController
{
    public function __construct(
        protected HeaderContextFiller $headerContextFiller,
        protected ContactContextFiller $contactContextFiller,
        protected FooterContextFiller $footerContextFiller,
        protected LocaleSwitcher $localeSwitcher,
        protected TranslatorInterface $translatorInterface
    ) {
    }

    public function fillContextBase(array &$context): void
    {
        $this->headerContextFiller->fillContext($context);
        $this->contactContextFiller->fillContext($context);
        $this->footerContextFiller->fillContext($context);

        $context["locale"] = $this->localeSwitcher->getLocale();
    }
}