<?php
/**
 * Created by PhpStorm.
 * User: gev
 * Date: 18.05.2017
 * Time: 13:21
 */

namespace Genhoi\ConditionMatcher\Interfaces;

use Genhoi\ConditionMatcher\ConditionMatcher;

interface ConditionMatcherAwareInterface
{

    /**
     * @param ConditionMatcher $conditionMatcher
     */
    public function setConditionMatcher(ConditionMatcher $conditionMatcher);

}