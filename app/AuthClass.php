<?php

namespace App;

use App\Views\DashboardView as View;

class AuthClass
{
    protected $View;
    public function __construct()
    {
        $this->View = new View();
    }
    public static function checkUserAuth()
    {
        if (isset($_SESSION['username'])){
           return $username = $_SESSION['username'];
        }else{
            return false;
        }
    }
    public function showloginForm()
    {
    $this->View->showLoginForm();
    }

    /**
     * @return View
     */
    public function checkLogin()
    {
        if (isset($_POST['loginBtn'])){
            $username = mb_eregi_replace(
                "[^a-zA-Z0-9]",
                '',
                strip_tags($_POST['username']));
            $password = mb_eregi_replace(
                "[^a-zA-Z0-9]",
                '',
                strip_tags($_POST['password']));
            echo $username.'<br>';
            echo hash('md5', $password).'<br>';
            echo hash('ripemd160', $password).'<br>';
            echo hash('sha512',hash('sha512', $password)).'<br>';
            echo hash('sha512', $password).'<br>';
            echo $password;
        }else{
            HelperClass::goToUrl('/admin/login');
        }
    }

}