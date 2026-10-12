-- Create database
CREATE DATABASE IF NOT EXISTS student_registration;
USE student_registration;

-- Create registrations table
CREATE TABLE registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(120) NOT NULL UNIQUE,
    course VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);