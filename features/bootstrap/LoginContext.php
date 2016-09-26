<?php
use Behat\MinkExtension\Context\RawMinkContext;
use Behat\Gherkin\Node\TableNode;
use Page\LoginPage;
class LoginContext extends RawMinkContext
{
    private $loginPage;

    public function __construct(LoginPage $loginPage)
    {
        $this -> loginPage = $loginPage;
    }


    /**
     * @Given /^I enter details$/
     */
    public function iEnterDetails(TableNode $table)
    {
        $data = $table -> getRow(1);
        $this-> loginPage ->fillInDetails($data[0], $data[1]);
    }


    /**
     * @Then /^I should be on account page$/
     */
    public function iShouldBeOnAccountPage()
    {
        $this-> loginPage -> checkOnAccountPage();
    }


    /**
     *This is is a encapsulated log in method to use for other feature contexts where logging in
     * is a prerequisite
     * @Given I am logged in as user
     */
    public function iAmLoggedInAs(TableNode $table)
    {
        $data = $table -> getRow(0);
        $this-> loginPage ->LogIn($data[0], $data[1]);
    }


}