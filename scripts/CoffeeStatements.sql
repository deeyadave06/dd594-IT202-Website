-- Deeya Dave
-- October 31, 2025
-- IT-202-003 Internet Applications
-- Phase 3 Assignment: HTML Website Layout
-- dd594@njit.edu

-- Items Table
CREATE TABLE Coffees (
CoffeeID               INT(11)        NOT NULL,
CoffeeCode             VARCHAR(10)    NOT NULL   UNIQUE,
CoffeeName             VARCHAR(255)   NOT NULL,
CoffeeDescription      TEXT           NOT NULL,
CoffeeOrigin           VARCHAR(255)   NOT NULL,
CoffeeRoastLevel       VARCHAR(255)   NOT NULL,
CoffeeTypeID           INT(11)        NOT NULL,
CoffeeWholesalePrice   DECIMAL(10,2)  NOT NULL,
CoffeeListPrice        DECIMAL(10,2)  NOT NULL,
DateTimeCreated     TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
DateTimeUpdated     TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY ( CoffeeID )
);
-- INSERT INTO Coffees
INSERT INTO Coffees (CoffeeID, CoffeeCode, CoffeeName, CoffeeDescription, CoffeeOrigin, CoffeeRoastLevel, CoffeeTypeID, CoffeeWholesalePrice, CoffeeListPrice)
VALUES
(1001, 'ESP001', 'Italian Espresso', 'Bold and intense espresso blend. Nutty & bitter-sweet flavor.', 'Italy', 'Dark', 100, 8.99, 12.99),
(1002, 'ESP002', 'Blonde Espresso', 'Mild espresso made from lightly roasted beans. Popularized by Starbucks.', 'Latin America', 'Light', 100, 8.50, 12.00),
(1003, 'ESP003', 'Americano', 'Espresso diluted with hot water. Originated from World War II.', 'Italy', 'Medium', 100, 10.00, 12.00),
(1004, 'ESP004', 'Ristretto', 'Restricted espresso made with less water. Sweeter and extracted quicker.', 'Italy', 'Dark', 100, 8.00, 12.00),
(1005, 'ESP005', 'Doppio', 'Double strength espresso. Larger and higher caffeine count.', 'Italy', 'Medium', 100, 9.99, 15.99),

(2001, 'CLD001', 'Classic Cold Brew', 'Smooth and less acidic. Cold pressed for hours.', 'USA', 'Medium', 200, 9.00, 11.99),
(2002, 'CLD002', 'Vanilla Cold Brew', 'Infused with vanilla flavor. Lightly smooth and sweet.', 'USA', 'Medium', 200, 10.50, 13.00),
(2003, 'CLD003', 'Nitro Cold Brew', 'Charged with nitrogen for creaminess. Has a foamy head, similar to beer.', 'USA', 'Dark', 200, 11.00, 14.50),
(2004, 'CLD004', 'Mocha Cold Brew', 'Cold brew with chocolate flavor. Smooth and rich treat.', 'Canada', 'Medium', 200, 8.99, 12.50),
(2005, 'CLD005', 'Vietnamese Cold Brew', 'Sweetened and creamy cold brew. Made with condensed milk.', 'Vietnam', 'Dark', 200, 14.50, 17.00),

(3001, 'LAT001', 'Iced Latte', 'Cold coffee with extra milk. 2 parts milk to 1 part espresso.', 'Italy', 'Medium', 300, 7.50, 10.50),
(3002, 'LAT002', 'Vanilla Latte', 'Latte with vanilla syrup. Lightly sweet and creamy.', 'USA', 'Medium', 300, 8.00, 11.00),
(3003, 'LAT003', 'Caramel Latte', 'Sweet latte with caramel syrup. Rich, buttery flavor.', 'USA', 'Medium', 300, 8.00, 11.00),
(3004, 'LAT004', 'Pumpkin Spice Latte', 'Seasonal latte with pumpkin spices. Introduced by Starbucks.', 'USA', 'Light', 300, 9.25, 13.50),
(3005, 'LAT005', 'Hazelnut Latte', 'Latte with hazelnut flavoring. Tastes good served hot or iced.', 'Turkey', 'Medium', 300, 9.00, 12.00);

SELECT * from Coffees;
SELECT * FROM Coffees JOIN CoffeeTypes ON Coffees.CoffeeTypeID = CoffeeTypes.CoffeeTypeID;