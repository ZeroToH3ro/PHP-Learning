<?php

abstract class BaseInput extends HtmlElement
{
    public string $value;
    public string $name;
    public string $label;

    /**
     * @param string $value
     * @param string $name
     * @param string $label
     */
    public function __construct(string $name, string $label='', string $value = '')
    {
        $this->value = $value;
        $this->name = $name;
        $this->label = $label;
    }

}