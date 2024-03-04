<?php

namespace App\Core\Http;

use App\Core\Validator\ValidatorInterface;

interface RequestInterface
{
    public static function createFromGlobals(): static;
    public function uri(): string;
    public function method(): string;
    public function input(string $key, $default = null): mixed;
    public function setValidator(ValidatorInterface $validator): void;
    public function validate($rules): bool;
    public function errors(): array;
}
