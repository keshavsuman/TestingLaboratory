#
# TABLE STRUCTURE FOR: account_master
#

DROP TABLE IF EXISTS `account_master`;

CREATE TABLE `account_master` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `account_master` (`account_id`, `account_name`, `status`) VALUES (5, 'Bank of Baroda', 1);
INSERT INTO `account_master` (`account_id`, `account_name`, `status`) VALUES (6, 'Bank of Bikaner', 1);
INSERT INTO `account_master` (`account_id`, `account_name`, `status`) VALUES (7, 'HDFC', 1);


#
# TABLE STRUCTURE FOR: address_info
#

DROP TABLE IF EXISTS `address_info`;

CREATE TABLE `address_info` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(50) DEFAULT NULL,
  `lane1` varchar(50) DEFAULT NULL,
  `lane2` varchar(50) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `state_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

INSERT INTO `address_info` (`address_id`, `city_name`, `lane1`, `lane2`, `pincode`, `state_name`) VALUES (13, 'INDORE', '700,MR-3', 'Mahalaxmi nagar,Indore', 452010, 'MADHYA PRADESH');
INSERT INTO `address_info` (`address_id`, `city_name`, `lane1`, `lane2`, `pincode`, `state_name`) VALUES (14, 'INDORE', '700,MR-3', 'Mahalaxmi nagar,Indore', 452010, 'MADHYA PRADESH');
INSERT INTO `address_info` (`address_id`, `city_name`, `lane1`, `lane2`, `pincode`, `state_name`) VALUES (15, 'INDORE', '700,MR-3', 'Mahalaxmi nagar,Indore', 452010, 'MADHYA PRADESH');
INSERT INTO `address_info` (`address_id`, `city_name`, `lane1`, `lane2`, `pincode`, `state_name`) VALUES (16, 'INDORE', '700,MR-3', 'Mahalaxmi nagar,Indore', 452010, 'MADHYA PRADESH');
INSERT INTO `address_info` (`address_id`, `city_name`, `lane1`, `lane2`, `pincode`, `state_name`) VALUES (17, 'INDORE', '700,MR-3', 'Mahalaxmi nagar,Indore', 452010, 'MADHYA PRADESH');
INSERT INTO `address_info` (`address_id`, `city_name`, `lane1`, `lane2`, `pincode`, `state_name`) VALUES (18, 'INDORE', 'Annpurna', 'RTO', 452010, 'MADHYA PRADESH');
INSERT INTO `address_info` (`address_id`, `city_name`, `lane1`, `lane2`, `pincode`, `state_name`) VALUES (19, '6', 'Annpurna', 'RTO', 452010, '1');
INSERT INTO `address_info` (`address_id`, `city_name`, `lane1`, `lane2`, `pincode`, `state_name`) VALUES (21, '6', 'Annpurna', 'RTO', 452010, '1');


#
# TABLE STRUCTURE FOR: city_master
#

DROP TABLE IF EXISTS `city_master`;

CREATE TABLE `city_master` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `city_master` (`city_id`, `city_name`, `status`) VALUES (6, 'INDORE', 1);
INSERT INTO `city_master` (`city_id`, `city_name`, `status`) VALUES (7, 'JAIPUR', 1);


#
# TABLE STRUCTURE FOR: common_master
#

DROP TABLE IF EXISTS `common_master`;

CREATE TABLE `common_master` (
  `title` varchar(255) NOT NULL,
  `record` text NOT NULL,
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO `common_master` (`title`, `record`, `record_id`) VALUES ('default_customer_creditlimit', '10000', 6);
INSERT INTO `common_master` (`title`, `record`, `record_id`) VALUES ('default_overdue_days_limit', '12', 7);
INSERT INTO `common_master` (`title`, `record`, `record_id`) VALUES ('default_opening_balance', '200', 8);


#
# TABLE STRUCTURE FOR: contact_person
#

DROP TABLE IF EXISTS `contact_person`;

CREATE TABLE `contact_person` (
  `customer_id` int(11) NOT NULL,
  `contact_person_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_person_name` varchar(45) NOT NULL,
  `contact_person_designation` varchar(45) NOT NULL,
  `contact_person_number` bigint(12) NOT NULL,
  `contact_person_email` varchar(45) NOT NULL,
  PRIMARY KEY (`contact_person_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `contact_person` (`customer_id`, `contact_person_id`, `contact_person_name`, `contact_person_designation`, `contact_person_number`, `contact_person_email`) VALUES (20, 4, 'Keshav suman', '', '0', '');


