-- Categories Table

CREATE TABLE CoffeeTypes (
CoffeeTypeID          INT(11)        NOT NULL,
CoffeeTypeCode        VARCHAR(255)   NOT NULL   UNIQUE,
CoffeeTypeName        VARCHAR(255)   NOT NULL,
CoffeeTypeAisleNumber INT(11)        NOT NULL,
DateTimeCreated       TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
DateTimeUpdated       TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY ( CoffeeTypeID )
);

INSERT INTO CoffeeTypes (CoffeeTypeID, CoffeeTypeCode, CoffeeTypeName, CoffeeTypeAisleNumber)
VALUES 
(100, 'ESP', 'Espresso', 1),
(200, 'CLD', 'Cold Brew', 2),
(300, 'LAT', 'Latte', 3);

SELECT * from CoffeeTypes;