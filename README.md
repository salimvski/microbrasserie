# microbrewery


Microbrewery database management using MYSQL.


While using this app you can :

- Log in with your user id.
- Watch the Microbrewery database, add microbrewery using the form or the API REST, delete microbreweries using the form.



HOW TO USE :

I- DATABASE
- Run the script sql/account.sql and sql/microbrasserie.sql on your MYSQL.
- Load microbrasseries.csv on your MYSQL.
- Make sure to modify the database's name.

II- SET UP THE CONNECTION TO THE DATABASE
- Open database.php.
- replace $user by your mysql's username and $password by your mysql's password and $database by your mysql's database's name.

III- HOST
FOR LINUX :
- Download lamp
- Host your microbrasserie folder in opt/lampp/htdocs/.
- run the following command : /opt/lampp/lampp restart.
- If SQL or apache is already running make sure to stop it then re run the previous command.

VI- USAGE
- The moment you finish these steps you can :
- open your browser.
- enter the following url : localhost/microbrasserie.
- Then you have access to full website.
- In order to know what can you do make sure to go to the following page localhost/microbrasserie/doc.


# Used Technologies : MySQL / REST / D3 / DataTables
