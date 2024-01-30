<?php

namespace Unit\Domain\Validation;

use Core\Domain\Validation\DomainValidation;
use PHPUnit\Framework\TestCase;
use Throwable;

class DomainValidationUnitTest extends TestCase
{
    public function testNotNull()
    {
        try {
            $value = '';
            DomainValidation::notNull($value);
            $this->fail();
        } catch (Throwable $th) {
            $this->asse
        }
    }
}