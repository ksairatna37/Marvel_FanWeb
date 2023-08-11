# Marvel_FanWeb
This website is inspired from official site of Marvel . I created this website with my classmates as End Semester Project in 2nd Year . It includes a secure login/signup system, powered by a local XAMPP server database.  

Certainly, I can provide you with a basic guide on how to set up a database using XAMPP for your project. Keep in mind that XAMPP configurations may change over time, so it's always a good idea to consult the official documentation or adjust these steps based on your specific XAMPP version. Here's a general guide:

1. **Download and Install XAMPP**:
   If you haven't already, download and install XAMPP from the official website (https://www.apachefriends.org/). Follow the installation instructions for your operating system.

2. **Start XAMPP and Launch phpMyAdmin**:
   Start the XAMPP control panel. Start the Apache and MySQL services. Then, click on the "Admin" button next to MySQL. This will open phpMyAdmin in your web browser.

3. **Create a Database**:
   In phpMyAdmin, you'll see a "Databases" tab at the top. Click on it, and you'll be presented with an option to create a new database. Choose a name for your database (e.g., "marvel_fan_website") and select the appropriate collation (usually "utf8_general_ci").

4. **Create Tables**:
   Inside your newly created database, you can now create tables. Click on the database name in phpMyAdmin, then click the "SQL" tab. Here you can input SQL queries to create tables. For example:

   ```sql
   CREATE TABLE users (
       id INT PRIMARY KEY AUTO_INCREMENT,
       username VARCHAR(255) NOT NULL,
       email VARCHAR(255) NOT NULL,
       password VARCHAR(255) NOT NULL
   );
   ```

   This creates a table called "users" with columns for ID, username, email, and password. You can adjust this table structure based on your project's needs.

5. **Adjust Database Connection in Your Project**:
   In your project's code, you'll need to adjust the database connection settings to match your XAMPP setup. Use the database name, username, password, and host (usually "localhost") that you configured in XAMPP.

That's the basic process for setting up a database using XAMPP. Be sure to securely handle database credentials in your project and follow best practices for database operations to ensure the safety and integrity of user data.
