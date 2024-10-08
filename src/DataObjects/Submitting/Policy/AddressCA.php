<?php

declare(strict_types=1);

namespace Covertier\Definitions\DataObjects\Submitting\Policy;

use Covertier\Definitions\Enums\Country;
use Covertier\Definitions\Enums\StateUS;

class AddressCA
{
    public Country $country = Country::CAN;

    public function __construct(
        public string $line1,
        public string $district,
        public int $zipCode,
        public string $city,
        public StateUS $state
    ) {
    }
}