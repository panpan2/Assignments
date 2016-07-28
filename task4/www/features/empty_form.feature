Feature:
In the registration form both Name, Email and Phone shouldn't be empty

    Scenario: Name, Email and Phone are empty
        Given I am on "/"
        And that name is ""
        And that email is ""
        And that phone is ""
        When I try to register
        Then I should be on "/"

    Scenario: Name is empty
        Given I am on "/"
        And that name is ""
        And that phone is "99754632"
        And that email is "mail@email.com"
        When I try to register
        Then I should be on "/"

    Scenario: Email is empty
        Given I am on "/"
        And that name is "pani"
        And that email is ""
        And that phone is "99754632"
        When I try to register
        Then I should be on "/"

    Scenario: Phone is empty
        Given I am on "/"
        And that name is "pani"
        And that email is "p@ani.com"
        And that phone is ""
        When I try to register
        Then I should be on "/"
