<?php

/*
 * This file is part of Saft.
 *
 * (c) Konrad Abicht <hi@inspirito.de>
 * (c) Natanael Arndt <arndt@informatik.uni-leipzig.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Saft\Sparql\Result;

/**
 * Represents an empty result, usually after an INSERT or UPDATE SPARQL query.
 */
class EmptyResultImpl implements Result
{
    /**
     * @return array
     */
    public function getVariables()
    {
        return array();
    }

    /**
     * @return boolean True
     */
    public function isEmptyResult()
    {
        return true;
    }

    /**
     * @return boolean False
     */
    public function isSetResult()
    {
        return false;
    }

    /**
     * @return boolean False
     */
    public function isStatementSetResult()
    {
        return false;
    }

    /**
     * @return boolean False
     */
    public function isValueResult()
    {
        return false;
    }
}
