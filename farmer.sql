CREATE TABLE Farmer (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,    
    phoneno VARCHAR(15) NOT NULL,    
    dateofbirth DATE NOT NULL,         
    address TEXT NOT NULL,             
    password VARCHAR(255) NOT NULL     -- Farmer's password (hashed for security)
);
