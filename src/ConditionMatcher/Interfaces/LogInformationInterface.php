<?php
/**
 * Created by PhpStorm.
 * User: mr
 * Date: 13.11.2015
 * Time: 13:14
 */

namespace Genhoi\ConditionMatcher\Interfaces;

interface LogInformationInterface
{
    /**
     * Возвращает дополнительную информацию о применении условия для записи в лог
     *
     * @return string
     */
    public function getLogInformation();
}