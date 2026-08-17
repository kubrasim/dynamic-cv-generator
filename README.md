# Dynamic CV Generator Web Application

A full-stack, dynamic CV generation web application developed with **PHP**, **MySQL**, **JavaScript**, **HTML5**, and **CSS3**. This system allows users to enter personal, professional, and academic details, seamlessly process the input via a local server environment (XAMPP), and generate structured curriculum vitae profiles in real time.

---

## Features

* **Dynamic Data Processing:** Collects user input (personal information, work experience, education, skills) and processes it dynamically using PHP.
* **Database Integration:** Stores and manages applicant entries using a structured MySQL database.
* **Responsive Frontend:** Built with custom HTML5, CSS3, and JavaScript for an intuitive and responsive user experience.
* **Profile Management:** Allows listing, viewing, and rendering stored candidate profiles.

---

## Tech Stack

* **Frontend:** HTML5, CSS3, JavaScript
* **Backend:** PHP
* **Database:** MySQL
* **Local Server:** XAMPP (Apache & MariaDB/MySQL)

---

## Project Structure

* `index.html` — User interface for CV input and data submission.
* `process.php` — Backend script for processing and validating form data.
* `view.php` — Renders the formatted, generated CV profile.
* `list.php` — Displays all saved CV records from the database.
* `config.php` — Handles database connection settings.
* `cv_database.sql` — SQL database schema and sample tables.
* `style.css` — Custom styling and UI layout.
* `script.js` — Client-side dynamic interaction logic.

---

## How to Run Locally

1. **Clone the Repository:**
   ```bash
git clone https://github.com/kubrasim/dynamic-cv-generator.git
 2. **Setup XAMPP:**
   * Move the project folder to `C:\xampp\htdocs\cv_project`.
   * Start **Apache** and **MySQL** modules from the XAMPP Control Panel.

3. **Import Database:**
   * Open `http://localhost/phpmyadmin` in your web browser.
   * Create a new database named `cv_database`.
   * Import the `cv_database.sql` file provided in this repository.

4. **Launch Application:**
   * Access the application in your browser at `http://localhost/cv_project`.
