<?php

namespace App;

class Song
{
    protected $animals = [
        'fly',
        'spider',
        'bird',
        'cat',
        'dog',
        'cow',
        'horse'
    ];

    public function sing(): string
    {
        return $this->getVerse1() .
        "\n" .
        $this->getVerse2() .
        "\n" .
        $this->getVerse3() .
        "\n" .
        $this->getVerse4() .
        "\n" .
        $this->getVerse5() .
        "\n" .
        $this->getVerse6() .
        "\n" .
        $this->getVerse7();
    }

    /**
     * @return string
     */
    private function getVerse1(): string
    {
        return "There was an old lady who swallowed a fly.\n" .
            "I don't know why she swallowed a fly - perhaps she'll die!\n";
    }

    private function getVerse2(): string
    {
        return "There was an old lady who swallowed a spider;\n" .
        "That wriggled and wiggled and tickled inside her.\n" .
        "She swallowed the spider to catch the fly;\n" .
        "I don't know why she swallowed a fly - perhaps she'll die!\n";
    }

    private function getVerse3(): string
    {
        return "There was an old lady who swallowed a bird;\n" .
        "How absurd to swallow a bird.\n" .
        "She swallowed the bird to catch the spider,\n" .
        "She swallowed the spider to catch the fly;\n" .
        "I don't know why she swallowed a fly - perhaps she'll die!\n";
    }

    private function getVerse4(): string
    {
        return "There was an old lady who swallowed a cat;\n" .
            "Fancy that to swallow a cat!\n" .
            "She swallowed the cat to catch the bird,\n" .
            "She swallowed the bird to catch the spider,\n" .
            "She swallowed the spider to catch the fly;\n" .
            "I don't know why she swallowed a fly - perhaps she'll die!\n";
    }

    private function getVerse5(): string
    {
        return "There was an old lady who swallowed a dog;\n" .
            "What a hog, to swallow a dog!\n" .
            "She swallowed the dog to catch the cat,\n" .
            "She swallowed the cat to catch the bird,\n" .
            "She swallowed the bird to catch the spider,\n" .
            "She swallowed the spider to catch the fly;\n" .
            "I don't know why she swallowed a fly - perhaps she'll die!\n";
    }

    private function getVerse6(): string
    {
        return "There was an old lady who swallowed a cow;\n" .
            "I don't know how she swallowed a cow!\n" .
            "She swallowed the cow to catch the dog,\n" .
            "She swallowed the dog to catch the cat,\n" .
            "She swallowed the cat to catch the bird,\n" .
            "She swallowed the bird to catch the spider,\n" .
            "She swallowed the spider to catch the fly;\n" .
            "I don't know why she swallowed a fly - perhaps she'll die!\n";
    }

    private function getVerse7(): string
    {
        return "There was an old lady who swallowed a horse...\n" .
            "...She's dead, of course!";
    }
}