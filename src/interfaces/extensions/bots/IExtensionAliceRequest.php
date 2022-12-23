<?php
namespace extas\interfaces\extensions\bots;

use extas\interfaces\yandex\calls\IAliceCall;

interface IExtensionAliceRequest
{
    public function getAlice(): IAliceCall;
}
