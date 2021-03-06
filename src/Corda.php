<?php

namespace Dvi\Corda\Support;

use Dvi\Support\Collection;
use Stringy\Stringy;

/**
 *  Corda
 *
 * @package
 * @subpackage
 * @author     Davi Menezes
 * @copyright  Copyright (c) 2018. (davimenezes.dev@gmail.com)
 * @see https://github.com/DaviMenezes
 * @see https://t.me/davimenezes
 * @method Corda first($n)
 */
class Corda extends Stringy
{
    /** Only return result as string
     * @return string
     */
    public function str()
    {
        return (string)$this->str;
    }

    /**@return Collection*/
    public function lines()
    {
        return collect(parent::lines());
    }

    /**@return Collection*/
    public function split($pattern, $limit = null)
    {
        return \collection(parent::split($pattern, $limit));
    }

    public function lastStr(string $separator)
    {
        $position = $this->indexOfLast($separator) - $this->length() ;
        if ($this->indexOf($separator) !== false) {
            $position ++;
        }
        $result = $this->substr($position);
        return $result;
    }

    public function afterTo(string $str)
    {
        return $this->lastStr($str)->removeLeft($str);
    }
}
