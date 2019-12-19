<?php

include_once 'db.php';

try{
    $dsn = "mysql:host=".$servername.";dbname=".$dbname;
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = '    
        CREATE TABLE IF NOT EXISTS `table_position`(
        `position_id` INT NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(50) NOT NULL,
        PRIMARY KEY(`position_id`)
        )
        ENGINE = InnoDB;
        
        CREATE TABLE IF NOT EXISTS `table_employee` (
        `employee_id` INT NOT NULL AUTO_INCREMENT,
        `position_id` INT NOT NULL,
        `embg` VARCHAR(200) NOT NULL,
        `date_birth` DATE  NOT NULL,
        `name` VARCHAR(50) NOT NULL ,
        `surname` VARCHAR(50) NOT NULL,
        `salary` INT NOT NULL,
        `contact_nr` VARCHAR(20) NOT NULL,
        `street_name` VARCHAR(50) NOT NULL,
        `street_number` INT,
        `city` VARCHAR(50) NOT NULL,
         PRIMARY KEY(`employee_id`),
         CONSTRAINT `position_id`
            FOREIGN KEY (`position_id`)
            REFERENCES `table_position` (`position_id`)
            ON DELETE CASCADE
            ON UPDATE CASCADE
        )
        ENGINE = InnoDB;
        
        CREATE TABLE IF NOT EXISTS  `table_costumer`(
        `costumer_id` INT NOT NULL AUTO_INCREMENT,
        `contact_nr` VARCHAR(20) NOT NULL,
        `name` VARCHAR(50) NOT NULL,
        `surname` VARCHAR(50) NOT NULL,
        PRIMARY KEY(`costumer_id`)
        )
        ENGINE = InnoDB;
        
        CREATE TABLE IF NOT EXISTS `table_manufacturer`(
        `manufacturer_id` INT NOT NULL AUTO_INCREMENT,
        `name` VARCHAR (50) NOT NULL,
        PRIMARY KEY (`manufacturer_id`)
        )
        ENGINE = InnoDB;
        
        CREATE TABLE IF NOT EXISTS `table_specification`(
        `specification_id` INT NOT NULL AUTO_INCREMENT,
        `cam_front` VARCHAR(50) NOT NULL,
        `cam_back` VARCHAR(50) NOT NULL,
        `memory` VARCHAR(50) NOT NULL,
        `processor` VARCHAR(50) NOT NULL,
        `battery` VARCHAR(50) NOT NULL,
        `display` VARCHAR(50) NOT NULL,
        `color` VARCHAR(50) NOT NULL,
        PRIMARY KEY (`specification_id`)
        )
        ENGINE = InnoDB;
        
        CREATE TABLE IF NOT EXISTS `table_phone`(
        `phone_id` INT NOT NULL AUTO_INCREMENT,
        `manufacturer_id` INT NOT NULL,
        `specification_id` INT NOT NULL,
        `serial_nr` VARCHAR(20) NOT NULL,
        `imei_nr` VARCHAR(20) NOT NULL,
        `year` INT NOT NULL,
        `purchased_price` INT NOT NULL,
        `sale_price` INT NOT NULL,
        `in_stock` TINYINT(1) NOT NULL,
        PRIMARY KEY (`phone_id`),
        CONSTRAINT `manufacturer_id`
            FOREIGN KEY (`manufacturer_id`)
            REFERENCES `table_manufacturer` (`manufacturer_id`)
            ON DELETE CASCADE
            ON UPDATE CASCADE,
        CONSTRAINT `specification_id`
            FOREIGN KEY (`specification_id`)
            REFERENCES `table_specification` (`specification_id`)
            ON DELETE CASCADE
            ON UPDATE CASCADE
        )
        ENGINE = InnoDB;
        
        CREATE TABLE IF NOT EXISTS `table_guarantee`(
        `guarantee_id` INT NOT NULL AUTO_INCREMENT,
        `employee_id` INT NOT NULL,
        `phone_id` INT NOT NULL,
        `costumer_id` INT NOT NULL,
        `date_guarantee` DATE NOT NULL,
        `description` VARCHAR(500),
        `guarantee_months` INT NOT NULL,
         PRIMARY KEY (`guarantee_id`);
         CONSTRAINT `employee_id`
            FOREIGN KEY (`employee_id`)
            REFERENCES `table_employee` (`employee_id`)
            ON DELETE CASCADE
            ON UPDATE CASCADE,
        CONSTRAINT `phone_id`
            FOREIGN KEY (`phone_id`)
            REFERENCES `table_phone` (`phone_id`)
            ON DELETE CASCADE
            ON UPDATE CASCADE,
        CONSTRAINT `costumer_id`
            FOREIGN KEY (`costumer_id`)
            REFERENCES `table_costumer` (`costumer_id`)
            ON DELETE CASCADE
            ON UPDATE CASCADE
        )
        ENGINE = InnoDB;
    ';

    //INSERT INTO `table_position` (`position_id`, `name`) VALUES ('1', 'Administrator');
    //INSERT INTO `table_employee` (`employee_id`, `position_id`, `embg`, `date_birth`, `name`, `surname`, `salary`, `contact_nr`, `street_name`, `street_number`, `city`) VALUES ('1', '1', '6aa7b5b3203d89f4324859ac87229c06', '1996-03-11', 'Aferdita', 'Demiri', '18000', '38970123456', 'Bozidar Acija', '3', 'Skopje');

//    echo "Connected successfully";
    $statement = $pdo->query($sql);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $statement->closeCursor();


}
catch (PDOException $e){
    echo "Connection failed: " .$e->getMessage();
}