USE library;
/*
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nosaukums VARCHAR(55) NOT NULL,
    autors VARCHAR(100) NOT NULL,
    gads INT NOT NULL,
    pieejamiba BOOLEAN NOT NULL DEFAULT TRUE
);


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vards VARCHAR(55) NOT NULL,
    parole VARCHAR(255) NOT NULL,
    isAdmin BOOLEAN NOT NULL DEFAULT FALSE
);

INSERT INTO books (nosaukums, autors, gads, pieejamiba)
VALUES ('Gramata1', 'Autors1', 1992, true);

INSERT INTO books (nosaukums, autors, gads, pieejamiba)
VALUES ('Gramata2', 'Autors2', 2012, true);

*/
SELECT * FROM books;