-- Create the database
CREATE DATABASE IF NOT EXISTS book_store;
USE book_store;

-- Create the book details table
CREATE TABLE IF NOT EXISTS bdetails (
    Sno INT AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(255) NOT NULL,
    Author VARCHAR(255) NOT NULL,
    Price DECIMAL(10,2) NOT NULL,
    Count INT NOT NULL
);

-- Create the sales table
CREATE TABLE IF NOT EXISTS sales (
    Sno INT AUTO_INCREMENT PRIMARY KEY,
    Date DATE NOT NULL,
    Title VARCHAR(255) NOT NULL,
    Quantity INT NOT NULL,
    Cost DECIMAL(10,2) NOT NULL
);