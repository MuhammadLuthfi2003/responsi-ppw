use geminkdotcom;

CREATE TABLE games (
	id_game INT PRIMARY KEY,
    nama_game VARCHAR(100),
    developer_game VARCHAR(20),
    genre VARCHAR(20),
    tahun_rilis INT,
    harga INT
);

INSERT INTO games (
id_game,
nama_game,
developer_game,
genre,
tahun_rilis,
harga
)
VALUES
(1, 'Final Fantasy VI', 'Square Enix', 'JRPG', 1994, 120000),
(2, 'Ni No Kuni: Wrath Of The White Witch', 'Level-5', 'JRPG', 2011, 230000),
(3, 'Drakengard 3', 'Square Enix', 'Hack and Slash', 2014, 420000),
(4, 'Minecraft', 'Mojang', 'Sandbox', 2009, 85000);

CREATE TABLE usernames (
	user_id INT PRIMARY KEY,
	username VARCHAR(10),
    password VARCHAR(10)
);

INSERT INTO usernames (
user_id,
username,
password
)
VALUES 
(1, 'admin', '12345');

CREATE TABLE ordercust (
	order_id INT PRIMARY KEY AUTO_INCREMENT,
    cust_name VARCHAR(100),
    cust_email VARCHAR(50),
    cust_creditNum INT,
    cust_chosen VARCHAR(100),
    quantity INT,
    total_price INT
);

