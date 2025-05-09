CREATE TABLE pages (
    id INT PRIMARY KEY AUTO_INCREMENT,
    slug VARCHAR (255),
    content TEXT,
    title VARCHAR(255),
    image VARCHAR(255),
    badge_text VARCHAR(255,
    highlight_years VARCHAR(50),
    description TEXT,
    feature1_icon VARCHAR(50),
    feature1_title VARCHAR(255),
    feature1_desc TEXT,
    feature2_icon VARCHAR(50),
    feature2_title VARCHAR(255),
    feature2_desc TEXT
);


INSERT INTO about (id, title, image, badge_text, highlight_years, description,
feature1_icon, feature1_title, feature1_desc,
feature2_icon, feature2_title, feature2_desc)
VALUES (
  1, 'About Our Gym', 'gym.jpg', '5-YEAR EXPERIENCE', '5 Years',
  'Dedicated fitness enthusiast with 5 years of gym experience...',
  '🏋️', 'Elite Fitness Zone', 'Premium training...',
  '🏅', 'Award Winning', 'Recognized excellence...'
);
