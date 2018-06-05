<?php
/**
 * @author Ekaterina Berdova <bev@htc-cs.com>
 */

namespace Genhoi\ConditionMatcher\Condition;


use Genhoi\ConditionMatcher\Interfaces\ConditionInterface;

/**
 * Дефолтное условие, возвращающее true
 *
 * Class TrueCondition
 *
 * @package RightWay\Module\ScenarioDistribution\FilteringEvents\EventCondition
 */
class TrueCondition implements ConditionInterface
{
    /**
     * Выполняет проверку удовлетворения условия
     *
     * @return bool
     */
    public function satisfies()
    {
        return true;
    }
}
