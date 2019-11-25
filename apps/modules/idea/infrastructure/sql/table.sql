CREATE TABLE `idy`.`author` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(200) NOT NULL , 
    `email` VARCHAR(100) NULL , 
    PRIMARY KEY (`id`)
);

CREATE TABLE `idy`.`idea` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `author_id` INT NOT NULL,
    `title` VARCHAR(255) NOT NULL , 
    `description` TEXT NULL , 
    PRIMARY KEY (`id`),
    FOREIGN KEY (`authorId`) REFERENCES author(id)
);