mysql -u root -p

create database hq;
use hq;

/*
    pass column in table is 96 long
    32 + 64 = 96
    salt is 32 chars long
    hash is 64 chars long
*/

create table User (
    user_ID int auto_increment primary key not null,
    user_name varchar(20) not null,
    pass char(96) not null,
    controller_cfg int not null default 1,
    admin boolean not null default false,
    creation_date timestamp default current_timestamp,
    expiration_date timestamp
); 
create table Copter (
    copter_ID int auto_increment primary key not null,
    copter_IP varchar(45),
    controlled_by varchar,
    connected boolean not null default false
);
create table SessionHistory (
    session_ID int auto_increment primary key not null,
    datetime_start timestamp default current_timestamp not null,
    datetime_stop timestamp,
    user_ID int not null,
    user_IP varchar(45) not null,
    copter_ID int not null,
    
    foreign key (user_ID) references User (user_ID),
    foreign key (copter_ID) references Copter (copter_ID)
);

create table input (
	id int(1) auto_increment primary key not null,
	x1 double,
	y1 double,
	x2 double,
	y2 double,
	arm boolean
);

SET GLOBAL event_scheduler = ON;

CREATE EVENT userExpiration
ON SCHEDULE EVERY 1 MINUTE
ON COMPLETION PRESERVE
COMMENT 'Deletes expired users'
DO
    DELETE FROM User WHERE expiration_date < NOW() and expiration_date != '0000-00-00 00:00:00';


//20-10-2014
alter table User drop pass_salt;
alter table User change pass_hash pass char(96) not null;

//22-10-2014 -!
alter table User change controller_cfg controller_cfg int(1);

//26-10-2014 -!
ny userExpiration, använd den utbytta

//10-12-2014
update copter set controlled_by = '' where copter_ID = 1;