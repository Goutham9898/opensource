CREATE DATABASE IF NOT EXISTS colleges;
CREATE TABLE students
(
    id varchar(255) NOT NULL,
    first_name varchar(255) NOT NULL,
    last_name varchar(255) NOT NULL,
    email varchar(255) NOT NULL
)