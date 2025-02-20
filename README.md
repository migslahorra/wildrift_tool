# wildrift_tool
# Offline Wildrift Tool Web Application using XAMPP

## Project Overview
This local offline web application runs using XAMPP as the regional development server and database environment. It allows users to manage and store build-related data using PHP and MySQL.

## Features
- **Add Build Records**: Users can input build information and store it in the database.
- **Read Build Records**: Displays the stored builds for easy reference.
- **Update Build Records**: Allows modifications to existing data.
- **Delete Build Records**: Users can remove unnecessary records.
- **JavaScript Alerts & Redirection**: Provides user-friendly feedback and automatic navigation after actions.

## Installation and Setup
### Prerequisites
1. **XAMPP** installed on your local machine. Download from [Apache Friends](https://www.apachefriends.org/).
2. Basic knowledge of **PHP, MySQL, HTML, CSS, and JavaScript**.
3. **GitHub Account** for version control.

### Setup Instructions
1. **Start XAMPP:**
   - Open **XAMPP Control Panel** and start `Apache` and `MySQL`.

2. **Database Configuration:**
   - Open **phpMyAdmin** (`http://localhost/phpmyadmin/`).
   - Create a new database (e.g., `builds_db`).

3. **Project Folder Setup:**
   - Place the project files inside `C:\xampp\htdocs\your_project_folder`.

4. **Running the Application:**
   - Open a web browser and go to `http://localhost/your_project_folder/`

## GitHub Setup
1. **Initialize a Git Repository** in your project folder.
2. **Connect to GitHub** by adding a remote repository.
3. **Push Updates** whenever changes are made.

## Usage
- **Adding a Build:**
  - Fill in the form and submit. A success alert will appear, and you will be redirected to the builds list.
- **Viewing Builds:**
  - Navigate to the builds page to see the stored records.
- **Editing/Deleting Builds:**
  - Use the edit/delete options in the UI.

## Troubleshooting
- If the database connection fails, ensure MySQL is running and the credentials are correct.
- If the builds page doesn’t display records, verify the database table and data entries.

## License
This project is for personal and educational use. Modify and distribute as needed.

## Author
- **Developer Name** (Lahorra, Juan Miguel T.)
- Contact: migsdev11@gmail.com

