CREATE TABLE `contact` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(100),
  `contact` VARCHAR(15),
  `email` VARCHAR(100),
  `subject` VARCHAR(100),
  `message` TEXT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
