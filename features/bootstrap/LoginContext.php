<?php
use Behat\MinkExtension\Context\RawMinkContext;
use Behat\Gherkin\Node\TableNode;
class LoginContext extends RawMinkContext
{
    /**
     * @Given /^I enter details$/
     */
    public function iEnterDetails(TableNode $table)
    {
        $data = $table ->getRow(1);
        $this -> page() -> fillField("email", $data[0]);
        $this -> page() -> fillField("passwd", $data[1]);
    }

    /**
     * @Then /^I should be on account page$/
     */
    public function iShouldBeOnAccountPage()
    {
        $this -> assertSession() -> pageTextContains(("My account"));
    }

    /**
     *This is is a encapsulated log in method to use for other feature contexts where logging in
     * is a prerequisite
     * @Given I am logged in as user
     */
    public function iAmLoggedInAs(TableNode $table)
    {
        $data = $table -> getRow(0);
        $this -> page() -> clickLink("Sign in");
        $this -> page() -> fillField("email", $data[0]);
        $this -> page() -> fillField("passwd", $data[1]);
        $this -> page() -> pressButton("Sign in");
    }


}