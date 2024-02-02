CREATE DATABASE softball;

USE softball;
CREATE TABLE games
(
  id int auto_increment PRIMARY KEY,
  opponent varchar(255),
  site varchar(50),
  result char(1)
);

CREATE TABLE users 
(
    id int primary key auto_increment, 
    username varchar(255), 
    password varchar(255) 
);

-- insert a row into the users table for the administrator:
-- username = admin
-- password = pwd
INSERT INTO users (username, password) VALUES ('admin', '$2y$10$6EagpQz90eekX4cIlXjWdu/iCCo3jmSPrLmm9kJ/OVzbmwHaJZGzG');

INSERT into games (opponent, site, result) VALUES('North Georgia','Neutral','W');
INSERT into games (opponent, site, result) VALUES('Augusta University','Neutral','W');
INSERT into games (opponent, site, result) VALUES('Armstrong State','Neutral','W');
INSERT into games (opponent, site, result) VALUES('Columbus State','Away','W');
INSERT into games (opponent, site, result) VALUES('Spring Hill','Away','W');
INSERT into games (opponent, site, result) VALUES('Miles','Neutral','W');
INSERT into games (opponent, site, result) VALUES('Lindenwood','Neutral','W');
INSERT into games (opponent, site, result) VALUES('Midwestern State','Neutral','W');
INSERT into games (opponent, site, result) VALUES('Tuskegee','Neutral','W');
INSERT into games (opponent, site, result) VALUES('University of Mobile','Neutral','W');
INSERT into games (opponent, site, result) VALUES('Young Harris','Neutral','L');
INSERT into games (opponent, site, result) VALUES('Simon Fraser','Neutral','W');
INSERT into games (opponent, site, result) VALUES('Valdosta State','Home','W');
INSERT into games (opponent, site, result) VALUES('Valdosta State','Home','W');
INSERT into games (opponent, site, result) VALUES('Valdosta State','Home','L');
INSERT into games (opponent, site, result) VALUES('Stillman','Away','W');
INSERT into games (opponent, site, result) VALUES('Stillman','Away','W');
INSERT into games (opponent, site, result) VALUES('West Georgia','Home','W');
INSERT into games (opponent, site, result) VALUES('West Georgia','Home','W');
INSERT into games (opponent, site, result) VALUES('West Georgia','Home','L');
INSERT into games (opponent, site, result) VALUES('Truman State','Home','L');
INSERT into games (opponent, site, result) VALUES('Truman State','Home','W');
INSERT into games (opponent, site, result) VALUES('Shorter','Away','W');
INSERT into games (opponent, site, result) VALUES('Shorter','Away','W');
INSERT into games (opponent, site, result) VALUES('Shorter','Away','W');
INSERT into games (opponent, site, result) VALUES('West Florida','Home','W');
INSERT into games (opponent, site, result) VALUES('West Florida','Home','W');
INSERT into games (opponent, site, result) VALUES('West Florida','Home','W');
INSERT into games (opponent, site, result) VALUES('Montevallo','Away','W');
INSERT into games (opponent, site, result) VALUES('Montevallo','Away','W');
INSERT into games (opponent, site, result) VALUES('Lee','Away','W');
INSERT into games (opponent, site, result) VALUES('Lee','Away','W');
INSERT into games (opponent, site, result) VALUES('Lee','Away','W');
INSERT into games (opponent, site, result) VALUES('West Alabama','Away','W');
INSERT into games (opponent, site, result) VALUES('West Alabama','Away','W');
INSERT into games (opponent, site, result) VALUES('West Alabama','Away','W');
INSERT into games (opponent, site, result) VALUES('Delta State','Home','W');
INSERT into games (opponent, site, result) VALUES('Delta State','Home','W');
INSERT into games (opponent, site, result) VALUES('Delta State','Home','W');
INSERT into games (opponent, site, result) VALUES('UAH','Away','L');
INSERT into games (opponent, site, result) VALUES('UAH','Away','W');
INSERT into games (opponent, site, result) VALUES('UAH','Away','W');
INSERT into games (opponent, site, result) VALUES('Mississippi College','Home','W');
INSERT into games (opponent, site, result) VALUES('Mississippi College','Home','W');
INSERT into games (opponent, site, result) VALUES('Mississippi College','Home','W');
INSERT into games (opponent, site, result) VALUES('Union','Home','W');
INSERT into games (opponent, site, result) VALUES('Union','Home','W');
INSERT into games (opponent, site, result) VALUES('Union','Home','W');
INSERT into games (opponent, site, result) VALUES('Christian Brothers','Away','W');
INSERT into games (opponent, site, result) VALUES('Christian Brothers','Away','W');
INSERT into games (opponent, site, result) VALUES('Christian Brothers','Away','W');
