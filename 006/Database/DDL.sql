
CREATE DATABASE Students;
USE             Students;

CREATE TABLE Students (
    StudentId   INT PRIMARY KEY AUTO_INCREMENT,
    StudentName VARCHAR(255) NOT NULL,
    StudentAge  INT          NOT NULL
);
