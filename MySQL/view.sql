
CREATE VIEW details AS
	SELECT id, fname, lname, phone, vin, make, model, year, miles, 
		body.type AS bodyType, color, displacement, configuration, fuelSystem, 
		transmission.type AS transmissionType, gearbox, drivetrain, brakes.type AS brakesType, 
		brakes.brand AS brakesBrand, tires.brand AS tiresBrand, season
	FROM owner
	INNER JOIN car
	ON car.owner_id = owner.id
	INNER JOIN body
	ON car.vin = body.car_vin
	INNER JOIN engine
	ON car.vin = engine.car_vin
	INNER JOIN transmission
	ON car.vin = transmission.car_vin
	INNER JOIN brakes
	ON car.vin = brakes.car_vin
	INNER JOIN tires
	ON car.vin = tires.car_vin