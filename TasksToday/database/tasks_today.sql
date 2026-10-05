/*FOR DOCUMENTATION

CREATE DATABASE IF NOT EXISTS tasks_today_db
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE tasks_today_db;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    status VARCHAR(20) NOT NULL DEFAULT 'pending',
    task_date DATE NOT NULL,
    created_at DATETIME NOT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO tasks (title, status, task_date, created_at) VALUES
('Interview Capstone Clients', 'pending', CURDATE(), NOW()),
('Complete daily report', 'in progress', CURDATE(), NOW()),
('Update task board', 'completed', CURDATE(), NOW()),
('Prepare for Mock Defense', 'pending', DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),
('Finish Title Proposal Paper', 'completed', DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),
('Schedule a Consultation for Title Proposal', 'pending', DATE_ADD(CURDATE(), INTERVAL 1 DAY), NOW()),
('Follow up with client', 'pending', DATE_ADD(CURDATE(), INTERVAL 1 DAY), NOW()),
('Make the PowerPoint Presentation', 'completed', DATE_SUB(CURDATE(), INTERVAL 2 DAY), NOW());

INSERT INTO users (username, full_name, email, created_at) VALUES
('renzo101', 'Renzo Miguel Espino', 'renzo@example.com', NOW());