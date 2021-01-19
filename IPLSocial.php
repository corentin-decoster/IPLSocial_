<?php


class IPLSocial
{

    function validateEmail(string $str): bool{
        $regex= "/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
        if(preg_match($regex,$str)){
            return true;
        }
        return false;
    }
}