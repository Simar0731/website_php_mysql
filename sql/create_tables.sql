-- Create database if not exists
CREATE DATABASE IF NOT EXISTS ecommerce_db;

-- Switch to the newly created database
USE ecommerce_db;

-- Create products table
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255) NOT NULL,
    category VARCHAR(50) NOT NULL
);

-- Insert a sample product into the products table
INSERT INTO products (name, description, price, image, category) 
VALUES ('Laptop', 'High-performance laptop with SSD storage', 1200.00, 'laptop.jpg', 'electronics');
