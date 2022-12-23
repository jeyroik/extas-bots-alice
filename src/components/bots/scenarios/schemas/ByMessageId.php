<?php
namespace extas\components\bots\scenarios;

use extas\interfaces\bots\dispatchers\IBotDispatcher;
use extas\interfaces\bots\scenarios\schemas\ISchema;
use extas\interfaces\extensions\bots\IExtensionAliceRequest;
use extas\interfaces\yandex\skills\steps\IStep;

/**
 * @method IRepository steps()
 */
class ByMessageId implements ISchema
{
    /**
     * @param IExtensionAliceRequest $dispatcher
     */
    public function __invoke(IBotDispatcher $dispatcher): ?IStep
    {
        $message = $dispatcher->getAlice()->getMessage();
        $mid = $message->getId();

        $step = $this->steps()->one([
            IStep::FIELD__NAME => 'message_' . $mid
        ]);

        if ($step) {
            return $step;
        }

        return $this->steps()->one([
            IStep::FIELD__NAME => 'message_x'
        ]);
    }
}
