
DELIMITER //

CREATE FUNCTION	classify (year INT)
	RETURNS VARCHAR(45)
	
	BEGIN
		DECLARE class VARCHAR(45);

		IF year <= (SELECT YEAR(CURDATE())-100) THEN 
			SET class := 'Antique';
		ELSEIF year >= (SELECT YEAR(CURDATE())-99) AND year <= (SELECT YEAR(CURDATE())-50) THEN
			SET class := 'Pre-Antique';
		ELSEIF year >= (SELECT YEAR(CURDATE())-49) AND year <= (SELECT YEAR(CURDATE())-30) THEN
			SET class := 'Classic';
		ELSEIF year >= (SELECT YEAR(CURDATE())-29) AND year <= (SELECT YEAR(CURDATE())-15) THEN
			SET class := 'Modern Classic';
		ELSE SET class := "Modern";
		END IF;

		RETURN class;
	END //

DELIMITER ;