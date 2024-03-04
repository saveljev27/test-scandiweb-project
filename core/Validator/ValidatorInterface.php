<?php

namespace App\Core\Validator;

use App\Core\Database\DatabaseInterface;

interface ValidatorInterface
{
    public function validate(array $data, array $rules): bool;

    public function errors(): array;
}
