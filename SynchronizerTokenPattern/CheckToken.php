<?php
/**
 * Created by PhpStorm.
 * User: DELL 1
 * Date: 10/3/2018
 * Time: 6:45 PM
 */
require_once 'CsrfTokrn.php';
if(isset($_POST['token'])){
    if(token::checkToken($_POST['token'])){
        echo 'true';
    } else {
        echo 'false';
    }

}