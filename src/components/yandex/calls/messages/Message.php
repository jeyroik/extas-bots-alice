<?php
namespace extas\components\yandex\calls\messages;

use extas\components\Item;
use extas\components\THasId;
use extas\components\THasText;
use extas\interfaces\yandex\calls\messages\IMessage;

class Message extends Item implements IMessage
{
    use THasId;
    use THasText;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
