<?php
/**
 * Created by PhpStorm.
 * User: jeremie
 * Date: 03/01/17
 * Time: 11:32
 */

namespace AppBundle\Service\Utils;

class StringUtils
{
    public function generateUniqString($length){
        return $result = bin2hex(openssl_random_pseudo_bytes($length/2));
    }

    public function getSlug($string){
        $string = preg_replace("/['’]/", ' ', $string);
        $string = preg_replace('/[-\s]+/', '-', $string);
        return trim($string, '-');
    }
}