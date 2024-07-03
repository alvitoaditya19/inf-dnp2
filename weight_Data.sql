CREATE DATABASE weight_data;
USE weight_data;

CREATE TABLE scale_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    weight FLOAT,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
