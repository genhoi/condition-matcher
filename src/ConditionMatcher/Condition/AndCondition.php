<?php

namespace Genhoi\ConditionMatcher\Condition;

class AndCondition extends ComposeConditions
{

    /**
     * Условие "и"
     *
     * @return bool
     * @throws \LogicException
     */
    protected function concreteSatisfies()
    {
        foreach ($this->getSatisfiesResultGenerator() as $result) {
            if ($result === false) {
                return false;
            }
        }

        return true;
    }

}
