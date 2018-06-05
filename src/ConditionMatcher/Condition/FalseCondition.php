<?php

namespace Genhoi\ConditionMatcher\Condition;

use Genhoi\ConditionMatcher\Interfaces\ConditionInterface;

class FalseCondition implements ConditionInterface
{
    public function satisfies()
    {
        return false;
    }
}
