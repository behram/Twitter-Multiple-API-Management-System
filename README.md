Twitter Multiple Api Management System
==================================
Overview
------------
You can manage multiple twitter api and this api 's users account detail in this project. Project  firstly devoloped by Deepkod Freelancer Group and sold with price. Now we decided opening source codes.  Have fun Boys. If you want develop we all time  wait for pull request :)

 - Demo Site => http://demo.deepkod.com
 - Demo Site Panel => http://demo.deepkod.com/panel
 - Demo Panel Username => demo
 - Demo  Panel Password => demo

Requirements
------------
https://github.com/symfony/symfony#requirements

Install
------------
Clone repo in www folder for Apache2

	cd /var/www/
	git clone https://github.com/deepkod/Twitter-Multiple-API-Management-System.git
	cd ./Twitter-Multiple-API-Management-System

Install Vendor Classes ( if composer not installed https://getcomposer.org/download/ )
		
		composer install
		composer update
Edit doctrine database config in config.yml doctrine parameter
		nano app/config/config.yml
Update doctrine schemas
		
		php app/console doctrine:schema:update --force
Install tables default inserts with mysql client gui ( like phpmyadmin with import_db.sql file on root directory )

*Important !* After import values delete import_db.sql file for security and change sys_settings table admin_user, admin_pass values.

If you followed all steps correctly run symfony app
	
	php app/console server:run
	
Open http://localhost:8000 url on browser. This page is an example homepage more important page is  http://localhost:8000/panel. Page will redirect login page user is "user" and password is "password" in default settings. If you change values in db try this values.

Documation
------------------
In Turkish language http://goo.gl/zYKsO8 is documation link.
