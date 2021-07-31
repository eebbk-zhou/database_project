insert into Bank VALUES('Kent666888', 'Kent Start Bank');


insert into Branch values ('111', 'Kent Star Bank South Branch', '123 Water Street, Kent, Ohio', 'Kent666888');
insert into Branch values ('222', 'Kent Star Bank East Branch', '278 Morris Street, Kent, Ohio', 'Kent666888');
insert into Branch values ('333', 'Kent Star Bank North Branch', '728 Lake Street, Kent, Ohio', 'Kent666888');
insert into Branch values ('444', 'Kent Star Bank West Branch', '999 Main Street, Kent, Ohio', 'Kent666888');

insert into Login values ('jamesadams', 'jamesadams');
insert into Login values ('robertbaker','robertbaker');
insert into Login values ('johnclark', 'johnclark');
insert into Login values ('michaeldavis','michaeldavis');
insert into Login values ('williamevans', 'williamevans');
insert into Login values ('davidfrank', 'davidfrank');
insert into Login values ('richardhills', 'richardhills');
insert into Login values ('josephirwin', 'josephirwin');
insert into Login values ('thomasjones', 'thomasjones');
insert into Login values ('charlesklein', 'charlesklein');
insert into Login values ('christopherlopez', 'christopherlopez');
insert into Login values ('daniemason', 'daniemason');

insert into Customer VALUES (null, 'James Adams', 'james.adams@gmail.com', 'SGT Miranda McAnderson 6543 N 9th Street APO,', '1236667987','jamesadams');

insert into Customer VALUES (null, 'Robert Baker', 'robert.baker@gmail.com', 'Celeste Slater 606-3727 Ullamcorper. Street Roseville NH 11523', '1239872637','robertbaker');

insert into Customer VALUES (null, 'John Clark', 'john.clark@gmail.com', 'Theodore Lowe Ap #867-859 Sit Rd. Azusa New York 39531', '1249872838','johnclark');

insert into Customer VALUES (null, 'Michael Davis', 'michael.davis@gmail.com', 'Calista Wise 7292 Dictum Av. San Antonio MI 47096', '1239891234','michaeldavis');

insert into Customer VALUES (null, 'William Evans', 'william.evans@gmail.com', 'Kyla Olsen Ap #651-8679 Sodales Av. Tamuning PA 10855', '8894312234','williamevans');

insert into Customer VALUES (null, 'David Frank', 'david.frank@gmail.com', 'Forrest Ray 191-103 Integer Rd. Corona New Mexico 08219', '1458539834','davidfrank');

insert into Customer VALUES (null, 'Richard Hills', 'richard.hills@gmail.com', 'Hiroko Potter P.O. Box 887 2508 Dolor. Av. Muskegon KY 12482', '9873541234','richardhills');

insert into Customer VALUES (null, 'Joseph Irwin', 'joseph.irwin@gmail.com', 'Nyssa Vazquez 511-5762 At Rd. Chelsea MI 67708', '7831459878','josephirwin');

insert into Customer VALUES (null, 'Thomas Jones', 'thomas.jones@gmail.com', 'Lawrence Moreno 935-9940 Tortor. Street Santa Rosa MN 98804', '1248971234','thomasjones');

insert into Customer VALUES (null, 'Charles Klein', 'charles.klein@gmail.com', 'Ina Moran P.O. Box 929 4189 Nunc Road Lebanon KY 69409', '8886661424','charlesklein');

insert into Customer VALUES (null, 'Christopher Lopez', 'christopher.lopez@gmail.com', 'Aaron Hawkins 5587 Nunc. Avenue Erie Rhode Island 24975', '1245125674','christopherlopez');

insert into Customer VALUES (null, 'Daniel Mason', 'danie.mason@gmail.com', 'Hedy Greene Ap #696-3279 Viverra. Avenue Latrobe DE 38100', '5673341234','daniemason');

insert into Account values (Set_Account_number(), 'Checking accounts', '1000', 1, '111', 'jamesadams');
insert into Account values (Set_Account_number(), 'Savings accounts', '2424525', 2, '111', 'robertbaker');
insert into Account values (Set_Account_number(), 'Money market accounts', '232223', 3, '111', 'johnclark');
insert into Account values (Set_Account_number(), 'Brokerage accounts', '412231', 4, '444','michaeldavis');
insert into Account values (Set_Account_number(), 'Money market accounts', '757859', 5, '222', 'williamevans');
insert into Account values (Set_Account_number(), 'Checking accounts', '2231', 6, '222', 'davidfrank');
insert into Account values (Set_Account_number(), 'Brokerage accounts', '588321', 7, '444', 'richardhills');
insert into Account values (Set_Account_number(), 'Savings accounts', '67634', 8, '222', 'josephirwin');
insert into Account values (Set_Account_number(), 'Money market accounts', '311', 9, '333', 'thomasjones');
insert into Account values (Set_Account_number(), 'Brokerage accounts', '543344', 10, '333', 'charlesklein');
insert into Account values (Set_Account_number(), 'Checking accounts', '88998', 11, '333', 'christopherlopez');
insert into Account values (Set_Account_number(), 'Savings accounts', '997334', 12, '444', 'daniemason');


insert into Loan values (Set_Loan_id(), null, '0', null, null, '111', 1);
insert into Loan values (Set_Loan_id(), 'Car Loans', '100000', '2019-10-3', '2021-10-3', '111', 2);
insert into Loan values (Set_Loan_id(), null, '0', null, null, '111', 3);
insert into Loan values (Set_Loan_id(), 'Home Loans', '30000', '2019-10-3', '2021-10-3', '444', 4);
insert into Loan values (Set_Loan_id(), null, '0', null, null, '222', 5);
insert into Loan values (Set_Loan_id(), 'Home Loans', '44000', '2019-10-3', '2021-10-3', '222', 6);
insert into Loan values (Set_Loan_id(), null, '0', null, null, '444', 7);
insert into Loan values (Set_Loan_id(), 'Small Business Loans', '90000', '2019-10-3', '2021-10-3', '222', 8);
insert into Loan values (Set_Loan_id(), 'Small Business Loans', '300000', '2019-10-3', '2021-10-3', '333', 9);
insert into Loan values (Set_Loan_id(), null, '0', null, null, '333', 10);
insert into Loan values (Set_Loan_id(), 'Car Loans', '100000', '2019-10-3', '2021-10-3', '333', 11);
insert into Loan values (Set_Loan_id(), null, '0', null, null, '444', 12);
