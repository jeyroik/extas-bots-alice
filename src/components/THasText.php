<?php
namespace extas\components;

use extas\interfaces\IHaveText;

/**
 * Trait THasText
 *
 * @property $config
 *
 * @package extas\components\yandex\responses\cards\lists
 * @author jeyroik@gmail.com
 */
trait THasText
{
    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->config[IHaveText::FIELD__TEXT] ?? '';
    }

    /**
     * @param string $text
     *
     * @return $this
     */
    public function setText(string $text)
    {
        $this->config[IHaveText::FIELD__TEXT] = $text;

        return $this;
    }
}
