
DROP  DATABASE City_State;
CREATE DATABASE City_State;
USE             City_State;

CREATE TABLE States (
    StateId   INT PRIMARY KEY AUTO_INCREMENT,
    StateName VARCHAR(255) NOT NULL
);

SELECT * FROM States;

CREATE TABLE Cities (
    CityId    INT PRIMARY KEY AUTO_INCREMENT,
    CityName  VARCHAR(255) NOT NULL,

    CityState INT NOT NULL,

    FOREIGN KEY (CityState) REFERENCES States(StateId)
);

SELECT * FROM Cities;
