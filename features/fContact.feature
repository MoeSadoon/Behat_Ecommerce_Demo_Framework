Feature: Sending a contact form
  As a user
  I would like to send a contact form
  So I can get help with something

  @javascript
  Scenario: Sending form as guest
    Given I am on the homepage
    When I follow "Contact Us"
    And I fill in form with details
      | Subject Heading  | Email Address | Message |
      | Customer service | moe@test.com  | Hello   |
    And I press "Send"
    Then I should see message confirmation message


  @javascript
  Scenario: Sending form as logged in user
    Given I am on the homepage
    When I follow "Sign in"
    And I enter details
      | username     | password |
      | moe@test.com | testtest |
    And I press "Sign in"
    When I follow "Contact Us"
    And I fill in form with details as guest
      | Subject Heading  | Message |
      | Customer service | Hello   |
    And I press "Send"
    Then I should see message confirmation message


