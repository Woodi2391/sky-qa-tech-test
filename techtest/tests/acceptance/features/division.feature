Feature: Division

  Scenario: Divide two numbers together
    Given I enter "10" into the calculator
    And I hit "divide"
    And I enter "5" into the calculator
    And I hit "equals"
    Then I see a result of "2"

  Scenario: Divide three numbers together
    Given I enter "20" into the calculator
    And I hit "divide"
    And I enter "10" into the calculator
    And I hit "divide"
    And I enter "2" into the calculator
    And I hit "equals"
    Then I see a result of "1"

  Scenario: Divide by a negative number
    Given I enter "10" into the calculator
    And I hit "divide"
    And I enter "-5" into the calculator
    And I hit "equals"
    Then I see a result of "-2"

  Scenario: Divide by 0
    Given I enter "10" into the calculator
    And I hit "divide"
    And I enter "0" into the calculator
    And I hit "equals"
    Then I do not get a result