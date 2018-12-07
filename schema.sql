CREATE TABLE users (
    id         INTEGER      PRIMARY KEY,
    username   STRING (20)  UNIQUE
                            NOT NULL,
    password   STRING (180) NOT NULL,
    firstname  STRING (20)  NOT NULL,
    middlename STRING (20)  NOT NULL,
    familyname STRING (20)  NOT NULL,
    role       STRING (10)  NOT NULL,
    gender     BOOLEAN      NOT NULL,
    age        INTEGER      NOT NULL
);