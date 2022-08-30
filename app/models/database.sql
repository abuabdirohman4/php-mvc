SHOW DATABASES;

CREATE DATABASE php_mvc;

SHOW DATABASES;

USE php_mvc;

CREATE TABLE mahasiswa (
    id      INT PRIMARY KEY AUTO_INCREMENT,
    nama    VARCHAR(100),
    nim     CHAR(10),
    email   VARCHAR(100),
    jurusan VARCHAR(100)
);

SHOW TABLES;

DESCRIBE mahasiswa;

INSERT INTO mahasiswa VALUES (NULL, 'Abu Abdirohman', '1301164354', 'abuabdirohman4@gmail.com', 'Informatika');
INSERT INTO mahasiswa VALUES (NULL, 'Azati Hanani', '1301164123', 'hanani@gmail.com', 'Bisnis');
INSERT INTO mahasiswa (nama, nrp, email, jurusan, gambar) VALUES ('Azati Hanani', '1301164123', 'hanani@gmail.com', 'Bisnis');

SELECT * FROM mahasiswa;
SELECT nrp FROM mahasiswa;
SELECT nrp, nama FROM mahasiswa;
SELECT * FROM mahasiswa WHERE nrp = '1301164354';

UPDATE mahasiswa SET jurusan = 'Teknik Informatika' WHERE id = 2;

DELETE FROM mahasiswa WHERE id = 3;

DROP TABLE mahasiswa;

DROP DATABASE php_basic

ALTER TABLE mahasiswa RENAME COLUMN nrp TO nim;