Feature:
In the registration Phone form should be valid - only numbers allowed

    Scenario: Phone has letters in it
        Given I am on "/"
        And that name is "usere"
        And that email is "kojino@a.com"
        And that phone is "9s9754632"
        When I try to register
        Then I should be on "/"

    Scenario: Phone has dashes
        Given I am on "/"
        And that name is "usere"
        And that email is "kojino@e.com"
        And that phone is "99-754632"
        When I try to register
        Then I should be on "/"

    Scenario: Phone has parenthesis
        Given I am on "/"
        And that name is "usere"
        And that email is "kojino@e.com"
        And that phone is "(99)754632"
        When I try to register
        Then I should be on "/"

    Scenario: Phone has any other symbols
        Given I am on "/"
        And that name is "usere"
        And that email is "kojino@e.com"
        And that phone is "99(*&^^754632"
        When I try to register
        Then I should be on "/"
