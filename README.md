# CI4 API

Buat databse dengan nama kasku_api

lalu buat tabel dengan perintah dibawah

CREATE table member ( 
          id INT NOT NULL AUTO_INCREMENT, 
		  nama VARCHAR(255) NOT NULL,
		  email VARCHAR(255) NOT NULL,
	      password VARCHAR(255) NOT NULL,
		  PRIMARY KEY(id) 
);

CREATE table member_token (
    id INT NOT NULL AUTO_INCREMENT,
    member_id INT NOT NULL,
    auth_key VARCHAR(255) NOT NULL,
    FOREIGN KEY (member_id) REFERENCES member(id) on update cascade on delete no action,
    PRIMARY KEY(id) 
); 

CREATE table transaksi (
    id INT NOT NULL AUTO_INCREMENT,
    kode_transaksi VARCHAR(255) NOT NULL,
    nama_transaksi VARCHAR(255) NOT NULL,
    nominal INT NOT NULL,
    PRIMARY KEY(id) 
);
