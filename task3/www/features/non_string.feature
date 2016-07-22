Feature:
In the registration form both Name and Email should be valid string input

    Scenario: Name has numbers
        Given I am on "/"
        And that name is "pan3"
        And that email is "p@mail.com"
        When I try to register
        Then I should be on "/"

    Scenario: Email doesn't have email form
        Given I am on "/"
        And that name is "usere"
        And that email is "kojino"
        When I try to register
        Then I should be on "/"

    Scenario: Email doesn't have email form
        Given I am on "/"
        And that name is "usere"
        And that email is "kojino@"
        When I try to register
        Then I should be on "/"
