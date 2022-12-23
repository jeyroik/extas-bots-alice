<?php
namespace extas\components\bots\scenarios\steps;

use extas\interfaces\bots\dispatchers\IBotDispatcher;
use extas\interfaces\bots\scenarios\steps\IStepDispatcher;
use extas\interfaces\extensions\bots\IExtensionAliceRequest;

class StepSkillId implements IStepDispatcher
{
    /**
     * @param IExtensionAliceRequest $dispatcher
     */
    public function __invoke(IBotDispatcher $dispatcher): array
    {
        $alice = $dispatcher->getAlice();
        $skillId = $alice->getSession()->getSkillId();

        return [
            ['text' => $skillId],
            ''
        ];
    }
}
