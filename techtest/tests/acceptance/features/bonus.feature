#Feature: Bonus - correct precedence
#
#  Scenario: Multiply and add numbers using the correct operator precedence
#    Given I enter "5" into the calculator
#    And I hit "add"
#    And I enter "10" into the calculator
#    And I hit "multiply"
#    And I enter "2" into the calculator
#    And I hit "equals"
#    Then I see a result of "25"