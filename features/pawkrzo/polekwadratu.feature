Feature: Obliczenia

  Scenario: Pole kwadratu
    Given I am on homepage
    When I follow "Pole kwadratu by pawkrzo"
    And I fill in "A" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 16" 
