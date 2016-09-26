<?php
namespace Page;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
/**
 * Created by PhpStorm.
 * User: moe
 * Date: 26/09/16
 * Time: 16:05
 */
class LoginPage extends Page
{
    public function fillInDetails($email, $password){
        $this -> fillField("email", $email);
        $this -> fillField("passwd", $password);
    }

    public function checkOnAccountPage(){
        $this ->
            hasContent("Welcome to your account. Here you can manage all of your personal information and orders.");
    }

    public function LogIn($email, $password)
    {
        $this -> clickLink("Sign in");
        $this -> fillField("email", $email);
        $this -> fillField("passwd", $password);
        $this -> pressButton("Sign in");
    }

}