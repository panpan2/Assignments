<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends Behat\MinkExtension\Context\MinkContext
{
    /**
     * Initializes context.
     * Every scenario gets its own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }
    /**
     * @Given that I am on the homepage
     */
    public function thatIAmOnTheHomepage()
    {
        //$this->iAmOnHomepage();
        $this->visit("http://localhost:8888/");
        $this->printLastresponse();
    }

    /**
     * @Given that name is :arg1
     */
    public function thatNameIs($arg1)
    {
        $this->fillField('name', $arg1);
    }

    /**
     * @Given that email is :arg1
     */
    public function thatEmailIs($arg1)
    {
        $this->fillField('email', $arg1);
    }

    /**
     * @When you try to register
     */
    public function youTryToRegister()
    {
        $this->pressButton('registerButton');
    }

    /**
     * @Then you remain on the homepage
     */
    public function youRemainOnTheHomepage()
    {
        assertUrlRegExp('http://localhost:8888');
    }
//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        doSomethingWith($argument);
//    }
//
}
