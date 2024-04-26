<?php

declare(strict_types=1);

namespace Covertier\Definitions\DataObjects\Submitting\Policy;

class Package
{

    /**
     * @param array<int, Coverage>|null $coverages
     */
    public function __construct(
        public int $id,
        public ?array $coverages = null
    ) {
    }
}