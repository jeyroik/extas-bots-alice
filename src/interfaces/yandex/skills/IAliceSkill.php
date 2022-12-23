<?php
namespace extas\interfaces\yandex\skills;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;

/**
 * Interface IAliceSkill
 *
 * @package extas\interfaces\yandex\skills
 * @author jeyroik@gmail.com
 */
interface IAliceSkill extends IItem, IHasName, IHasDescription, IHasId
{
    public const SUBJECT = 'alice.skill';
}
