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