<?php

namespace Genhoi\ConditionMatcher\Condition;

class OrCondition extends ComposeConditions
{

    /**
     * Условие "или"
     *
     * @return bool
     *
     * @throws \LogicException
     */
    protected function concreteSatisfies()
    {
        foreach ($this->getSatisfiesResultGenerator() as $result) {
            if ($result === true) {
                return true;
            }
        }

        return false;
    }

}
