<?php

use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\Context;


class FeatureContext extends MinkContext implements \Behat\Behat\Context\SnippetAcceptingContext
{


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

    /**
     * @When I fill in form with details
     */
    public function iFillInFormWithDetails(TableNode $table)
    {
        $row = $table->getRow(1);
        $this-> selectOption("id_contact","Customer service");
        $this -> fillField("email", "moe@test.com");
        $this -> fillField("message", "hello");
    }

    /**
     * @Then I should see message confirmation message
     */
    public function iShouldSeeMessageConfirmationMessage()
    {
        $this -> assertPageContainsText("Your message has been successfully sent to our team.");
    }

}
