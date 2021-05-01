DROP DATABASE IF EXISTS listing_app_db;
CREATE DATABASE IF NOT EXISTS listing_app_db;

CREATE TABLE IF NOT EXISTS users(
    id INT(11) AUTO_INCREMENT,
    name VARCHAR(255),
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS advertisements(
    id INT(11) AUTO_INCREMENT,
    userid INT(11),
    title VARCHAR(255),
    PRIMARY KEY (id),
    FOREIGN KEY (userid) REFERENCES users(id)
);

INSERT INTO users(name) VALUES("user1");
INSERT INTO users(name) VALUES("user2");
INSERT INTO users(name) VALUES("user3");
INSERT INTO users(name) VALUES("user4");
INSERT INTO users(name) VALUES("user5");

INSERT INTO advertisements(title, userid) 
    VALUES("advertisement1", (SELECT id FROM users WHERE name='user1'));
INSERT INTO advertisements(title, userid) 
    VALUES("advertisement2", (SELECT id FROM users WHERE name='user1'));
INSERT INTO advertisements(title, userid) 
    VALUES("advertisement3", (SELECT id FROM users WHERE name='user2'));
INSERT INTO advertisements(title, userid) 
    VALUES("advertisement4", (SELECT id FROM users WHERE name='user2'));
INSERT INTO advertisements(title, userid) 
    VALUES("advertisement5", (SELECT id FROM users WHERE name='user3'));
INSERT INTO advertisements(title, userid) 
    VALUES("advertisement6", (SELECT id FROM users WHERE name='user3'));
INSERT INTO advertisements(title, userid) 
    VALUES("advertisement7", (SELECT id FROM users WHERE name='user4'));
INSERT INTO advertisements(title, userid) 
    VALUES("advertisement8", (SELECT id FROM users WHERE name='user4'));
INSERT INTO advertisements(title, userid) 
    VALUES("advertisement9", (SELECT id FROM users WHERE name='user5'));
INSERT INTO advertisements(title, userid) 
    VALUES("advertisement10", (SELECT id FROM users WHERE name='user5'));