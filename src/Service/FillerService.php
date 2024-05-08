<?php

namespace App\Service;

use App\Service\Abstract\AbstractContextFiller;

class FillerService
{
    public function getFillerTitle(AbstractContextFiller $abstractContextFiller): ?string
    {
        $context = [];
        $abstractContextFiller->fillContext($context);
        return array_keys($context)[0];
    }

    public function getContextTitleName(AbstractContextFiller $abstractContextFiller): ?string
    {
        $context = [];
        $abstractContextFiller->fillContext($context);
        $fillerTitle = array_keys($context)[0];
        return $context[$fillerTitle]["title"];
    }

    public function getContextType(AbstractContextFiller $abstractContextFiller): ?string
    {
        $context = [];
        $abstractContextFiller->fillContext($context);
        $fillerTitle = array_keys($context)[0];
        if (!array_key_exists("type", $context[$fillerTitle])) {
            return "default";
        }

        return $context[$fillerTitle]["type"];
    }

    public function getContextSections(AbstractContextFiller $abstractContextFiller): ?array
    {
        $context = [];
        $abstractContextFiller->fillContext($context);
        $fillerTitle = array_keys($context)[0];

        if (!isset($context[$fillerTitle]["sections"])) {
            return null;
        }

        return $context[$fillerTitle]["sections"];
    }

    public function getContextRouter(AbstractContextFiller $abstractContextFiller): ?string
    {
        $context = [];
        $abstractContextFiller->fillContext($context);
        $fillerTitle = array_keys($context)[0];

        if (!isset($context[$fillerTitle]["router"])) {
            return null;
        }

        return $context[$fillerTitle]["router"];
    }

    public function getContextSectionsTitle(AbstractContextFiller $abstractContextFiller): ?array
    {
        $context = [];
        $abstractContextFiller->fillContext($context);
        $fillerTitle = array_keys($context)[0];

        $contextSectionsTitle = [];

        if (!isset($context[$fillerTitle]["sections"])) {
            return null;
        }

        foreach ($context[$fillerTitle]["sections"] as $section) {
            $contextSectionsTitle[] = $section["title"];
        }

        return $contextSectionsTitle;
    }
}