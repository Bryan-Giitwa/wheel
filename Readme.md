# Windscreenmania management system

## Installation

1. Clone the repository

```bash
git clone https://github.com/Bryan-Giitwa/wheel.git
```

2. Move the `wheel` directory to the `htdocs` folder of your XAMPP installation.

3. Start the XAMPP server and open the `phpmyadmin` interface.

   - Open your web browser and navigate to `http://localhost/phpmyadmin`.

   - Click on the `Databases` tab.

   - In the `Create database` field, enter a name for your database (e.g., `vehicle_service_db`) and click on the `Create` button.
   - click the import tab and select the `vehicle_service_db.sql` file located in the _database folder_ to import the database structure and data.

4. Import the `vehicle_service_db.sql` file located in the _database folder_ into the newly created database.

5. cd into the `wheel` directory

```bash
cd wheel
```

6. Open your web browser and navigate to `http://localhost/wheel`.

7. You should see the home page of the Windscreenmania management system.

8. To access the admin panel, navigate to `http://localhost/wheel/admin/login.php`.

9. Enter the following credentials to log in:

```bash
username - admin
password - admin123
```

10. You should now be logged in to the admin panel.
