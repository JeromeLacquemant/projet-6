Project-6 - Snowtricks : http://projet-6.jeromelacquemant.fr/

The goal of this project is to develop from A to Z a website about the snowtricks. This website is communautary. People can interact with it by comments. 

This is a part of my learning on OpenClassRooms (training about PHP/Symfony)

Getting Started
What you should have for using this project :
- One code editor (example : Visual Studio Code, Netbeans, Sublime Text, etc.)
- One database (mysql)

Installation
You should follow step by step the instruction listed above to install the website on a local environment to use it.

- Clone or download the website in the folder of your local server
- Use the empty file .env (I used a .env.local to protect my logins) and insert your credentials for Database and SMTP
- Install the dependencies -> composer install
- Create the Database -> php bin/console do:da:cr
- Load the tables -> php bin/console doctrine:migrations:migrate
- Load the fixtures -> php bin/console doctrine:fixtures:load
- Start the server -> symfony serve
- Enjoy !


Github repository :
- https://github.com/JeromeLacquemant/projet-6


Built With : 
- PHP - 7.3.11
- Symfony - 5.0.11
- MampServer 
- PhpMyAdmin 
- Netbeans


Author Jérôme LACQUEMANT


