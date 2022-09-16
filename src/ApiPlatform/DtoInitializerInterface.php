<?php

namespace App\ApiPlatform;

interface DtoInitializerInterface
{
    public function initialize(string $inputClass, array $attributes): ?object;
}
