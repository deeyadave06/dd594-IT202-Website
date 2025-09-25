-- Deeya Dave
-- October 3, 2025
-- IT-202-003 Internet Applications
-- Phase 1 Assignment: Login and Logout
-- dd594@njit.edu
SHOW DATABASES;
USE dd594;
CREATE TABLE CoffeeManagers (
 CoffeeManagerID  INT(11)        NOT NULL   AUTO_INCREMENT,
 emailAddress        VARCHAR(255)   NOT NULL   UNIQUE,
 password            VARCHAR(64)    NOT NULL,
 pronouns            VARCHAR(60)    NOT NULL,
 firstName           VARCHAR(60)    NOT NULL,
 lastName            VARCHAR(60)    NOT NULL,
 DateTimeCreated     TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 DateTimeUpdated     TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (CoffeeManagerID)
);
SHOW TABLES;
SHOW CREATE TABLE CoffeeManagers;
DESCRIBE CoffeeManagers;
INSERT INTO CoffeeManagers (emailAddress, password, pronouns, firstName, lastName)
VALUES
('john@coffee.com', SHA2('StrongP@ssword!', 256), 'He/Him', 'John', 'Doe'),
('jane@coffee.com', SHA2('L0ngPass123', 256), 'She/Her', 'Jane', 'Doe'),
('deeya@coffee.com', SHA2('myL0ngP@ssword', 256), 'She/Her', 'Deeya', 'Dave');
