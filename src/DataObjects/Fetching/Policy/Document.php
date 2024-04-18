<?php

declare(strict_types=1);

namespace Covertier\Definitions\DataObjects\Fetching\Policy;

readonly class Document
{
    public function __construct(
        public string $tos,
        public string $paymentVoucher,
        public string $onlyPolicyCoverPage,
        public string $welcomeLetter,
        public string $policy,
    ) {}
}