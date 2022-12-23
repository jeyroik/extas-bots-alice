<?php
namespace extas\interfaces\bots\scenarios;

use extas\interfaces\IItem;
use extas\interfaces\yandex\calls\IAliceCall;
use extas\interfaces\yandex\skills\steps\IStep;

interface IScenarioSchemaDispatcher extends IItem
{
    public function __invoke(IAliceCall $alice): ?IStep;
}
