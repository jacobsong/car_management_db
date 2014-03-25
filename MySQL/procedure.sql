
DELIMITER $$

CREATE PROCEDURE `add_car_vin` (IN vin VARCHAR(45))
BEGIN

	INSERT INTO body (car_vin) VALUES (vin);
	INSERT INTO engine (car_vin) VALUES (vin);
	INSERT INTO transmission (car_vin) VALUES (vin);
	INSERT INTO brakes (car_vin) VALUES (vin);
	INSERT INTO tires (car_vin) VALUES (vin);

END $$

DELIMITER ;