create table Bank(
Code varchar(20) primary key,
Name varchar(40) 
);


create table Login(
User_name varchar(40) primary key,
Password varchar(40)

);

create table Branch(
    Branch_id int primary key,
    Branch_name varchar(40),
    Branch_address varchar(100),
    Code varchar(20),
    foreign key (Code) references Bank(Code)

);

create table Customer(
    Customer_id mediumint not null AUTO_INCREMENT primary key,
Customer_name varchar(50),
    Customer_email varchar(50),
    Customer_address varchar(100),
    Customer_phone varchar(20),
    User_name varchar(40),
    foreign key (User_name) references Login(User_name)

);


create table Account(
    Account_Number int primary key,
    Account_type varchar(50),
    Balance int,
    Customer_id mediumint,
    Branch_id int,
    foreign key (Customer_id) references Customer(Customer_id),
    foreign key (Branch_id) references Branch(Branch_id),
    Account_Password varchar(50)
);


create table Loan(
    Loan_id int primary key,
    Loan_type varchar(50),
    Loan_amount int,
    Loan_date date,
    Repayment_date date,
    Branch_id int,
    Customer_id mediumint not null AUTO_INCREMENT,
    foreign key (Customer_id) references Customer(Customer_id),
    foreign key (Branch_id) references Branch(Branch_id)

);


DELIMITER //
CREATE FUNCTION Set_Account_number()
RETURNS int 
BEGIN
   DECLARE random_num INT;
   declare max_number_limit int;
   

   SET random_num = rand()*(9999999 - 1000000) + 1000000;
   set max_number_limit = 9999999 - 1000000 + 1;
   
   label1: WHILE ((random_num in (select Account_Number from Account)) and (max_number_limit != (select count(Account_Number) from Account))) DO
     SET random_num = rand()*(9999999 - 1000000) + 1000000;
   END WHILE label1;
   


   RETURN random_num;

END; //
DELIMITER ;


DELIMITER //
CREATE FUNCTION Set_Loan_id()
RETURNS int 
BEGIN
   DECLARE random_num INT;
   declare max_number_limit int;
   

   SET random_num = rand()*(9999999 - 1000000) + 1000000;
   set max_number_limit = 9999999 - 1000000 + 1;
   
   label1: WHILE ((random_num in (select Account_Number from Account)) and (max_number_limit != (select count(Account_Number) from Account))) DO
     SET random_num = rand()*(9999999 - 1000000) + 1000000;
   END WHILE label1;
   


   RETURN random_num;

END; //
DELIMITER ;
