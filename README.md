## Dylan Hrebenach's PHP CRUD Application

## Operation
1. You must have a copy of MySQL running on your machine and enter the following details to access the 'my_app' database:

Type	        Value

MySQL Username	my_app
Mysql Password	secret
Mysql Database	my_app
SSH Username	vagrant
SSH Password	vagrant

2. Install vagrant & virtualbox on your local machine
3. Start MySQL
4. Update your /etc/hosts file

echo 192.168.59.76   testbox.test www.testbox.test | sudo tee -a /etc/hosts

5. Type 'vagrant up' into your command line
6. Navigate to http://www.testbox.test to view app

## Tech Stack
- PHP v7.1.23
- MySQL v8.0.15
- Nginx v1.15.9
- Virtualbox >= v5.1
- Vagrant >= v1.9.5

## my_app database schema
TABLE - users
  |
  |__ id
  |__ firstname
  |__ lastname
  |__ email
  |__ password
  |__ date

## PHPUnit Testing Notes
I did not submit any tests for this app. My knowledge of PHPUnit is not good enough to complete this portion of the project in a timely manner. I 100% understand how to test a CRUD application and have done it many times before. I would write unit tests for basic features such as:

1. established database connection
2. create.php creates a persistent user in the MySQL database
3. read.php reads the correct user(s) from the MySQL database
4. update.php updates a user sucessfully from the MySQL database
5. delete.php deletes a user from the MySQL database

I am looking into PHPUnit and will have a healthy explanation of the code required to fulfill 100% code coverage on this application.