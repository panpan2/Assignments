Feature:
In the registration form both Name, Email and Phone shouldn't be non UTF-8

    Scenario: Name, Email and Phone are non UTF-8
        Given I am on "/"
        And that name is "s♟a"
        And that email is "e♟a@mail.com"
        And that phone is "234♟234"
        When I try to register
        Then I should be on "/"

    Scenario: Name is non UTF-8
        Given I am on "/"
        And that name is "s♟a"
        And that email is "ela@mail.com"
        And that phone is "98723644"
        When I try to register
        Then I should be on "/"

    Scenario: Email is non UTF-8
        Given I am on "/"
        And that name is "sia"
        And that email is "e♟a@mail.com"
        And that phone is "98723644"
        When I try to register
        Then I should be on "/"

    Scenario: Phone is non UTF-8
        Given I am on "/"
        And that name is "saa"
        And that email is "ela@mail.com"
        And that phone is "234♟234"
        When I try to register
        Then I should be on "/"

