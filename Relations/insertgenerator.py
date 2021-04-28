import csv

tableName = "Customer"

with open('Customer.csv', 'r') as csvinput:
    reader = csv.reader(csvinput)
    firstLine = False
    with open('create_{0}.sql'.format(tableName), 'w') as sqloutput:
        createCommand = """
DROP TABLE IF EXISTS {0};
CREATE TABLE {0}
(
    Account_ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	F_name VARCHAR(255) NOT NULL,
    L_name VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
	Password VARCHAR(255) NOT NULL,
    Birthdate DATE NOT NULL,
    Address VARCHAR(255) NOT NULL,
    Username VARCHAR(255) NOT NULL UNIQUE
);
        """.format(tableName)

        sqloutput.write(createCommand + "\n")

        for row in reader:
            if (firstLine):
                firstLine = False
                continue
            sqloutput.write('INSERT INTO {0} (Account_ID, F_name, L_name, Email, Password, Birthdate, Address, Username) VALUES ({1}, "{2}", "{3}", "{4}", "{5}", {6}, "{7}", "{8}");\n'.format(tableName, row[0], row[1], row[2], row[3], row[4], row[5], row[6], row[7], row[8]))

print("Done")