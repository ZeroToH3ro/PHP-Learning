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
    public function __construct(string $name, string $label = '', string $value = '')
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
    }

    public function render(): string
    {
        return sprintf('
            <div class="form-control">
                <label> %s </label> <br>
                %s
            </div>
        ', $this->label, $this->renderInput());

    }

    abstract public function renderInput(): string;
}