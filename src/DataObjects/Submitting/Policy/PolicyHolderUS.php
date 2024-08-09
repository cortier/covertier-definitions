<?php

declare(strict_types=1);

namespace Covertier\Definitions\DataObjects\Submitting\Policy;

use Covertier\Definitions\Enums\PersonalIdType;
use Covertier\Definitions\Enums\ResidenceTypeInMexico;
use DateTimeImmutable;

class PolicyHolderUS
{
    public function __construct(
        public string $firstName,
        public string $lastName,
        public DateTimeImmutable $birthdate,
        public string $identificationNumber,
        public PersonalIdType $personalIdType,
        public string $mobileNumber,
        public ?ResidenceTypeInMexico $residencyTypeInMexico = null,
        public ?AddressUS $addressUS = null,
        public ?AddressMX $addressMX = null,
        public ?string $foreignAddress = null
    ) {}
}