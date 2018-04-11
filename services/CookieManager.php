<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 11.04.2018
 * Time: 13:21
 */

namespace services;


class CookieManager
{

    public function setCookie($name,$value){
        setcookie($name,$value);
    }
    public function getCookie($name){
        if(isset($_COOKIE[$name])){
            return$_COOKIE[$name];
        }
        return null;
    }
    public function delCookie($name){
        if(isset($_COOKIE[$name])){
            unset($_COOKIE[$name]);
        }
    }
    public function isCookieSet($name): bool {
        return isset($_COOKIE[$name]);
    }
}