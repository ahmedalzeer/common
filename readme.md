## **Laravel School Management System** 

**LAVSMS** is developed for educational institutions like schools and colleges built on Laravel 8

**SCREENSHOTS** 

**Dashboard**

**Login**

**Student Marksheet**

**System Settings**

<hr />  

There are 7 types of user accounts. They include:
 
Administrators (Super Admin & Admin)
- Librarian
- Accountant
- Teacher
- Student
- Parent

**Requirements** 

Check Laravel 8 Requirements https://laravel.com/docs/8.x

**Installation**
- Install dependencies (composer install)
- Set Database Credentials & App Settings in dotenv file (.env)
- Migrate Database (php artisan migrate)
- Database seed (php artisan db:seed)

**Login Credentials**
After seeding. Login details as follows:

| Account Type  | Username | Email | Password |
| ------------- | -------- | ----- | -------- |
| Super Admin | Ahmed | Ahmed@a.com | 12345678 |
|  Admin | admin | admin@admin.com | 12345678 |
|  Teacher | teacher | teacher@teacher.com | 12345678 |
|  Parent | parent | parent@parent.com | 12345678 |
|  Accountant | accountant | accountant@accountant.com | AZ |
|  Student | student | student@student.com | 12345678 |

#### **FUNCTIONS OF ACCOUNTS** 

**-- SUPER ADMIN**
- Only Super Admin can delete any record
- Create any user account
 
**-- Administrators (Super Admin & Admin)**

- Manage students class/sections
- View marksheet of students
- Create, Edit and manage all user accounts & profiles
- Create, Edit and manage Exams & Grades
- Create, Edit and manage Subjects
- Manage noticeboard of school
- Notices are visible in calendar in dashboard
- Edit system settings
- Manage Payments & fees

**-- ACCOUNTANT**
- Manage Payments & fees
- Print Payment Receipts

**-- LIBRARIAN**
- Manage Books in the Library

**-- TEACHER**
- Manage Own Class/Section
- Manage Exam Records for own Subjects
- Manage Timetable if Assigned as Class Teacher
- Manage own profile
- Upload Study Materials

**-- STUDENT**
- View teacher profile
- View own class subjects
- View own marks and class timetable
- View Payments
- View library and book status
- View noticeboard and school events in calendar
- Manage own profile

**-- PARENT**
- View teacher profile
- View own child's marksheet (Download/Print PDF)
- View own child's Timetable
- View own child's payments
- View noticeboard and school events in calendar
- Manage own profile

### **Contributing**

Your Contributions & suggestions are welcomed.

### **Security Vulnerabilities**

If you discover a security vulnerability within LAVSMS, please use pull request. All security vulnerabilities will be promptly addressed.

### **Contact [Ahmed Alzeer]**
- Phone : +201015258850
