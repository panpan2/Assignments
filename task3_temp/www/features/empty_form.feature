Feature:
In the registration form both Name and Email shouldn't be empty

Scenario:
Given that I am on the homepage
And that name is ""
And that email is ""
When you try to register
Then you remain on the homepage

