<?php
/**
 * Created by PhpStorm.
 * User: gev
 * Date: 18.05.2017
 * Time: 10:52
 */

namespace Genhoi\ConditionMatcher\Interfaces;

/**
 * Интерфейс условия
 * Interface ConditionInterface
 * @package Genhoi\ConditionMatcher\Interfaces
 */
interface ConditionInterface
{

    /**
     * Выполняет проверку удовлетворения условия
     *
     * @return bool
     */
    public function satisfies();

}