# Tech School

Tech School is a web application designed for educational institutions to manage student profiles and course enrollment. It provides students with the ability to edit their profiles, view available courses, and enroll in courses of their choice. This README provides an overview of the Tech School project, including installation instructions and a brief description of its features.

---

## Table of Contents

- [Tech School](#tech-school)
  - [Table of Contents](#table-of-contents)
  - [Technology Used](#technology-used)
    - [Third Party Services And Libraries](#third-party-services-and-libraries)
  - [Features](#features)
  - [Getting Started](#getting-started)
    - [Prerequisites](#prerequisites)
    - [Installation](#installation)
  - [Usage](#usage)
  - [Contributing](#contributing)
  - [License](#license)
  - [Acknowledgments](#acknowledgments)

---

## Technology Used

- **HTML**: The foundation of web development.
- **CSS**: Cascading Style Sheets for styling web pages.
- **JavaScript**: Used for interactive web features.
- **PHP**: Server-side scripting language for web development.
- **Tailwind CSS**: A utility-first CSS framework for building modern web applications.
- **DaisyUI**: A plugin for Tailwind CSS that provides a set of beautiful UI components.
- **JSON**: A lightweight data interchange format for storing and exchanging data.

  #### Third Party Services And Libraries

  - **Composer**: A PHP package manager used for dependency management.
  - **Cloudinary**: A cloud-based image and video management service.
  - **PHPMailer**: A popular library for sending email messages securely.

---

## Features

Tech School offers the following features:

1. **User Authentication**: Users can register, log in, and log out of their accounts.
2. **Profile Management**: Students can update their profiles, including their full name, email, phone number, and profile picture.
3. **Course Listing**: Students can view a list of available courses, including descriptions, durations, outlines, and requirements.
4. **Course Enrollment**: Students can enroll in courses by providing a reason for enrolling. Enrollments are stored in the database for future reference.
5. **Dashboard**: After logging in, students are greeted with a personalized dashboard displaying their profile information and enrolled courses.
6. **User Profiles**: Create and customize your user profile with a profile picture and background image.
7. **Cloudinary Integration**: Profile pictures and course images are stored on [Cloudinary](https://cloudinary.com/), providing secure and scalable cloud storage.
8. **Responsive Design**: The application is designed to be responsive and work well on both desktop and mobile devices.
9. **Alert Messages**: Users receive alert messages for successful actions and error notifications.

---

## Getting Started

Follow the instructions below to get the Tech School web application up and running on your local machine.

### Prerequisites

To run Tech School, you need the following software:

- **Web Server**: You can use Apache, Nginx, or any other web server of your choice.
- **PHP**: Install PHP on your server. You can download it from the [PHP website](https://www.php.net/).
- **MySQL**: Set up a MySQL database to store user and course information.
- **Composer**: Install Composer, a dependency manager for PHP, from the [Composer website](https://getcomposer.org/).
- **Cloudinary Account**: Sign up for a [Cloudinary account](https://cloudinary.com/) to store and manage images.

### Installation

1. Clone the repository to your local machine.

   ```bash
   git clone https://github.com/EzeibekweEmma/tech-school.git
   ```

2. Navigate to the project directory.

   ```bash
   cd tech-school
   ```

3. Install PHP dependencies using Composer.

   ```bash
   composer install
   ```

4. Create a `.env` file in the project root directory and configure the following variables:

   ```dotenv
   # Database Configuration
   DB_HOST=your_database_host
   DB_USER=your_database_username
   DB_PASS=your_database_password
   DB_NAME=your_database_name

   # Cloudinary Configuration
   CLOUD_NAME=your_cloudinary_cloud_name
   API_KEY=your_cloudinary_api_key
   API_SECRET=your_cloudinary_api_secret

   # Email Configuration
   MAIN_EMAIL=your_email_address
   PASSWORD=google_app_password
   RECEIVER_EMAIL=your_email_address
   ```

5. Import the database schema.

   Use a tool like phpMyAdmin or run the following command:

   ```bash
   mysql -u your_database_username -p your_database_name < db/schema.sql
   ```

6. Start your web server and navigate to the Tech School application in your web browser.

   ```bash
   http://localhost/tech-school
   ```

7. You can now register an account, log in, and explore the features of Tech School.

---

## Usage

Tech School is designed to be a customizable educational platform. You can extend its functionality by adding more features, such as course creation, admin management, and additional user roles. Customize the styles, layouts, and UI to match your institution's branding.

Here are some common usage scenarios:

- **Student Registration**: New students can sign up for accounts with their personal information.
- **Profile Updates**: Students can update their profile information and upload profile pictures.
- **Course Enrollment**: Students can browse available courses and enroll in those of interest.
- **Dashboard**: After logging in, students can access their personalized dashboard with profile details and enrolled courses.
- **User Profiles**: Create and customize your user profile with a profile picture and background image.

---

## Contributing

Contributions to the Tech School project are welcome! Whether you want to report a bug, suggest an improvement, or contribute code, please follow these guidelines:

1. Fork the repository.
2. Create a new branch for your feature or bug fix: `git checkout -b feature/your-feature-name` or `bugfix/your-bug-fix`.
3. Make your changes and commit them.
4. Write clear and concise commit messages.
5. Test your changes thoroughly.
6. Push your changes to your fork: `git push origin feature/your-feature-name`.
7. Create a pull request against the `main` branch of the original repository.

---

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## Acknowledgments

- [Cloudinary](https://cloudinary.com/) - Image and video management for web and mobile apps.
- [XAMPP](https://www.apachefriends.org/index.html) - A free and open-source cross-platform web server solution stack.
- [TailwindCSS](https://tailwindcss.com/) - A utility-first CSS framework for building modern web applications.library.
- [HeroIcons](https://heroicons.com/) - Beautiful hand-crafted SVG icons.
