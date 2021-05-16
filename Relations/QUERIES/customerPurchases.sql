
DELIMITER // 
CREATE PROCEDURE customerPurchases (Username VARCHAR(25))
BEGIN
    SELECT C.*,V.*, O.Order_ID 
    FROM Customer C      
    JOIN Orders O on C.Account_ID = O.Account_ID     
    JOIN Vehicle V on V.VIN = O.VIN     
    WHERE C.Username = Username ;
END;
//
DELIMITER ;