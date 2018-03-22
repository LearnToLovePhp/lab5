# Changelog

All notable changes to this project will be documented in this file.

## [Unreleased]

## [0.1.3.2] - 2018-03-22
### Added
- XML loading for TaskList
### Changed
- Modified load function for XML_model
- changed xml to task from desc

## [0.1.3.1] - 2018-03-22
### Changed
- xml file to have id as separate subfield rather than tag

## [0.1.3] - 2018-03-22
### Added
- xml file copying all tasks from .csv

## [0.1.2] - 2018-03-11
### Added
- PHPunit framework
- Setters for Task model
- Unit tests for task and task list
- Application bootstrap file

### Changed
- modified gitignore to ignore unit test output and composer.lock




## [0.1.1] - 2018-03-03
### Added
- Additional task-add form fields

### Changed
- Taskedit form now populates additional fields with options

## [0.1.0] - 2018-03-01
### Added
- task now validated
- can add and edit tasks as the Owner in Maintenance view

### Changed
- made sure new tasks had proper fields set

### Known Bug
- If adding to the list, will add the submit buttons text to the csv file.

## [0.0.9] - 2018-03-01
### Added
- onetaskx view
- owner now sees "New item" button


## [0.0.8] - 2018-03-01
### Added
- ability to check off completed tasks

### Changed
- both order by priority and order by category can complete tasks

## [0.0.7] - 2018-03-01
### Added
- Roles controller
- Roles item on menubar
- session library autoloaded
- Session save location


### Changed
- Mtce page now shows role
- .gitignore will ignore session files in tmp


## [0.0.6] - 2018-03-01
### Added
- pagination navbar

### Changed
- Modified Maintenance page so that it shows 10 items at a time
- itemlist view now shows pagination navbar
## [0.0.5] - 2018-02-15
### Added
- Help wanted controller
- parsedown library
- jobs.md

## [0.0.4] - 2018-02-15
### Added
- Maintenance controller
- itemlist view

## [0.0.3] - 2018-02-15
### Changed
- fixed incorrect link

## [0.0.2] - 2018-02-15
### Added
- by_priority and by_category views
- template_secondary view
- Views controller
- Tasks method for categorized tasks in model

### Changed
- fixed MY_controller

## [0.0.1] - 2018-02-15
### Added
- Changelog file
- added ability to track and display tasks on homepage

## [0.0.0] - 2018-02-15
### Added 
- Tasks model