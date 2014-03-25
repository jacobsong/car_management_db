DELIMITER //

CREATE TRIGGER addVins
AFTER INSERT ON car
    FOR EACH ROW
    BEGIN
    	CALL add_car_vin(NEW.vin);
    END;//

DELIMITER ;

