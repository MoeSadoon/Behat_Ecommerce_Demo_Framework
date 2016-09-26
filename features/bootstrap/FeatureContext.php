<?php

use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\Context;
use Behat\Behat\Hook\Call\AfterScenario;



class FeatureContext extends MinkContext implements \Behat\Behat\Context\SnippetAcceptingContext
{
    /**
     * @AfterScenario
     */
    public function tearDown(){
        $this -> getSession() -> stop();
    }
}
