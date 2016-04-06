# Dermaga CMS by Opensoft Technologies

Based on Yii 2 Advanced Template, a CMS for system starter kit. *Dermaga* means wharf in English, and so this CMS aims to become the wharf for data and information. 

## Installation
1. Clone this repo
2. Create a database and import the included sql file
3. Run the ```init``` script to set up your yii environment
4. Change ```dbname``` part in ```common/config/main-local.php``` to the database you imported in step 2 above
5. Run ```composer update``` in your project root directory to get all vendor files
6. Portal can be access at example: ```http://localhost/dermaga/www```
7. Admin site can be access at example: ```http://localhost/dermaga/www/admin```

Super User username/password: root/12345

Directory Structure
-------------------

```
www                      contain portal (frontend) entry script and Web resources
    admin                contain admin (backend) entry script and Web resources
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
tests                    contains various tests for the advanced application
    codeception/         contains tests developed with Codeception PHP Testing Framework
```
