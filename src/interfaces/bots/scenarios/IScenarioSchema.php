<?php
namespace extas\interfaces\bots\scenarios;

use extas\interfaces\IHasClass;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;
use extas\interfaces\yandex\calls\IAliceCall;
use extas\interfaces\yandex\skills\steps\IStep;

interface IScenarioSchema extends IItem, IHaveUUID, IHasClass
{
    public const SUBJECT = 'extas.bot.alice.scenario.schema';

    public const FIELD__SCENARIO_NAME = 'scenario_name';

    public function getStep(IAliceCall $alice): ?IStep;

    public function getScenarioName(): string;
    public function setScenarioName(string $name): self;
}