#
# TABLE STRUCTURE FOR: customer_master
#

DROP TABLE IF EXISTS `customer_master`;

CREATE TABLE `customer_master` (
  `customer_name` varchar(50) NOT NULL,
  `customer_address_id` int(11) NOT NULL,
  `customer_phone_number` bigint(12) NOT NULL,
  `customer_email_id` varchar(255) NOT NULL,
  `customer_reg_date` datetime NOT NULL,
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_discount_id` int(11) NOT NULL,
  `customer_registration_employee_id` int(11) NOT NULL,
  `contact_person_customer_id` int(11) DEFAULT NULL,
  `customer_credit_limit` int(11) NOT NULL,
  `customer_overdue_day` int(11) NOT NULL,
  `customer_gst_no` varchar(45) DEFAULT NULL,
  `customer_pan_no` varchar(45) DEFAULT NULL,
  `customer_opening_balance` int(11) NOT NULL,
  `customer_group` varchar(45) DEFAULT NULL,
  `party_po_no` int(11) DEFAULT NULL,
  `party_po_date` date DEFAULT NULL,
  `customer_landline` bigint(12) DEFAULT NULL,
  `customer_status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO `customer_master` (`customer_name`, `customer_address_id`, `customer_phone_number`, `customer_email_id`, `customer_reg_date`, `customer_id`, `customer_discount_id`, `customer_registration_employee_id`, `contact_person_customer_id`, `customer_credit_limit`, `customer_overdue_day`, `customer_gst_no`, `customer_pan_no`, `customer_opening_balance`, `customer_group`, `party_po_no`, `party_po_date`, `customer_landline`, `customer_status`) VALUES ('Keshav ', 13, '9602514096', 'keshavsuman96@gmail.com', '2020-03-23 11:27:00', 20, 0, 1, NULL, 10000, 10, '654sgh56sdh4', '564gh4wetrh4hy', 2000, '24', 56472, '2020-03-23', '7999877836', '1');


#
# TABLE STRUCTURE FOR: department_master
#

DROP TABLE IF EXISTS `department_master`;

CREATE TABLE `department_master` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `department_master` (`department_id`, `department_name`, `status`) VALUES (6, 'MBA', 1);
INSERT INTO `department_master` (`department_id`, `department_name`, `status`) VALUES (7, 'MECHANICAL', 1);
INSERT INTO `department_master` (`department_id`, `department_name`, `status`) VALUES (8, 'COMPUTER SCIENCE', 1);
INSERT INTO `department_master` (`department_id`, `department_name`, `status`) VALUES (9, 'INFORMATION TECHNOLOGY', 1);


#
# TABLE STRUCTURE FOR: discount_info
#

DROP TABLE IF EXISTS `discount_info`;

CREATE TABLE `discount_info` (
  `discount_id` int(11) NOT NULL AUTO_INCREMENT,
  `discount_percentage` float NOT NULL,
  `remark` varchar(255) NOT NULL,
  `customer_master_customer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`discount_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: element_master
#

DROP TABLE IF EXISTS `element_master`;

CREATE TABLE `element_master` (
  `element_id` int(11) NOT NULL AUTO_INCREMENT,
  `element_type` varchar(255) NOT NULL,
  `element_name` varchar(255) NOT NULL,
  `isferrous` enum('Ferrous','Non-Ferrous','','') NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`element_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: element_type_master
#

DROP TABLE IF EXISTS `element_type_master`;

CREATE TABLE `element_type_master` (
  `element_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `element_type` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`element_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: employee_registration
#

DROP TABLE IF EXISTS `employee_registration`;

CREATE TABLE `employee_registration` (
  `employee_name` varchar(50) NOT NULL,
  `employee_address_id` int(11) NOT NULL,
  `employee_mobile_no` bigint(12) NOT NULL,
  `employee_email_id` varchar(255) NOT NULL,
  `employee_dob` date NOT NULL,
  `employee_reg_date` datetime NOT NULL,
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_status` enum('1','0') NOT NULL,
  `employee_role_id` tinyint(4) NOT NULL,
  `employee_department_id` int(11) NOT NULL,
  `employee_registeredby_employee_id` int(11) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `employee_registration` (`employee_name`, `employee_address_id`, `employee_mobile_no`, `employee_email_id`, `employee_dob`, `employee_reg_date`, `employee_id`, `employee_status`, `employee_role_id`, `employee_department_id`, `employee_registeredby_employee_id`) VALUES ('admin', 0, '7999877836', 'keshavsuman96@gmail.com', '0000-00-00', '0000-00-00 00:00:00', 1, '1', 0, 0, 0);
INSERT INTO `employee_registration` (`employee_name`, `employee_address_id`, `employee_mobile_no`, `employee_email_id`, `employee_dob`, `employee_reg_date`, `employee_id`, `employee_status`, `employee_role_id`, `employee_department_id`, `employee_registeredby_employee_id`) VALUES ('keshav suman ', 14, '9602514096', 'keshavsuman96@gmail.com', '2000-04-11', '2020-03-23 11:47:00', 4, '1', 1, 9, 1);
INSERT INTO `employee_registration` (`employee_name`, `employee_address_id`, `employee_mobile_no`, `employee_email_id`, `employee_dob`, `employee_reg_date`, `employee_id`, `employee_status`, `employee_role_id`, `employee_department_id`, `employee_registeredby_employee_id`) VALUES ('Harshit Pathak', 21, '9340619697', 'harshitpathak16@gmail.com', '2000-02-16', '2020-03-24 02:03:00', 7, '1', 1, 9, 1);


#
# TABLE STRUCTURE FOR: invoice
#

DROP TABLE IF EXISTS `invoice`;

CREATE TABLE `invoice` (
  `invoice_no` varchar(255) NOT NULL,
  `invoice_date` datetime NOT NULL,
  `mrn(po/dc)` varchar(255) NOT NULL,
  `customer_id` varchar(45) NOT NULL,
  `net amount` float NOT NULL,
  `status` enum('PAID','UNPAID') NOT NULL,
  `challan_no` varchar(45) NOT NULL,
  `challan_date` datetime NOT NULL,
  `net_amount` float NOT NULL,
  `credit_days` datetime DEFAULT NULL,
  `w_o_no` varchar(45) NOT NULL,
  PRIMARY KEY (`invoice_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: invoice_report
#

DROP TABLE IF EXISTS `invoice_report`;

CREATE TABLE `invoice_report` (
  `invoice no` varchar(255) NOT NULL,
  `customer name` varchar(255) NOT NULL,
  `w.o.no` varchar(255) NOT NULL,
  `invoice date` datetime NOT NULL,
  `po.no` varchar(255) NOT NULL,
  `total amount` float NOT NULL,
  `net amount` float NOT NULL,
  `invoice_invoice_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: lab_analysis_entry
#

DROP TABLE IF EXISTS `lab_analysis_entry`;

CREATE TABLE `lab_analysis_entry` (
  `test` varchar(255) NOT NULL,
  `work order no` varchar(255) NOT NULL,
  `customer name` varchar(255) NOT NULL,
  `sample no` varchar(255) NOT NULL,
  `material description` varchar(255) NOT NULL,
  `method name` varchar(255) NOT NULL,
  `specification name` varchar(255) NOT NULL,
  `sub test` varchar(255) NOT NULL,
  `main test` varchar(255) NOT NULL,
  `delivery date` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: login_data
#

DROP TABLE IF EXISTS `login_data`;

CREATE TABLE `login_data` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  `username` varchar(50) NOT NULL,
  `role_permissions_role_id` int(11) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `login_data` (`employee_id`, `password`, `role_id`, `last_login`, `username`, `role_permissions_role_id`) VALUES (1, '$2y$10$3.fvTFznixIoeofwWvstqenx5t7z9saQIGZuoNkuJW1w.CW9uu42e', 0, '0000-00-00 00:00:00', '123', 0);
INSERT INTO `login_data` (`employee_id`, `password`, `role_id`, `last_login`, `username`, `role_permissions_role_id`) VALUES (7, '$2y$10$ea70l5QE1mepQ7htbZmEf.aYZn4eiI.mqpKIX7xCB7J04gpW7rzmG', 1, '0000-00-00 00:00:00', 'harshitpathak16@gmail.com', 0);


#
# TABLE STRUCTURE FOR: main_test_master
#

DROP TABLE IF EXISTS `main_test_master`;

CREATE TABLE `main_test_master` (
  `main_test_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_id` int(11) NOT NULL,
  `main_test_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`main_test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO `main_test_master` (`main_test_id`, `department_id`, `main_test_name`, `status`) VALUES (13, 8, 'virtual lab testing', 1);


#
# TABLE STRUCTURE FOR: material_master
#

DROP TABLE IF EXISTS `material_master`;

CREATE TABLE `material_master` (
  `material_name` varchar(255) NOT NULL,
  `material_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`material_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `material_master` (`material_name`, `material_id`, `status`) VALUES ('aluminium', 3, 1);
INSERT INTO `material_master` (`material_name`, `material_id`, `status`) VALUES ('aluminium2', 4, 1);


#
# TABLE STRUCTURE FOR: observation_master
#

DROP TABLE IF EXISTS `observation_master`;

CREATE TABLE `observation_master` (
  `testform_id` int(11) NOT NULL,
  `observation` varchar(255) NOT NULL,
  `observation_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`observation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: payment_received_report
#

DROP TABLE IF EXISTS `payment_received_report`;

CREATE TABLE `payment_received_report` (
  `payment transaction no` varchar(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `customer name` varchar(255) NOT NULL,
  `bill regenrate` varchar(255) NOT NULL,
  `voucher no` varchar(255) NOT NULL,
  `transation date` datetime NOT NULL,
  `payment mode` varchar(500) NOT NULL,
  `cheque no` varchar(255) NOT NULL,
  `cheque date` date NOT NULL,
  `payment description` text NOT NULL,
  `amount` float NOT NULL,
  `deduct amount description` text NOT NULL,
  `employee_id` varchar(45) DEFAULT NULL,
  `invoice_invoice_no` varchar(255) NOT NULL,
  `transaction_report_transaction_id` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: product_master
#

DROP TABLE IF EXISTS `product_master`;

CREATE TABLE `product_master` (
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `reorder_quantity` int(11) NOT NULL,
  `product_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `product_master` (`product_name`, `description`, `reorder_quantity`, `product_id`, `status`) VALUES ('product 1', 'this is demo description', 5, 4, 1);
INSERT INTO `product_master` (`product_name`, `description`, `reorder_quantity`, `product_id`, `status`) VALUES ('product 2', 'this is demo description', 5, 5, 1);


#
# TABLE STRUCTURE FOR: rate_card_master
#

DROP TABLE IF EXISTS `rate_card_master`;

CREATE TABLE `rate_card_master` (
  `sun test name` varchar(255) NOT NULL,
  `test description` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: registration_entry
#

DROP TABLE IF EXISTS `registration_entry`;

CREATE TABLE `registration_entry` (
  `sample_no` int(11) NOT NULL COMMENT 'views creation ',
  `sample_reg_no` int(11) NOT NULL,
  `coustomer_name` int(11) NOT NULL,
  `date` date NOT NULL,
  `delivery_date` int(11) NOT NULL,
  `challan_no` int(11) NOT NULL,
  `challan_date` date NOT NULL,
  `no_of_sample` int(11) NOT NULL,
  `name_analysis_print` int(11) NOT NULL,
  `remark` int(11) NOT NULL,
  `work_order_print` int(11) NOT NULL,
  `upload_doc` geometrycollection NOT NULL,
  PRIMARY KEY (`sample_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: renewal_master
#

DROP TABLE IF EXISTS `renewal_master`;

CREATE TABLE `renewal_master` (
  `product_id` int(11) NOT NULL,
  `starting_date` date NOT NULL,
  `notification type` varchar(255) NOT NULL,
  `notification duration` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: role_permissions
#

DROP TABLE IF EXISTS `role_permissions`;

CREATE TABLE `role_permissions` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(45) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `role_permissions` (`role_id`, `role_name`) VALUES (1, 'Admin');


#
# TABLE STRUCTURE FOR: sample_registration_entry
#

DROP TABLE IF EXISTS `sample_registration_entry`;

CREATE TABLE `sample_registration_entry` (
  `sample_no` varchar(45) NOT NULL,
  `sample_reg_no` varchar(45) NOT NULL,
  `customer_id` varchar(45) NOT NULL,
  `collection_date` datetime NOT NULL,
  `delivery_date` datetime NOT NULL,
  `d challon no` varchar(255) NOT NULL,
  `challon_date` datetime NOT NULL,
  `no_of_sample` int(11) DEFAULT NULL,
  `name_of_analysis_print` int(5) NOT NULL,
  `remarks` text NOT NULL,
  `employee_id` varchar(45) DEFAULT NULL,
  `employee_registration_employee_id` varchar(45) NOT NULL,
  `invoice_invoice_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: serial_no_master
#

DROP TABLE IF EXISTS `serial_no_master`;

CREATE TABLE `serial_no_master` (
  `testform_id` int(11) NOT NULL,
  `serialno` int(11) NOT NULL,
  `serial_no_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`serial_no_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: specification_master
#

DROP TABLE IF EXISTS `specification_master`;

CREATE TABLE `specification_master` (
  `specification name` varchar(255) NOT NULL,
  `material grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: state_master
#

DROP TABLE IF EXISTS `state_master`;

CREATE TABLE `state_master` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(45) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `state_master` (`state_id`, `state_name`) VALUES (1, 'MADHYA PRADESH');
INSERT INTO `state_master` (`state_id`, `state_name`) VALUES (2, 'RAJASTHAN');
INSERT INTO `state_master` (`state_id`, `state_name`) VALUES (3, 'JAMMU AND KASHMIR');
INSERT INTO `state_master` (`state_id`, `state_name`) VALUES (4, 'TAMIL NADU');
INSERT INTO `state_master` (`state_id`, `state_name`) VALUES (5, 'KARNATAKA');
INSERT INTO `state_master` (`state_id`, `state_name`) VALUES (6, 'UTTARAKHAND');
INSERT INTO `state_master` (`state_id`, `state_name`) VALUES (7, 'MAHARASHTRA');


#
# TABLE STRUCTURE FOR: sub_test_master
#

DROP TABLE IF EXISTS `sub_test_master`;

CREATE TABLE `sub_test_master` (
  `main_test_id` int(11) NOT NULL,
  `sub_test_id` int(11) NOT NULL AUTO_INCREMENT,
  `subtest_name` varchar(50) NOT NULL,
  `testform_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`sub_test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `sub_test_master` (`main_test_id`, `sub_test_id`, `subtest_name`, `testform_id`, `status`) VALUES (13, 5, 'sub test 1', 2, 1);


#
# TABLE STRUCTURE FOR: supplier_master
#

DROP TABLE IF EXISTS `supplier_master`;

CREATE TABLE `supplier_master` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(45) NOT NULL,
  `supplier_address_id` int(11) NOT NULL,
  `supplier_email_id` varchar(255) NOT NULL,
  `supplier_mobile_no` bigint(20) NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `supplier_master` (`supplier_id`, `supplier_name`, `supplier_address_id`, `supplier_email_id`, `supplier_mobile_no`, `status`) VALUES (3, 'keshav suman', 15, 'keshavsuman96@gmail.com', '9602514096', 1);


#
# TABLE STRUCTURE FOR: test_method_master
#

DROP TABLE IF EXISTS `test_method_master`;

CREATE TABLE `test_method_master` (
  `sub_test_id` int(11) NOT NULL,
  `test_method` varchar(255) NOT NULL,
  `test_method_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`test_method_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `test_method_master` (`sub_test_id`, `test_method`, `test_method_id`, `status`) VALUES (4, 'test method 1', 4, 1);


#
# TABLE STRUCTURE FOR: test_standard
#

DROP TABLE IF EXISTS `test_standard`;

CREATE TABLE `test_standard` (
  `sub_test_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `standard_result` varchar(255) NOT NULL,
  `std_result_date` int(11) NOT NULL,
  `sub_test_master_subtest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: testform_master
#

DROP TABLE IF EXISTS `testform_master`;

CREATE TABLE `testform_master` (
  `testform_id` int(11) NOT NULL AUTO_INCREMENT,
  `testform_name` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`testform_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `testform_master` (`testform_id`, `testform_name`, `status`) VALUES (2, 'test form 1', 1);
INSERT INTO `testform_master` (`testform_id`, `testform_name`, `status`) VALUES (3, 'test form 2', 1);


#
# TABLE STRUCTURE FOR: transaction_report
#

DROP TABLE IF EXISTS `transaction_report`;

CREATE TABLE `transaction_report` (
  `transaction type` varchar(255) NOT NULL,
  `payment type` varchar(255) NOT NULL,
  `payment description` varchar(255) NOT NULL,
  `credit amount` float NOT NULL,
  `debit amoount` float NOT NULL,
  `transaction date` date NOT NULL,
  `transaction_id` varchar(45) NOT NULL,
  `invoice_no` varchar(45) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: vendor_master
#

DROP TABLE IF EXISTS `vendor_master`;

CREATE TABLE `vendor_master` (
  `transaction_type` varchar(255) NOT NULL,
  `vendor_name` varchar(45) NOT NULL,
  `vendor_address_id` int(11) NOT NULL,
  `vendor_email_id` varchar(255) NOT NULL,
  `vendor_mobile_no` bigint(20) NOT NULL,
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`vendor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `vendor_master` (`transaction_type`, `vendor_name`, `vendor_address_id`, `vendor_email_id`, `vendor_mobile_no`, `vendor_id`, `status`) VALUES ('', 'keshavsuman96@gmail.com', 0, 'keshavsuman96@gmail.com', '7999877836', 2, 0);
INSERT INTO `vendor_master` (`transaction_type`, `vendor_name`, `vendor_address_id`, `vendor_email_id`, `vendor_mobile_no`, `vendor_id`, `status`) VALUES ('', 'keshav suman', 17, 'keshavsuman96@gmail.com', '9602514096', 3, 1);
INSERT INTO `vendor_master` (`transaction_type`, `vendor_name`, `vendor_address_id`, `vendor_email_id`, `vendor_mobile_no`, `vendor_id`, `status`) VALUES ('', 'Harshit Pathak', 18, 'harshitpathak16@gmail.com', '9340619697', 4, 1);


#
# TABLE STRUCTURE FOR: working_notification
#

DROP TABLE IF EXISTS `working_notification`;

CREATE TABLE `working_notification` (
  `working_notification_id` varchar(45) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `notification_date` datetime NOT NULL,
  `notes` text NOT NULL,
  `sample_no` varchar(45) NOT NULL,
  PRIMARY KEY (`employee_id`),
  UNIQUE KEY `sample_no` (`sample_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

