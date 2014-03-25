-- -----------------------------------------------------
-- Table `owner`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `owner` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fname` VARCHAR(45) NULL,
  `lname` VARCHAR(45) NULL,
  `phone` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `car`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `car` (
  `vin` VARCHAR(45) NOT NULL,
  `make` VARCHAR(45) NULL,
  `model` VARCHAR(45) NULL,
  `year` INT NULL,
  `miles` INT NULL,
  `owner_id` INT NOT NULL,
  PRIMARY KEY (`vin`),
  INDEX `fk_car_owner1_idx` (`owner_id` ASC),
  CONSTRAINT `fk_car_owner1`
    FOREIGN KEY (`owner_id`)
    REFERENCES `owner` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `engine`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `engine` (
  `car_vin` VARCHAR(45) NOT NULL,
  `displacement` VARCHAR(45) NULL,
  `configuration` VARCHAR(45) NULL,
  `fuelSystem` VARCHAR(45) NULL,
  INDEX `car_vin_idx` (`car_vin` ASC),
  CONSTRAINT `engine_vin`
    FOREIGN KEY (`car_vin`)
    REFERENCES `car` (`vin`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `transmission`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `transmission` (
  `car_vin` VARCHAR(45) NOT NULL,
  `type` VARCHAR(45) NULL,
  `gearbox` VARCHAR(45) NULL,
  `drivetrain` VARCHAR(3) NULL,
  INDEX `car_vin_idx` (`car_vin` ASC),
  CONSTRAINT `transmission_vin`
    FOREIGN KEY (`car_vin`)
    REFERENCES `car` (`vin`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `body`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `body` (
  `car_vin` VARCHAR(45) NOT NULL,
  `type` VARCHAR(45) NULL,
  `color` VARCHAR(45) NULL,
  INDEX `car_vin_idx` (`car_vin` ASC),
  CONSTRAINT `body_vin`
    FOREIGN KEY (`car_vin`)
    REFERENCES `car` (`vin`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tires`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tires` (
  `car_vin` VARCHAR(45) NOT NULL,
  `brand` VARCHAR(45) NULL,
  `season` VARCHAR(45) NULL,
  INDEX `car_vin_idx` (`car_vin` ASC),
  CONSTRAINT `tires_vin`
    FOREIGN KEY (`car_vin`)
    REFERENCES `car` (`vin`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `brakes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `brakes` (
  `car_vin` VARCHAR(45) NOT NULL,
  `type` VARCHAR(45) NULL,
  `brand` VARCHAR(45) NULL,
  INDEX `car_vin_idx` (`car_vin` ASC),
  CONSTRAINT `brakes_vin`
    FOREIGN KEY (`car_vin`)
    REFERENCES `car` (`vin`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
