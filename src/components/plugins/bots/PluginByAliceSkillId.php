<?php
namespace extas\components\plugins\bots;

use extas\components\plugins\Plugin;
use extas\interfaces\bots\dispatchers\IBotDispatcher;
use extas\interfaces\extensions\bots\IExtensionAliceRequest;
use extas\interfaces\stages\IStageDefineScenario;

class PluginByAliceSkillId extends Plugin implements IStageDefineScenario
{
    /**
     * @param IBotDispatcher|IExtensionAliceRequest $dispatcher
     */
    public function __invoke(IBotDispatcher $dispatcher, string &$scenario): bool
    {
        $alice    = $dispatcher->getAlice();
        $scenario = $alice->getSession()->getSkillId();

        return $scenario ? true : false;
    }
}
