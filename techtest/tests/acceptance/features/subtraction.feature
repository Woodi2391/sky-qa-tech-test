Feature: Subtraction

  Scenario: Subtract two numbers together
    Given I enter "10" into the calculator
    And I hit "subtract"
    And I enter "5" into the calculator
    And I hit "equals"
    Then I see a result of "5"

  Scenario: Add three numbers together
    Given I enter "20" into the calculator
    And I hit "subtract"
    And I enter "10" into the calculator
    And I hit "subtract"
    And I enter "5" into the calculator
    And I hit "equals"
    Then I see a result of "5"