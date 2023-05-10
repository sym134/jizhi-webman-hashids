<?php

use Hashids\Hashids;
use Jz\WebmanHashids\Exceptions\HashidException;

/**
 * @param $int
 *
 * @return string
 * @throws HashidException
 */
function id_encode($int): string
{
    if (!is_numeric($int) || $int < 0 || !is_int($int + 0)) {
        throw new HashidException('Only positive integers can be accepted!');
    }
    $hashid = new Hashids(config('plugin.jizhi.webman-hashids.salt'), config('plugin.jizhi.webman-hashids.min_hash_length'), config('plugin.jizhi.webman-hashids.alphabet'));
    return $hashid->encode($int);
}

/**
 * @param $str
 *
 * @return int|mixed
 * @throws HashidException
 */
function id_decode($str)
{
    if (!preg_match('/^[0-9a-zA-Z]{2,18}$/', $str)) {
        throw new HashidException('Bad parameter! Between 2-18 characters');
    }
    $hashid = new Hashids(config('plugin.jizhi.webman-hashids.salt'), config('plugin.jizhi.webman-hashids.min_hash_length'), config('plugin.jizhi.webman-hashids.alphabet'));
    $result = $hashid->decode($str);
    if (count($result) !== 1) {
        throw new HashidException('Unable to decrypt!');
    }
    return $result[0];
}