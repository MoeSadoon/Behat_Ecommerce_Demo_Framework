<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\Step;


class FeatureContext extends MinkContext
{

    public function __construct(array $parameters)
    {
        // Initialize your context here
        // ...
//        $this->useContext('LoginContext', new LoginContext($parameters));
    }

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
