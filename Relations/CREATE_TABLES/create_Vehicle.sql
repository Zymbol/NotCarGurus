DROP TABLE IF EXISTS Vehicle;
CREATE TABLE Vehicle
(
    Make VARCHAR(255) NOT NULL,
    Model VARCHAR(255) NOT NULL,
    Color VARCHAR(255) NOT NULL,
    Wear VARCHAR(255) NOT NULL,
    Year YEAR NOT NULL,
    Price INT UNSIGNED  NOT NULL,
    VIN VARCHAR(255) NOT NULL PRIMARY KEY,
    Image VARCHAR(255) NOT NULL,
    Mileage INT NOT NULL, 
    LINK VARCHAR (255) 
);
        
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Ford", "Raptor", "Gray", "Fair", "2019", 62044, "4T1BK1EB6FU752527", "./images/frd_rptr.jpg", 64463, "./ford_raptor.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Lexus", "RX-350", "White", "Excellent", "2020", 38054, "19UUA56642A233157", "./images/lxs_350.jpg", 98088, "./lexus_350.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Ford", "Aerostar", "Red", "Good", "1992", 2330, "3C63D3KL9CG622193", "./images/frd_aero.jpg", 144160, "./ford_aerostar.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Bentley", "Continental", "Purple", "Good", "2007", 98000, "4USBU33576L116903", "./images/bntly_cnt.jpg", 133610, "./bentley_continental.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Toyota", "RAV4", "Black", "Fair", "2019", 45994, "WAUVFAFH9BN864684", "./images/yota_rav4.jpg", 16926, "./toyota_rav4.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Cadillac", "CTS", "Silver", "Fair", "2014", 7055, "4T1BK3DB0BU135535", "./images/caddy_cts.jpg", 34761, "./cadillac_cts.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Plymouth", "Laser", "Red", "Excellent", "1990", 1666, "1GYEK63N85R655109", "./images/plym_laser.jpg", 216117, "./plymout_laser.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Volvo", "S60", "Blue", "Good", "2020", 78005, "JTHFE2C29E2056503", "./images/vlvo_v40.jpg", 252197, "./volvo_v40.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Volkswagen", "GTI", "Green", "Good", "2018", 23884, "1GD312CG5EF086369", "./images/vw_gti.jpg", 31003, "./vw_gti.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("GMC", "Sierra AT4", "Black", "Fair", "2020", 65000, "WDDLJ7DB5CA308462", "./images/gmc_at4.jpg", 1502, "./gmc_at4.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Chrysler", "300", "Green", "Poor", "2018", 19554, "2T1BU4EEXBC031824", "./images/chrslr_300.jpg", 77985, "./chrysler_300.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Lotus", "Evora", "Chrome", "Poor", "2011", 52005, "1G6KE57Y33U544933", "./images/lotus_elise.jpg", 20020, "./lotus_elise.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Audi", "S4", "Blue", "Good", "2021", 59999, "19UUA56731A099829", "./images/audi_s4.jpg", 194255, "./audi_s4.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Chevrolet", "HHR", "Orange", "Excellent", "2007", 2599, "WAUDT48H96K468796", "./images/chvy_hhr.jpg", 184455, "./chevy_hhr.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Chevrolet", "Cruz", "Red", "Fair", "2012", 6366, "KNADH4A36B6353074", "./images/chvy_cruz.jpg", 191387, "./chevy_cruz.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Land Rover", "Range Rover", "Blue", "Poor", "2019", 78999, "WA1AV94L87D107258", "./images/rng_rvr.jpg", 151157, "./range_rover.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Mitsubishi", "Diamante", "White", "Fair", "1997", 3999, "1GTN1TEH1EZ047219", "./images/mts_diam.jpg", 285005, "./mitsubishi_diam.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Honda", "Civic", "Silver", "Fair", "1999", 2599, "YV1952AS5E1470301", "./images/honda_civic.jpg", 270630, "./honda_civic.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Scion", "tC", "Gray", "Good", "2007", 4399, "WBA3A5G57CN709795", "./images/scion_tc.jpg", 106005, "./scion_tc.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Lincoln", "Navigator", "Blue", "Excellent", "2010", 18936, "5NPDH4AE6FH449495", "./images/lin_nav.jpg", 165314, "./lincoln_navigator.php");
--new cars to delete or update
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Acura", "RLX", "Silver", "Excellent", "2018", 29698, "5NPDH4BR6FH329495", "./images/acura_rlx.jpg", 164, "./acura_rlx.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Dodge", "Charger", "Red", "Good", "2019", 23936, "GNPDH4AF6FH449495", "./images/dodge_charger.jpg", 15914, "./dodge_charger.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Volkswagen", "Atlas", "Blue", "Excellent", "2018", 18936, "5NPDREEE6FH449495", "./images/vw_atlas.jpg", 11314, "./vw_atlas.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Toyota", "Yaris", "Red", "Poor", "2007", 3936, "07PDH4AE6FH449495", "./images/toyota_yaris.jpg", 187314, "./toyota_yaris.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("BMW", "i8", "Silver", "Good", "2020", 148936, "5NPDH4AE6FH549495", "./images/bmw_i8.jpg", 1314, "./bmw_i8.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Honda", "CBR600 RR", "Red", "Excellent", "2008", 100036, "5NP516AE6FH449145", "./images/honda_cbr.jpg", 14500, "./honda_cbr.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Subaru", "Impreza WRX", "Blue", "Fair", "2015", 14936, "5NPD96AE6FH449419", "./images/subaru_wrx.jpg", 25049, "./subaru_wrx.php");
INSERT INTO Vehicle (Make, Model, Color, Wear, Year, Price, VIN, Image, Mileage, LINK) VALUES ("Tesla", "Cybertruck", "Steel", "Excellent", "2021", 50100, "5NRPD1AE6FH4494RE", "./images/cyber_truck.jpg", 0, "./tesla_cybertruck.php");
