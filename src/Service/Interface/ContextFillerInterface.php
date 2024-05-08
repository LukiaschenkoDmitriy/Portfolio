<?php

namespace App\Service\Interface;

interface ContextFillerInterface
{
    public function fillContext(array &$context): bool;
    public function removeContext(array &$context): bool;
    public function contextWasFilled(array $context): bool;
}