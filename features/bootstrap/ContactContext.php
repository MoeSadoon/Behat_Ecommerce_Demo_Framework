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
        $this -> page() -> selectFieldOption("id_contact",$row[0]);
        $this -> page() -> fillField("email", $row[1]);
        $this -> page() -> fillField("message", $row[2]);
    }

    /**
     * @When I fill in form with details as user
     */
    public function iFillInFormWithDetailsAsUser(TableNode $table)
    {
        $row = $table-> getRow(1);
        $this -> page() -> selectFieldOption("id_contact",$row[0]);
        $this -> page() -> fillField("message", $row[1]);
    }


    /**
     * @Then I should see message confirmation message
     */
    public function iShouldSeeMessageConfirmationMessage()
    {
        $this -> assertSession() -> pageTextContains("Your message has been successfully sent to our team.");
    }

}