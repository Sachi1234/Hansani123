<?php
/**
 * Created by PhpStorm.
 * User: DELL 1
 * Date: 10/3/2018
 * Time: 7:47 PM
 */
session_start();
$_SESSION["username"] = "Hansani";

class CsrfTokrn {

    public static function generateToken(){

        $_SESSION['csrf_token'] = base64_encode(openssl_random_pseudo_bytes(32));


    }
    public static function checkToken($token){

        if($token == $_SESSION['csrf_token']) {

            return true;
        } else {
            unset($_SESSION['csrf_token']);
            return false;
        }

    }

}