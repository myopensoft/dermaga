# Dermaga CMS

A CMS for system starter kit. **Dermaga** means wharf in English, and so this CMS aims to become the wharf for data and information.

## Features
* User management
* Multi-role user
* Complete separation frontend / admin - Run frontend / admin simultaneously on separate sessions (does not share sessions)
* Minimal default tables in database (user, profile, roles, roles_assigned)
* Automatic Model & CRUD generation - Just create all your tables & relations in database, then run the "autobot" script to automatically generate all related models and CRUD files.

## Installation
1. Clone this repo into a web accessible folder, example: C:\xampp\htdocs
2. Run the ```init``` script to set up your yii environment - choose development
3. Create a database and change ```dbname``` part in ```common/config/main-local.php``` to one you created just now
4. Run ```yii migrate``` in your project root directory to set up the database
5. Run ```composer update``` in your project root directory to get all vendor files
6. Portal can be access at, example: ```http://localhost/dermaga/www```
7. Admin site can be access at, example: ```http://localhost/dermaga/www/admin```

Super User username/password: root/12345

## Autobot Code Generator
Console command for generating all models & CRUDs from connected database tables, minus the CMS default tables.

Usage:
* Go to command line in project root ex. c:\xampp\htdocs\dermaga
* To generate all models & CRUDs for backend, run ```yii autobot/rollout common backend```
* And to generate all models & CRUDs for frontend, run ```yii autobot/rollout common frontend```

*Project sponsored by Opensoft Technologies Sdn Bhd*
