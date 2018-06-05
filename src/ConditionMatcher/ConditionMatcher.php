<?php
/**
 * Created by PhpStorm.
 * User: mr
 * Date: 13.07.2015
 * Time: 18:25
 */

namespace Genhoi\ConditionMatcher;

use Psr\Log\LoggerInterface;
use Genhoi\ConditionMatcher\Interfaces\ConditionInterface;
use Genhoi\ConditionMatcher\Condition\AndCondition;

/**
 * Class ConditionMatcher
 * @package Genhoi\ConditionMatcher
 */
class ConditionMatcher
{

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Выполняет проверку удовлетворения всех условий
     *
     * @param ConditionInterface[] $conditions
     *
     * @return bool
     */
    public function match($conditions)
    {
        $condition = new AndCondition($conditions);
        $condition->setLogger($this->logger);

        return $condition->satisfies();
    }

}
