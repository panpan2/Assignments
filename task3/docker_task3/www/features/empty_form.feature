Feature:
In the registration form both Name and Email shouldn't be empty

Scenario:
Given that I am on the homepage
Given that name is ""
Given that email is ""
When you try to register
Then you remain on the homepage

