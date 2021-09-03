@cookie_alert @javascript
Feature: Add cookie alert
    In order to inform my customers about my usage of cookies
    As an administrator
    I want to show a cookie alert

    Background:
        Given the store operates on a single channel in "United States"

    Scenario: Check if alert is here
        When I visit the store
        Then I should see cookie alert
