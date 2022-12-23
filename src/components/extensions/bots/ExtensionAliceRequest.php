<?php
namespace extas\components\extensions\bots;

use extas\components\extensions\Extension;
use extas\components\yandex\calls\AliceCall;
use extas\interfaces\bots\dispatchers\IBotDispatcher;
use extas\interfaces\extensions\bots\IExtensionAliceRequest;
use extas\interfaces\yandex\calls\IAliceCall;

class ExtensionAliceRequest extends Extension implements IExtensionAliceRequest
{
    public function getAlice(IBotDispatcher $dispatcher = null): IAliceCall
    {
        return new AliceCall($dispatcher->getData());
    }
}
