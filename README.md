Test technique symfony 3
========================

In this test, you will create a new Symfony project, a Doctrine entity and some useful things.
Introduction

Create an empty fast-v1 directory, initialize a git repository in it and create a ./FAST-V1.md file.
You must write in the FAST-v1.md file ALL commands used in your terminal, for each Step.
Commit your job after each Step. Commits messages must follow the following format : Step X - XXXXX XXXXX
In this test, the visual design is not important.

#Step 1
Initialize a Symfony3 project named fast-v1

#Step 2
Add an User entity containing the following fields :
id
fullname
email
password
birthdate
createdAt
updatedAt

#Step 3
Create an User entities list page (table columns : fullname, email, birthdate, createdAt, updatedAt)

#Step 4
Create an User entity creation page (fields : fullname, email, password, birthdate)

#Step 5
Create a Reset all users passwords button. After a click on this button, a custom users.reset_all_passwords event must be dispatched.
Create a new event listener to catch this event. The listener must generate a new random password for each user and save it.


Push your work in a remote git repository and send the access link !
