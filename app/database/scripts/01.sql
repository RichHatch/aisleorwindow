CREATE TABLE IF NOT EXISTS user (
    user_id             INT(10) NOT NULL auto_increment,
    first_name          VARCHAR(200) NOT NULL,
    last_name           VARCHAR(200) NOT NULL,
    email               VARCHAR(200) NOT NULL,
    confirmation_code   VARCHAR(10) NOT NULL,
    flight_number       INT(10) NOT NULL,
    created             DATETIME NOT NULL,
    modified            DATETIME NOT NULL,
    PRIMARY KEY (user_id),
    UNIQUE KEY confirmation_code (confirmation_code)
) ENGINE=InnoDB;
