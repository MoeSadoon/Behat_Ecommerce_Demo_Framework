<?php
use Behat\MinkExtension\Context\RawMinkContext;
use Behat\Gherkin\Node\TableNode;
use Page\ContactPage;

class ContactContext extends RawMinkContext
{
    private $contactPage;

    public function __construct(ContactPage $contactPage)
    {
        $this -> contactPage = $contactPage;
    }


    /**
     * @When I fill in form with details
     */
    public function iFillInFormWithDetails(TableNode $table)
    {
        $row = $table-> getRow(1);
        $this -> contactPage -> fill_in_details($row[0], $row[1], $row[2]);
    }


    /**
     * @When I fill in form with details as user
     */
    public function iFillInFormWithDetailsAsUser(TableNode $table)
    {
        $row = $table-> getRow(1);
        $this -> contactPage -> fill_in_details_as_user($row[0],$row[1]);
    }


    /**
     * @Then I should see message confirmation message
     */
    public function iShouldSeeMessageConfirmationMessage()
    {
        $this -> contactPage -> messageConfirmation();
    }

}