Feature:
In the registration form both Name and Email should be valid string input

    Scenario: Name has numbers
        Given I am on "/"
        And that name is "pan3"
        And that email is "p@mail.com"
        And that phone is "99754632"
        When I try to register
        Then I should be on "/"

    Scenario: Email doesn't have email form
        Given I am on "/"
        And that name is "usere"
        And that email is "kojino"
        And that phone is "99754632"
        When I try to register
        Then I should be on "/"

    Scenario: Email doesn't have email form
        Given I am on "/"
        And that name is "usere"
        And that email is "kojino@"
        And that phone is "99754632"
        When I try to register
        Then I should be on "/"


