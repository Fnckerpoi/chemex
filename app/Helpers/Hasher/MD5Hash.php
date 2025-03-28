<?php

namespace App\Helpers\Hasher;

use Illuminate\Contracts\Hashing\Hasher;

class MD5Hash implements Hasher
{
    public function check($value, $hashedValue, array $options = []){
        return $this->make($value) == $hashedValue['password'];
    }

    public function needsRehash($hashedValue, array $options = [])
    {
        return false;
    }

    public function make($value, array $options = [])
    {
        return md5($value);
    }

    /**
     * @param string $hashedValue
     * @return array
     */
    public function info($hashedValue)
    {
        // TODO: Implement info() method.
    }
}
