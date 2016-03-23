Feature: Cube root

  Scenario: Cube root of a number
    Given I enter "8" into the calculator
    And I hit "cube root"
    And I hit "equals"
    Then I see a result of "2"