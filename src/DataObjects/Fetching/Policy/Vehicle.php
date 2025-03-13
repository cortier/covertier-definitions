<?php

declare(strict_types=1);

namespace Covertier\Definitions\DataObjects\Fetching\Policy;

readonly class Vehicle
{
    public function __construct(
        public string $vin
    )
    {}
}