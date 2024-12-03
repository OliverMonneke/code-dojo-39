<?php

namespace App;

use App\animals\Animal;

class Song
{
    /**
     * @var array
     */
    protected array $animals = [];

    /**
     * @var string
     */
    protected string $intro = "There was an old lady who swallowed a %s.\n";

    /**
     * @var string
     */
    private string $song = '';

    /**
     * @param Animal $animal
     * @return void
     */
    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    /**
     * @return string
     */
    public function sing(): string
    {
        /** @var Animal $animal */
        foreach ($this->animals as $index => $animal) {
            $this->song .= sprintf($this->intro, $animal->getName()) . $animal->getVerse()."\n";

            if ($index === 0)
            {
                $this->song .= "\n";
                continue;
            }

            $this->song .= "She swallowed the {$animal->getName()} to catch the {$this->animals[$index-1]->getName()};\n\n";
        }


        return $this->song;
    }
}
