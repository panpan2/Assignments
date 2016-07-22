Feature:
In the registration form both Name and Email shouldn't be empty

    Scenario: Name and Email are empty
        Given I am on "/"
        And that name is ""
        And that email is ""
        When I try to register
        Then I should be on "/"

    Scenario: Name is empty
        Given I am on "/"
        And that name is ""
        And that email is "mail@email.com"
        When I try to register
        Then I should be on "/"

    Scenario: Email is empty
        Given I am on "/"
        And that name is "pani"
        And that email is ""
        When I try to register
        Then I should be on "/"


