<?php
use Behat\MinkExtension\Context\RawMinkContext;
use Behat\Gherkin\Node\TableNode;

class ContactContext extends RawMinkContext
{
    /**
     * @When I fill in form with details
     */
    public function iFillInFormWithDetails(TableNode $table)
    {
        $row = $table-> getRow(1);
        $this -> getSession() -> getPage() -> selectFieldOption("id_contact",$row[0]);
        $this -> getSession() -> getPage() -> fillField("email", $row[1]);
        $this -> getSession() -> getPage() -> fillField("message", $row[2]);
    }

    /**
     * @Then I should see message confirmation message
     */
    public function iShouldSeeMessageConfirmationMessage()
    {
        $this -> assertSession() -> pageTextContains("Your message has been successfully sent to our team.");
    }

}