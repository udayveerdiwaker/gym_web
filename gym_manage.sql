CREATE TABLE
  `contact` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `contact` VARCHAR(20),
    `email` VARCHAR(100),
    `subject` VARCHAR(150),
    `message` TEXT,
    `membership_type` VARCHAR(50),
    `preferred_time` VARCHAR(50),
    `submission_date` DATETIME DEFAULT CURRENT_TIMESTAMP
    
  );