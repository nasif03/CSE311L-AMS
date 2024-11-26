CREATE TABLE marketplace (
    id INT AUTO_INCREMENT PRIMARY KEY,     
    product_name VARCHAR(100) NOT NULL,    
    product_category VARCHAR(50) NOT NULL, 
    unit VARCHAR(20) NOT NULL,             
    price DECIMAL(10, 2) NOT NULL,         
    price_change DECIMAL(10, 2) DEFAULT 0
);
