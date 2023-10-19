-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 01:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pravilabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `popular_test`
--

CREATE TABLE `popular_test` (
  `id` int(200) NOT NULL,
  `package_name` varchar(200) NOT NULL,
  `time` varchar(50) NOT NULL,
  `test_info` varchar(200) NOT NULL,
  `price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popular_test`
--

INSERT INTO `popular_test` (`id`, `package_name`, `time`, `test_info`, `price`) VALUES
(4, 'Complete Blood Count; CBC Test', ' Within 24', ' No specific requirement', 0),
(5, 'Blood Group ABO Test', ' Same Day', ' No specific requirement', 0),
(6, 'LFT Test', ' Within 24', '  8-10 fasting requiements', 0),
(7, 'Kidney Function Test; KFT', ' Within 24', ' No specific requirement', 0),
(8, 'TSH Blood Test', ' Within 24', ' No specific requirement', 0),
(9, 'T3 Blood Test', ' Within 24', ' No specific requirement', 0),
(10, 'T4 Blood Test', ' Within 24', ' No specific requirement', 0),
(11, 'D-Dimer Test', ' 6', ' No Special Preparation Required.', 0),
(12, 'Ferritin Test', ' 6', ' No Special Preparation Required.', 0),
(13, 'Prothrombin Time Test', ' 6', ' No Special Preparation Required.', 0),
(14, 'ESR Test', ' 6', ' No Special Preparation Required.', 0),
(15, 'Lipid Profile Test', ' 24', ' No Special Preparation Required.', 0),
(16, 'Thyroid Test', ' 24', ' No Special Preparation Required.', 0),
(17, 'HbA1C Test', ' Same Day', ' No Special Preparation Required.', 0),
(18, 'APTT Test', ' 24', ' No Special Preparation Required.', 0),
(19, 'Blood Sugar Fasting Test', ' ', ' No Special Preparation Required.', 0),
(20, 'Urine Routine Test', ' 24', ' No Special Preparation Required.', 0),
(21, 'RT PCR Test', ' 12', ' No Special Preparation Required.', 0),
(22, 'Homocysteine Test', ' 24', ' No Special Preparation Required.', 0),
(23, 'Prolactin Test', ' 24', ' No Special Preparation Required.', 0),
(24, 'C Reactive Protein Test', ' 24', ' No Special Preparation Required.', 0),
(25, 'Haemoglobin Test', ' 24', ' No Special Preparation Required.', 0),
(26, 'Pancreatitis Package', ' 24', ' No Special Preparation Required.', 0),
(27, 'Glucose Fasting Test', ' Same Day', ' N/A', 0),
(28, 'Creatinine Test', ' Same Day', ' N/A', 0),
(29, 'Cholesterol Test', ' Same Day', '  12 hour fasting', 0),
(30, 'Amylase Test', ' Same Day', ' N/A', 0),
(31, 'Microalbuminuria Urine Test', ' Same Day', ' N/A', 0),
(32, 'Uric Acid Test', ' 24', ' No specific requirement', 0),
(33, 'Semen Analysis Test', ' Same Day', ' N/A', 0),
(34, 'TLC & DLC Test', ' 24', ' No specific requirement', 0),
(35, 'Pap Smear Test', ' 24', ' No specific requirement', 0),
(36, 'Blood Culture & Susceptibility Test', ' 24', ' No specific requirement', 0),
(37, 'HIV 1 & 2 Antibodies By Rapid', ' 24', ' No specific requirement', 0),
(38, 'WIDAL Test', ' 24', ' No specific requirement', 0),
(39, 'Vitamin D Test', ' 24', ' Labile Analyte', 0),
(40, 'PSA-Free ( Prostrate Specific Antigen Free)Test', ' 24', ' No specific requirement', 0),
(41, 'Bilirubin- Direct', ' Same Day', ' No specific requirement', 0),
(42, 'BNP, (B- Type Neutratic Peptide)', ' 72', ' No specific requirement', 0),
(43, 'Anti Ccp Test', ' 0', ' N/A', 0),
(44, 'Beta Hcg Test', ' 0', ' N/A', 0),
(45, 'Elisa Anti Hcv Test', ' 0', ' N/A', 0),
(46, 'Liver Kidney Microsome Antibody Test', ' Third Day', ' N/A', 0),
(47, 'Mercury Serum Test', ' 0', ' N/A', 0),
(48, 'TLC Test', ' 0', ' ', 0),
(49, 'Vitamin B1 Test', ' 0', ' N/A', 0),
(50, 'RBS Test', ' 0', ' N/A', 0),
(51, 'NT Probnp Test', ' Third Day', ' No fasting Required', 0),
(52, 'CA 125 Test', ' Same Day', ' N/A', 0),
(53, 'Selenium Test', ' Seventh Day', ' N/A', 0),
(54, 'Weil Felix Test', ' Fifth Day', ' N/A', 0),
(55, 'C Peptide Test', ' Next Day', ' N/A', 0),
(56, 'Typhidot Test', ' Same Day', ' N/A', 0),
(57, 'Renal Function Test', ' Same Day', ' N/A', 0),
(58, 'Antimullerian Hormone Test', ' Same Day', ' N/A', 0),
(59, 'Stool Routine And Microscopic Examination', ' 1-3 Days', ' N/A', 0),
(60, 'Quadruple Marker Test', ' Fourth Day', ' N/A', 0),
(61, 'Culture And Sensitivity', ' Third Day', ' N/A', 0),
(62, 'Mitochondrial Antibody IFA Test', '  Fourth Day', ' N/A', 0),
(63, 'Anti DNAse B', ' Next Day', ' N/A', 0),
(64, 'Histopathology Biopsy Test', ' 3 Days', ' N/A', 0),
(65, 'Cervical Cancer Test', ' 2 Days', ' Itâ€™s Simple, Painless and Accurate', 0),
(66, 'Thrombin Time (TT)', ' Third Day', ' N/A', 0),
(67, 'Streptococcus Group B Antigen Test', ' Third Day', ' N/A', 0),
(68, 'Drugs Of Abuse: 7 Drugs Urine Screen Test', ' Next Day', ' N/A', 0),
(69, 'Drugs Of Abuse: 6 Drugs Urine Screen Test', ' Next Day', ' N/A', 0),
(70, 'Drugs Of Abuse: 4 Drugs Urine Screen Test', ' 2 Days', ' N/A', 0),
(71, 'Drugs Of Abuse: 3 Drugs Urine Screen Test', ' 2 Days', ' N/A', 0),
(72, 'Phencyclidine Drug Test', ' 2 Days', ' N/A', 0),
(73, 'Cocaine Screen Test', ' 2 Days', ' N/A', 0),
(74, 'Opiates Screen Test', ' 2 Days', ' N/A', 0),
(75, 'Amphetamine Screen Urine Test', ' Next Day', ' N/A', 0),
(76, 'Benzodiazepine Screen Qualitative Urine Test', ' Next Day', ' N/A', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `popular_test`
--
ALTER TABLE `popular_test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `popular_test`
--
ALTER TABLE `popular_test`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
