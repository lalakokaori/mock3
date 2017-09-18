[1mdiff --git a/.gitattributes b/.gitattributes[m
[1mdeleted file mode 100644[m
[1mindex eba1110..0000000[m
[1m--- a/.gitattributes[m
[1m+++ /dev/null[m
[36m@@ -1,2 +0,0 @@[m
[31m-# Auto detect text files and perform LF normalization[m
[31m-* text=auto[m
\ No newline at end of file[m
[1mdiff --git a/.gitignore b/.gitignore[m
[1mdeleted file mode 100644[m
[1mindex 42ee2e1..0000000[m
[1m--- a/.gitignore[m
[1m+++ /dev/null[m
[36m@@ -1,2 +0,0 @@[m
[31m-[m
[31m-model/master/connect.php[m
[1mdiff --git a/controller/steps-contract.js b/controller/steps-contract.js[m
[1mindex 90f9c07..3a8b8d2 100644[m
[1m--- a/controller/steps-contract.js[m
[1m+++ b/controller/steps-contract.js[m
[36m@@ -49,10 +49,11 @@[m [mfunction(isConfirm){[m
 		var user =$('#user_id-hide').val();[m
 		var start =$('#cont_start').val();[m
 		var ref =$('#cont_ref').val();[m
[31m-		var period =$('#cont_period').val();[m
[32m+[m		[32m//var period =$('#cont_period').val();[m
 [m
 [m
[31m-		var dataString ='cont_id='+cont_id+'&client='+client+'&name='+name+'&day='+day+'&amount='+amount+'&user='+user+'&period='+period+'&ref='+ref+'&start='+start ;[m
[32m+[m		[32mvar dataString ='cont_id='+cont_id+'&client='+client+'&name='+name+'&day='+day+'&amount='+amount+'&user='+user+'&ref='+ref+'&start='+start ;[m
[32m+[m[41m		[m
 		console.log(dataString);[m
 [m
 		swal("", "Saved", "success");[m
[36m@@ -64,7 +65,6 @@[m [mfunction(isConfirm){[m
 			dataType: 'json',[m
 			cache: false,[m
 			success: function(s){[m
[31m-				//alert("shit");[m
 				 window.location="main.php";[m
 			 }[m
 		});[m
[1mdiff --git a/db/capstone (3).sql b/db/capstone (3).sql[m
[1mdeleted file mode 100644[m
[1mindex 8fdf271..0000000[m
[1m--- a/db/capstone (3).sql[m	
[1m+++ /dev/null[m
[36m@@ -1,481 +0,0 @@[m
[31m--- phpMyAdmin SQL Dump[m
[31m--- version 4.6.5.2[m
[31m--- https://www.phpmyadmin.net/[m
[31m---[m
[31m--- Host: 127.0.0.1[m
[31m--- Generation Time: Aug 20, 2017 at 08:13 AM[m
[31m--- Server version: 10.1.21-MariaDB[m
[31m--- PHP Version: 5.6.30[m
[31m-[m
[31m-SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";[m
[31m-SET time_zone = "+00:00";[m
[31m-[m
[31m-[m
[31m-/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;[m
[31m-/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;[m
[31m-/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;[m
[31m-/*!40101 SET NAMES utf8mb4 */;[m
[31m-[m
[31m---[m
[31m--- Database: `capstone`[m
[31m---[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `categories`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `categories` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `category_id` varchar(20) NOT NULL,[m
[31m-  `category_name` varchar(255) NOT NULL,[m
[31m-  `description` varchar(50) NOT NULL,[m
[31m-  `status` varchar(20) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `categories`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `categories` (`no`, `category_id`, `category_name`, `description`, `status`) VALUES[m
[31m-(0001, '0000', '0000', '0000', 'inactive'),[m
[31m-(0002, 'CT0001', 'unskilled', 'labor', 'active'),[m
[31m-(0003, 'CT0002', 'skilled', 'labor', 'active'),[m
[31m-(0004, 'CT0003', 'foreman', 'labor', 'active'),[m
[31m-(0009, 'CT0004', 'light Equipment', 'equipment', 'active'),[m
[31m-(0010, 'CT0009', 'heavy Equipment', 'equipment', 'active'),[m
[31m-(0011, 'CT0010', 'wood', 'material', 'active'),[m
[31m-(0012, 'CT0011', 'steel', 'material', 'active'),[m
[31m-(0013, 'CT0012', 'rock', 'material', 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `client`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `client` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `client_id` varchar(20) NOT NULL,[m
[31m-  `client_name` varchar(255) NOT NULL,[m
[31m-  `client_person` varchar(50) NOT NULL,[m
[31m-  `client_position` varchar(50) NOT NULL,[m
[31m-  `client_contact` varchar(20) NOT NULL,[m
[31m-  `client_address` varchar(255) NOT NULL,[m
[31m-  `client_email` varchar(50) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `client`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `client` (`no`, `client_id`, `client_name`, `client_person`, `client_position`, `client_contact`, `client_address`, `client_email`, `status`) VALUES[m
[31m-(0001, 'cl1', 'Celeena Alonzo', '', '', '0912', 'Mandaluyong', 'celeena@ymail.com', 'active'),[m
[31m-(0002, 'CLI-0001', 'bernie', '', '', 'bernei', 'bernie', 'berei', 'active'),[m
[31m-(0003, 'CLI-0002', 'bernie drilling', 'bernie', 'boss', '09066073883', 'bahay nila malamang', 'bernie.remollo@yahoo.com', 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `consultant`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `consultant` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `consult_id` varchar(20) NOT NULL,[m
[31m-  `consult_name` varchar(255) NOT NULL,[m
[31m-  `consult_company` varchar(255) NOT NULL,[m
[31m-  `scope_id` varchar(20) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `consultant`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `consultant` (`no`, `consult_id`, `consult_name`, `consult_company`, `scope_id`, `status`) VALUES[m
[31m-(0001, '0000', '0000', '0000', '0000', 'inactive');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `contract`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `contract` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `contract_id` varchar(20) NOT NULL,[m
[31m-  `contract_name` varchar(255) NOT NULL,[m
[31m-  `contract_refnum` int(50) NOT NULL,[m
[31m-  `contract_period` int(50) NOT NULL,[m
[31m-  `contract_amt` decimal(30,2) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `contract`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `contract` (`no`, `contract_id`, `contract_name`, `contract_refnum`, `contract_period`, `contract_amt`, `status`) VALUES[m
[31m-(0001, '0000', '0000', 0, 0, '0.00', 'inactive');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `engineer`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `engineer` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `engr_id` varchar(20) NOT NULL,[m
[31m-  `engr_name` varchar(255) NOT NULL,[m
[31m-  `engr_type` varchar(50) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `engineer`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `engineer` (`no`, `engr_id`, `engr_name`, `engr_type`, `status`) VALUES[m
[31m-(0001, '0000', '0', '0000', 'inactive'),[m
[31m-(0002, '0001', 'bernie', 'wew', 'active'),[m
[31m-(0003, '0002', 'bob', 'death', 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `equipment`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `equipment` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `eqpt_id` varchar(50) NOT NULL,[m
[31m-  `category_id` varchar(50) NOT NULL,[m
[31m-  `subcat_id` varchar(50) NOT NULL,[m
[31m-  `eqpt_name` varchar(255) NOT NULL,[m
[31m-  `model` varchar(50) NOT NULL,[m
[31m-  `serial_no` varchar(50) NOT NULL,[m
[31m-  `cp_size` varchar(50) NOT NULL,[m
[31m-  `plate_no` varchar(255) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `equipment`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `equipment` (`no`, `eqpt_id`, `category_id`, `subcat_id`, `eqpt_name`, `model`, `serial_no`, `cp_size`, `plate_no`, `status`) VALUES[m
[31m-(0000, '0000', '0000', '0000', '0000', '0000', '0000', '0000', '0000', 'inactive'),[m
[31m-(0003, 'EQ0000', 'CT0004', 'SB0003', 'mixer with l', 'mixer with l', '0000', '1000', 'N/A', 'active'),[m
[31m-(0004, 'EQ0003', 'CT0009', 'SB0005', 'drills', 'n/a', '00001', 'n/a', 'n/a', 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `labor`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `labor` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `labor_id` varchar(50) NOT NULL,[m
[31m-  `category_id` varchar(50) NOT NULL,[m
[31m-  `labor_name` varchar(255) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `labor`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `labor` (`no`, `labor_id`, `category_id`, `labor_name`, `status`) VALUES[m
[31m-(0001, '0000', '0000', '0000', 'inactive'),[m
[31m-(0002, 'LB0001', 'CT0001', 'unskilled', 'active'),[m
[31m-(0003, 'LB0002', 'CT0002', 'skilled', 'active'),[m
[31m-(0004, 'LB0003', 'CT0003', 'forman', 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `materials`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `materials` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `material_id` varchar(50) NOT NULL,[m
[31m-  `category_id` varchar(50) NOT NULL,[m
[31m-  `material_name` varchar(255) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `materials`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `materials` (`no`, `material_id`, `category_id`, `material_name`, `status`) VALUES[m
[31m-(0001, '0000', '0000', '0000', 'inactive'),[m
[31m-(0005, 'MT0001', 'CT0011', 'iron rod', 'active'),[m
[31m-(0006, 'MT0005', 'CT0010', '2x2 with naills', 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `project`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `project` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `proj_id` varchar(20) NOT NULL,[m
[31m-  `contract_id` varchar(20) NOT NULL,[m
[31m-  `proj_code` varchar(255) NOT NULL,[m
[31m-  `proj_name` varchar(255) NOT NULL,[m
[31m-  `proj_location` varchar(255) NOT NULL,[m
[31m-  `client_id` varchar(20) NOT NULL,[m
[31m-  `award_date` date NOT NULL,[m
[31m-  `ntp_date` date NOT NULL,[m
[31m-  `target_date` date NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `scope`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `scope` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `scope_id` varchar(20) NOT NULL,[m
[31m-  `scope_name` varchar(255) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `scope`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `scope` (`no`, `scope_id`, `scope_name`, `status`) VALUES[m
[31m-(0001, '0000', '0000', 'inactive'),[m
[31m-(0002, 'SC0001', 'tew', 'active'),[m
[31m-(0003, 'SC0002', 'qwert', 'inactive'),[m
[31m-(0004, 'SC0003', 'transport', 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `subcategories`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `subcategories` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `subcat_id` varchar(20) NOT NULL,[m
[31m-  `category_id` varchar(20) NOT NULL,[m
[31m-  `subcat_name` varchar(255) NOT NULL,[m
[31m-  `description` varchar(50) NOT NULL,[m
[31m-  `status` varchar(20) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `subcategories`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `subcategories` (`no`, `subcat_id`, `category_id`, `subcat_name`, `description`, `status`) VALUES[m
[31m-(0001, '0000', '0000', '0000', '0000', 'active'),[m
[31m-(0002, 'SB0001', 'CT0000', 'subtest 1', 'equipment', 'active'),[m
[31m-(0003, 'SB0002', 'CT0000', 'subtest 2-1', 'equipment', 'active'),[m
[31m-(0004, 'SB0003', 'CT0004', 'mixer', 'equipment', 'active'),[m
[31m-(0005, 'SB0004', 'CT0004', 'shovel', 'equipment', 'active'),[m
[31m-(0006, 'SB0005', 'CT0009', 'drill', 'equipment', 'active'),[m
[31m-(0007, 'SB0006', 'CT0009', 'reaper', 'equipment', 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `subcontractor`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `subcontractor` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `subcon_id` varchar(20) NOT NULL,[m
[31m-  `subcon_name` varchar(255) NOT NULL,[m
[31m-  `subcon_contact` varchar(20) NOT NULL,[m
[31m-  `subcon_amt` decimal(30,2) NOT NULL,[m
[31m-  `scope_id` int(11) NOT NULL,[m
[31m-  `billing_sched` date NOT NULL,[m
[31m-  `subcon_duration` varchar(50) NOT NULL,[m
[31m-  `num_personnel` int(20) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `subcontractor`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `subcontractor` (`no`, `subcon_id`, `subcon_name`, `subcon_contact`, `subcon_amt`, `scope_id`, `billing_sched`, `subcon_duration`, `num_personnel`, `status`) VALUES[m
[31m-(0001, 's1', 'Erwin Builders', '123456', '45000.00', 12, '2017-07-25', '30 cal. days', 50, 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `users`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `users` ([m
[31m-  `user_name` varchar(15) NOT NULL,[m
[31m-  `user_pass` varchar(50) NOT NULL,[m
[31m-  `user_type` varchar(15) NOT NULL,[m
[31m-  `user_stat` char(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `users`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `users` (`user_name`, `user_pass`, `user_type`, `user_stat`) VALUES[m
[31m-('admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN', 'active'),[m
[31m-('user', '21232f297a57a5a743894a0e4a801fc3', 'USER', 'active');[m
[31m-[m
[31m---[m
[31m--- Indexes for dumped tables[m
[31m---[m
[31m-[m
[31m---[m
[31m--- Indexes for table `categories`[m
[31m---[m
[31m-ALTER TABLE `categories`[m
[31m-  ADD PRIMARY KEY (`category_id`),[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `client`[m
[31m---[m
[31m-ALTER TABLE `client`[m
[31m-  ADD PRIMARY KEY (`client_id`),[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `consultant`[m
[31m---[m
[31m-ALTER TABLE `consultant`[m
[31m-  ADD PRIMARY KEY (`consult_id`),[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `contract`[m
[31m---[m
[31m-ALTER TABLE `contract`[m
[31m-  ADD PRIMARY KEY (`contract_id`),[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `engineer`[m
[31m---[m
[31m-ALTER TABLE `engineer`[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `equipment`[m
[31m---[m
[31m-ALTER TABLE `equipment`[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `labor`[m
[31m---[m
[31m-ALTER TABLE `labor`[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `materials`[m
[31m---[m
[31m-ALTER TABLE `materials`[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `scope`[m
[31m---[m
[31m-ALTER TABLE `scope`[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `subcategories`[m
[31m---[m
[31m-ALTER TABLE `subcategories`[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `subcontractor`[m
[31m---[m
[31m-ALTER TABLE `subcontractor`[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `users`[m
[31m---[m
[31m-ALTER TABLE `users`[m
[31m-  ADD UNIQUE KEY `users_name` (`user_name`);[m
[31m-[m
[31m---[m
[31m--- AUTO_INCREMENT for dumped tables[m
[31m---[m
[31m-[m
[31m---[m
[31m--- AUTO_INCREMENT for table `categories`[m
[31m---[m
[31m-ALTER TABLE `categories`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;[m
[31m---[m
[31m--- AUTO_INCREMENT for table `client`[m
[31m---[m
[31m-ALTER TABLE `client`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;[m
[31m---[m
[31m--- AUTO_INCREMENT for table `consultant`[m
[31m---[m
[31m-ALTER TABLE `consultant`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;[m
[31m---[m
[31m--- AUTO_INCREMENT for table `contract`[m
[31m---[m
[31m-ALTER TABLE `contract`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;[m
[31m---[m
[31m--- AUTO_INCREMENT for table `engineer`[m
[31m---[m
[31m-ALTER TABLE `engineer`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;[m
[31m---[m
[31m--- AUTO_INCREMENT for table `equipment`[m
[31m---[m
[31m-ALTER TABLE `equipment`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;[m
[31m---[m
[31m--- AUTO_INCREMENT for table `labor`[m
[31m---[m
[31m-ALTER TABLE `labor`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;[m
[31m---[m
[31m--- AUTO_INCREMENT for table `materials`[m
[31m---[m
[31m-ALTER TABLE `materials`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;[m
[31m---[m
[31m--- AUTO_INCREMENT for table `scope`[m
[31m---[m
[31m-ALTER TABLE `scope`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;[m
[31m---[m
[31m--- AUTO_INCREMENT for table `subcategories`[m
[31m---[m
[31m-ALTER TABLE `subcategories`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;[m
[31m---[m
[31m--- AUTO_INCREMENT for table `subcontractor`[m
[31m---[m
[31m-ALTER TABLE `subcontractor`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;[m
[31m-/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;[m
[31m-/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;[m
[31m-/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;[m
[1mdiff --git a/db/capstones.sql b/db/capstones.sql[m
[1mdeleted file mode 100644[m
[1mindex 6fc8110..0000000[m
[1m--- a/db/capstones.sql[m
[1m+++ /dev/null[m
[36m@@ -1,458 +0,0 @@[m
[31m--- phpMyAdmin SQL Dump[m
[31m--- version 4.6.5.2[m
[31m--- https://www.phpmyadmin.net/[m
[31m---[m
[31m--- Host: 127.0.0.1[m
[31m--- Generation Time: Aug 22, 2017 at 01:14 PM[m
[31m--- Server version: 10.1.21-MariaDB[m
[31m--- PHP Version: 5.6.30[m
[31m-[m
[31m-SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";[m
[31m-SET time_zone = "+00:00";[m
[31m-[m
[31m-[m
[31m-/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;[m
[31m-/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;[m
[31m-/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;[m
[31m-/*!40101 SET NAMES utf8mb4 */;[m
[31m-[m
[31m---[m
[31m--- Database: `capstones`[m
[31m---[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `categories`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `categories` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `category_id` varchar(20) NOT NULL,[m
[31m-  `category_name` varchar(255) NOT NULL,[m
[31m-  `description` varchar(50) NOT NULL,[m
[31m-  `status` varchar(20) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `categories`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `categories` (`no`, `category_id`, `category_name`, `description`, `status`) VALUES[m
[31m-(0000, '0000', '0000', '0000', 'active'),[m
[31m-(0001, 'CT0000', 'test 1', 'equipment', 'active'),[m
[31m-(0006, 'CT0001', 'test 2', 'equipment', 'active'),[m
[31m-(0007, 'CT0006', 'test 6', 'equipment', 'inactive'),[m
[31m-(0008, 'CT0007', 'bato', 'material', 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `client`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `client` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `client_id` varchar(20) NOT NULL,[m
[31m-  `client_name` varchar(255) NOT NULL,[m
[31m-  `client_person` varchar(50) NOT NULL,[m
[31m-  `client_position` varchar(50) NOT NULL,[m
[31m-  `client_contact` varchar(20) NOT NULL,[m
[31m-  `client_address` varchar(255) NOT NULL,[m
[31m-  `client_email` varchar(50) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `client`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `client` (`no`, `client_id`, `client_name`, `client_person`, `client_position`, `client_contact`, `client_address`, `client_email`, `status`) VALUES[m
[31m-(0001, 'cl1', 'Celeena Alonzo', '', '', '0912', 'Mandaluyong', 'celeena@ymail.com', 'active'),[m
[31m-(0002, 'CLI-0001', 'name', 'person', 'position', 'contact', 'address', 'email', 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `consultant`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `consultant` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `consult_id` varchar(20) NOT NULL,[m
[31m-  `consult_name` varchar(255) NOT NULL,[m
[31m-  `consult_company` varchar(255) NOT NULL,[m
[31m-  `scope_id` varchar(20) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `consultant`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `consultant` (`no`, `consult_id`, `consult_name`, `consult_company`, `scope_id`, `status`) VALUES[m
[31m-(0001, '0000', '0000', '0000', '0000', 'inactive');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `contract`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `contract` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `contract_id` varchar(20) NOT NULL,[m
[31m-  `contract_name` varchar(255) NOT NULL,[m
[31m-  `contract_refnum` int(50) NOT NULL,[m
[31m-  `contract_period` int(50) NOT NULL,[m
[31m-  `contract_amt` decimal(30,2) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `contract`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `contract` (`no`, `contract_id`, `contract_name`, `contract_refnum`, `contract_period`, `contract_amt`, `status`) VALUES[m
[31m-(0001, '0000', '0000', 0, 0, '0.00', 'inactive');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `engineer`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `engineer` ([m
[31m-  `no` int(4) NOT NULL,[m
[31m-  `engr_id` varchar(20) NOT NULL,[m
[31m-  `engr_name` int(255) NOT NULL,[m
[31m-  `engr_type` varchar(50) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `equipment`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `equipment` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `eqpt_id` varchar(50) NOT NULL,[m
[31m-  `category_id` varchar(50) NOT NULL,[m
[31m-  `subcat_id` varchar(50) NOT NULL,[m
[31m-  `eqpt_name` varchar(255) NOT NULL,[m
[31m-  `model` varchar(50) NOT NULL,[m
[31m-  `serial_no` varchar(50) NOT NULL,[m
[31m-  `cp_size` varchar(50) NOT NULL,[m
[31m-  `plate_no` varchar(255) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `equipment`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `equipment` (`no`, `eqpt_id`, `category_id`, `subcat_id`, `eqpt_name`, `model`, `serial_no`, `cp_size`, `plate_no`, `status`) VALUES[m
[31m-(0000, '0000', '0000', '0000', '0000', '0000', '0000', '0000', '0000', 'inactive'),[m
[31m-(0001, 'EQ0000', 'CT0000', 'SB0001', 'sample', 'samples', '1234', '67 hp.', 'asdffg', 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `labor`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `labor` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `labor_id` varchar(50) NOT NULL,[m
[31m-  `category_id` varchar(50) NOT NULL,[m
[31m-  `labor_name` varchar(255) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `labor`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `labor` (`no`, `labor_id`, `category_id`, `labor_name`, `status`) VALUES[m
[31m-(0012, 'lab-59274282c2690', 'cat-1', 'Safety Officer', 'inactive'),[m
[31m-(0013, 'LB0012', 'cat-3', 'asdas', 'active'),[m
[31m-(0014, 'LB0013', 'cat-3', '132', 'inactive'),[m
[31m-(0015, 'LB0014', 'cat-1', 'sam', 'active'),[m
[31m-(0016, 'LB0015', 'cat-3', 'asdasd', 'inactive'),[m
[31m-(0017, 'LB0016', 'cat-2', 'samp', 'active'),[m
[31m-(0018, 'LB0017', 'cat-2', 'carpenter', 'active'),[m
[31m-(0000, 'LB0018', 'cat-2', 'asa', 'inactive'),[m
[31m-(0000, 'LB0018', 'cat-2', 'da', 'inactive'),[m
[31m-(0000, 'LB0018', 'CT0005', 'Worker', 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `materials`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `materials` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `material_id` varchar(50) NOT NULL,[m
[31m-  `category_id` varchar(50) NOT NULL,[m
[31m-  `material_name` varchar(255) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `materials`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `materials` (`no`, `material_id`, `category_id`, `material_name`, `status`) VALUES[m
[31m-(0001, '0000', '0000', '0000', 'inactive'),[m
[31m-(0002, 'MT0001', 'CT0007', 'e-test 1', 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `part`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `part` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `part_id` varchar(20) NOT NULL,[m
[31m-  `part_code` varchar(50) NOT NULL,[m
[31m-  `part_desc` varchar(250) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `part`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `part` (`no`, `part_id`, `part_code`, `part_desc`, `status`) VALUES[m
[31m-(0001, '0000', '0000', '0000', 'inactive'),[m
[31m-(0002, 'PT0001', 'ber', 'ber', 'active'),[m
[31m-(0003, 'PT0002', '11100', '1111', 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `project`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `project` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `proj_id` varchar(20) NOT NULL,[m
[31m-  `contract_id` varchar(20) NOT NULL,[m
[31m-  `proj_code` varchar(255) NOT NULL,[m
[31m-  `proj_name` varchar(255) NOT NULL,[m
[31m-  `proj_location` varchar(255) NOT NULL,[m
[31m-  `client_id` varchar(20) NOT NULL,[m
[31m-  `award_date` date NOT NULL,[m
[31m-  `ntp_date` date NOT NULL,[m
[31m-  `target_date` date NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `scope`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `scope` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `scope_id` varchar(20) NOT NULL,[m
[31m-  `scope_name` varchar(255) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `scope`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `scope` (`no`, `scope_id`, `scope_name`, `status`) VALUES[m
[31m-(0001, 'sc1', 'Excavation', 'active'),[m
[31m-(0002, 'SCSCS1', 'Sample', 'inactive'),[m
[31m-(0003, 'SC0002', 'Isa pa', 'active'),[m
[31m-(0000, 'SC0003', 'test 1', 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `subcategories`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `subcategories` ([m
[31m-  `no` int(4) UNSIGNED ZEROFILL NOT NULL,[m
[31m-  `subcat_id` varchar(20) NOT NULL,[m
[31m-  `category_id` varchar(20) NOT NULL,[m
[31m-  `subcat_name` varchar(255) NOT NULL,[m
[31m-  `description` varchar(50) NOT NULL,[m
[31m-  `status` varchar(20) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `subcategories`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `subcategories` (`no`, `subcat_id`, `category_id`, `subcat_name`, `description`, `status`) VALUES[m
[31m-(0001, '0000', '0000', '0000', '0000', 'active'),[m
[31m-(0002, 'SB0001', 'CT0000', 'subtest 1', 'equipment', 'active'),[m
[31m-(0003, 'SB0002', 'CT0000', 'subtest 2-1', 'equipment', 'active'),[m
[31m-(0004, 'SB0003', 'CT0001', 'subtest for 2', 'equipment', 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `subcontractor`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `subcontractor` ([m
[31m-  `no` int(4) NOT NULL,[m
[31m-  `subcon_id` varchar(20) NOT NULL,[m
[31m-  `subcon_name` varchar(255) NOT NULL,[m
[31m-  `subcon_contact` varchar(20) NOT NULL,[m
[31m-  `subcon_amt` decimal(30,2) NOT NULL,[m
[31m-  `scope_id` int(11) NOT NULL,[m
[31m-  `billing_sched` date NOT NULL,[m
[31m-  `subcon_duration` varchar(50) NOT NULL,[m
[31m-  `num_personnel` int(20) NOT NULL,[m
[31m-  `status` varchar(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `subcontractor`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `subcontractor` (`no`, `subcon_id`, `subcon_name`, `subcon_contact`, `subcon_amt`, `scope_id`, `billing_sched`, `subcon_duration`, `num_personnel`, `status`) VALUES[m
[31m-(1, 's1', 'Erwin Builders', '123456', '45000.00', 12, '2017-07-25', '30 cal. days', 50, 'active');[m
[31m-[m
[31m--- --------------------------------------------------------[m
[31m-[m
[31m---[m
[31m--- Table structure for table `users`[m
[31m---[m
[31m-[m
[31m-CREATE TABLE `users` ([m
[31m-  `user_name` varchar(15) NOT NULL,[m
[31m-  `user_pass` varchar(50) NOT NULL,[m
[31m-  `user_type` varchar(15) NOT NULL,[m
[31m-  `user_stat` char(10) NOT NULL[m
[31m-) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[31m-[m
[31m---[m
[31m--- Dumping data for table `users`[m
[31m---[m
[31m-[m
[31m-INSERT INTO `users` (`user_name`, `user_pass`, `user_type`, `user_stat`) VALUES[m
[31m-('admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN', 'active'),[m
[31m-('user', '21232f297a57a5a743894a0e4a801fc3', 'USER', 'active');[m
[31m-[m
[31m---[m
[31m--- Indexes for dumped tables[m
[31m---[m
[31m-[m
[31m---[m
[31m--- Indexes for table `categories`[m
[31m---[m
[31m-ALTER TABLE `categories`[m
[31m-  ADD PRIMARY KEY (`category_id`),[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `client`[m
[31m---[m
[31m-ALTER TABLE `client`[m
[31m-  ADD PRIMARY KEY (`client_id`),[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `consultant`[m
[31m---[m
[31m-ALTER TABLE `consultant`[m
[31m-  ADD PRIMARY KEY (`consult_id`),[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `contract`[m
[31m---[m
[31m-ALTER TABLE `contract`[m
[31m-  ADD PRIMARY KEY (`contract_id`),[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `equipment`[m
[31m---[m
[31m-ALTER TABLE `equipment`[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `materials`[m
[31m---[m
[31m-ALTER TABLE `materials`[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `part`[m
[31m---[m
[31m-ALTER TABLE `part`[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `subcategories`[m
[31m---[m
[31m-ALTER TABLE `subcategories`[m
[31m-  ADD UNIQUE KEY `no` (`no`);[m
[31m-[m
[31m---[m
[31m--- Indexes for table `users`[m
[31m---[m
[31m-ALTER TABLE `users`[m
[31m-  ADD UNIQUE KEY `users_name` (`user_name`);[m
[31m-[m
[31m---[m
[31m--- AUTO_INCREMENT for dumped tables[m
[31m---[m
[31m-[m
[31m---[m
[31m--- AUTO_INCREMENT for table `categories`[m
[31m---[m
[31m-ALTER TABLE `categories`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;[m
[31m---[m
[31m--- AUTO_INCREMENT for table `client`[m
[31m---[m
[31m-ALTER TABLE `client`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;[m
[31m---[m
[31m--- AUTO_INCREMENT for table `consultant`[m
[31m---[m
[31m-ALTER TABLE `consultant`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;[m
[31m---[m
[31m--- AUTO_INCREMENT for table `contract`[m
[31m---[m
[31m-ALTER TABLE `contract`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;[m
[31m---[m
[31m--- AUTO_INCREMENT for table `equipment`[m
[31m---[m
[31m-ALTER TABLE `equipment`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;[m
[31m---[m
[31m--- AUTO_INCREMENT for table `materials`[m
[31m---[m
[31m-ALTER TABLE `materials`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;[m
[31m---[m
[31m--- AUTO_INCREMENT for table `part`[m
[31m---[m
[31m-ALTER TABLE `part`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;[m
[31m---[m
[31m--- AUTO_INCREMENT for table `subcategories`[m
[31m---[m
[31m-ALTER TABLE `subcategories`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;[m
[31m-/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;[m
[31m-/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;[m
[31m-/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;[m
[1mdiff --git a/red/capstone_v6.sql b/db/mock3.sql[m
[1msimilarity index 95%[m
[1mrename from red/capstone_v6.sql[m
[1mrename to db/mock3.sql[m
[1mindex 1788624..c34b0a9 100644[m
[1m--- a/red/capstone_v6.sql[m
[1m+++ b/db/mock3.sql[m
[36m@@ -1,13 +1,15 @@[m
 -- phpMyAdmin SQL Dump[m
[31m--- version 4.6.5.2[m
[32m+[m[32m-- version 4.7.0[m
 -- https://www.phpmyadmin.net/[m
 --[m
 -- Host: 127.0.0.1[m
[31m--- Generation Time: Sep 12, 2017 at 09:08 AM[m
[31m--- Server version: 10.1.21-MariaDB[m
[31m--- PHP Version: 5.6.30[m
[32m+[m[32m-- Generation Time: Sep 18, 2017 at 05:32 PM[m
[32m+[m[32m-- Server version: 10.1.25-MariaDB[m
[32m+[m[32m-- PHP Version: 5.6.31[m
 [m
 SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";[m
[32m+[m[32mSET AUTOCOMMIT = 0;[m
[32m+[m[32mSTART TRANSACTION;[m
 SET time_zone = "+00:00";[m
 [m
 [m
[36m@@ -17,7 +19,7 @@[m [mSET time_zone = "+00:00";[m
 /*!40101 SET NAMES utf8mb4 */;[m
 [m
 --[m
[31m--- Database: `capstone_v6`[m
[32m+[m[32m-- Database: `mock3`[m
 --[m
 [m
 -- --------------------------------------------------------[m
[36m@@ -257,8 +259,8 @@[m [mCREATE TABLE `contract` ([m
   `contract_name` varchar(255) NOT NULL,[m
   `contract_refnum` varchar(50) NOT NULL,[m
   `contract_days` int(11) NOT NULL,[m
[31m-  `contract_start` datetime NOT NULL,[m
[31m-  `contract_period` datetime NOT NULL,[m
[32m+[m[32m  `contract_start` date NOT NULL,[m
[32m+[m[32m  `contract_period` date NOT NULL,[m
   `contract_amt` decimal(30,2) NOT NULL,[m
   `status` enum('ACTIVE','INACTIVE') NOT NULL[m
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;[m
[36m@@ -268,7 +270,22 @@[m [mCREATE TABLE `contract` ([m
 --[m
 [m
 INSERT INTO `contract` (`no`, `contract_id`, `emp_id`, `client_id`, `contract_name`, `contract_refnum`, `contract_days`, `contract_start`, `contract_period`, `contract_amt`, `status`) VALUES[m
[31m-(1, 'contract beta', 'emp-0001', 'CLI-0006', 'beta', 'beta', 100, '2017-09-27 00:00:00', '2017-09-20 00:00:00', '10000.00', 'ACTIVE');[m
[32m+[m[32m(4, '12345', 'emp-0001', 'CLI-0010', '12345', '0005-12-31', 1234, '0005-12-31', '0005-12-31', '23456.00', 'ACTIVE'),[m
[32m+[m[32m(39, '123456700', 'emp-0001', 'CLI-0009', '67890', '2017-12-31', 6789, '2017-12-31', '2017-10-31', '999.00', 'ACTIVE'),[m
[32m+[m[32m(40, '12345670000', 'emp-0001', 'CLI-0008', '67890', '2017-12-31', 6789, '2017-12-31', '2017-10-31', '999.00', 'ACTIVE'),[m
[32m+[m[32m(55, 'bernie', 'emp-0002', 'CLI-0009', '1234567', 'lalakokaori', 23456, '0000-00-00', '0000-00-00', '23456.00', 'ACTIVE'),[m
[32m+[m[32m(41, 'beta', 'emp-0001', 'CLI-0011', 'beta', '0001-01-01', 0, '0001-01-01', '0001-01-01', '0.00', 'ACTIVE'),[m
[32m+[m[32m(1, 'contract beta', 'emp-0001', 'CLI-0006', 'beta', 'beta', 100, '2017-09-27', '2017-09-20', '10000.00', 'ACTIVE'),[m
[32m+[m[32m(45, 'emo metal', 'emp-0001', 'CLI-0009', 'lalaokaori', 'lalakokaori', 0, '0001-01-01', '0001-01-01', '10000000000.00', 'ACTIVE'),[m
[32m+[m[32m(50, 'emo metal18', 'emp-0001', 'CLI-0008', 'lalaokaori', 'lalakokaoris', 0, '0001-01-01', '0001-01-01', '10000000000.00', 'ACTIVE'),[m
[32m+[m[32m(51, 'emo metal19', 'emp-0001', 'CLI-0009', 'lalaokaori', 'lalakokaoris', 0, '0001-01-01', '0001-01-01', '10000000000.00', 'ACTIVE'),[m
[32m+[m[32m(49, 'emo metal2', 'emp-0001', 'CLI-0009', 'lalaokaori', 'lalakokaori', 0, '0001-01-01', '0001-01-01', '10000000000.00', 'ACTIVE'),[m
[32m+[m[32m(52, 'emo metal21', 'emp-0001', 'CLI-0011', 'lalaokaori', 'lalakokaoris', 0, '0001-01-01', '0001-01-01', '10000000000.00', 'ACTIVE'),[m
[32m+[m[32m(54, 'emo metal22', 'emp-0001', 'CLI-0008', 'lalaokaori', 'luck', 0, '0001-01-01', '0001-01-01', '10000000000.00', 'ACTIVE'),[m
[32m+[m[32m(47, 'emo metal27', 'emp-0001', 'CLI-0011', 'lalaokaori', 'lalakokaori', 0, '0001-01-01', '0001-01-01', '10000000000.00', 'ACTIVE'),[m
[32m+[m[32m(43, 'lalakokaori', 'emp-0001', 'CLI-0011', 'lalaokaori', 'lalakokaori', 0, '0001-01-01', '0001-01-01', '10000000000.00', 'ACTIVE'),[m
[32m+[m[32m(34, 'qwertyQ', 'emp-0001', 'CLI-0008', '34567', '5678-12-31', 5, '5678-12-31', '0089-06-07', '234567.00', 'ACTIVE'),[m
[32m+[m[32m(38, 'qwertyuiop[', 'emp-0001', 'CLI-0010', 'qwertyui', '56789-03-04', 23456789, '0000-00-00', '0000-00-00', '34567.00', 'ACTIVE');[m
 [m
 -- --------------------------------------------------------[m
 [m
[36m@@ -376,7 +393,7 @@[m [mCREATE TABLE `employee` ([m
 --[m
 [m
 INSERT INTO `employee` (`no`, `emp_id`, `name`, `position`, `address`, `contact`, `email`, `status`) VALUES[m
[31m-(0001, 'emp-0001', 'Eunice Saus Beltran', 'Engineer', '', '', '', 'ACTIVE'),[m
[32m+[m[32m(0001, 'emp-0001', 'Eunice Saus Beltran', 'Engineer', 'er', 'er', 'er', 'ACTIVE'),[m
 (0002, 'emp-0002', 'Bernie Zabala Remollo', '', 'san juan', 'my no', 'b.z@r.com', 'ACTIVE');[m
 [m
 -- --------------------------------------------------------[m
[36m@@ -761,6 +778,7 @@[m [mCREATE TABLE `project` ([m
 --[m
 [m
 INSERT INTO `project` (`no`, `proj_id`, `contract_id`, `proj_name`, `proj_code`, `proj_location`, `award_date`, `ntp_date`, `start_date`, `target_date`, `status`) VALUES[m
[32m+[m[32m(0002, 'PJ0001', 'emo metal22', '12345', '12342345', '1234', '0078-05-06', '0000-00-00', '0005-12-31', '0789-05-06', 'ACTIVE'),[m
 (0001, 'proj beta', 'contract beta', 'beta', 'beta', 'beta', '2017-09-19', '2017-09-20', '2017-09-27', '2017-09-20', 'active');[m
 [m
 -- --------------------------------------------------------[m
[36m@@ -1039,7 +1057,8 @@[m [mCREATE TABLE `user` ([m
 --[m
 [m
 INSERT INTO `user` (`no`, `user_id`, `emp_id`, `user_name`, `user_pass`, `user_type`, `status`) VALUES[m
[31m-(1, 'user-0001', 'emp-0001', 'belts', '21232f297a57a5a743894a0e4a801fc3', 'PROJECT ENGINEER', 'ACTIVE');[m
[32m+[m[32m(1, 'user-0001', 'emp-0001', 'belts', '21232f297a57a5a743894a0e4a801fc3', 'PROJECT ENGINEER', 'ACTIVE'),[m
[32m+[m[32m(2, 'user-0002', 'emp-0002', 'lalakokaori', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN', 'ACTIVE');[m
 [m
 -- --------------------------------------------------------[m
 [m
[36m@@ -1593,7 +1612,7 @@[m [mALTER TABLE `consultant`[m
 -- AUTO_INCREMENT for table `contract`[m
 --[m
 ALTER TABLE `contract`[m
[31m-  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;[m
[32m+[m[32m  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;[m
 --[m
 -- AUTO_INCREMENT for table `dailyacco`[m
 --[m
[36m@@ -1713,7 +1732,7 @@[m [mALTER TABLE `problems`[m
 -- AUTO_INCREMENT for table `project`[m
 --[m
 ALTER TABLE `project`[m
[31m-  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;[m
[32m+[m[32m  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;[m
 --[m
 -- AUTO_INCREMENT for table `received`[m
 --[m
[36m@@ -1778,7 +1797,7 @@[m [mALTER TABLE `subcontractor`[m
 -- AUTO_INCREMENT for table `user`[m
 --[m
 ALTER TABLE `user`[m
[31m-  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;[m
[32m+[m[32m  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;[m
 --[m
 -- AUTO_INCREMENT for table `visitors`[m
 --[m
[36m@@ -2060,6 +2079,7 @@[m [mALTER TABLE `user`[m
 --[m
 ALTER TABLE `workacco`[m
   ADD CONSTRAINT `workacco_ibfk_1` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`);[m
[32m+[m[32mCOMMIT;[m
 [m
 /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;[m
 /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;[m
[1mdiff --git a/model/master/connect.php b/model/master/connect.php[m
[1mnew file mode 100644[m
[1mindex 0000000..e0473fe[m
[1m--- /dev/null[m
[1m+++ b/model/master/connect.php[m
[36m@@ -0,0 +1,8 @@[m
[32m+[m[32m<?php[m
[32m+[m[32m      $conn = new PDO("mysql:host=localhost;dbname=mock3;","root","");[m
[32m+[m	[32m  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);[m
[32m+[m	[32m  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);[m
[32m+[m
[32m+[m	[32mini_set('display_errors',1);[m
[32m+[m	[32merror_reporting(E_ALL &~ E_NOTICE);[m
[32m+[m[32m?>[m
[1mdiff --git a/model/project/populate_table_main.php b/model/project/populate_table_main.php[m
[1mindex 758dfaf..c2b1f28 100644[m
[1m--- a/model/project/populate_table_main.php[m
[1m+++ b/model/project/populate_table_main.php[m
[36m@@ -2,14 +2,14 @@[m
     include('../master/connect.php');[m
 [m
 [m
[31m-  $sql = "SELECT * from project where status='active'";[m
[32m+[m[32m  $sql = "SELECT * from contract where status='active'";[m
   $q = $conn->prepare($sql);[m
   $q -> execute();[m
   $browse = $q -> fetchAll();[m
 [m
   foreach($browse as $fetch)[m
   {[m
[31m-    $output[] = array ($fetch['contract_id'],$fetch['proj_id']);[m
[32m+[m[32m    $output[] = array ($fetch['contract_id'],$fetch['contract_name']);[m
   }[m
 $conn = null;[m
 [m
[1mdiff --git a/model/transaction/contract.php b/model/transaction/contract.php[m
[1mindex cf94757..ee6f8c3 100644[m
[1m--- a/model/transaction/contract.php[m
[1m+++ b/model/transaction/contract.php[m
[36m@@ -4,6 +4,7 @@[m
     $_SESSION['clients']=$_POST['client'];[m
     $_SESSION['ref']=$_POST['ref'];[m
     $_SESSION['cont_id']=$_POST['cont_id'];[m
[32m+[m[32m    $_SESSION['name']=$_POST['name'];[m
     $cont_id=$_POST['cont_id'];[m
     $client=$_POST['client'];[m
     $ref=$_POST['ref'];[m
[36m@@ -12,12 +13,12 @@[m
     $day=$_POST['day'];[m
     $amount=$_POST['amount'];[m
     $user=$_POST['user'];[m
[31m-    $period=$_POST['period'];[m
[32m+[m[32m    //$period=$_POST['period'];[m
 [m
 [m
[31m-    $sql = "INSERT INTO contract(contract_id,emp_id,client_id,contract_name,contract_refnum,contract_days,contract_start,contract_period,contract_amt,status) values(?,?,?,?,?,?,?,?,?,?)";[m
[32m+[m[32m    $sql = "INSERT INTO contract(contract_id,emp_id,client_id,contract_name,contract_refnum,contract_days,contract_start,contract_amt,status) values(?,?,?,?,?,?,?,?,?)";[m
   $q = $conn->prepare($sql);[m
[31m-  $q -> execute(array($cont_id,$user,$client,$name,$ref,$day,$start,$period,$amount,'ACTIVE'));[m
[32m+[m[32m  $q -> execute(array($cont_id,$user,$client,$name,$ref,$day,$start,$amount,'ACTIVE'));[m
 [m
   $conn = null;[m
 [m
[1mdiff --git a/view/maintenance/client/main.php b/view/maintenance/client/main.php[m
[1mindex 9887bf9..6742a5e 100644[m
[1m--- a/view/maintenance/client/main.php[m
[1m+++ b/view/maintenance/client/main.php[m
[36m@@ -59,7 +59,7 @@[m
                                 <thead>[m
                                     <tr>[m
                                         <th>ID</th>[m
[31m-                                        <th>Company </th>[m
[32m+[m[32m                                        <th width="20%">Company </th>[m
                                         <th>Contact Person</th>[m
                                         <th>Contact Number</th>[m
                                         <th>Company Contact</th>[m
[1mdiff --git a/view/transaction/steps/main.php b/view/transaction/steps/main.php[m
[1mindex fba2ff2..c3255c1 100644[m
[1m--- a/view/transaction/steps/main.php[m
[1m+++ b/view/transaction/steps/main.php[m
[36m@@ -26,12 +26,14 @@[m
 [m
             <p><br>[m
 [m
[31m-            <div id="proj_name_div">[m
[31m-              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-name">Project Name <span class="required">*</span>[m
[32m+[m
[32m+[m[41m            [m
[32m+[m
[32m+[m[32m              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-location">Contract Reference Number<span class="required">*</span>[m
               </label>[m
[31m-              <input type="text" id="proj_name" required="required" class="form-control col-md-7 col-xs-12">[m
[32m+[m[32m              <input type="text"  required="required" disabled="disabled" value='<?=$_SESSION["name"];?>' class="form-control col-md-7 col-xs-12">[m
              <br><br>[m
[31m-           </div><div id="proj_code_div">[m
[32m+[m[32m           <div id="proj_code_div">[m
               <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-code">Project Code <span class="required">*</span>[m
               </label>[m
               <input type="text" id="proj_code" required="required" class="form-control col-md-7 col-xs-12">[m
[36m@@ -49,12 +51,7 @@[m
               </label>[m
               <input type="text"  required="required" disabled="disabled" value='<?=$_SESSION["ref"];?>' class="form-control col-md-7 col-xs-12">[m
              <br><br>[m
[31m-            <div id="proj_start_div">[m
[31m-            <label class="control-label col-md-24 col-sm-12 col-xs-12" for="cont-period">Start Date <span class="required">*</span>[m
[31m-            </label>[m
[31m-            <input type="date" id="proj_start" required="required"  class="form-control col-md-7 col-xs-12">[m
[31m-           <br><br>[m
[31m-         </div><div id="proj_ntp_div">[m
[32m+[m[32m             <div id="proj_ntp_div">[m
              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj_location">Date Of NTP <span class="required">*</span>[m
              </label>[m
             <input type="date" id="proj_ntp" required="required" class="form-control col-md-7 col-xs-12">[m
[36m@@ -67,11 +64,11 @@[m
        <div id="proj_target_div">[m
         <label class="control-label col-md-24 col-sm-12 col-xs-12" for="date-target">Target Date <span class="required">*</span>[m
         </label>[m
[31m-        <input type="date" id="date_target" required="required" class="form-control col-md-7 col-xs-12">[m
[32m+[m[32m        <input type="date" id="date_target" required="required"  disable="disabled" class="form-control col-md-7 col-xs-12">[m
 [m
      </div>[m
       </div>[m
[31m-<br><br><br>[m
[32m+[m[32m  <input type="hidden" id="proj_name" required="required" value='<?=$_SESSION["name"];?>' class="form-control col-md-7 col-xs-12">[m
 [m
 [m
 [m
[1mdiff --git a/view/transaction/steps/main_contract.html b/view/transaction/steps/main_contract.html[m
[1mindex ec3437e..bc97290 100644[m
[1m--- a/view/transaction/steps/main_contract.html[m
[1m+++ b/view/transaction/steps/main_contract.html[m
[36m@@ -29,11 +29,6 @@[m
               </label>[m
               <input type="text" id="cont_name" required="required" class="form-control col-md-7 col-xs-12">[m
              <br><br>[m
[31m-           </div><div id="cont_period_div">[m
[31m-              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-location">Contract Period <span class="required">*</span>[m
[31m-              </label>[m
[31m-             <input type="date" id="cont_period" required="required" class="form-control col-md-7 col-xs-12">[m
[31m-             <br><br>[m
            </div><div id="cont_day_div">[m
               <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-location">Contract Day <span class="required">*</span>[m
               </label>[m
[36m@@ -46,7 +41,7 @@[m
            </div><div id="cont_amount_div">[m
              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-location">Contract Amount <span class="required">*</span>[m
              </label>[m
[31m-            <input type="text" id="cont_amount" required="required" class="form-control col-md-7 col-xs-12">[m
[32m+[m[32m            <input type="number" id="cont_amount" required="required" class="form-control col-md-7 col-xs-12">[m
             <br><br><br>[m
           </div>[m
 [m
