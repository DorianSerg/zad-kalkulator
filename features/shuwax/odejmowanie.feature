Feature: Obliczenia

  Scenario: Kalkulator a - b -c
    Given I am on homepage
    When I follow "Odejmowanie by shuwax"
    And I fill in "a" with "5"
    And I fill in "b" with "3"
    And I fill in "b" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 0"
