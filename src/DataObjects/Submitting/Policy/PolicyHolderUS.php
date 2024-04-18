<?php

namespace Covertier\Definitions\DataObjects\Submitting\Policy;

use Covertier\Definitions\Enums\PersonalIdType;
use Covertier\Definitions\Enums\ResidenceTypeInMexico;

class PolicyHolderUS
{
    public function __construct(
        public string $name,
        public string $lastName,
        public string $birthdate,
        public string $identificationNumber,
        public PersonalIdType $personalIdType,
        public string $mobileNumber,
        public ResidenceTypeInMexico $residenceType,
        public AddressUS $address
    ) {}
}