<?php

namespace App;

use App\Models\UsersModel;
use App\Views\DashboardView as View;

class AuthClass
{
    protected $View;
    protected $Users;
    public function __construct()
    {
        $this->Users = new UsersModel('users');
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
            if (
                $this->Users->checkEntryExists('username', $username) == false
                //$this->Users->checkEntryExists('email',$email) == false &&
            ){
                echo 'user disable<br>';

            }else{
                echo 'user enabled<br>';
            };
            /*echo $username.'<br>';
            echo hash('md5', $password).'<br>';
            echo $password;
            echo bin2hex(random_bytes(10));//random string*/
        }else{
            HelperClass::goToUrl('/admin/login');
        }
    }

}