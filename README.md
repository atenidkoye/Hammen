# Hame Project - Task Division

## Team Members & Responsibilities

# Eljona Pacolli - Backend Developer

* **Main Page Development:** I coded the homepage and made it dynamic using PHP so that all flower products are pulled directly from the database.
* **Database Setup (phpMyAdmin):** I used phpMyAdmin to create and manage the 'products' and 'orders' tables, making sure the prices and names were stored correctly.
* **Server Management (WinSCP):** I was responsible for using WinSCP to upload all project files to the HAMK shell server and making sure the public_html folder was organized.
* **Project Documentation:** I created and managed the README file to keep track of the project tasks and progress.
* **Sorting Feature:** I added a feature to the main page that lets users sort flowers by price (low to high or high to low) using SQL.
* **File System Optimization:** I organized the directory structure and fixed path issues to ensure that images and styles loaded properly on the live server.

* **Allan:**
    * **Database Connection:** Created the db.php file to connect the website to the MySQL database.
    * **Contact Form and Data Storage:** Modified the existing contact form, created the contact table, and used PHP and SQL INSERT to store user messages (name, email and message).
    * **Admin Panel (CRUD):** Developed an admin page to add, view, and delete products from the database.
    * **Basic Security Attempt:** Created .htaccess and .htpasswd to protect the admin page, but later removed them after testing because they were not supported on the HAMK shell server.

* **Abraham:**
    * Order Page integration.
    * User Authentication (Login & Signup).

## Technical Setup
* **Environment:** HAMK Shell Server (Apache/PHP 7.4+)
* **Database:** MySQL/phpMyAdmin