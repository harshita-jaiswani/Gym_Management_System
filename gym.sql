create table membership(      
membership_id varchar(4),      
membership_level varchar(2)  not null,      
date_created date not null,      
membership_rate decimal(7,2) not null,      
expiry_date date not null,
constraint p_mid primary key(membership_id)      
);

create table gymclass(     
class_id varchar(10),    
class_cost decimal(6,2)  not null,     
class_size integer(4)  not null,     
class_day varchar(20)  not null,    
class_time varchar(10)  not null ,
 constraint p_clid primary key(class_id)  
);

create table facility(   
facility_no varchar(5),   
max_facilitysize integer(4)  not null,   
condition_ varchar(20) not null,
 constraint p_fno primary key(facility_no)
);	

create table customers(   
customer_id varchar(20) ,   
dob date  not null,   
cus_name varchar(20) not null,   
gender varchar(10)  not null,   
address varchar(20) not null,   
phone_no varchar(10) not null,   
email_id varchar(20)  not null,   
aadhar_no varchar(12) not null,   
membership_id varchar(4) not null,    
class_id varchar(10),   
constraint cs_phone unique(phone_no), 
constraint cs_email unique(email_id), 
constraint cs_aadhar unique(aadhar_no),    
constraint cs_id primary key(customer_id),
constraint f_mid foreign key(membership_id) references membership(membership_id),   
constraint f_cid foreign key(class_id) references gymclass(class_id)   
);

create table staff(   
staff_id varchar(20),   
dob date  not null,   
st_name varchar(20) not null,   
gender varchar(10)  not null,
ssn varchar(10) unique,
designation varchar(20) not null,   
address varchar(20) not null,   
phone_no varchar(10) not null,   
email_id varchar(20)  not null,   
aadhar_no varchar(12)  not null, 
constraint st_phone unique(phone_no), 
constraint st_email unique(email_id), 
constraint st_aadhar unique(aadhar_no),
constraint st_id primary key(staff_id) 
);


create table nutrition_care(  
vitamins decimal(5,2)  not null,  
carbohydrates decimal(7,2) not null,  
proteins decimal(7,2) not null,  
calories decimal(10,2) not null,  
customer_id varchar(20),  
staff_id varchar(20),  
constraint p_csid primary key(customer_id,staff_id),  
constraint fnc_cid foreign key(customer_id) references customers(customer_id),
constraint fnc_sid foreign key(staff_id) references staff(staff_id)  
);

create table equipment(  
equipment_no  varchar(7),  
equipment_type varchar(40)  not null,  
condition_  varchar(20) not null,
    constraint p_eno primary key(equipment_no)
);

create table hosted_in(  
class_id varchar(10)  not null,  
facility_no varchar(5)  not null,  
class_type varchar(20)  not null,  
facility_type varchar(30) not null,  
constraint p_hcsid primary key(class_id,facility_no),  
constraint f_hcid foreign key(class_id) references gymclass(class_id),  
constraint f_hfno foreign key(facility_no) references facility(facility_no)  
);


create table has(  
class_id varchar(10),  
staff_id varchar(20),  
constraint p_clst primary key(class_id,staff_id),  
constraint f_class foreign key(class_id) references gymclass(class_id),  
constraint f_staff foreign key(staff_id) references staff(staff_id)  
);


create table rents(  
check_outdate date,  
due_date date  not null,  
equipment_no varchar(10),  
customer_id varchar(20),  
constraint p_ec primary key(equipment_no,customer_id),  
constraint f_rcid foreign key(customer_id) references customers(customer_id), 
constraint f_reno foreign key(equipment_no) references equipment(equipment_no)
);


create table adminlogin(
id int auto_increment,
user varchar(20) not null,
password varchar(20) not null,
constraint i_d primary key(id)
);

create table userinfo(
id int(255) auto_increment,
user varchar(255) not null,
email varchar(255) not null,
mobile varchar(255) not null,
comments varchar(255) not null,
constraint i_dd primary key(id)
);



insert into membership values('M001','L1',DATE'2019-01-01',5999.00,DATE'2020-01-01');
insert into membership values('M002','L2',DATE'2020-11-01',6599.00,DATE'2021-01-11');
insert into membership values('M003','L3',DATE'2020-11-11',7899.00,DATE'2021-11-11');
insert into membership values('M004','L1',DATE'2019-05-01',5999.00,DATE'2020-01-05');
insert into membership values('M005','L3',DATE'2018-11-24',7899.00,DATE'2019-09-11');

insert into gymclass values('CL001',5999.00,50,'FRIDAY','07:30:00');
insert into gymclass values('CL002',6599.00,30,'MONDAY','08:30:00');
insert into gymclass values('CL003',7999.00,40,'TUESDAY','18:30:00');
insert into gymclass values('CL004',2999.00,50,'THURSDAY','19:30:00');
insert into gymclass values('CL005',4599.00,40,'WEDNESDAY','08:30:00');

insert into facility values('F001',15,'WORKING');
insert into facility values('F002',7,'WORKING');
insert into facility values('F003',10,'RENOVATION');
insert into facility values('F004',20,'WORKING');
insert into facility values('F005',11,'WORKING');
insert into facility values('F006',16,'RENOVATION');
insert into facility values('F007',8,'WORKING');
insert into facility values('F008',14,'WORKING');
insert into facility values('F009',20,'RENOVATION');
insert into facility values('F010',18,'WORKING');

