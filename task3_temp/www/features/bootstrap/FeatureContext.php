<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends Behat\MinkExtension\Context\MinkContext implements Context, SnippetAcceptingContext
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

    /**
     * @Given that I am on the homepage
     */
    public function thatIAmOnTheHomepage()
    {
        $this->iAmOnHomepage();
        $this->printLastresponse();
        $this->visit("http://localhost");
        $this->printLastresponse();
        $this->visit("http://localhost:80");
        $this->printLastresponse();
        $this->visit("http://localhost:8000");
        $this->printLastresponse();
        $this->visit("http://localhost:8888");
        $this->printLastresponse();
        $this->visit("127.0.0.1");
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
        assertUrlRegExp('http://localhost');
    }
}
