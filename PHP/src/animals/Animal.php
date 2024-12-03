<?php

namespace App\animals;

class Animal
{
    /**
     * @var string
     */
    protected string $name = '';

    /**
     * @var string
     */
    protected string $verse = '';

    /**
     * @return string
     */
    public function getVerse(): string
    {
        return $this->verse;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
