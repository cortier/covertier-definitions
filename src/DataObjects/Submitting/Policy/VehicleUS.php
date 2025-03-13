<?php

declare(strict_types=1);

namespace Covertier\Definitions\DataObjects\Submitting\Policy;

class VehicleUS
{
    public function __construct(
        public ?int $trimId = null,
        public ?string $vin = null,
        public ?float $value = null,
        public ?int $year = null,
        public ?string $description = null,
        public bool $isMotorcycle = false
    ) {}
}