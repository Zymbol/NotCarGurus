-- ExpensiveVehicles (ONE TABLE VIEW)
CREATE VIEW ExpensiveVehicles AS 
SELECT Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage 
FROM Vehicle 
WHERE Price > 50000
ORDER BY Price DESC;


-- ReccentOrders (TWO TABLE VIEW) 
CREATE VIEW RecentOrders AS 
Select c.Account_ID, c.f_name, c.l_name, o.Order_ID, o.Order_Date, o.VIN 
FROM Customer c
JOIN Orders o on c.Account_ID=o.Account_ID 
WHERE Order_Date BETWEEN '2019-01-08' AND '2020-08-24';

-- VehicleAtWarehouse (THREE TABLE VIEW)
CREATE VIEW VehicleAtWarehouse AS 
SELECT v.Make, v.Model, v.Color, v.Wear, v.Year, v.Price, v.VIN, v.Image, v.Mileage, h.W_ID, w.W_Address, h.Arrival_Date 
FROM Vehicle v 
JOIN Has h ON v.VIN=h.VIN 
JOIN Warehouse w ON h.W_ID=w.W_ID;

-- AffordableVehicles (FOUR TABLE VIEW)
CREATE VIEW AffordableVehicles AS 
SELECT Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage 
FROM Vehicle 
WHERE Price <= 50000
ORDER BY Price ASC;