<?php
namespace extas\interfaces;

interface IHaveText
{
    public const FIELD__TEXT = 'text';

    /**
     * @return string
     */
    public function getText(): string;

    /**
     * @param string $text
     *
     * @return $this
     */
    public function setText(string $text);
}
