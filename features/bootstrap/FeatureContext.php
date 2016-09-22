<?php

use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\Context;


class FeatureContext extends MinkContext
{

//    public function __construct()
//    {
//        $this->useContext('login_context', new LoginContext());
//    }

    /**
     * @Given /^I enter details$/
     */
    public function iEnterDetails()
    {
        $this -> fillField("email", "moe@test.com");
        $this -> fillField("passwd", "testtest");
    }

    /**
     * @Then /^I should be on account page$/
     */
    public function iShouldBeOnAccountPage()
    {
        $this -> assertPageContainsText("My account");
    }
}
