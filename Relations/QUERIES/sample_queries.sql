-- Sample Queries


-- Returns the VIN of the least expensive car.

SELECT VIN
FROM Vehicle 
WHERE Price = 
    (SELECT MIN(Price) FROM Vehicle);

-- Returns the Make, Model, and price 
SELECT * 
FROM Vehicle 
WHERE Price = (SELECT MAX(Price)) 
    AND Make = 'Toyota' AND Model ='RAV4';