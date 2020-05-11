@homepage
Feature: Add cookie alert
    In order to inform my customers about my usage of cookies
    As an administrator
    I want to show a cookie alert

    Background:
        Given the store operates on a single channel in "United States"

    @ui
    Scenario: Check if alert is here
        When I visit the homepage
        Then I should see cookie alert
