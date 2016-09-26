<?php
use Behat\MinkExtension\Context\RawMinkContext;
class LoginContext extends RawMinkContext
{
    /**
     * @Given /^I enter details$/
     */
    public function iEnterDetails()
    {
        $this -> page() -> fillField("email", "moe@test.com");
        $this -> page() -> fillField("passwd", "testtest");
    }

    /**
     * @Then /^I should be on account page$/
     */
    public function iShouldBeOnAccountPage()
    {
        $this -> assertSession() -> pageTextContains(("My account"));
    }

}