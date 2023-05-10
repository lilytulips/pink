# pink
This is a simple web app to have people throw their words to a chat box so that people around then world, about pink month, breast cancer awareness!

In conjuction on **Pink Month**, on October every year, I created a simple shout box so that people could express their words about he campaign. This simple webb app I named it "Pink it!". To have access to it, you have to run it **locally** on your local workspace and localhost, I recommend to use XAMPP.

You will also be needed to _create a database_ to store the data thrown into the system, but fret not, I'll guide you through!

**INSTRUCTIONS**

Here are the steps to run a project locally using XAMPP and GitHub:

1. **Install XAMPP**: Download and install XAMPP from the official website (https://www.apachefriends.org/index.html). Make sure to install the version of XAMPP that matches the requirements of the project which are PHP, MySQL, phpMyAdmin an Apache.

2. **Clone the repository**: Go to the GitHub repository where the source codes of the project are located, and clone the repository to your local machine using Git. You can use the following command in your terminal:

   ```
   git clone <https://github.com/lilytulips/pink.git>
   ```
   
   Alternatively, you can _download_ the code from `<Code>` button above.

3. **Move the project files**: Once you have cloned the repository, move the project files to the `htdocs` folder of XAMPP. This folder is typically located in the `C:\xampp` directory on Windows and `/Applications/XAMPP/htdocs` directory on Mac, the project files should be stored under a folder named `shoutitbox`.

4. **Start XAMPP**: Start the XAMPP control panel and start the Apache and MySQL services.

5. **Create a database**: Create a database for the project in phpMyAdmin, which can be accessed by going to `http://localhost/phpmyadmin` in your web browser.

6. **Import the database**: Import the project database from the SQL file provided in the project files. You can do this by selecting the database in phpMyAdmin, clicking on the "Import" tab, and selecting the SQL file, which is `pinkshoutbox.sql`.

7. **Configure the project**: Configure the project by updating the database connection settings in the project files. Typically, these settings can be found in a file called `config.php` or `database.php`.

8. **Run the project**: Open your web browser and go to `http://localhost/shoutitbox` to run the project.

That's it! You should now be able to run the project locally using XAMPP.
  
 If you face any difficulty in setting up or running the file, do contact me at raihanaisyah11@gmail.com, I am happy to assist!
