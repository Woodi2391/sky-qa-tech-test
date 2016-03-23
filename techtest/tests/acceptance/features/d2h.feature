Feature: Decimal to hex

  Scenario: Converting decimal to hexadecimal
    Given I enter "10" into the calculator
    And I hit "hex"
    And I hit "equals"
    Then I see a result of "0xA"

    Given I enter "1000" into the calculator
    And I hit "hex"
    And I hit "equals"
    Then I see a result of "0x3E8"