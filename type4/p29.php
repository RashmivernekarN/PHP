CRUD
C - Create
R - Read
U - Update
D - Delete

create table demo(
 id INT ,
 col1 varchar(255)
)

INSERT INTO `student` (`std_id`, `std_name`, `std_email`, `std_phone`, `std_address`, `std_reg_date`) VALUES (NULL, 'Vijay', 'vijay@ampwork.com', '1234567890', 'dont know', CURRENT_TIMESTAMP);

UPDATE `student` SET `std_name` = 'vijay t' WHERE `student`.`std_id` = 1;

DELETE FROM `student` WHERE `student`.`std_id` = 1