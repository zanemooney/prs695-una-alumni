CREATE DATABASE IF NOT EXISTS alumni_database;
USE alumni_database;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    role ENUM('admin', 'board_member') NOT NULL
);

INSERT INTO users (username, role) VALUES ('admin', 'admin');
-- Add other users as needed
