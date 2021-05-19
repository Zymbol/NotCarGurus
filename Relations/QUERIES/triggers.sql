--trigger to delete a vehicle from the db
-----------------------------------------
DELIMITER //
	CREATE TRIGGER delete_vehicle
		BEFORE DELETE
		ON Vehicle FOR EACH ROW
	BEGIN
		DELETE FROM VIN WHERE Vehicle.VIN = OLD.VIN;
		
	END
//
DELIMITER; 

--trigger to modify vehicle info in the db
DELIMITER //
	CREATE TRIGGER update_vehicle
		AFTER  UPDATE
		ON Vehicle FOR EACH ROW
	BEGIN
		INSERT INTO updates(Make, Model, Color,  Wear, Year, Price, VIN, Image, Mileage, LINK)
VALUES ();
END;
//
DELIMITER;

--trigger to insert new vehicle into the db
-------------------------------------------
DELIMITER //
	CREATE TRIGGER insert_vehicle
		AFTER  INSERT
		ON Vehicle FOR EACH ROW
	BEGIN
		INSERT INTO Vehicle(Make, Model, Color, Wear, Year, Price, VIN, NULL, Mileage)
	VALUES (‘Toyota’, ‘Yaris’, ‘Red’,  ‘Poor’, 2007, 3936, 07PDH4AE6FH449495, NULL, 187314, "./toyota_yaris.php")

	END; 
//
DELIMITER;


