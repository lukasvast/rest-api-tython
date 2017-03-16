Symfony RESTful API template
========================

This is a template for creating RESTful WEB API services. It combines FOSRestBundle
with Symfony Guard Security Component to authenticate users via apikey.

Configuration
--------------

First of all clone the repository with git clone. After that run composer install
to install all of the dependencies for you.

To start implementing your RESTful API just reconfigure the database parameters in
parameters.yml.

Than apply migrations and enter users manually in database or implement additional users
registration and apikey generation controller.

Default Usage
--------------

API for users lives in http://localhost:8000/api/users
Configure and implement in UserController.php
METHODS: [GET, POST, PUT, DELETE]

API for admins lives in http://localhost:8000/admin
Configure and implement in AdminController.php
METHODS: [GET, POST, PUT, DELETE]

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

Enjoy!
