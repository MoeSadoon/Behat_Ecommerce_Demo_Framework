Feature: Sending a contact form
  As a user
  I would like to send a contact form
  So I can get help with something

  @javascript
  Scenario: Sending form as guest
    Given I am on the homepage
    When I follow "Contact Us"
    And I fill in form with details
    |Subject Heading |Email Address| Message|
    |Customer Service | moe@test.com | Hello |
    And I press "Send"
    Then I should see message confirmation message


