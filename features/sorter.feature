Feature: Sort a list of Number
    In order to sort a list of numbers
    As a developer
    I want to sort in ascending order a list of numbers

Scenario: Sort an unordered list of 5 numbers
        Given I have the list "0,6,3,7,2,4"
        When I sort the list
        Then I should get "0,2,3,4,6,7"

Scenario: Sort an ordered list of 2 numbers
        Given I have the list "1,1"
        When I sort the list
        Then I should get "1,1"

