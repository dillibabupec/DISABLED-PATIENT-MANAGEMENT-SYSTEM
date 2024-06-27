-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 05:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merf`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `last_visit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`, `type`, `last_visit`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'login', '2018-03-09 12:57:23'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2018-03-09 13:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `audio_adult_behavioural`
--

CREATE TABLE `audio_adult_behavioural` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `audiometer` varchar(255) NOT NULL,
  `examiner` varchar(255) NOT NULL,
  `bill_no` varchar(255) NOT NULL,
  `test_reliability` varchar(255) NOT NULL,
  `puretone_re_pta` varchar(255) NOT NULL,
  `puretone_re_srt` varchar(255) NOT NULL,
  `puretone_re_sis` varchar(255) NOT NULL,
  `puretone_re_ucl` varchar(255) NOT NULL,
  `puretone_re_tdt` varchar(255) NOT NULL,
  `puretone_le_pta` varchar(255) NOT NULL,
  `puretone_le_srt` varchar(255) NOT NULL,
  `puretone_le_sis` varchar(255) NOT NULL,
  `puretone_le_ucl` varchar(255) NOT NULL,
  `puretone_le_tdt` varchar(255) NOT NULL,
  `ac_right_250` varchar(255) NOT NULL,
  `ac_right_500` varchar(255) NOT NULL,
  `ac_right_750` varchar(255) NOT NULL,
  `ac_right_1k` varchar(255) NOT NULL,
  `ac_right_2k` varchar(255) NOT NULL,
  `ac_right_3k` varchar(255) NOT NULL,
  `ac_right_4k` varchar(255) NOT NULL,
  `ac_right_6k` varchar(255) NOT NULL,
  `ac_right_8k` varchar(255) NOT NULL,
  `ac_left_250` varchar(255) NOT NULL,
  `ac_left_500` varchar(255) NOT NULL,
  `ac_left_750` varchar(255) NOT NULL,
  `ac_left_1k` varchar(255) NOT NULL,
  `ac_left_2k` varchar(255) NOT NULL,
  `ac_left_3k` varchar(255) NOT NULL,
  `ac_left_4k` varchar(255) NOT NULL,
  `ac_left_6k` varchar(255) NOT NULL,
  `ac_left_8k` varchar(255) NOT NULL,
  `bc_right_250` varchar(255) NOT NULL,
  `bc_right_500` varchar(255) NOT NULL,
  `bc_right_750` varchar(255) NOT NULL,
  `bc_right_1k` varchar(255) NOT NULL,
  `bc_right_2k` varchar(255) NOT NULL,
  `bc_right_3k` varchar(255) NOT NULL,
  `bc_right_4k` varchar(255) NOT NULL,
  `bc_right_6k` varchar(255) NOT NULL,
  `bc_right_8k` varchar(255) NOT NULL,
  `bc_left_250` varchar(255) NOT NULL,
  `bc_left_500` varchar(255) NOT NULL,
  `bc_left_750` varchar(255) NOT NULL,
  `bc_left_1k` varchar(255) NOT NULL,
  `bc_left_2k` varchar(255) NOT NULL,
  `bc_left_3k` varchar(255) NOT NULL,
  `bc_left_4k` varchar(255) NOT NULL,
  `bc_left_6k` varchar(255) NOT NULL,
  `bc_left_8k` varchar(255) NOT NULL,
  `provi_diagno` varchar(2555) NOT NULL,
  `recommendation` varchar(2555) NOT NULL,
  `puretone_spcl_test` varchar(255) NOT NULL,
  `tuning_fork_weber` varchar(255) NOT NULL,
  `tuning_fork_rinne_left` varchar(255) NOT NULL,
  `tuning_fork_rinne_right` varchar(255) NOT NULL,
  `examined_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio_adult_behavioural`
--

INSERT INTO `audio_adult_behavioural` (`id`, `pat_id`, `pat_name`, `audiometer`, `examiner`, `bill_no`, `test_reliability`, `puretone_re_pta`, `puretone_re_srt`, `puretone_re_sis`, `puretone_re_ucl`, `puretone_re_tdt`, `puretone_le_pta`, `puretone_le_srt`, `puretone_le_sis`, `puretone_le_ucl`, `puretone_le_tdt`, `ac_right_250`, `ac_right_500`, `ac_right_750`, `ac_right_1k`, `ac_right_2k`, `ac_right_3k`, `ac_right_4k`, `ac_right_6k`, `ac_right_8k`, `ac_left_250`, `ac_left_500`, `ac_left_750`, `ac_left_1k`, `ac_left_2k`, `ac_left_3k`, `ac_left_4k`, `ac_left_6k`, `ac_left_8k`, `bc_right_250`, `bc_right_500`, `bc_right_750`, `bc_right_1k`, `bc_right_2k`, `bc_right_3k`, `bc_right_4k`, `bc_right_6k`, `bc_right_8k`, `bc_left_250`, `bc_left_500`, `bc_left_750`, `bc_left_1k`, `bc_left_2k`, `bc_left_3k`, `bc_left_4k`, `bc_left_6k`, `bc_left_8k`, `provi_diagno`, `recommendation`, `puretone_spcl_test`, `tuning_fork_weber`, `tuning_fork_rinne_left`, `tuning_fork_rinne_right`, `examined_on`) VALUES
(1, '2', 'JOTHI ANNAMALAI', 'AUDIOMETER', 'CLINICIAN', '23', 'TEST RELIABILITY	', '1a', '2b', '3c', '4d', '5e', '6f', '7g', '8h', '9i', '10j', '11k', '12L', '13m', '14n', '15O', '16P', '17Q', '18R', '19S', '20T', '21U', '22V', '23W', '24X', '25Y', '26Z', '27AA', '28BB', '29CC', '30DD', '31EE', '32FF', '33GG', '34HH', '35ii', '36JJ', '37KK', '38LL', '39mm', '40nn', '41OO', '42PP', '43QQ', '44RR', '45SS', '46TT', '47UU', '48VV', 'jytrsaer', 'left,right', 'positive', 'positive', '2018-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `audio_adult_electrophysiologic`
--

CREATE TABLE `audio_adult_electrophysiologic` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `bera_find` varchar(2555) NOT NULL,
  `bera_impress` varchar(2555) NOT NULL,
  `oae_find` varchar(2555) NOT NULL,
  `oae_impress` varchar(2555) NOT NULL,
  `vemp_find` varchar(2555) NOT NULL,
  `vemp_impress` varchar(2555) NOT NULL,
  `cafp_find` varchar(2555) NOT NULL,
  `cafp_impress` varchar(2555) NOT NULL,
  `others_find` varchar(2555) NOT NULL,
  `others_impress` varchar(2555) NOT NULL,
  `examined_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio_adult_electrophysiologic`
--

INSERT INTO `audio_adult_electrophysiologic` (`id`, `pat_id`, `pat_name`, `bera_find`, `bera_impress`, `oae_find`, `oae_impress`, `vemp_find`, `vemp_impress`, `cafp_find`, `cafp_impress`, `others_find`, `others_impress`, `examined_on`) VALUES
(1, '5', 'vijosh', 'berafind', 'beraimp', 'oaefind', 'oaeimp', 'vempfind', 'vempimp', 'cafpfind', 'cafpimp', 'othersfind', 'othersimp', '2018-02-20'),
(2, '2', 'JOTHI ANNAMALAI', 'berafind11', 'beraimp', 'oaefind55', 'oaeimpress66', 'vempfind33', 'vempimpress44', 'cafpfind77', 'cafpimpress88', 'othersfind99', 'othersimpress100', '2018-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `audio_adult_hear_trail`
--

CREATE TABLE `audio_adult_hear_trail` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `audiometer` varchar(255) NOT NULL,
  `examiner` varchar(255) NOT NULL,
  `idno` varchar(255) NOT NULL,
  `reliability` varchar(255) NOT NULL,
  `hearaid_ac_right_250` varchar(255) NOT NULL,
  `hearaid_ac_right_500` varchar(255) NOT NULL,
  `hearaid_ac_right_750` varchar(255) NOT NULL,
  `hearaid_ac_right_1k` varchar(255) NOT NULL,
  `hearaid_ac_right_2k` varchar(255) NOT NULL,
  `hearaid_ac_right_3k` varchar(255) NOT NULL,
  `hearaid_ac_right_4k` varchar(255) NOT NULL,
  `hearaid_ac_right_6k` varchar(255) NOT NULL,
  `hearaid_ac_right_8k` varchar(255) NOT NULL,
  `hearaid_ac_left_250` varchar(255) NOT NULL,
  `hearaid_ac_left_500` varchar(255) NOT NULL,
  `hearaid_ac_left_750` varchar(255) NOT NULL,
  `hearaid_ac_left_1k` varchar(255) NOT NULL,
  `hearaid_ac_left_2k` varchar(255) NOT NULL,
  `hearaid_ac_left_3k` varchar(255) NOT NULL,
  `hearaid_ac_left_4k` varchar(255) NOT NULL,
  `hearaid_ac_left_6k` varchar(255) NOT NULL,
  `hearaid_ac_left_8k` varchar(255) NOT NULL,
  `hearaid_bc_right_250` varchar(255) NOT NULL,
  `hearaid_bc_right_500` varchar(255) NOT NULL,
  `hearaid_bc_right_750` varchar(255) NOT NULL,
  `hearaid_bc_right_1k` varchar(255) NOT NULL,
  `hearaid_bc_right_2k` varchar(255) NOT NULL,
  `hearaid_bc_right_3k` varchar(255) NOT NULL,
  `hearaid_bc_right_4k` varchar(255) NOT NULL,
  `hearaid_bc_right_6k` varchar(255) NOT NULL,
  `hearaid_bc_right_8k` varchar(255) NOT NULL,
  `hearaid_bc_left_250` varchar(255) NOT NULL,
  `hearaid_bc_left_500` varchar(255) NOT NULL,
  `hearaid_bc_left_750` varchar(255) NOT NULL,
  `hearaid_bc_left_1k` varchar(255) NOT NULL,
  `hearaid_bc_left_2k` varchar(255) NOT NULL,
  `hearaid_bc_left_3k` varchar(255) NOT NULL,
  `hearaid_bc_left_4k` varchar(255) NOT NULL,
  `hearaid_bc_left_6k` varchar(255) NOT NULL,
  `hearaid_bc_left_8k` varchar(255) NOT NULL,
  `aid_right` varchar(255) NOT NULL,
  `aid_left` varchar(255) NOT NULL,
  `hearaid_color` varchar(255) NOT NULL,
  `right_a_cond` varchar(255) NOT NULL,
  `right_l_cond` varchar(255) NOT NULL,
  `right_u_cond` varchar(255) NOT NULL,
  `right_m_cond` varchar(255) NOT NULL,
  `right_s_cond` varchar(255) NOT NULL,
  `right_sh_cond` varchar(255) NOT NULL,
  `left_a_cond` varchar(255) NOT NULL,
  `left_l_cond` varchar(255) NOT NULL,
  `left_u_cond` varchar(255) NOT NULL,
  `left_m_cond` varchar(255) NOT NULL,
  `left_s_cond` varchar(255) NOT NULL,
  `left_sh_cond` varchar(255) NOT NULL,
  `bl_a_cond` varchar(255) NOT NULL,
  `bl_l_cond` varchar(255) NOT NULL,
  `bl_u_cond` varchar(255) NOT NULL,
  `bl_m_cond` varchar(255) NOT NULL,
  `bl_s_cond` varchar(255) NOT NULL,
  `bl_sh_cond` varchar(255) NOT NULL,
  `sponde_iden_dist` varchar(255) NOT NULL,
  `sponde_iden_level` varchar(255) NOT NULL,
  `sponde_aware_dist` varchar(255) NOT NULL,
  `sponde_aware_level` varchar(255) NOT NULL,
  `ques_iden_dist` varchar(255) NOT NULL,
  `ques_iden_level` varchar(255) NOT NULL,
  `ques_aware_dist` varchar(255) NOT NULL,
  `ques_aware_level` varchar(255) NOT NULL,
  `spon_iden_right_res` varchar(255) NOT NULL,
  `spon_aware_right_res` varchar(255) NOT NULL,
  `ques_iden_right_res` varchar(255) NOT NULL,
  `ques_aware_right_res` varchar(255) NOT NULL,
  `spon_iden_left_res` varchar(255) NOT NULL,
  `spon_aware_left_res` varchar(255) NOT NULL,
  `ques_iden_left_res` varchar(255) NOT NULL,
  `ques_aware_left_res` varchar(255) NOT NULL,
  `spon_iden_bl_res` varchar(255) NOT NULL,
  `spon_aware_bl_res` varchar(255) NOT NULL,
  `ques_iden_bl_res` varchar(255) NOT NULL,
  `ques_aware_bl_res` varchar(255) NOT NULL,
  `examined_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio_adult_hear_trail`
--

INSERT INTO `audio_adult_hear_trail` (`id`, `pat_id`, `pat_name`, `audiometer`, `examiner`, `idno`, `reliability`, `hearaid_ac_right_250`, `hearaid_ac_right_500`, `hearaid_ac_right_750`, `hearaid_ac_right_1k`, `hearaid_ac_right_2k`, `hearaid_ac_right_3k`, `hearaid_ac_right_4k`, `hearaid_ac_right_6k`, `hearaid_ac_right_8k`, `hearaid_ac_left_250`, `hearaid_ac_left_500`, `hearaid_ac_left_750`, `hearaid_ac_left_1k`, `hearaid_ac_left_2k`, `hearaid_ac_left_3k`, `hearaid_ac_left_4k`, `hearaid_ac_left_6k`, `hearaid_ac_left_8k`, `hearaid_bc_right_250`, `hearaid_bc_right_500`, `hearaid_bc_right_750`, `hearaid_bc_right_1k`, `hearaid_bc_right_2k`, `hearaid_bc_right_3k`, `hearaid_bc_right_4k`, `hearaid_bc_right_6k`, `hearaid_bc_right_8k`, `hearaid_bc_left_250`, `hearaid_bc_left_500`, `hearaid_bc_left_750`, `hearaid_bc_left_1k`, `hearaid_bc_left_2k`, `hearaid_bc_left_3k`, `hearaid_bc_left_4k`, `hearaid_bc_left_6k`, `hearaid_bc_left_8k`, `aid_right`, `aid_left`, `hearaid_color`, `right_a_cond`, `right_l_cond`, `right_u_cond`, `right_m_cond`, `right_s_cond`, `right_sh_cond`, `left_a_cond`, `left_l_cond`, `left_u_cond`, `left_m_cond`, `left_s_cond`, `left_sh_cond`, `bl_a_cond`, `bl_l_cond`, `bl_u_cond`, `bl_m_cond`, `bl_s_cond`, `bl_sh_cond`, `sponde_iden_dist`, `sponde_iden_level`, `sponde_aware_dist`, `sponde_aware_level`, `ques_iden_dist`, `ques_iden_level`, `ques_aware_dist`, `ques_aware_level`, `spon_iden_right_res`, `spon_aware_right_res`, `ques_iden_right_res`, `ques_aware_right_res`, `spon_iden_left_res`, `spon_aware_left_res`, `ques_iden_left_res`, `ques_aware_left_res`, `spon_iden_bl_res`, `spon_aware_bl_res`, `ques_iden_bl_res`, `ques_aware_bl_res`, `examined_on`) VALUES
(1, '2', 'JOTHI ANNAMALAI', 'AUDIOMETERa', 'EXAMINER ', '113', 'RELIABILITYs', '11', '22', '33', '44', '55', '66', '77', '88', '99', '100', '110', '120', '130', '140', '150', '160', '170', '180', '190', '200', '210', '220', '230', '240', '250', '260', '270', '280', '290', '300', '310', '320', '330', '340', '350', '360', '370,380,390', '400,410,420', 'blue,black', '430', '440', '450', '460', '470', '480', '490', '500', '510', '520', '530', '540', '550', '560', '570', '580', '590', '600', '610', '620', '630', '640', '650', '660', '670', '680', '690', '700', '710', '720', '730', '740', '750', '760', '770', '780', '790', '800', '2018-02-27');

-- --------------------------------------------------------

--
-- Table structure for table `audio_adult_immitance_audio`
--

CREATE TABLE `audio_adult_immitance_audio` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `examiner` varchar(255) NOT NULL,
  `idno` varchar(255) NOT NULL,
  `tymp_right_ear_canal` varchar(255) NOT NULL,
  `tymp_right_peak_pressure` varchar(255) NOT NULL,
  `tymp_right_static_complaint` varchar(255) NOT NULL,
  `tymp_left_ear_canal` varchar(255) NOT NULL,
  `tymp_left_peak_pressure` varchar(255) NOT NULL,
  `tymp_left_static_complaint` varchar(255) NOT NULL,
  `tymp_findings` varchar(2555) NOT NULL,
  `reflex_right_ipsi_500` varchar(255) NOT NULL,
  `reflex_right_contra_500` varchar(255) NOT NULL,
  `reflex_left_ipsi_500` varchar(255) NOT NULL,
  `reflex_left_contra_500` varchar(255) NOT NULL,
  `reflex_right_ipsi_1k` varchar(255) NOT NULL,
  `reflex_right_contra_1k` varchar(255) NOT NULL,
  `reflex_left_ipsi_1k` varchar(255) NOT NULL,
  `reflex_left_contra_1k` varchar(255) NOT NULL,
  `reflex_right_ipsi_2k` varchar(255) NOT NULL,
  `reflex_right_contra_2k` varchar(255) NOT NULL,
  `reflex_left_ipsi_2k` varchar(255) NOT NULL,
  `reflex_left_contra_2k` varchar(255) NOT NULL,
  `reflex_right_ipsi_4k` varchar(255) NOT NULL,
  `reflex_right_contra_4k` varchar(255) NOT NULL,
  `reflex_left_ipsi_4k` varchar(255) NOT NULL,
  `reflex_left_contra_4k` varchar(255) NOT NULL,
  `reflex_right_ipsi_bbn` varchar(255) NOT NULL,
  `reflex_right_contra_bbn` varchar(255) NOT NULL,
  `reflex_left_ipsi_bbn` varchar(255) NOT NULL,
  `reflex_left_contra_bbn` varchar(255) NOT NULL,
  `reflex_findings` varchar(2555) NOT NULL,
  `acoustic_right_present` varchar(255) NOT NULL,
  `acoustic_decay_right_500` varchar(255) NOT NULL,
  `acoustic_decay_right_1k` varchar(255) NOT NULL,
  `acoustic_right_find` varchar(255) NOT NULL,
  `acoustic_left_present` varchar(255) NOT NULL,
  `acoustic_decay_left_500` varchar(255) NOT NULL,
  `acoustic_decay_left_1k` varchar(255) NOT NULL,
  `acoustic_left_find` varchar(255) NOT NULL,
  `multifreq_right_reson` varchar(255) NOT NULL,
  `multifreq_right_find` varchar(255) NOT NULL,
  `multifreq_left_reson` varchar(255) NOT NULL,
  `multifreq_left_find` varchar(255) NOT NULL,
  `multicomp_freq` varchar(255) NOT NULL,
  `multicomp_bg_right` varchar(255) NOT NULL,
  `multicomp_bg_left` varchar(255) NOT NULL,
  `multicomp_find` varchar(2555) NOT NULL,
  `eustachian_test` varchar(2555) NOT NULL,
  `eustachian_right_pressure` varchar(255) NOT NULL,
  `eustachian_right_find` varchar(255) NOT NULL,
  `eustachian_left_pressure` varchar(255) NOT NULL,
  `eustachian_left_find` varchar(255) NOT NULL,
  `impression` varchar(2555) NOT NULL,
  `enquired_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio_adult_immitance_audio`
--

INSERT INTO `audio_adult_immitance_audio` (`id`, `pat_id`, `pat_name`, `examiner`, `idno`, `tymp_right_ear_canal`, `tymp_right_peak_pressure`, `tymp_right_static_complaint`, `tymp_left_ear_canal`, `tymp_left_peak_pressure`, `tymp_left_static_complaint`, `tymp_findings`, `reflex_right_ipsi_500`, `reflex_right_contra_500`, `reflex_left_ipsi_500`, `reflex_left_contra_500`, `reflex_right_ipsi_1k`, `reflex_right_contra_1k`, `reflex_left_ipsi_1k`, `reflex_left_contra_1k`, `reflex_right_ipsi_2k`, `reflex_right_contra_2k`, `reflex_left_ipsi_2k`, `reflex_left_contra_2k`, `reflex_right_ipsi_4k`, `reflex_right_contra_4k`, `reflex_left_ipsi_4k`, `reflex_left_contra_4k`, `reflex_right_ipsi_bbn`, `reflex_right_contra_bbn`, `reflex_left_ipsi_bbn`, `reflex_left_contra_bbn`, `reflex_findings`, `acoustic_right_present`, `acoustic_decay_right_500`, `acoustic_decay_right_1k`, `acoustic_right_find`, `acoustic_left_present`, `acoustic_decay_left_500`, `acoustic_decay_left_1k`, `acoustic_left_find`, `multifreq_right_reson`, `multifreq_right_find`, `multifreq_left_reson`, `multifreq_left_find`, `multicomp_freq`, `multicomp_bg_right`, `multicomp_bg_left`, `multicomp_find`, `eustachian_test`, `eustachian_right_pressure`, `eustachian_right_find`, `eustachian_left_pressure`, `eustachian_left_find`, `impression`, `enquired_on`) VALUES
(1, '2', 'JOTHI ANNAMALAI', 'EXAMINER ', '137', 'right Ear Canal1', 'rightPeak Pressure2', 'right_Static Complaince3', 'left Ear Canal4', 'leftPeak Pressure5', 'leftStatic Complaince6', 'tympfind7', 'right_ipsi_500_8', 'right_contra_500_9', 'left_ipsi_500_10', 'left_contra_500_11', 'right_ipsi_1k_12', 'right_contra_1k_13', 'left_ipsi_1k_14', 'left_contra_1k_15', 'right_ipsi_2k_16', 'right_contra_2k_17', 'left_ipsi_2k_18', 'left_contra_2k_19', 'right_ipsi_4k_20', 'right_contra_4k_21', 'left_ipsi_4k_22', 'left_contra_4k_23', 'right_ipsi_bbn_24', 'right_contra_bbn_25', 'left_ipsi_bbn_26', 'left_contra_bbn_27', 'reflexfind_28', 'rightpresent_29', 'right_decay_500_30', 'right_decay_1k_31', 'rightfind_32', 'leftpresent_33', 'left_decay_500_34', 'left_decay_1k_35', 'leftfind_36', 'resonent_right_37', 'multifreq_right_find_38', 'resonent_left_39', 'multifreq_left_find_40', 'freq1_41,freq2_42,freq3_43', 'multicomp_bg_right_1_44,multicomp_bg_right_2_45,multicomp_bg_right_3_46', 'multicomp_bg_left_1_47,multicomp_bg_left_2_48,multicomp_bg_left_3_49', 'find_50', 'Test Procedure_51', 'pressure_right_52', 'find_right_53', 'pressure_left_54', 'find_left_55', 'impression_56', '2018-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `audio_adult_provisional`
--

CREATE TABLE `audio_adult_provisional` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `provisional_diagnosis` varchar(2555) NOT NULL,
  `examined_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio_adult_provisional`
--

INSERT INTO `audio_adult_provisional` (`id`, `pat_id`, `pat_name`, `provisional_diagnosis`, `examined_on`) VALUES
(1, '5', 'vijosh', 'Provisional Diagnosis', '2018-02-20'),
(2, '2', 'JOTHI ANNAMALAI', 'Provisional Diagnosis1', '2018-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `audio_adult_recommendation`
--

CREATE TABLE `audio_adult_recommendation` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `counselling` varchar(2555) NOT NULL,
  `device` varchar(2555) NOT NULL,
  `ent_review` varchar(255) NOT NULL,
  `follow_up` varchar(255) NOT NULL,
  `examined_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio_adult_recommendation`
--

INSERT INTO `audio_adult_recommendation` (`id`, `pat_id`, `pat_name`, `counselling`, `device`, `ent_review`, `follow_up`, `examined_on`) VALUES
(1, '2', 'JOTHI ANNAMALAI', 'Counsellingo', 'Deviceo', 'yes', 'yes', '2018-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `audio_child_behavioural`
--

CREATE TABLE `audio_child_behavioural` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `audiometer` varchar(255) NOT NULL,
  `examiner` varchar(255) NOT NULL,
  `bill_no` varchar(255) NOT NULL,
  `test_reliability` varchar(255) NOT NULL,
  `puretone_re_pta` varchar(255) NOT NULL,
  `puretone_re_srt` varchar(255) NOT NULL,
  `puretone_re_sis` varchar(255) NOT NULL,
  `puretone_re_ucl` varchar(255) NOT NULL,
  `puretone_re_tdt` varchar(255) NOT NULL,
  `puretone_le_pta` varchar(255) NOT NULL,
  `puretone_le_srt` varchar(255) NOT NULL,
  `puretone_le_sis` varchar(255) NOT NULL,
  `puretone_le_ucl` varchar(255) NOT NULL,
  `puretone_le_tdt` varchar(255) NOT NULL,
  `ac_right_250` varchar(255) NOT NULL,
  `ac_right_500` varchar(255) NOT NULL,
  `ac_right_750` varchar(255) NOT NULL,
  `ac_right_1k` varchar(255) NOT NULL,
  `ac_right_2k` varchar(255) NOT NULL,
  `ac_right_3k` varchar(255) NOT NULL,
  `ac_right_4k` varchar(255) NOT NULL,
  `ac_right_6k` varchar(255) NOT NULL,
  `ac_right_8k` varchar(255) NOT NULL,
  `ac_left_250` varchar(255) NOT NULL,
  `ac_left_500` varchar(255) NOT NULL,
  `ac_left_750` varchar(255) NOT NULL,
  `ac_left_1k` varchar(255) NOT NULL,
  `ac_left_2k` varchar(255) NOT NULL,
  `ac_left_3k` varchar(255) NOT NULL,
  `ac_left_4k` varchar(255) NOT NULL,
  `ac_left_6k` varchar(255) NOT NULL,
  `ac_left_8k` varchar(255) NOT NULL,
  `bc_right_250` varchar(255) NOT NULL,
  `bc_right_500` varchar(255) NOT NULL,
  `bc_right_750` varchar(255) NOT NULL,
  `bc_right_1k` varchar(255) NOT NULL,
  `bc_right_2k` varchar(255) NOT NULL,
  `bc_right_3k` varchar(255) NOT NULL,
  `bc_right_4k` varchar(255) NOT NULL,
  `bc_right_6k` varchar(255) NOT NULL,
  `bc_right_8k` varchar(255) NOT NULL,
  `bc_left_250` varchar(255) NOT NULL,
  `bc_left_500` varchar(255) NOT NULL,
  `bc_left_750` varchar(255) NOT NULL,
  `bc_left_1k` varchar(255) NOT NULL,
  `bc_left_2k` varchar(255) NOT NULL,
  `bc_left_3k` varchar(255) NOT NULL,
  `bc_left_4k` varchar(255) NOT NULL,
  `bc_left_6k` varchar(255) NOT NULL,
  `bc_left_8k` varchar(255) NOT NULL,
  `provi_diagno` varchar(2555) NOT NULL,
  `recommendation` varchar(2555) NOT NULL,
  `puretone_spcl_test` varchar(255) NOT NULL,
  `tuning_fork_weber` varchar(255) NOT NULL,
  `tuning_fork_rinne_left` varchar(255) NOT NULL,
  `tuning_fork_rinne_right` varchar(255) NOT NULL,
  `examined_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio_child_behavioural`
--

INSERT INTO `audio_child_behavioural` (`id`, `pat_id`, `pat_name`, `audiometer`, `examiner`, `bill_no`, `test_reliability`, `puretone_re_pta`, `puretone_re_srt`, `puretone_re_sis`, `puretone_re_ucl`, `puretone_re_tdt`, `puretone_le_pta`, `puretone_le_srt`, `puretone_le_sis`, `puretone_le_ucl`, `puretone_le_tdt`, `ac_right_250`, `ac_right_500`, `ac_right_750`, `ac_right_1k`, `ac_right_2k`, `ac_right_3k`, `ac_right_4k`, `ac_right_6k`, `ac_right_8k`, `ac_left_250`, `ac_left_500`, `ac_left_750`, `ac_left_1k`, `ac_left_2k`, `ac_left_3k`, `ac_left_4k`, `ac_left_6k`, `ac_left_8k`, `bc_right_250`, `bc_right_500`, `bc_right_750`, `bc_right_1k`, `bc_right_2k`, `bc_right_3k`, `bc_right_4k`, `bc_right_6k`, `bc_right_8k`, `bc_left_250`, `bc_left_500`, `bc_left_750`, `bc_left_1k`, `bc_left_2k`, `bc_left_3k`, `bc_left_4k`, `bc_left_6k`, `bc_left_8k`, `provi_diagno`, `recommendation`, `puretone_spcl_test`, `tuning_fork_weber`, `tuning_fork_rinne_left`, `tuning_fork_rinne_right`, `examined_on`) VALUES
(1, '1', 'Jothi Annamalai K', 'AUDIOMETERs', 'CLINICIANs', '232', 'TEST RELIABILITs', '1aa', '2bb', '3cc', '4dd', '5ee', '6ff', '7gg', '8hh', '9ii', '10jj', '11kk', '12Ll', '13mm', '14nn', '15Oo', '16Pp', '17Q', '18Rr', '19Ss', '20Tt', '21Uu', '22Vv', '23Ww', '24Xx', '25Yy', '26Zz', '27AAa', '28BBb', '29CCc', '30DDd', '31EEe', '32FFf', '33GGg', '34HHh', '35iii', '36JJj', '37KKk', '38LLl', '39mmm', '40nnn', '41OOo', '42PPp', '43QQq', '44RRr', '45SSs', '46TTt', '47UUu', '48VVv', 'spcl test', 'left', 'negative', 'negative', '2018-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `audio_child_electrophysiologic`
--

CREATE TABLE `audio_child_electrophysiologic` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `bera_find` varchar(2555) NOT NULL,
  `bera_impress` varchar(2555) NOT NULL,
  `oae_find` varchar(2555) NOT NULL,
  `oae_impress` varchar(2555) NOT NULL,
  `vemp_find` varchar(2555) NOT NULL,
  `vemp_impress` varchar(2555) NOT NULL,
  `cafp_find` varchar(2555) NOT NULL,
  `cafp_impress` varchar(2555) NOT NULL,
  `others_find` varchar(2555) NOT NULL,
  `others_impress` varchar(2555) NOT NULL,
  `examined_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio_child_electrophysiologic`
--

INSERT INTO `audio_child_electrophysiologic` (`id`, `pat_id`, `pat_name`, `bera_find`, `bera_impress`, `oae_find`, `oae_impress`, `vemp_find`, `vemp_impress`, `cafp_find`, `cafp_impress`, `others_find`, `others_impress`, `examined_on`) VALUES
(1, '5', 'vijosh', 'berafind', 'beraimp', 'oaefind', 'oaeimp', 'vempfind', 'vempimp', 'cafpfind', 'cafpimp', 'othersfind', 'othersimp', '2018-02-20'),
(2, '1', 'Jothi Annamalai K', 'berafind1', 'beraimpress2', 'oaefind3', 'oaeimpress4', 'vempfind5', 'vempimpress6', 'cafpfind7', 'cafpimpress8', 'othersfind9', 'othersimpress10', '2018-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `audio_child_hear_trail`
--

CREATE TABLE `audio_child_hear_trail` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `audiometer` varchar(255) NOT NULL,
  `examiner` varchar(255) NOT NULL,
  `idno` varchar(255) NOT NULL,
  `reliability` varchar(255) NOT NULL,
  `hearaid_ac_right_250` varchar(255) NOT NULL,
  `hearaid_ac_right_500` varchar(255) NOT NULL,
  `hearaid_ac_right_750` varchar(255) NOT NULL,
  `hearaid_ac_right_1k` varchar(255) NOT NULL,
  `hearaid_ac_right_2k` varchar(255) NOT NULL,
  `hearaid_ac_right_3k` varchar(255) NOT NULL,
  `hearaid_ac_right_4k` varchar(255) NOT NULL,
  `hearaid_ac_right_6k` varchar(255) NOT NULL,
  `hearaid_ac_right_8k` varchar(255) NOT NULL,
  `hearaid_ac_left_250` varchar(255) NOT NULL,
  `hearaid_ac_left_500` varchar(255) NOT NULL,
  `hearaid_ac_left_750` varchar(255) NOT NULL,
  `hearaid_ac_left_1k` varchar(255) NOT NULL,
  `hearaid_ac_left_2k` varchar(255) NOT NULL,
  `hearaid_ac_left_3k` varchar(255) NOT NULL,
  `hearaid_ac_left_4k` varchar(255) NOT NULL,
  `hearaid_ac_left_6k` varchar(255) NOT NULL,
  `hearaid_ac_left_8k` varchar(255) NOT NULL,
  `hearaid_bc_right_250` varchar(255) NOT NULL,
  `hearaid_bc_right_500` varchar(255) NOT NULL,
  `hearaid_bc_right_750` varchar(255) NOT NULL,
  `hearaid_bc_right_1k` varchar(255) NOT NULL,
  `hearaid_bc_right_2k` varchar(255) NOT NULL,
  `hearaid_bc_right_3k` varchar(255) NOT NULL,
  `hearaid_bc_right_4k` varchar(255) NOT NULL,
  `hearaid_bc_right_6k` varchar(255) NOT NULL,
  `hearaid_bc_right_8k` varchar(255) NOT NULL,
  `hearaid_bc_left_250` varchar(255) NOT NULL,
  `hearaid_bc_left_500` varchar(255) NOT NULL,
  `hearaid_bc_left_750` varchar(255) NOT NULL,
  `hearaid_bc_left_1k` varchar(255) NOT NULL,
  `hearaid_bc_left_2k` varchar(255) NOT NULL,
  `hearaid_bc_left_3k` varchar(255) NOT NULL,
  `hearaid_bc_left_4k` varchar(255) NOT NULL,
  `hearaid_bc_left_6k` varchar(255) NOT NULL,
  `hearaid_bc_left_8k` varchar(255) NOT NULL,
  `aid_right` varchar(255) NOT NULL,
  `aid_left` varchar(255) NOT NULL,
  `hearaid_color` varchar(255) NOT NULL,
  `right_a_cond` varchar(255) NOT NULL,
  `right_l_cond` varchar(255) NOT NULL,
  `right_u_cond` varchar(255) NOT NULL,
  `right_m_cond` varchar(255) NOT NULL,
  `right_s_cond` varchar(255) NOT NULL,
  `right_sh_cond` varchar(255) NOT NULL,
  `left_a_cond` varchar(255) NOT NULL,
  `left_l_cond` varchar(255) NOT NULL,
  `left_u_cond` varchar(255) NOT NULL,
  `left_m_cond` varchar(255) NOT NULL,
  `left_s_cond` varchar(255) NOT NULL,
  `left_sh_cond` varchar(255) NOT NULL,
  `bl_a_cond` varchar(255) NOT NULL,
  `bl_l_cond` varchar(255) NOT NULL,
  `bl_u_cond` varchar(255) NOT NULL,
  `bl_m_cond` varchar(255) NOT NULL,
  `bl_s_cond` varchar(255) NOT NULL,
  `bl_sh_cond` varchar(255) NOT NULL,
  `sponde_iden_dist` varchar(255) NOT NULL,
  `sponde_iden_level` varchar(255) NOT NULL,
  `sponde_aware_dist` varchar(255) NOT NULL,
  `sponde_aware_level` varchar(255) NOT NULL,
  `ques_iden_dist` varchar(255) NOT NULL,
  `ques_iden_level` varchar(255) NOT NULL,
  `ques_aware_dist` varchar(255) NOT NULL,
  `ques_aware_level` varchar(255) NOT NULL,
  `spon_iden_right_res` varchar(255) NOT NULL,
  `spon_aware_right_res` varchar(255) NOT NULL,
  `ques_iden_right_res` varchar(255) NOT NULL,
  `ques_aware_right_res` varchar(255) NOT NULL,
  `spon_iden_left_res` varchar(255) NOT NULL,
  `spon_aware_left_res` varchar(255) NOT NULL,
  `ques_iden_left_res` varchar(255) NOT NULL,
  `ques_aware_left_res` varchar(255) NOT NULL,
  `spon_iden_bl_res` varchar(255) NOT NULL,
  `spon_aware_bl_res` varchar(255) NOT NULL,
  `ques_iden_bl_res` varchar(255) NOT NULL,
  `ques_aware_bl_res` varchar(255) NOT NULL,
  `examined_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio_child_hear_trail`
--

INSERT INTO `audio_child_hear_trail` (`id`, `pat_id`, `pat_name`, `audiometer`, `examiner`, `idno`, `reliability`, `hearaid_ac_right_250`, `hearaid_ac_right_500`, `hearaid_ac_right_750`, `hearaid_ac_right_1k`, `hearaid_ac_right_2k`, `hearaid_ac_right_3k`, `hearaid_ac_right_4k`, `hearaid_ac_right_6k`, `hearaid_ac_right_8k`, `hearaid_ac_left_250`, `hearaid_ac_left_500`, `hearaid_ac_left_750`, `hearaid_ac_left_1k`, `hearaid_ac_left_2k`, `hearaid_ac_left_3k`, `hearaid_ac_left_4k`, `hearaid_ac_left_6k`, `hearaid_ac_left_8k`, `hearaid_bc_right_250`, `hearaid_bc_right_500`, `hearaid_bc_right_750`, `hearaid_bc_right_1k`, `hearaid_bc_right_2k`, `hearaid_bc_right_3k`, `hearaid_bc_right_4k`, `hearaid_bc_right_6k`, `hearaid_bc_right_8k`, `hearaid_bc_left_250`, `hearaid_bc_left_500`, `hearaid_bc_left_750`, `hearaid_bc_left_1k`, `hearaid_bc_left_2k`, `hearaid_bc_left_3k`, `hearaid_bc_left_4k`, `hearaid_bc_left_6k`, `hearaid_bc_left_8k`, `aid_right`, `aid_left`, `hearaid_color`, `right_a_cond`, `right_l_cond`, `right_u_cond`, `right_m_cond`, `right_s_cond`, `right_sh_cond`, `left_a_cond`, `left_l_cond`, `left_u_cond`, `left_m_cond`, `left_s_cond`, `left_sh_cond`, `bl_a_cond`, `bl_l_cond`, `bl_u_cond`, `bl_m_cond`, `bl_s_cond`, `bl_sh_cond`, `sponde_iden_dist`, `sponde_iden_level`, `sponde_aware_dist`, `sponde_aware_level`, `ques_iden_dist`, `ques_iden_level`, `ques_aware_dist`, `ques_aware_level`, `spon_iden_right_res`, `spon_aware_right_res`, `ques_iden_right_res`, `ques_aware_right_res`, `spon_iden_left_res`, `spon_aware_left_res`, `ques_iden_left_res`, `ques_aware_left_res`, `spon_iden_bl_res`, `spon_aware_bl_res`, `ques_iden_bl_res`, `ques_aware_bl_res`, `examined_on`) VALUES
(1, '1', 'Jothi Annamalai K', 'AUDIOMETER', 'CLINICIAN', '1131', 'RELIABILITY', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37,38,39', '40,41,42', 'red,blue,black,green', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '2018-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `audio_child_immitance_audio`
--

CREATE TABLE `audio_child_immitance_audio` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `examiner` varchar(255) NOT NULL,
  `idno` varchar(255) NOT NULL,
  `tymp_right_ear_canal` varchar(255) NOT NULL,
  `tymp_right_peak_pressure` varchar(255) NOT NULL,
  `tymp_right_static_complaint` varchar(255) NOT NULL,
  `tymp_left_ear_canal` varchar(255) NOT NULL,
  `tymp_left_peak_pressure` varchar(255) NOT NULL,
  `tymp_left_static_complaint` varchar(255) NOT NULL,
  `tymp_findings` varchar(2555) NOT NULL,
  `reflex_right_ipsi_500` varchar(255) NOT NULL,
  `reflex_right_contra_500` varchar(255) NOT NULL,
  `reflex_left_ipsi_500` varchar(255) NOT NULL,
  `reflex_left_contra_500` varchar(255) NOT NULL,
  `reflex_right_ipsi_1k` varchar(255) NOT NULL,
  `reflex_right_contra_1k` varchar(255) NOT NULL,
  `reflex_left_ipsi_1k` varchar(255) NOT NULL,
  `reflex_left_contra_1k` varchar(255) NOT NULL,
  `reflex_right_ipsi_2k` varchar(255) NOT NULL,
  `reflex_right_contra_2k` varchar(255) NOT NULL,
  `reflex_left_ipsi_2k` varchar(255) NOT NULL,
  `reflex_left_contra_2k` varchar(255) NOT NULL,
  `reflex_right_ipsi_4k` varchar(255) NOT NULL,
  `reflex_right_contra_4k` varchar(255) NOT NULL,
  `reflex_left_ipsi_4k` varchar(255) NOT NULL,
  `reflex_left_contra_4k` varchar(255) NOT NULL,
  `reflex_right_ipsi_bbn` varchar(255) NOT NULL,
  `reflex_right_contra_bbn` varchar(255) NOT NULL,
  `reflex_left_ipsi_bbn` varchar(255) NOT NULL,
  `reflex_left_contra_bbn` varchar(255) NOT NULL,
  `reflex_findings` varchar(2555) NOT NULL,
  `acoustic_right_present` varchar(255) NOT NULL,
  `acoustic_decay_right_500` varchar(255) NOT NULL,
  `acoustic_decay_right_1k` varchar(255) NOT NULL,
  `acoustic_right_find` varchar(255) NOT NULL,
  `acoustic_left_present` varchar(255) NOT NULL,
  `acoustic_decay_left_500` varchar(255) NOT NULL,
  `acoustic_decay_left_1k` varchar(255) NOT NULL,
  `acoustic_left_find` varchar(255) NOT NULL,
  `multifreq_right_reson` varchar(255) NOT NULL,
  `multifreq_right_find` varchar(255) NOT NULL,
  `multifreq_left_reson` varchar(255) NOT NULL,
  `multifreq_left_find` varchar(255) NOT NULL,
  `multicomp_freq` varchar(255) NOT NULL,
  `multicomp_bg_right` varchar(255) NOT NULL,
  `multicomp_bg_left` varchar(255) NOT NULL,
  `multicomp_find` varchar(2555) NOT NULL,
  `eustachian_test` varchar(2555) NOT NULL,
  `eustachian_right_pressure` varchar(255) NOT NULL,
  `eustachian_right_find` varchar(255) NOT NULL,
  `eustachian_left_pressure` varchar(255) NOT NULL,
  `eustachian_left_find` varchar(255) NOT NULL,
  `impression` varchar(2555) NOT NULL,
  `enquired_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio_child_immitance_audio`
--

INSERT INTO `audio_child_immitance_audio` (`id`, `pat_id`, `pat_name`, `examiner`, `idno`, `tymp_right_ear_canal`, `tymp_right_peak_pressure`, `tymp_right_static_complaint`, `tymp_left_ear_canal`, `tymp_left_peak_pressure`, `tymp_left_static_complaint`, `tymp_findings`, `reflex_right_ipsi_500`, `reflex_right_contra_500`, `reflex_left_ipsi_500`, `reflex_left_contra_500`, `reflex_right_ipsi_1k`, `reflex_right_contra_1k`, `reflex_left_ipsi_1k`, `reflex_left_contra_1k`, `reflex_right_ipsi_2k`, `reflex_right_contra_2k`, `reflex_left_ipsi_2k`, `reflex_left_contra_2k`, `reflex_right_ipsi_4k`, `reflex_right_contra_4k`, `reflex_left_ipsi_4k`, `reflex_left_contra_4k`, `reflex_right_ipsi_bbn`, `reflex_right_contra_bbn`, `reflex_left_ipsi_bbn`, `reflex_left_contra_bbn`, `reflex_findings`, `acoustic_right_present`, `acoustic_decay_right_500`, `acoustic_decay_right_1k`, `acoustic_right_find`, `acoustic_left_present`, `acoustic_decay_left_500`, `acoustic_decay_left_1k`, `acoustic_left_find`, `multifreq_right_reson`, `multifreq_right_find`, `multifreq_left_reson`, `multifreq_left_find`, `multicomp_freq`, `multicomp_bg_right`, `multicomp_bg_left`, `multicomp_find`, `eustachian_test`, `eustachian_right_pressure`, `eustachian_right_find`, `eustachian_left_pressure`, `eustachian_left_find`, `impression`, `enquired_on`) VALUES
(1, '1', 'Jothi Annamalai K', 'EXAMINERs', '1373', 'right Ear Canal11', 'rightPeak Pressure22', 'right_Static Complaince33', 'left Ear Canal44', 'leftPeak Pressure55', 'leftStatic Complaince66', 'tympfind77', 'right_ipsi_500_88', 'right_contra_500_99', 'left_ipsi_500_100', 'left_contra_500_110', 'right_ipsi_1k_120', 'right_contra_1k_130', 'left_ipsi_1k_140', 'left_contra_1k_150', 'right_ipsi_2k_160', 'right_contra_2k_170', 'left_ipsi_2k_180', 'left_contra_2k_190', 'right_ipsi_4k_200', 'right_contra_4k_210', 'left_ipsi_4k_220', 'left_contra_4k_230', 'right_ipsi_bbn_240', 'right_contra_bbn_250', 'left_ipsi_bbn_260', 'left_contra_bbn_270', 'reflexfind_280', 'rightpresent_290', 'right_decay_500_300', 'right_decay_1k_310', 'rightfind_320', 'leftpresent_330', 'left_decay_500_340', 'left_decay_1k_350', 'leftfind_360', 'resonent_right_370', 'multifreq_right_find_380', 'resonent_left_390', 'multifreq_left_find_400', 'freq1_410,freq2_420,freq3_430', 'multicomp_bg_right_1_440,multicomp_bg_right_2_450,multicomp_bg_right_3_460', 'multicomp_bg_left_1_470,multicomp_bg_left_2_480,multicomp_bg_left_3_490', 'find_500', 'Test Procedure_510', 'pressure_right_520', 'find_right_530', 'pressure_left_540', 'find_left_550', 'impression_560', '2018-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `audio_child_provisional`
--

CREATE TABLE `audio_child_provisional` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `provisional_diagnosis` varchar(2555) NOT NULL,
  `examined_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio_child_provisional`
--

INSERT INTO `audio_child_provisional` (`id`, `pat_id`, `pat_name`, `provisional_diagnosis`, `examined_on`) VALUES
(1, '5', 'vijosh', 'Provisional Diagnosis', '2018-02-20'),
(2, '1', 'Jothi Annamalai K', 'Provisional Diagnosis11', '2018-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `audio_child_recommendation`
--

CREATE TABLE `audio_child_recommendation` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `counselling` varchar(2555) NOT NULL,
  `device` varchar(2555) NOT NULL,
  `ent_review` varchar(255) NOT NULL,
  `follow_up` varchar(255) NOT NULL,
  `examined_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio_child_recommendation`
--

INSERT INTO `audio_child_recommendation` (`id`, `pat_id`, `pat_name`, `counselling`, `device`, `ent_review`, `follow_up`, `examined_on`) VALUES
(1, '1', 'Jothi Annamalai K', 'Counsellingsoq', 'Devicesoq', 'no', 'no', '2018-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `patiententry_audio_adult`
--

CREATE TABLE `patiententry_audio_adult` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `supervisor` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pat_complaint` varchar(3000) NOT NULL,
  `hearloss_ear` varchar(255) NOT NULL,
  `hearloss_onset` varchar(255) NOT NULL,
  `hearloss_acq_years` varchar(255) NOT NULL,
  `hearloss_course` varchar(255) NOT NULL,
  `hearloss_famhis` varchar(255) NOT NULL,
  `hearloss_famhis_comment` varchar(3000) NOT NULL,
  `hearloss_locdiff` varchar(255) NOT NULL,
  `hearloss_prevtest` varchar(255) NOT NULL,
  `amplify_ear` varchar(255) NOT NULL,
  `amplify_instrument` varchar(255) NOT NULL,
  `amplify_usedsince` varchar(255) NOT NULL,
  `amplify_satisfy` varchar(255) NOT NULL,
  `comm_diff` varchar(255) NOT NULL,
  `expo_noise_type` varchar(255) NOT NULL,
  `expo_freq_expo` varchar(255) NOT NULL,
  `expo_duration` varchar(255) NOT NULL,
  `expo_annoy` varchar(255) NOT NULL,
  `expo_intolerance` varchar(255) NOT NULL,
  `ent_surgery` varchar(255) NOT NULL,
  `ent_surgery_yes` varchar(2555) NOT NULL,
  `ent_eardis_foul` varchar(255) NOT NULL,
  `ent_eardis_pus` varchar(255) NOT NULL,
  `ent_eardis_cont` varchar(255) NOT NULL,
  `ent_eardis_occa` varchar(255) NOT NULL,
  `ent_eardis_occawhen` varchar(255) NOT NULL,
  `ent_eardis_cons` varchar(255) NOT NULL,
  `ent_tinni_ring` varchar(255) NOT NULL,
  `ent_tinni_noise` varchar(255) NOT NULL,
  `ent_tinni_obj` varchar(255) NOT NULL,
  `ent_tinni_subj` varchar(255) NOT NULL,
  `ent_tinni_conti` varchar(255) NOT NULL,
  `ent_tinni_inter` varchar(255) NOT NULL,
  `ent_earpain_conti` varchar(255) NOT NULL,
  `ent_earpain_inter` varchar(255) NOT NULL,
  `vertigo` varchar(255) NOT NULL,
  `vertigo_frequency` varchar(255) NOT NULL,
  `vertigo_duration` varchar(255) NOT NULL,
  `vertigo_subj_obj` varchar(255) NOT NULL,
  `vertigo_symp_vomit` varchar(255) NOT NULL,
  `vertigo_symp_nausea` varchar(255) NOT NULL,
  `headache_assoc` varchar(255) NOT NULL,
  `present_ent` varchar(255) NOT NULL,
  `medicalhistory` varchar(255) NOT NULL,
  `present_right_one` varchar(3000) NOT NULL,
  `present_left_one` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patiententry_audio_adult`
--

INSERT INTO `patiententry_audio_adult` (`id`, `pat_id`, `pat_name`, `age`, `gender`, `occupation`, `supervisor`, `language`, `contact`, `address`, `pat_complaint`, `hearloss_ear`, `hearloss_onset`, `hearloss_acq_years`, `hearloss_course`, `hearloss_famhis`, `hearloss_famhis_comment`, `hearloss_locdiff`, `hearloss_prevtest`, `amplify_ear`, `amplify_instrument`, `amplify_usedsince`, `amplify_satisfy`, `comm_diff`, `expo_noise_type`, `expo_freq_expo`, `expo_duration`, `expo_annoy`, `expo_intolerance`, `ent_surgery`, `ent_surgery_yes`, `ent_eardis_foul`, `ent_eardis_pus`, `ent_eardis_cont`, `ent_eardis_occa`, `ent_eardis_occawhen`, `ent_eardis_cons`, `ent_tinni_ring`, `ent_tinni_noise`, `ent_tinni_obj`, `ent_tinni_subj`, `ent_tinni_conti`, `ent_tinni_inter`, `ent_earpain_conti`, `ent_earpain_inter`, `vertigo`, `vertigo_frequency`, `vertigo_duration`, `vertigo_subj_obj`, `vertigo_symp_vomit`, `vertigo_symp_nausea`, `headache_assoc`, `present_ent`, `medicalhistory`, `present_right_one`, `present_left_one`) VALUES
(2, '2', 'JOTHI ANNAMALAI', '21', 'male', 'WEB Developer', 'Vijayalakshmi Jothi Annamalai', 'telugu', '9489521384', '29, v.a.s.s. street ,apk', 'complaint', 'left', 'acquired', '20', 'static,progressive,regressive', 'negative', 'comment om relation', 'present', 'Previous Test Results ', 'both', 'INSTRUMENT', 'USED SINCE', 'SATISFICATION WITH AID	', 'noise,quiet,telephone,group', 'lowfrequency,noisesource,continuous', 'FREQUENCY OF EXPOSURE', 'DURATION', 'present', 'absent', 'no', 'yes ent surgery', 'left,right', 'right', 'left,right', 'right', '43413434', 'right', 'left,right', 'left', 'right', 'left', 'right', 'left,right', 'right', 'left', 'absent', 'verti_freq', 'verti_dur', 'verti_subj_obj', 'no', 'yes', ' ASSOCIATED WITH', 'right', 'diabetes,hypertension,others', 'Present ENT on RIGHT', 'Present ENT on left'),
(5, '5', 'vijosh', '101', 'male', 'sakdmkasmd', 'ajskdjk', 'tamil', '6213661523', 'bffdsasdfghjjhgfds', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '1', 'JOTHI ANNAMALAI', '22', 'male', 'WEB Developer', 'jo', 'telugu', '9489521384', 'ajhsjahj', 'casa', 'left,right', 'congenital,acquired', '2', 'static,progressive,regressive', 'positive', 'Comment on relation     ', 'absent', 'Previous Test Results', 'left,right,both', 'INSTRUMENT', 'USED SINCE', 'SATISFICATION WITH AID	', 'noise,quiet,telephone,group', 'highfrequency,lowfrequency,noisesource,continuous,intermittent,impulse', '300', '200', 'present', 'absent', '', '', 'left,right', 'left,right', 'left,right', 'left,right', 'f so when?    ', 'left,right', 'left,right', 'left,right', 'left,right', 'left,right', 'left,right', 'left,right', 'left,right', 'left,right', '', '200', '200', '1000', 'yes', 'yes', ' ASSOCIATED WITH	', 'left,right', 'carcinoma,others', 'Present ENT on RIGHT (1)', 'Present ENT on RIGHT (2)'),
(9, '3', 'JOTHI ANNAMALAI', '19', 'male', '32738876', '12566', 'tamil', '1231232562', 'zxnj', '', 'left,right', 'congenital,acquired', '123', 'static,progressive,regressive', 'positive', 'asdas', 'present', 'adas', '', '', '', '', '', '', '', '', 'present', 'present', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'left,right', 'diabetes,hypertension,renaldisorder,carcinoma,others', 'right', 'Present ENT on LEFT\r\nPresent ENT on LEFT\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `patiententry_audio_child`
--

CREATE TABLE `patiententry_audio_child` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_occupation` varchar(255) NOT NULL,
  `fatherage` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_occupation` varchar(255) NOT NULL,
  `motherage` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `complaints` varchar(255) NOT NULL,
  `problem_age` varchar(255) NOT NULL,
  `problem_noted_by` varchar(255) NOT NULL,
  `nature_of_onset` varchar(255) NOT NULL,
  `prob_change_first_notice` varchar(255) NOT NULL,
  `medi_atte_age` varchar(255) NOT NULL,
  `hear_screen` varchar(255) NOT NULL,
  `pre_natal` varchar(2555) NOT NULL,
  `length_of_preg` varchar(255) NOT NULL,
  `length_of_lab` varchar(255) NOT NULL,
  `howlongyears` varchar(255) NOT NULL,
  `place_of_deli` varchar(255) NOT NULL,
  `delivery_type` varchar(255) NOT NULL,
  `complication_during_labour` varchar(255) NOT NULL,
  `birth_cry` varchar(255) NOT NULL,
  `how_much_delay` varchar(255) NOT NULL,
  `birth_weight` varchar(255) NOT NULL,
  `birth_color` varchar(255) NOT NULL,
  `post_natal` varchar(2555) NOT NULL,
  `consanguinity` varchar(255) NOT NULL,
  `consanguinity_yes` varchar(255) NOT NULL,
  `med_his` varchar(255) NOT NULL,
  `ear_discharge_val` varchar(255) NOT NULL,
  `ear_pain_val` varchar(255) NOT NULL,
  `ear_blockage_val` varchar(255) NOT NULL,
  `child_surgery` varchar(255) NOT NULL,
  `yes_surgery_val` varchar(255) NOT NULL,
  `motor_milestones` varchar(255) NOT NULL,
  `head_control` varchar(255) NOT NULL,
  `turning_over` varchar(255) NOT NULL,
  `sitting_alone` varchar(255) NOT NULL,
  `crawling` varchar(255) NOT NULL,
  `stood_without_support` varchar(255) NOT NULL,
  `walked_without_support` varchar(255) NOT NULL,
  `babling` varchar(255) NOT NULL,
  `first_word` varchar(255) NOT NULL,
  `two_word_utter` varchar(255) NOT NULL,
  `comm_gest` varchar(255) NOT NULL,
  `sensory_dev` varchar(255) NOT NULL,
  `vision` varchar(255) NOT NULL,
  `hearing` varchar(255) NOT NULL,
  `respond_sound` varchar(255) NOT NULL,
  `respond_namecal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patiententry_audio_child`
--

INSERT INTO `patiententry_audio_child` (`id`, `pat_id`, `pat_name`, `age`, `dob`, `gender`, `father_name`, `father_occupation`, `fatherage`, `mother_name`, `mother_occupation`, `motherage`, `language`, `contact`, `email`, `address`, `complaints`, `problem_age`, `problem_noted_by`, `nature_of_onset`, `prob_change_first_notice`, `medi_atte_age`, `hear_screen`, `pre_natal`, `length_of_preg`, `length_of_lab`, `howlongyears`, `place_of_deli`, `delivery_type`, `complication_during_labour`, `birth_cry`, `how_much_delay`, `birth_weight`, `birth_color`, `post_natal`, `consanguinity`, `consanguinity_yes`, `med_his`, `ear_discharge_val`, `ear_pain_val`, `ear_blockage_val`, `child_surgery`, `yes_surgery_val`, `motor_milestones`, `head_control`, `turning_over`, `sitting_alone`, `crawling`, `stood_without_support`, `walked_without_support`, `babling`, `first_word`, `two_word_utter`, `comm_gest`, `sensory_dev`, `vision`, `hearing`, `respond_sound`, `respond_namecal`) VALUES
(1, '1', 'Jothi Annamalai K', '21', '1996-05-13', 'male', 'Karuppasamy A', 'Textile Business', '58', 'Padhmavathi K', 'House Wife', '42', 'english', '9489521383', 'jothivijay4716@gmail.in', 'Aruppukottai', 'Complaints about the Problems', '21', 'dady', 'gradual,sincebirth', 'unchanged', '21', 'Hearing Screening Dones', 'malnutrition,asthma,neurological_disorder,diabetics_mellitus,blood_pressure,RH_incompatibility,convulsion,miscarriages,endocrinal_disorder,rubella,jaundice,malaria', 'post_term', 'prolonged', '223', 'home', 'normal', 'Complications During Labours', 'delayed', '223', '21', 'whites', 'meningitis,pneumonia,blood_transfusion,german_measles,mumps,seizures,chicken_pox,endocrinal_disorder,rubella', 'yes', 'if yess', 'ear_discharge,ear_pain,ear_blockage', 'ear dis vals', 'ear pain vals', 'ear block vals', 'yes', 'yes surgery dones', 'Motors', 'Head Controls', 'Turning Overs', 'Sitting Alones', 'Crawlings', 'Stood Without Supports', 'Walked Without Supports', 'Babblings', 'First Words', 'Two Word Utterances', 'no', 'Sensory Developments', 'Visions', 'Hearings', 'moderate', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `patiententry_speech_adult`
--

CREATE TABLE `patiententry_speech_adult` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `supervisor` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pat_complaint` varchar(3000) NOT NULL,
  `earlier_diagnosis` varchar(2555) NOT NULL,
  `surgery` varchar(255) NOT NULL,
  `surgery_yes` varchar(2555) NOT NULL,
  `negative_reaction` varchar(2555) NOT NULL,
  `accidents` varchar(2555) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patiententry_speech_adult`
--

INSERT INTO `patiententry_speech_adult` (`id`, `pat_id`, `pat_name`, `age`, `gender`, `occupation`, `supervisor`, `language`, `contact`, `address`, `pat_complaint`, `earlier_diagnosis`, `surgery`, `surgery_yes`, `negative_reaction`, `accidents`, `created_on`) VALUES
(1, '1', 'Jothi Annamalai K', '21', 'male', 'web developers', 'viji jothi', 'tamil', '9489521384', 'apk', 'Complaints about the Problems', 'Earlier diagnosis and suggestions?', 'yes', 'If Yes, What?    ', 'Have there been any nSegative reactions to medicines', 'Any major accidents or hospitalizations', '2018-04-04 10:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `speech_adult_disorder_asses`
--

CREATE TABLE `speech_adult_disorder_asses` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(255) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `mother_tongue` varchar(255) NOT NULL,
  `refer_by` varchar(255) NOT NULL,
  `informant` varchar(255) NOT NULL,
  `lang_expo` varchar(255) NOT NULL,
  `bg_info` varchar(2555) NOT NULL,
  `med_his` varchar(2555) NOT NULL,
  `general` varchar(255) NOT NULL,
  `attention` varchar(255) NOT NULL,
  `emotional_status` varchar(255) NOT NULL,
  `sma_oral_stereo` varchar(255) NOT NULL,
  `sma_texture_discrim` varchar(255) NOT NULL,
  `sma_amb_mode` varchar(255) NOT NULL,
  `sma_grasp` varchar(255) NOT NULL,
  `cere_test` varchar(255) NOT NULL,
  `fin_to_nose_test` varchar(255) NOT NULL,
  `rapid_alt_mov` varchar(255) NOT NULL,
  `gait_stat_romb_test` varchar(255) NOT NULL,
  `walk_on_heels` varchar(255) NOT NULL,
  `opm_app_lips` varchar(255) NOT NULL,
  `opm_fun_lips` varchar(255) NOT NULL,
  `opm_app_jaw` varchar(255) NOT NULL,
  `opm_fun_jaw` varchar(255) NOT NULL,
  `opm_app_teeth` varchar(255) NOT NULL,
  `opm_fun_teeth` varchar(255) NOT NULL,
  `opm_app_tongue` varchar(255) NOT NULL,
  `opm_fun_tongue` varchar(255) NOT NULL,
  `opm_app_palate` varchar(255) NOT NULL,
  `opm_fun_palate` varchar(255) NOT NULL,
  `opm_app_uvula` varchar(255) NOT NULL,
  `swal_teeth_apart` varchar(255) NOT NULL,
  `swal_see_tongue` varchar(255) NOT NULL,
  `swal_tens_chin` varchar(255) NOT NULL,
  `swallowing_diff` varchar(255) NOT NULL,
  `recal_past_event` varchar(255) NOT NULL,
  `recal_cur_event` varchar(255) NOT NULL,
  `lhf_fluency` varchar(255) NOT NULL,
  `lhf_fluency_eff` varchar(255) NOT NULL,
  `lhf_prosody` varchar(255) NOT NULL,
  `lhf_pers` varchar(255) NOT NULL,
  `lhf_jargon` varchar(255) NOT NULL,
  `lhf_phonemic_para` varchar(255) NOT NULL,
  `lhf_semantic_para` varchar(255) NOT NULL,
  `lhf_logo` varchar(255) NOT NULL,
  `lhf_agra` varchar(255) NOT NULL,
  `lhf_para` varchar(255) NOT NULL,
  `lhf_comp` varchar(255) NOT NULL,
  `lhf_word_rec` varchar(255) NOT NULL,
  `lhf_seq_comm` varchar(255) NOT NULL,
  `lhf_discourse` varchar(255) NOT NULL,
  `rep_singl_word` varchar(255) NOT NULL,
  `rep_phrases` varchar(255) NOT NULL,
  `rep_sentence` varchar(255) NOT NULL,
  `naming_vis_conf` varchar(255) NOT NULL,
  `naming_auto` varchar(255) NOT NULL,
  `naming_categ` varchar(255) NOT NULL,
  `naming_circum` varchar(255) NOT NULL,
  `apra_bucco` varchar(255) NOT NULL,
  `apra_limb` varchar(255) NOT NULL,
  `apra_speech` varchar(255) NOT NULL,
  `rwa_sil_read` varchar(255) NOT NULL,
  `rwa_read_aloud` varchar(255) NOT NULL,
  `rwa_read_err` varchar(255) NOT NULL,
  `rwa_read_comp` varchar(255) NOT NULL,
  `rwa_copy` varchar(255) NOT NULL,
  `rwa_write_err` varchar(255) NOT NULL,
  `rwa_hemi` varchar(255) NOT NULL,
  `rwa_calc` varchar(255) NOT NULL,
  `rwa_arth` varchar(255) NOT NULL,
  `testadmin` varchar(2555) NOT NULL,
  `prov_diag` varchar(2555) NOT NULL,
  `advise` varchar(2555) NOT NULL,
  `created_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speech_adult_disorder_asses`
--

INSERT INTO `speech_adult_disorder_asses` (`id`, `pat_id`, `pat_name`, `mother_tongue`, `refer_by`, `informant`, `lang_expo`, `bg_info`, `med_his`, `general`, `attention`, `emotional_status`, `sma_oral_stereo`, `sma_texture_discrim`, `sma_amb_mode`, `sma_grasp`, `cere_test`, `fin_to_nose_test`, `rapid_alt_mov`, `gait_stat_romb_test`, `walk_on_heels`, `opm_app_lips`, `opm_fun_lips`, `opm_app_jaw`, `opm_fun_jaw`, `opm_app_teeth`, `opm_fun_teeth`, `opm_app_tongue`, `opm_fun_tongue`, `opm_app_palate`, `opm_fun_palate`, `opm_app_uvula`, `swal_teeth_apart`, `swal_see_tongue`, `swal_tens_chin`, `swallowing_diff`, `recal_past_event`, `recal_cur_event`, `lhf_fluency`, `lhf_fluency_eff`, `lhf_prosody`, `lhf_pers`, `lhf_jargon`, `lhf_phonemic_para`, `lhf_semantic_para`, `lhf_logo`, `lhf_agra`, `lhf_para`, `lhf_comp`, `lhf_word_rec`, `lhf_seq_comm`, `lhf_discourse`, `rep_singl_word`, `rep_phrases`, `rep_sentence`, `naming_vis_conf`, `naming_auto`, `naming_categ`, `naming_circum`, `apra_bucco`, `apra_limb`, `apra_speech`, `rwa_sil_read`, `rwa_read_aloud`, `rwa_read_err`, `rwa_read_comp`, `rwa_copy`, `rwa_write_err`, `rwa_hemi`, `rwa_calc`, `rwa_arth`, `testadmin`, `prov_diag`, `advise`, `created_on`) VALUES
(1, '1', 'Jothi Annamalai K', 'tamils', 'referbys', 'informants', 'language xposds', 'BACKGROUND INFORMATIONsss', 'MEDICAL / SURGICAL HISTORYssss', 'alert', 'good', 'Emotional Statussssssss', 'absent', 'present', 'wheelchair', 'palmar', 'Cerebellar Testingkkkkk', 'Finger-to-nose Testingkkkkkkk', 'Rapid alternating movementskkkkk', 'Gait, Station and Romberg testingkkkkk', 'Walking on heels/toekkkkkkkk	', 'parted', 'spread', 'asymmetry', 'insufficient', 'cross_bite', 'chewing', 'large', 'sweeps_palate', 'cleft', 'closure_evi', 'bifid', 'no', 'yes', 'yes', 'fairkkkkqqqqqqqqqqqqq', 'fair', 'good', 'non-fluent', 'effortful', 'fair', 'absent', 'present', 'absent', 'present', 'absent', 'present', 'absent', 'present', 'absent', 'present', 'absent', 'present', 'absent', 'present', 'absent', 'present', 'absent', 'present', 'absent', 'present', 'absent', 'absent', 'present', 'absent', 'present', 'absent', 'present', 'absent', 'present', 'absent', 'Test Administeredkkkkkkkk', 'Provisional Diagnosis / Diagnostic Formulationkkkkkkkk', 'Advised forkkkkkkkkkkkkkk', '2018-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `speech_adult_voice_eval`
--

CREATE TABLE `speech_adult_voice_eval` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(500) NOT NULL,
  `pat_name` varchar(500) NOT NULL,
  `refer_by` varchar(500) NOT NULL,
  `casenum` varchar(500) NOT NULL,
  `nature_pro` varchar(500) NOT NULL,
  `onset_pro` varchar(500) NOT NULL,
  `mh_ent_eval` varchar(500) NOT NULL,
  `mh_ent_find` varchar(500) NOT NULL,
  `mh_ent_treat` varchar(500) NOT NULL,
  `vh_cough_sneez` varchar(500) NOT NULL,
  `vh_cough_sneez_desc` varchar(500) NOT NULL,
  `vh_throat_clear` varchar(500) NOT NULL,
  `vh_throat_clear_desc` varchar(500) NOT NULL,
  `vh_scream_shout` varchar(500) NOT NULL,
  `vh_scream_shout_desc` varchar(500) NOT NULL,
  `vh_talk_nois_env` varchar(500) NOT NULL,
  `vh_talk_nois_env_desc` varchar(500) NOT NULL,
  `vh_sing_pitch` varchar(500) NOT NULL,
  `vh_sing_pitch_desc` varchar(500) NOT NULL,
  `vh_talk_extp` varchar(500) NOT NULL,
  `vh_talk_extp_desc` varchar(500) NOT NULL,
  `vh_other` varchar(500) NOT NULL,
  `vh_other_desc` varchar(500) NOT NULL,
  `vh_quant_voice` varchar(500) NOT NULL,
  `nvh_caff` varchar(500) NOT NULL,
  `nvh_caff_desc` varchar(500) NOT NULL,
  `nvh_env_irrit` varchar(500) NOT NULL,
  `nvh_env_irrit_desc` varchar(500) NOT NULL,
  `nvh_smoke` varchar(500) NOT NULL,
  `nvh_smoke_desc` varchar(500) NOT NULL,
  `nvh_alch_cons` varchar(500) NOT NULL,
  `nvh_alch_cons_desc` varchar(500) NOT NULL,
  `nvh_spicyfood_int` varchar(500) NOT NULL,
  `nvh_spicyfood_int_desc` varchar(500) NOT NULL,
  `nvh_carb_drinks` varchar(500) NOT NULL,
  `nvh_carb_drinks_desc` varchar(500) NOT NULL,
  `nvh_hydration` varchar(500) NOT NULL,
  `nvh_toba` varchar(500) NOT NULL,
  `nvh_toba_desc` varchar(500) NOT NULL,
  `nvh_other` varchar(500) NOT NULL,
  `nvh_other_desc` varchar(500) NOT NULL,
  `rs_clav` varchar(500) NOT NULL,
  `rs_tho` varchar(500) NOT NULL,
  `rs_abd` varchar(500) NOT NULL,
  `rs_diaphragmatic` varchar(500) NOT NULL,
  `mpd_a` varchar(500) NOT NULL,
  `mpd_i` varchar(500) NOT NULL,
  `mpd_u` varchar(500) NOT NULL,
  `mpd_s` varchar(500) NOT NULL,
  `mpd_z` varchar(500) NOT NULL,
  `mpd_s_z` varchar(500) NOT NULL,
  `impression` varchar(5000) NOT NULL,
  `max_blow_dur` varchar(500) NOT NULL,
  `rs_phon` varchar(500) NOT NULL,
  `rs_speech` varchar(500) NOT NULL,
  `vp_pitch` varchar(500) NOT NULL,
  `vp_pitch_var` varchar(500) NOT NULL,
  `vp_pitch_brk` varchar(500) NOT NULL,
  `vp_diplo` varchar(500) NOT NULL,
  `vp_pitch_range` varchar(500) NOT NULL,
  `vp_loud` varchar(500) NOT NULL,
  `vp_loud_var` varchar(500) NOT NULL,
  `vp_loud_range` varchar(500) NOT NULL,
  `vp_quality` varchar(500) NOT NULL,
  `vp_tremors` varchar(500) NOT NULL,
  `vp_voice_break` varchar(500) NOT NULL,
  `vp_endur` varchar(500) NOT NULL,
  `vp_hyper` varchar(500) NOT NULL,
  `gs_grade` varchar(500) NOT NULL,
  `gs_rough` varchar(500) NOT NULL,
  `gs_breath` varchar(500) NOT NULL,
  `gs_asth` varchar(500) NOT NULL,
  `gs_strain` varchar(500) NOT NULL,
  `ra_resonance` varchar(500) NOT NULL,
  `ra_art_err` varchar(500) NOT NULL,
  `ra_ddk` varchar(500) NOT NULL,
  `prosody_tone` varchar(500) NOT NULL,
  `prosody_into` varchar(500) NOT NULL,
  `prosody_stress` varchar(500) NOT NULL,
  `spr_overall_sever` varchar(500) NOT NULL,
  `spr_physical` varchar(500) NOT NULL,
  `spr_emotional` varchar(500) NOT NULL,
  `spr_functional` varchar(500) NOT NULL,
  `spr_total_scr` varchar(500) NOT NULL,
  `oa_fun_freq` varchar(500) NOT NULL,
  `oa_freq_range` varchar(500) NOT NULL,
  `oa_jitter` varchar(500) NOT NULL,
  `oa_intensity` varchar(500) NOT NULL,
  `oa_dyn_range` varchar(500) NOT NULL,
  `oa_shimmer` varchar(500) NOT NULL,
  `oa_hnr` varchar(500) NOT NULL,
  `oa_snr` varchar(500) NOT NULL,
  `oa_nne` varchar(500) NOT NULL,
  `oa_spi` varchar(500) NOT NULL,
  `oa_dyn_index_scr` varchar(500) NOT NULL,
  `prov_diag` varchar(5000) NOT NULL,
  `recommend` varchar(5000) NOT NULL,
  `created_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speech_adult_voice_eval`
--

INSERT INTO `speech_adult_voice_eval` (`id`, `pat_id`, `pat_name`, `refer_by`, `casenum`, `nature_pro`, `onset_pro`, `mh_ent_eval`, `mh_ent_find`, `mh_ent_treat`, `vh_cough_sneez`, `vh_cough_sneez_desc`, `vh_throat_clear`, `vh_throat_clear_desc`, `vh_scream_shout`, `vh_scream_shout_desc`, `vh_talk_nois_env`, `vh_talk_nois_env_desc`, `vh_sing_pitch`, `vh_sing_pitch_desc`, `vh_talk_extp`, `vh_talk_extp_desc`, `vh_other`, `vh_other_desc`, `vh_quant_voice`, `nvh_caff`, `nvh_caff_desc`, `nvh_env_irrit`, `nvh_env_irrit_desc`, `nvh_smoke`, `nvh_smoke_desc`, `nvh_alch_cons`, `nvh_alch_cons_desc`, `nvh_spicyfood_int`, `nvh_spicyfood_int_desc`, `nvh_carb_drinks`, `nvh_carb_drinks_desc`, `nvh_hydration`, `nvh_toba`, `nvh_toba_desc`, `nvh_other`, `nvh_other_desc`, `rs_clav`, `rs_tho`, `rs_abd`, `rs_diaphragmatic`, `mpd_a`, `mpd_i`, `mpd_u`, `mpd_s`, `mpd_z`, `mpd_s_z`, `impression`, `max_blow_dur`, `rs_phon`, `rs_speech`, `vp_pitch`, `vp_pitch_var`, `vp_pitch_brk`, `vp_diplo`, `vp_pitch_range`, `vp_loud`, `vp_loud_var`, `vp_loud_range`, `vp_quality`, `vp_tremors`, `vp_voice_break`, `vp_endur`, `vp_hyper`, `gs_grade`, `gs_rough`, `gs_breath`, `gs_asth`, `gs_strain`, `ra_resonance`, `ra_art_err`, `ra_ddk`, `prosody_tone`, `prosody_into`, `prosody_stress`, `spr_overall_sever`, `spr_physical`, `spr_emotional`, `spr_functional`, `spr_total_scr`, `oa_fun_freq`, `oa_freq_range`, `oa_jitter`, `oa_intensity`, `oa_dyn_range`, `oa_shimmer`, `oa_hnr`, `oa_snr`, `oa_nne`, `oa_spi`, `oa_dyn_index_scr`, `prov_diag`, `recommend`, `created_on`) VALUES
(1, '1', 'Jothi Annamalai K', 'REFERED BYs', 'casenums', 'gradual', 'progressive', 's', 'idl', 'surgerical_treatment', 'yes', 'Coughing or Sneezing loudly', 'yes', 'Throat Clearingkkkkkk', 'yes', 'Screaming/Shoutingkkkkkk', 'yes', 'Talking in noisy environmentskkkkk', 'yes', 'Singing Pitch: Class/Practicekkkkk', 'yes', 'Talking for extended periods of timekkkk', 'yes', 'Any other (describe)kkkk', '242', 'yes', 'Intake of Caffeine products(coffee,chocolate,Cocoa)', 'yes', 'Environmental irritants exposurekkkk', 'yes', 'Smokingkkkk', 'yes', 'Alcohol consumptionkmkk', 'yes', 'Intake of spicy food itemskkk', 'yes', 'Consuming carbonated drinkskkkkk', '242', 'yes', 'Habit of chewing tobacco,snuff,pankkkk', 'yes', 'Any other (describe)kkkkk', 'during_speech', 'non_speech', 'during_speech', 'non_speech', '11', '22', '33', '44', '55', '66', 'IMPRESSIONkkkkkkkkk', '242', 'inadequeate', 'adequeate', 'Pitchkkk', 'Pitch Vairiabilitykkk', 'Pitch Breakskkk', 'Diplophoniakkk', 'Pitch Rangekkk', 'Loudnesskkk', 'Loudness Vairiabilitykkk', 'Loudness Rangekkk', 'Qualitykkk', 'Tremorskkk', 'Voice Breakskkk', 'Endurancekkk', 'Hyper/Hypofunctionalkkk', '11', '22', '33', '44', '55', 'abnormal', 'absent', 'ddkmmmmm', 'hypo', 'normal', 'normal', 'Overall severitykkkkk', 'Physicalkkkkk', 'Emotionalkkkkk', 'Functional	kkkkk', 'Total Score	kkkkk', 'Fundamental Frequencykkkkk', 'Frequency Rangekkkkk', 'Jitterkkkkk', 'Intensitykkkkk', 'Dynamic Rangekkkkk', 'Shimmerkkkkk', 'HNRkkkkk', 'SNRkkkkk', 'NNEkkkkk', 'SPIkkkkk', 'Dyasphonia Severity Index Scorekkkkk', 'PROVISIONAL DIAGNOSISkkkkk', 'RECOMMENDATIONSkkkkk', '2018-04-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio_adult_behavioural`
--
ALTER TABLE `audio_adult_behavioural`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio_adult_electrophysiologic`
--
ALTER TABLE `audio_adult_electrophysiologic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio_adult_hear_trail`
--
ALTER TABLE `audio_adult_hear_trail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio_adult_immitance_audio`
--
ALTER TABLE `audio_adult_immitance_audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio_adult_provisional`
--
ALTER TABLE `audio_adult_provisional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio_adult_recommendation`
--
ALTER TABLE `audio_adult_recommendation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio_child_behavioural`
--
ALTER TABLE `audio_child_behavioural`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio_child_electrophysiologic`
--
ALTER TABLE `audio_child_electrophysiologic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio_child_hear_trail`
--
ALTER TABLE `audio_child_hear_trail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio_child_immitance_audio`
--
ALTER TABLE `audio_child_immitance_audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio_child_provisional`
--
ALTER TABLE `audio_child_provisional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio_child_recommendation`
--
ALTER TABLE `audio_child_recommendation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patiententry_audio_adult`
--
ALTER TABLE `patiententry_audio_adult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patiententry_audio_child`
--
ALTER TABLE `patiententry_audio_child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patiententry_speech_adult`
--
ALTER TABLE `patiententry_speech_adult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speech_adult_disorder_asses`
--
ALTER TABLE `speech_adult_disorder_asses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speech_adult_voice_eval`
--
ALTER TABLE `speech_adult_voice_eval`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `audio_adult_behavioural`
--
ALTER TABLE `audio_adult_behavioural`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `audio_adult_electrophysiologic`
--
ALTER TABLE `audio_adult_electrophysiologic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `audio_adult_hear_trail`
--
ALTER TABLE `audio_adult_hear_trail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `audio_adult_immitance_audio`
--
ALTER TABLE `audio_adult_immitance_audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `audio_adult_provisional`
--
ALTER TABLE `audio_adult_provisional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `audio_adult_recommendation`
--
ALTER TABLE `audio_adult_recommendation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `audio_child_behavioural`
--
ALTER TABLE `audio_child_behavioural`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `audio_child_electrophysiologic`
--
ALTER TABLE `audio_child_electrophysiologic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `audio_child_hear_trail`
--
ALTER TABLE `audio_child_hear_trail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `audio_child_immitance_audio`
--
ALTER TABLE `audio_child_immitance_audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `audio_child_provisional`
--
ALTER TABLE `audio_child_provisional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `audio_child_recommendation`
--
ALTER TABLE `audio_child_recommendation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patiententry_audio_adult`
--
ALTER TABLE `patiententry_audio_adult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `patiententry_audio_child`
--
ALTER TABLE `patiententry_audio_child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patiententry_speech_adult`
--
ALTER TABLE `patiententry_speech_adult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `speech_adult_disorder_asses`
--
ALTER TABLE `speech_adult_disorder_asses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `speech_adult_voice_eval`
--
ALTER TABLE `speech_adult_voice_eval`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
