<?php

/*
 * This file is part of the SexyField package.
 *
 * (c) Dion Snoeijen <hallo@dionsnoeijen.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare (strict_types = 1);

namespace Tardigrades\SectionField\ValueObject;

use Assert\Assertion;
use Tardigrades\Helper\StringConverter;

final class PropertyName
{
    /**
     * @var string
     */
    private $propertyName;

    private function __construct(string $propertyName)
    {
        Assertion::string($propertyName, 'The MethodName has to be a string');

        $this->propertyName = $propertyName;
    }

    public function __toString(): string
    {
        return $this->propertyName;
    }

    public static function fromString(string $propertyName): self
    {
        return new self(StringConverter::toCamelCase($propertyName));
    }
}
