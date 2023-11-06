CREATE TABLE client_credentials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phonenumber INT UNIQUE,
    password VARCHAR(64)
);
