create table  patients (
    id INT UNSIGNED AUTO_INCREMENT,
    name VARCHAR(64),
    email VARCHAR(32),
    phoneNumber  VARCHAR(256),
    address VARCHAR(256),
    medicalCondition VARCHAR(256),
    bloodType VARCHAR(32),
    
    CONSTRAINT PRIMARY KEY(id)
);

CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT,
    email VARCHAR(64),
    password VARCHAR(256),
    CONSTRAINT PRIMARY KEY(id)
);