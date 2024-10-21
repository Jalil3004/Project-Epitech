CREATE TABLE `users` (
  `id` INT AUTO_INCREMENT,
  `nickname` VARCHAR(42),
  `email` VARCHAR(320),
  `password` VARCHAR(40),
  `follows` LONGTEXT,
  `picture` VARCHAR(2048),
  PRIMARY KEY (`id`)
);

CREATE TABLE `conversations` (
  `id` INT AUTO_INCREMENT,
  `users_id` LONGTEXT,
  PRIMARY KEY (`id`)
);

CREATE TABLE `messages` (
  `id` INT AUTO_INCREMENT,
  `message` VARCHAR(140),
  `conversation_id` INT,
  `user_id` INT,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`conversation_id`) REFERENCES `conversations`(`id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
);

CREATE TABLE `tweets` (
  `id` INT AUTO_INCREMENT,
  `user_id` INT,
  `message` VARCHAR(140),
  `images` VARCHAR(2048),
  `origin` INT,
  `comments` LONGTEXT,
  `liked_id` LONGTEXT,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
  FOREIGN KEY (`origin`) REFERENCES `tweets`(`id`)
);

CREATE TABLE `likes` (
  `id` INT AUTO_INCREMENT,
  `user_id` INT,
  `tweet_id` INT,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`tweet_id`) REFERENCES `tweets`(`id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
);

