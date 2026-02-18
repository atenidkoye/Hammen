# Hame Project - Task Division

## Team Members & Responsibilities

* **Eljona:**
    * **Database Architecture:** Designed the `products` table and established the central connection logic (`db.php` and `config.php`).
    * **Dynamic Home Page:** Implemented PHP loops to fetch and display products directly from the MySQL database.
    * **Advanced Feature:** Developed a Price Sorting system (ASC/DESC) using PHP `GET` requests and SQL `ORDER BY` logic.
    * **Server Deployment:** Managed the SFTP transfer and directory structure on the HAMK shell server to ensure all assets and scripts load correctly.

* **Allan:**
    * **Database Connection:** Created the db.php file to connect the website to the MySQL database.
    * **Contact Form Customization and Storage:** Modified the existing contact form, created the contact table, and connected it to a PHP script to store user messages (name, email, message) using SQL INSERT
    * **Data Storage:** Implemented PHP and SQL INSERT to store user inputs (name, email and message) in the contact table.
    * **Admin Panel (CRUD):** Developed an admin page to add, view, and delete products from the database.
    * **Basic Security Attempt:** Created .htaccess and .htpasswd to protect the admin page, but later removed them after testing because they were not supported on the HAMK shell server.

* **Abraham:**
    * Order Page integration.
    * User Authentication (Login & Signup).

## Technical Setup
* **Environment:** HAMK Shell Server (Apache/PHP 7.4+)
* **Database:** MySQL/phpMyAdmin