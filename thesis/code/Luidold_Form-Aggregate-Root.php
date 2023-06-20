<?php

/* [...] */

class Form extends AggregateRoot
{
    // Private properties

    public static function create(): self {}

    public function addSection(): Section {}

    public function addElementToSection(): Element {}

    public function hasElement(): bool {}

    // Publicly accessible getters
}
