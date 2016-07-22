Feature:
In the registration form both Name and Email shouldn't be non UTF-8

    Scenario: Name and Email are non UTF-8
        Given I am on "/"
        And that name is "s♟a"
        And that email is "e♟a@mail.com"
        When I try to register
        Then I should be on "/"

    Scenario: Name is non UTF-8
        Given I am on "/"
        And that name is "s♟a"
        And that email is "ela@mail.com"
        When I try to register
        Then I should be on "/"

    Scenario: Email is non UTF-8
        Given I am on "/"
        And that name is "sia"
        And that email is "e♟a@mail.com"
        When I try to register
        Then I should be on "/"
