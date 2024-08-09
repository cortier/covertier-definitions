<?php

declare(strict_types=1);

namespace Covertier\Definitions\DataObjects\Submitting\Policy;

use Covertier\Definitions\Enums\Country;
use Covertier\Definitions\Enums\StateMX;

class AddressMX
{
    public Country $country = Country::MX;

    public function __construct(
        public string $street,
        public string $neighborhood,
        public int $internalNumber,
        public int $externalNumber,
        public int $zipCode,
        public string $city,
        public StateMX $state
    ) {
    }
}