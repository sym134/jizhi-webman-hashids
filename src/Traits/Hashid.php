<?php

namespace Jz\WebmanHashids\Traits;


trait Hashid
{
    /**
     * 访问器，对模型ID加密
     * @param $value
     * @return null|string
     */
    public function getIdAttribute($value)
    {
        return id_encode($value);
    }
}