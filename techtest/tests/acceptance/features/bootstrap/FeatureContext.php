<?php

use Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

set_include_path(get_include_path() . PATH_SEPARATOR . "../../lib");

require_once("iCalculator.php");
require_once("iScientificCalculator.php");
require_once("Calculator.php");
require_once("ScientificCalculator.php");

class FeatureContext extends BehatContext
{
    protected $calculator;

    public function __construct()
    {
        $this->calculator = new ScientificCalculator();
    }

    /**
     * @Given /^I enter "(-?\d+)" into the calculator$/
     */
    public function iEnterIntoTheCalculator($argument1)
    {
        $this->calculator->pressNumber($argument1);
    }


    /**
     * @Then /^I see a result of "(-?[0-9A-Fx]+?)"$/
     */
    public function iSeeAResultOf($argument1)
    {
        $result = $this->calculator->readScreen();
        if ($result != $argument1) {
            throw new Exception("Wrong result, actual is [$result]");
        }
    }

    /**
     * @Then /^I do not get a result$/
     */
    public function iDoNotGetAResult()
    {
        $this->iSeeAResultOf("");
    }

    /**
     * @Given /^I hit "([^"]*)"$/
     */
    public function iHit($button)
    {
        $function = str_replace(' ', '', ucwords($button));
        eval('$this->calculator->press' . $function . '();');
    }


}
