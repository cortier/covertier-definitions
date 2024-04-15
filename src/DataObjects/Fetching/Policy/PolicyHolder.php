<?php

namespace Covertier\Definitions\DataObjects\Fetching\Policy;

readonly class PolicyHolder
{
    public function __construct(
        public string $number,
        public string $fullName,
        public string $address,
        public string $district,
        public string $city,
    )
    {}

}