insert into customers values('CUS001',DATE'1975-03-15','SANYA','FEMALE','123 STREET DELHI','9876674325','SANYA@GMAIL.COM','123456789087','M001','CL001');
insert into customers values('CUS002',DATE'1973-01-07','MOHIT','MALE','456 STREET DELHI','6776674325','MOHIT@GMAIL.COM','435656789087','M002','CL002');
insert into customers values('CUS003',DATE'1978-08-12','PREETI','FEMALE','699 MAIN ROAD DELHI','8076699325','PREETI@GMAIL.COM','980756789087','M003','CL003');
insert into customers values('CUS004',DATE'1973-01-08','UTKARSH','MALE','123 STREET DELHI','6076655325','UTKARSH@GMAIL.COM','888856789087','M004','CL004');
insert into customers values('CUS005',DATE'1979-11-06','RONAK','MALE','TOWN HALL DELHI','7855674325','RONAK@GMAIL.COM','109656789087','M005','CL005');

insert into staff values('STF001',DATE'1986-04-06','VICKY','MALE','652890134','Instructor','STREET NO 234 DELHI','9876543210','VICKY@GMAIL.COM','123478905643');
insert into staff values('STF002',DATE'1989-08-12','JACKIE','MALE','874569014','Instructor','STREET NO 234 DELHI','9876534534','JACKIE@GMAIL.COM','799078905678');
insert into staff values('STF003',DATE'1983-05-23','SIA','FEMALE','674839201','Manager','TOWN HALL DELHI','6785543210','SIA@GMAIL.COM','789078784320');
insert into staff values('STF004',DATE'1979-02-25','JAY','MALE','456378900','Instructor','MAIN ROAD DELHI','8978543210','JAY@GMAIL.COM','567812348989');
insert into staff values('STF005',DATE'1976-01-05','MIKE','MALE','984356789','Trainer','GANDHI NAGAR DELHI','6786543210','MIKE@GMAIL.COM','789056784320');

insert into nutrition_care values(1.3,300,46,1200,'CUS001','STF001');
insert into nutrition_care values(1.0,340,58,1700,'CUS002','STF002');
insert into nutrition_care values(1.7,200,40,1000,'CUS003','STF001');
insert into nutrition_care values(1.2,230,45,800,'CUS004','STF002');
insert into nutrition_care values(1.2,400,52,2000,'CUS005','STF004');

insert into equipment values('EQP001','CARDIOVASCULAR MACHINES','WORKING');
insert into equipment values('EQP002','TREADMILLS','WORKING');
insert into equipment values('EQP003','ROWING MACHINES','WORKING');
insert into equipment values('EQP004','ELLIPTICAL MACHINES','BROKEN');
insert into equipment values('EQP005','EXERCISE BIKES','WORKING');


insert into has values('CL001','STF001');
insert into has values('CL002','STF002');
insert into has values('CL003','STF003');
insert into has values('CL004','STF004');
insert into has values('CL005','STF005');

insert into rents values(DATE'2019-06-08',DATE'2019-06-18','EQP001','CUS001');
insert into rents values(DATE'2019-05-07',DATE'2019-06-28','EQP002','CUS002');
insert into rents values(DATE'2020-09-19',DATE'2020-09-19','EQP003','CUS003');
insert into rents values(DATE'2020-01-20',DATE'2019-12-20','EQP004','CUS004');
insert into rents values(DATE'2020-02-20',DATE'2019-09-09','EQP005','CUS005');

insert into hosted_in values('CL001','F001','TYPE1','GYM');
insert into hosted_in values('CL001','F002','TYPE1','STUDIO');
insert into hosted_in values('CL002','F003','TYPE2','PERSONAL TRAINING COUNTER');
insert into hosted_in values('CL002','F004','TYPE2','CARDIO THEATER');
insert into hosted_in values('CL003','F005','TYPE3','CYCLING STUDIO');
insert into hosted_in values('CL003','F006','TYPE3','MEMBERS LOUNGE');
insert into hosted_in values('CL004','F007','TYPE4','LUXURIOUS CHANGING ROOM');
insert into hosted_in values('CL004','F008','TYPE4','SECURITY');
insert into hosted_in values('CL005','F009','TYPE5','SWIMMING POOL');
insert into hosted_in values('CL005','F010','TYPE5','YOGA');


INSERT INTO adminlogin (`id`, `user`, `password`) VALUES (NULL, 'STF001', 'staff1');

insert into userinfo (`id`, `user`, `email`,`mobile`,`comments`) VALUES (NULL, 'Harshita', 'harshita@gmail.com','6547876543','This is our DBMS project');


create table customers1(   
membership_id int(20) ,   
dob date  not null,   
cus_name varchar(20) not null,   
gender varchar(10)  not null,   
address varchar(20) not null,   
phone_no varchar(10) not null,   
email_id varchar(20)  not null,   
aadhar_no varchar(12) not null,   
constraint cs_phone unique(phone_no), 
constraint cs_email unique(email_id), 
constraint cs_aadhar unique(aadhar_no),    
constraint cs_id primary key(membership_id)
);




















