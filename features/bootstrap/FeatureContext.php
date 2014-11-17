<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\CustomSnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Sorter\Sorter;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, CustomSnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    private $list=[];

    public static function getAcceptedSnippetType()
    {
        return 'regex';
    }

    /**
     * @Given /^I have the list "([^"]*)"$/
     */
    public function numberList($numbers)
    {
        $this->list = explode(',', $numbers);
    }

    /**
     * @When /^I sort the list$/
     */
    public function iSort()
    {
        $this->list=Sorter::bubbleSort($this->list);
    }

    /**
     * @Then /^I should get "([^"]*)"$/
     */
    public function iShouldSee($numbers)
    {
        $array_numbers=implode($this->list, ',');
        if ($numbers!==$array_numbers) {
            throw new Exception('Error: expected '.$numbers.' and got '.implode(',', $this->list));
        }
    }
}
