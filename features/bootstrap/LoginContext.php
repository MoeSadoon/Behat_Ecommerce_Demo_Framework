<?php
use Behat\MinkExtension\Context\RawMinkContext;
class LoginContext extends RawMinkContext
{
    /**
     * @Given /^I enter details$/
     */
    public function iEnterDetails()
    {
        $this -> getSession() -> getPage() -> fillField("email", "moe@test.com");
        $this -> getSession() -> getPage() -> fillField("passwd", "testtest");
    }

    /**
     * @Then /^I should be on account page$/
     */
    public function iShouldBeOnAccountPage()
    {
        $this -> assertSession() -> pageTextContains(("My account"));
    }

}