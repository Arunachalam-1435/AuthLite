## AuthLite
**AuthLite** is a simple web application that allows users to sign up and log in using their email address. Users can also upload a profile picture for their account.
## Technologies Used
- HTML
- Water.css
- JavaScript
- PHP
- PostgreSQL
## Features
1. User registration using an email address and password.
2. User login with email and password authentication.
3. Profile picture upload functionality.
## Why I Built This Project
I am currently learning web application pentesting through **PortSwigger Academy** labs. Before diving deep into web application pentesting, I wanted to understand how web applications work from a developer’s perspective. Understanding how applications are built makes it easier to identify vulnerabilities during an pentesting engagement.

This application is **intentionally vulnerable** and built purely for learning purposes. To better understand common web vulnerabilities, I have deliberately ignored several security best practices, including:
- Input sanitization
- Prepared SQL statements
- Strong password hashing algorithms
- Session regeneration
- Server-side validation

⚠️ **Warning:** This project is not production-ready and should not be deployed in a real-world environment.
## How I Built It
The core idea was inspired by **Dave Hollingworth**’s YouTube tutorial: [Signup and Login with PHP and MySQL](https://youtu.be/5L9UhOnuos0?si=nWVjwppZDICnm183). Although the tutorial uses PHP and MySQL, I chose **PostgreSQL** to store user data.

To securely store database credentials, I followed this tutorial: [Securely store PHP configuration settings](https://youtu.be/L5E2HSHrDjw?si=PuDpzEZRUKvhjsRP).

I implemented the profile picture upload feature using the Fetch API, based on this video: [Upload files with fetch()](https://youtu.be/cei2Ch683q0?si=XQnnLpGp8o4neDFT).

The following files and directories are excluded using `.gitignore`:
- `config.ini` (contains database credentials)
- `uploads/` (stores user profile pictures)

I am currently working on containerizing this application using **Docker**, so it can be easily used for learning both web development and web application pentesting.
## What I Learned
- Server-side scripting using PHP with PostgreSQL
- Secure storage of database credentials using a `config.ini` file
- Sending `POST` requests with file uploads using the JavaScript `fetch()` API
- Creating, managing, and destroying user sessions
- Handling file uploads in PHP