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
        public string $mobileNumber,
        public ?PersonalIdType $personalIdType = null,
        public ?string $identificationNumber = null,
        public ?ResidenceTypeInMexico $residencyTypeInMexico = null,
        public ?AddressUS $addressUs = null,
        public ?AddressMX $addressMx = null,
        public ?string $foreignAddress = null
    ) {}
}