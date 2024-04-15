<?php

namespace Covertier\Definitions\DataObjects\Submitting\Policy;

use Covertier\Definitions\Enums\Country;
use Covertier\Definitions\Enums\StateUS;

class AddressUS
{
    public Country $country = Country::US;

    public function __construct(
        public string $address,
        public string $district,
        public string $city,
        public StateUS $state
    ) {
    }
}