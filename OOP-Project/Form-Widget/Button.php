<?php

class Button extends BaseInput
{
    public string $text;

    /**
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }


    public function render(): string
    {
        return sprintf(
            '<button> %s </button>', $this->text
        );
    }
}