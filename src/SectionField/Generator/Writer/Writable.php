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

namespace Tardigrades\SectionField\Generator\Writer;

class Writable
{
    /** @var string */
    private $template;

    /** @var string */
    private $namespace;

    /** @var string */
    private $filename;

    private function __construct(
        string $template,
        string $namespace,
        string $filename
    ) {
        $this->template = $template;
        $this->namespace = $namespace;
        $this->filename = $filename;
    }

    public function getTemplate(): string
    {
        return $this->template;
    }

    public function getNamespace(): string
    {
        return $this->namespace;
    }

    public function getFilename(): string
    {
        return $this->filename;
    }

    public static function create(
        string $template,
        string $namespace,
        string $filename
    ): self {
        return new self(
            $template, $namespace, $filename
        );
    }
}
