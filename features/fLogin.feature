Feature: Logging in
  As an online shopper
  I would like to log in to the website
  So I can start browsing

  @javascript
  Scenario: Login
    Given I am on the homepage
    When I follow "Sign in"
    And I enter details
      | username     | password |
      | moe@test.com | testtest |
    And I press "Sign in"
    Then I should be on account page

