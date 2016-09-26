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
        $details = $table ->getRow(1);
        $this -> page() -> fillField("email", $details[0]);
        $this -> page() -> fillField("passwd", $details[1]);
    }

    /**
     * @Then /^I should be on account page$/
     */
    public function iShouldBeOnAccountPage()
    {
        $this -> assertSession() -> pageTextContains(("My account"));
    }

}