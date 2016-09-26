<?php

use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\Context;


class FeatureContext extends MinkContext implements \Behat\Behat\Context\SnippetAcceptingContext
{
    //Whole point of this class is to link to the MinkContext step definitions
    //I could just chuck in MinkContext here but want to stick to convention so kept a featurecontext class
}
