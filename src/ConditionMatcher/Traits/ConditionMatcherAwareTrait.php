<?php
/**
 * Created by PhpStorm.
 * User: gev
 * Date: 18.05.2017
 * Time: 13:18
 */

namespace Genhoi\ConditionMatcher\Traits;

use Genhoi\ConditionMatcher\ConditionMatcher;

trait ConditionMatcherAwareTrait
{

    /**
     * @var ConditionMatcher
     */
    protected $conditionMatcher;

    /**
     * @param ConditionMatcher $conditionMatcher
     */
    public function setConditionMatcher(ConditionMatcher $conditionMatcher)
    {
        $this->conditionMatcher = $conditionMatcher;
    }

}
