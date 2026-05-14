# 🎓 Student Management System

<p align="center">
  <marquee behavior="scroll" direction="left">
    <img src="https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php&logoColor=white" />
    <img src="https://img.shields.io/badge/MySQL-10.4+-4479A1?style=for-the-badge&logo=mysql&logoColor=white" />
    <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" />
    <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" />
    <img src="https://img.shields.io/badge/JavaScript-ES6-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" />
    <img src="https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" />
  </marquee>
</p>

<p align="center">
  A Student Management System built with PHP and MySQL for managing student registrations, courses, subjects, and administrative operations.
</p>

---

## 📌 Overview

The **Student Management System** is a web-based application designed to simplify academic record management. It enables administrators to manage student registrations, courses, subjects, and login credentials through an intuitive dashboard.

This project demonstrates practical experience with:
- PHP and MySQL integration
- CRUD operations
- Form handling and validation
- Relational database design
- Admin authentication
- Dynamic web interfaces

---

## ✨ Features

### 👨‍🎓 Student Module
- Student Registration
- Personal and Academic Information Management
- Course Selection
- Search Student Records

### 📚 Course Module
- Add New Courses
- Update Course Details
- Delete Courses
- View Course List

### 📝 Subject Module
- Assign Subjects to Courses
- Manage Subject Details

### 🔐 Admin Module
- Secure Admin Login
- Dashboard for Managing Data
- View All Registrations

---

## 🛠️ Tech Stack

<p align="center">
  <img src="https://skillicons.dev/icons?i=php,mysql,html,css,js,bootstrap,git,github,vscode" />
</p>

---

## 📂 Project Structure

```text
Student-Management-System/
├── css/
├── js/
├── images/
├── includes/
├── registration.php
├── add-course.php
├── add-subject.php
├── login.php
├── dashboard.php
├── index.php
├── studentrecorddb.sql
├── README.md
└── .gitignore
```

---

## 🗄️ Database

The project includes a cleaned `studentrecorddb.sql` file containing the following tables:

- `registration`
- `tbl_course`
- `subject`
- `tbl_login`

### Main Fields

#### Registration Table
- Student Name
- Gender
- Guardian Name
- Occupation
- Income
- Category
- Nationality
- Contact Details
- Address

#### Course Table
- Course Short Name
- Course Full Name

#### Subject Table
- Subject List for Each Course

#### Login Table
- Admin Credentials

---

## ⚙️ Installation

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/vatsalgajera-tech/Student-Management-System.git
cd Student-Management-System
```

### 2️⃣ Move Project to XAMPP

Copy the project folder to:

```text
C:\xampp\htdocs\
```

### 3️⃣ Start Apache and MySQL

Open XAMPP Control Panel and start:
- Apache
- MySQL

### 4️⃣ Create Database

Create a database named:

```sql
CREATE DATABASE studentrecorddb;
```

### 5️⃣ Import SQL File

Import the provided `studentrecorddb.sql` file using phpMyAdmin.

### 6️⃣ Open the Project

```text
http://localhost/Student-Management-System/
```

---

## 🔐 Admin Login

Use the following demo credentials:

```text
Username: admin
Password: admin123
```

> Change these credentials in the database for production use.

---

## 🚀 Future Enhancements

- Student Attendance Management
- Marks and Grade Tracking
- Export Records to PDF
- Advanced Search Filters
- Role-Based Access Control

---

## 🧠 Key Learnings

Through this project, I gained hands-on experience with:

- PHP Form Handling
- MySQL Database Design
- CRUD Operations
- Authentication Systems
- Data Validation
- Project Organization

---

## 👨‍💻 Author

### Vatsal Gajera

- GitHub: https://github.com/vatsalgajera-tech
- LinkedIn: https://www.linkedin.com/in/vatsalgajera/
- Email: vatsalgajera.tech@gmail.com

---

## ⭐ Show Your Support

If you found this project useful, please give it a ⭐ on GitHub.

---

## 📜 License

This project is developed for educational and portfolio purposes.
