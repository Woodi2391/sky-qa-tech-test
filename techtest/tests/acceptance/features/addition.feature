Feature: Addition

  Scenario: Add two numbers together
    Given I enter "5" into the calculator
    And I hit "add"
    And I enter "10" into the calculator
    And I hit "equals"
    Then I see a result of "15"

  Scenario: Add three numbers together
    Given I enter "5" into the calculator
    And I hit "add"
    And I enter "10" into the calculator
    And I hit "add"
    And I enter "2" into the calculator
    And I hit "equals"
    Then I see a result of "17"

  Scenario: Add negative numbers together
    Given I enter "-5" into the calculator
    And I hit "add"
    And I enter "-10" into the calculator
    And I hit "add"
    And I enter "-2" into the calculator
    And I hit "equals"
    Then I see a result of "-17"