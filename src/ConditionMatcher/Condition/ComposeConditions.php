<?php
/**
 * Created by PhpStorm.
 * User: gev
 * Date: 18.05.2017
 * Time: 13:47
 */

namespace Genhoi\ConditionMatcher\Condition;

use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use Genhoi\ConditionMatcher\Interfaces\ConditionInterface;
use Genhoi\ConditionMatcher\Interfaces\LogInformationInterface;

abstract class ComposeConditions implements ConditionInterface, LoggerAwareInterface
{
    use LoggerAwareTrait;

    /**
     * @var ConditionInterface[]
     */
    private $conditions;

    /**
     * @param ConditionInterface[] $conditions
     */
    public function __construct($conditions)
    {
        $this->conditions = $conditions;
    }

    public function satisfies()
    {
        $result = $this->concreteSatisfies();
        $this->logResult($this, $result);
        unset($this->conditions, $this->logger);

        return $result;
    }

    abstract protected function concreteSatisfies();

    protected function getSatisfiesResultGenerator()
    {
        foreach ($this->conditions as $condition) {
            $this->prepare($condition);

            $result = $condition->satisfies();
            $this->logResult($condition, $result);

            yield $result;
        }
    }

    /**
     * @param $condition
     * @throws \LogicException
     */
    private function prepare($condition)
    {
        if (!$condition instanceof ConditionInterface) {
            throw new \LogicException('Condition must implement ' . ConditionInterface::class);
        }
        if ($condition instanceof LoggerAwareInterface) {
            $condition->setLogger($this->logger);
        }
    }

    /**
     * Логирует результат выполнения
     *
     * @param \Genhoi\ConditionMatcher\Interfaces\ConditionInterface $condition
     * @param bool                                                 $result
     *
     * @return void
     */
    private function logResult(ConditionInterface $condition, $result)
    {
        $humanizedResult = $result ? 'YES' : 'NO';
        $msg = sprintf("Condition '%s' satisfied: %s.", get_class($condition), $humanizedResult);

        if ($condition instanceof LogInformationInterface) {
            $msg .= ' . ' . $condition->getLogInformation();
        }

        $this->logger->debug($msg);
    }
}
