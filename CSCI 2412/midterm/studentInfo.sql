create database midterm;
use midterm;

create table User(
	primaryKey int auto_increment primary key,
    firstName varchar(255),
    lastName varchar(255),
    isStudent boolean
);

insert into User(firstName, lastName, isStudent)
	values
    ("Andrei", "Dalton", true),
    ("Barack", "Obama", false);
    
    select * from User where isStudent=true;