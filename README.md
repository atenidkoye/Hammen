# Hame Project - Task Division

## Team Members & Responsibilities

# Eljona Pacolli - Backend Developer

* **Main Page Development:** I coded the homepage and made it dynamic using PHP so that all flower products are pulled directly from the database.
* **Database Setup (phpMyAdmin):** I used phpMyAdmin to create and manage the 'products' and 'orders' tables, making sure the prices and names were stored correctly.
* **Server Management (WinSCP):** I was responsible for using WinSCP to upload all project files to the HAMK shell server and making sure the public_html folder was organized.
* **Project Documentation:** I created and managed the README file to keep track of the project tasks and progress.
* **Sorting Feature:** I added a feature to the main page that lets users sort flowers by price (low to high or high to low) using SQL.
* **File System Optimization:** I organized the directory structure and fixed path issues to ensure that images and styles loaded properly on the live server.

# Allan Jakubovits

* **Database Connection:** I created the db.php file to connect the website to the MySQL database using mysqli.
* **Contact Form:** I modified the existing contact form and connected it to the backend. The form sends user data (name, email, and message) to the server using the POST method.
* **Contact Data Storage (PHP & SQL):** I developed the contact_process.php file to handle form submissions and store user messages in the database using SQL INSERT queries. I also created and configured the contact table for storing messages.
* **Admin Panel Development:** I developed the admin panel (admin.php) to manage products in the database. It allows administrators to add new products, view existing products, and delete products through a web interface.
* **CRUD Functionality:**
I implemented core CRUD operations for products:
* CREATE – adding new products using POST form and SQL INSERT
* READ – dynamically displaying products from the database using SELECT
* DELETE – removing products using GET parameters and SQL DELETE
* **Basic Input Handling:** I used basic validation methods such as required form fields and intval() for safer ID processing when deleting products.
* **Basic Security Attempt:** I Created .htaccess and .htpasswd to protect the admin page, but later removed them after testing because they were not supported on the HAMK shell server.

* **Abraham:**
    * Order Page integration.
    * User Authentication (Login & Signup).

## Technical Setup
* **Environment:** HAMK Shell Server (Apache/PHP 7.4+)
* **Database:** MySQL/phpMyAdmin
