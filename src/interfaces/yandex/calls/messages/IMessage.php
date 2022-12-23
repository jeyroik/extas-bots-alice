<?php
namespace extas\interfaces\yandex\calls\messages;

use extas\interfaces\IHasId;
use extas\interfaces\IHaveText;
use extas\interfaces\IItem;

interface IMessage extends IItem, IHasId, IHaveText
{
    public const SUBJECT = 'extas.alice.call.message';
}
