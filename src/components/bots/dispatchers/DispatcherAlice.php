<?php
namespace extas\components\bots\dispatchers;

class DispatcherAlice extends Dispatcher
{
    public const SUBJECT = 'extas.bot.dispatcher.alice';

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
