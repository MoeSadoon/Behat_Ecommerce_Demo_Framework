<?php

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class ContactPage extends Page
{
    public function fill_in_details($heading, $email, $message){
        $this -> selectFieldOption("id_contact",$heading);
        $this -> fillField("email", $email);
        $this -> fillField("message", $message);
    }

    //Doesnt need email parameter because this is automatically filled in if already logged in
    public function fill_in_details_as_user($heading, $message)
    {
        $this->selectFieldOption("id_contact", $heading);
        $this->fillField("message", $message);
    }

    public function messageConfirmation(){
        $this -> hasContent("Your message has been successfully sent to our team.");
    }


}