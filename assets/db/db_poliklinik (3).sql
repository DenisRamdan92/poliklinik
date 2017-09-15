-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2017 at 01:53 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_poliklinik`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `cpem`
--
CREATE TABLE IF NOT EXISTS `cpem` (
`nopendaftaran` int(15)
,`nopasien` char(10)
,`namapass` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `datpeg`
--
CREATE TABLE IF NOT EXISTS `datpeg` (
`username` varchar(15)
,`password` varchar(15)
,`typeuser` varchar(5)
,`nip` char(10)
,`namapeg` varchar(50)
,`almpeg` varchar(50)
,`telppeg` varchar(20)
,`tgllhrpeg` date
,`jnlkelpeg` varchar(1)
);
-- --------------------------------------------------------

--
-- Table structure for table `detailbiaya`
--

CREATE TABLE IF NOT EXISTS `detailbiaya` (
  `iddetailbiaya` char(5) NOT NULL DEFAULT '',
  `idjenisbiaya` char(5) DEFAULT NULL,
  `nopendaftaran` int(15) DEFAULT NULL,
  `tarif` double DEFAULT NULL,
  PRIMARY KEY (`iddetailbiaya`),
  KEY `idjenisbiaya` (`idjenisbiaya`),
  KEY `nopendaftaran` (`nopendaftaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailbiaya`
--

INSERT INTO `detailbiaya` (`iddetailbiaya`, `idjenisbiaya`, `nopendaftaran`, `tarif`) VALUES
('DB001', 'B0003', 1701310001, 20000),
('DB002', 'B0005', 1701310001, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `detailresep`
--

CREATE TABLE IF NOT EXISTS `detailresep` (
  `iddetailresep` char(18) NOT NULL DEFAULT '',
  `noresep` char(15) DEFAULT NULL,
  `kodeobat` char(10) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `dosis` text NOT NULL,
  `hargajual` double NOT NULL,
  PRIMARY KEY (`iddetailresep`),
  KEY `noresep` (`noresep`),
  KEY `kodeobat` (`kodeobat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailresep`
--

INSERT INTO `detailresep` (`iddetailresep`, `noresep`, `kodeobat`, `jumlah`, `dosis`, `hargajual`) VALUES
('RES17020400000101', 'RES170204000001', 'OB.000.007', 2, '2', 139),
('RES17020400000102', 'RES170204000001', 'OB.000.004', 2, '2', 100),
('RES17020400000103', 'RES170204000001', 'OB.000.008', 2, '2', 175),
('RES17020400000201', 'RES170204000002', 'OB.000.006', 1, '1', 138),
('RES17020400000202', 'RES170204000002', 'OB.000.005', 1, '1', 132),
('RES17020400000203', 'RES170204000002', 'OB.000.009', 1, '1', 180);

-- --------------------------------------------------------

--
-- Stand-in structure for view `detresobat`
--
CREATE TABLE IF NOT EXISTS `detresobat` (
`kodeobat` char(10)
,`namaobat` varchar(50)
,`merk` varchar(50)
,`satuan` varchar(20)
,`hargajual` double
,`iddetailresep` char(18)
,`noresep` char(15)
,`jumlah` int(11)
,`dosis` text
);
-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `kodedokter` char(5) NOT NULL,
  `kodepoli` char(5) NOT NULL,
  `namadokter` varchar(50) DEFAULT NULL,
  `almdokter` varchar(50) DEFAULT NULL,
  `telpdokter` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kodedokter`),
  KEY `kodepoli` (`kodepoli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kodedokter`, `kodepoli`, `namadokter`, `almdokter`, `telpdokter`) VALUES
('3', '12345', 'dr Rifa Pahlevi S.M.Aaa', 'kp. air bambu', '00000012222'),
('4', '12345', 'siapa aja lah', 'di mana aja', '049359873479899'),
('Dr003', '12345', 'denis muhamad ramdan', 'Kp. ama  aja', '037473837384'),
('Dr004', 'P0001', ' TEDI HERDIANSAH', 'Jl. Siliwangi Gg.Guntur I No.43', '082315279544'),
('Dr005', 'P0002', ' YUSUP SOPANDI', 'Jl. Mangunsarkoro No.6', '08157281500'),
('Dr006', 'P0003', 'ACEU NURLAELA', 'BTN Binong Griya Indah', '081563036743'),
('Dr007', 'P0004', 'ACHMAD DJOHARI', 'Jl. Wuluku No.1 Babakan Sari Rt.07/10', '081321233024'),
('Dr008', 'P0005', 'ACHMAD IRWANTO', 'Jl. Dipawangi II No.14', '085751992576'),
('Dr009', 'P0001', 'AGUS RAHMAT MULYANA', 'Gg. Rinjani II Rt/Rw. 02/014', '087820337135'),
('Dr010', 'P0002', 'AGUS YUDIANTO', 'Jl. Perwira No.4B', '085720602999'),
('Dr011', 'P0003', 'AGUSTINA SOETEDJO', 'Jl. Santosa Asih III No. 37', '08121478006'),
('Dr012', 'P0004', 'AHMAD HUDAYA', 'KP KARANG TENGAH', '081912054227'),
('Dr013', 'P0005', 'ANI ISMAYANI', 'Jl.Pr.Hidayatullah No.31', '081809819403');

-- --------------------------------------------------------

--
-- Stand-in structure for view `jaddok`
--
CREATE TABLE IF NOT EXISTS `jaddok` (
`kodedokter` char(5)
,`kodepoli` char(5)
,`namadokter` varchar(50)
,`almdokter` varchar(50)
,`telpdokter` varchar(20)
,`kodejadwal` char(5)
,`hari` varchar(15)
,`jammulai` time
,`jamselesai` time
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `jadper`
--
CREATE TABLE IF NOT EXISTS `jadper` (
`namadokter` varchar(50)
,`namapoli` varchar(50)
,`hari` varchar(15)
,`jammulai` time
,`jamselesai` time
);
-- --------------------------------------------------------

--
-- Table structure for table `jadwalpraktek`
--

CREATE TABLE IF NOT EXISTS `jadwalpraktek` (
  `kodejadwal` char(5) NOT NULL,
  `kodedokter` char(5) NOT NULL,
  `hari` varchar(15) DEFAULT NULL,
  `jammulai` time DEFAULT NULL,
  `jamselesai` time DEFAULT NULL,
  PRIMARY KEY (`kodejadwal`),
  KEY `kodedokter` (`kodedokter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwalpraktek`
--

INSERT INTO `jadwalpraktek` (`kodejadwal`, `kodedokter`, `hari`, `jammulai`, `jamselesai`) VALUES
('12345', '3', 'Senin', '00:00:08', '00:00:08'),
('J0002', 'Dr003', 'Senin', '11:11:00', '11:11:00'),
('J0003', '4', 'Senin', '14:22:00', '14:22:00'),
('J0004', '3', 'Rabu', '11:11:00', '11:11:00'),
('J0005', 'Dr003', 'Rabu', '00:00:11', '00:00:11'),
('J0006', 'Dr004', 'Kamis', '00:00:11', '00:00:11'),
('J0007', 'Dr005', 'Jumat', '00:00:11', '00:00:11'),
('J0008', 'Dr006', 'Sabtu', '00:00:11', '00:00:11'),
('J0009', 'Dr007', 'Minggu', '00:00:11', '00:00:11'),
('J0010', 'Dr008', 'Senin', '00:00:11', '00:00:11'),
('J0011', 'Dr009', 'Selasa', '00:00:11', '00:00:11'),
('J0012', 'Dr010', 'Rabu', '00:00:11', '00:00:11'),
('J0013', 'Dr011', 'Kamis', '00:00:11', '00:00:11'),
('J0014', 'Dr012', 'Jumat', '00:00:11', '00:00:11'),
('J0015', 'Dr013', 'Sabtu', '00:00:11', '00:00:11');

-- --------------------------------------------------------

--
-- Table structure for table `jenisbiaya`
--

CREATE TABLE IF NOT EXISTS `jenisbiaya` (
  `idjenisbiaya` char(5) NOT NULL,
  `namabiaya` varchar(50) DEFAULT NULL,
  `tarif` double DEFAULT NULL,
  PRIMARY KEY (`idjenisbiaya`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenisbiaya`
--

INSERT INTO `jenisbiaya` (`idjenisbiaya`, `namabiaya`, `tarif`) VALUES
('12345', 'biaya pemeriksaan', 100000),
('B0001', 'Pemeriksaan Kesehatan', 10000),
('B0002', 'Cek Tekanan Darah', 5000),
('B0003', 'Cek Golongan Darang', 20000),
('B0004', 'Cek Kadar Gula Darah', 20000),
('B0005', 'Cek Lingkar Perut', 1000),
('B0006', 'Cek Kolestrol Total', 30000),
('B0007', 'Cek Diabetes', 20000),
('B0008', 'Cek Osteoporosis', 30000),
('B0009', 'Cek Kangker Usus', 50000),
('B0010', 'Cek Kangker Kulit', 40000),
('B0011', 'Tes Urin', 200000),
('B0012', 'Tes Paru Paru', 200000),
('B0013', 'Tes Pendengaran', 1000),
('B0014', 'Tes Penglihatan', 1000),
('B0015', 'Tes Buta Warna', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(15) NOT NULL,
  `nip` char(10) NOT NULL,
  `password` varchar(15) DEFAULT NULL,
  `typeuser` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`username`),
  KEY `nip` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `nip`, `password`, `typeuser`) VALUES
('deko', '141510088', 'deko', 'Penda'),
('denis', '1234567890', 'denis', 'Admin'),
('siapa', '141510077', 'siapa', 'Pemer');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `kodeobat` char(10) NOT NULL,
  `namaobat` varchar(50) DEFAULT NULL,
  `merk` varchar(50) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `hargajual` double DEFAULT NULL,
  PRIMARY KEY (`kodeobat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kodeobat`, `namaobat`, `merk`, `satuan`, `stok`, `hargajual`) VALUES
('OB.000.001', 'ibuprofen', 'Phap', 'Mg', 1000, 100),
('OB.000.002', 'Ibuprofen', 'Phap', 'Mg', 1000, 92),
('OB.000.003', 'Ibuprofen', 'Yari', 'Mg', 1000, 95),
('OB.000.004', 'Ibuprofen', 'Infa', 'Mg', 1000, 100),
('OB.000.005', 'Ibuprofen', 'Phyt', 'Mg', 1000, 132),
('OB.000.006', 'Ibuprofen', 'Rama', 'Mg', 1000, 138),
('OB.000.007', 'Ibuprofen', 'Prom', 'Mg', 1000, 139),
('OB.000.008', 'Ibuprofen', 'Phap', 'Mg', 1000, 175),
('OB.000.009', 'Ibuprofen', 'Infa', 'Mg', 1000, 180),
('OB.000.010', 'Metampiron', 'Infa', 'Mg', 1000, 120),
('OB.000.011', 'Metampiron', 'fhyt', 'Mg', 1000, 120),
('OB.000.012', 'Metampiron', 'Bern', 'Mg', 1000, 120),
('OB.000.013', 'Metampiron', 'Infa', 'Mg', 1000, 120);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `nopasien` char(10) NOT NULL,
  `namapass` varchar(50) DEFAULT NULL,
  `almpass` varchar(50) DEFAULT NULL,
  `telppas` varchar(20) DEFAULT NULL,
  `tgllahirpass` date DEFAULT NULL,
  `jeniskelpas` varchar(1) DEFAULT NULL,
  `tglregistrasi` date DEFAULT NULL,
  PRIMARY KEY (`nopasien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`nopasien`, `namapass`, `almpass`, `telppas`, `tgllahirpass`, `jeniskelpas`, `tglregistrasi`) VALUES
('1701150001', 'ALDI PRATAMA', 'Perum. Kota baru blok 5 no.24', '85863201500', '1998-07-13', 'L', '2017-02-02'),
('1701150002', 'ANNE AMELIA', 'Kp kopo kulon Rt 02/Rw 05 Jl. Baros desa.sukataris', '85863201501', '1998-07-14', 'L', '2017-02-03'),
('1701150003', 'ARIL INDRA DWINANDA', 'Kp. Sukataris Ds.Sukataris RT.02 RW.01 Kec. Karang', '85863201502', '1998-07-15', 'L', '2017-02-04'),
('1701150004', 'AZIZ TAUFIK MAULANA', 'Kp. Selakawung RT. 04/02 kec. Cilaku kab. Cianjur', '85863201503', '1998-07-16', 'L', '2017-02-05'),
('1701150005', 'DANY PRASETYO FAWZI', 'BTN.Griya Binong Indah, Cilaku, Cianjur', '85863201504', '1998-07-17', 'L', '2017-02-06'),
('1701150006', 'DAUD FATCHURACHMAN', 'Btn Bumi Asri Sukamaju Blok B25 ', '85863201505', '1998-07-18', 'L', '2017-02-07'),
('1701150007', 'DEDE KOMARUDIN', 'Kp. baru Rt 01/04 Cipanas', '85863201506', '1998-07-19', 'L', '2017-02-08'),
('1701150008', 'DEFARDI FIRMAN', 'kp giriharja RT 01 RW 01 Desa Cibulakan ', '85863201507', '1998-07-20', 'L', '2017-02-09'),
('1701150009', 'DENIS MUHAMAD RAMDAN', 'Pesona Cianjur Indah Blok L2 No 15 RT05 / RW15', '85863201508', '1998-07-21', 'L', '2017-02-10'),
('1701150010', 'DIMAS SATRIA REFORMA', 'Jl.Kh.Saleh RT 06 / RW 01 KP.Pandan Jaya', '85863201509', '1998-07-22', 'L', '2017-02-11'),
('1701150011', 'ELSA NOVITRI RINJANI', 'Jl.Didi prawira kusumah Ga.Al-istiqomah ', '85863201510', '1998-07-23', 'L', '2017-02-12'),
('1701150012', 'ESA PUTRA MOCHAMAD DALLY', 'JL.Prof.Moch.Yamin No.118 RT.02 RW.08 Cianjur', '85863201511', '1998-07-24', 'P', '2017-02-13'),
('1701150013', 'FERYAN TRESNA SETIAKI', 'Kp. Tegal Batu RT02/RW02 Kec.Cilaku Kab.cianjur', '85863201512', '1998-07-25', 'P', '2017-02-14'),
('1701150014', 'FRAN FERDINANSYAH', 'Jl.Aria Cikondang Gg harapan 2', '85863201513', '1998-07-26', 'P', '2017-02-15'),
('1701150015', 'GARSA CAHYA SUKMANA', 'Kp Lampegan, Rt 04,Rw 12', '85863201514', '1998-07-27', 'P', '2017-02-16'),
('1701150016', 'HENDI AGUSTIANDI', 'Gadung Permai Jl. Flamboyan No. A23 RT. 01 / 16 Ci', '85863201515', '1998-07-28', 'P', '2017-02-17'),
('1701150017', 'IZRA YAHYA RAMADHAN', 'Kp. Pateken Ds.Sukataris RT.02 RW.03 Kec.Karangten', '85863201516', '1998-07-29', 'L', '2017-02-18'),
('1701160001', 'rifa', 'Alamatnya dimana', '04995848958', '2015-10-29', 'P', '2017-12-31'),
('1701160002', 'MELVIANA AGUSTINE', 'Jl.Perintis Kemerdekaan No.107 A  Kp.Margaluyu', '85863201518', '1998-07-31', 'P', '2017-02-20'),
('1701160003', 'MOCH BISRI FAUZA', 'Kp. Rawa bango RT02/RW03 Kec.Ciranjang Kab.cianjur', '85863201519', '1998-08-01', 'L', '2017-02-21'),
('1701160004', 'MOCHAMAD ELANG FARHAN', 'Kp.Kopem RT 01 RW 10 kelurahan sawah gede', '85863201520', '1998-08-02', 'L', '2017-02-22'),
('1701160005', 'MOCHAMAD NURKHAYAL KADAFI', 'Kp. Panembong Wetan  RT. 01/01 kec. Cianjur kab.  ', '85863201521', '1998-08-03', 'P', '2017-02-23'),
('1701160006', 'MOHAMAD RIYAN HIDAYAT', 'Komplek Coolibah Utama No. 87', '85863201522', '1998-08-04', 'P', '2017-02-24'),
('1701160007', 'MOHAMMAD WILDAN IBRAHIM', 'Jl.Aria Cikondang Gg.Harapan 2', '85863201523', '1998-08-05', 'P', '2017-02-25'),
('1701160008', 'MUHAMAD FIKRI ANSORULLOH', 'Kp. Pasarean. kec. Cianjur kab. Cianjur', '85863201524', '1998-08-06', 'P', '2017-02-26'),
('1701160009', 'MUHAMMAD HISYAM FADHIL', 'Jl.raya bandung,kp ciburial,desa bojong ,Rt 03,Rw ', '85863201525', '1998-08-07', 'P', '2017-02-27'),
('1701160010', 'MUHAMMAD RIFA PAHLEVI', 'kp. Legok,Sukamanah,Cugenang RT 01/ RW 09', '85863201526', '1998-08-08', 'P', '2017-02-28'),
('1701160011', 'MUHAMMAD YUSUP ANDREAN', 'Jl.HOS.cokroaminoto,Gg.Dukuh No 1', '85863201527', '1998-08-09', 'P', '2017-03-01'),
('1701160012', 'NABILLA YUSUP', 'Pesona Cianjur Indah b4 no.4', '85863201528', '1998-08-10', 'P', '2017-03-02'),
('1701160013', 'NOVI ARISANTI ARFANSYAH', 'Gg.Harapan 2', '85863201529', '1998-08-11', 'P', '2017-03-03'),
('1701160014', 'PUTTY RASPUTIN', 'BTN Limbangansari Indah No.27 RT.01 RW.12', '85863201530', '1998-08-12', 'P', '2017-03-04'),
('1701160015', 'REGI SAPUTRA', 'Jl. Arif Rahman Hakim Gg. Pahlawan RT.02 RW.18', '85863201531', '1998-08-13', 'P', '2017-03-05'),
('1701160016', 'RENALDI RAMADANI', 'Kp. Cibako RT/RW 02/03, Cianjur', '85863201532', '1998-08-14', 'P', '2017-03-06'),
('1701160017', 'RIVALDY TIRTA TEDJASUKMANA', 'Perum. Kota baru blok 5 no.24', '85863201533', '1998-08-15', 'P', '2017-03-07'),
('1701160018', 'SALMA NAJIBAH MULYARISTIA', 'Kp kopo kulon Rt 02/Rw 05 Jl. Baros desa.sukataris', '85863201534', '1998-08-16', 'P', '2017-03-08'),
('1701160019', 'SENO SETIANTO', 'Kp. Sukataris Ds.Sukataris RT.02 RW.01 Kec. Karang', '85863201535', '1998-08-17', 'P', '2017-03-09'),
('1701160020', 'TRESNA GUMILANG INDAYANA', 'Kp. Selakawung RT. 04/02 kec. Cilaku kab. Cianjur', '85863201536', '1998-08-18', 'P', '2017-03-10'),
('1701170001', 'VENNA FUSHILA', 'BTN.Griya Binong Indah, Cilaku, Cianjur', '85863201537', '1998-08-19', 'P', '2017-03-11'),
('1701170002', 'WORO AGUNG', 'Btn Bumi Asri Sukamaju Blok B25 ', '85863201538', '1998-08-20', 'P', '2017-03-12'),
('1701170003', 'MOCH BISRI FAUZA', 'Kp. baru Rt 01/04 Cipanas', '85863201539', '1998-08-21', 'P', '2017-03-13'),
('1701170004', 'MOCHAMAD ELANG FARHAN', 'kp giriharja RT 01 RW 01 Desa Cibulakan ', '85863201540', '1998-08-22', 'L', '2017-03-14'),
('1701170005', 'MOCHAMAD NURKHAYAL KADAFI', 'Pesona Cianjur Indah Blok L2 No 15 RT05 / RW15', '85863201541', '1998-08-23', 'L', '2017-03-15'),
('1701170006', 'MOHAMAD RIYAN HIDAYAT', 'Jl.Kh.Saleh RT 06 / RW 01 KP.Pandan Jaya', '85863201542', '1998-08-24', 'L', '2017-03-16'),
('1701170007', 'MOHAMMAD WILDAN IBRAHIM', 'Jl.Didi prawira kusumah Ga.Al-istiqomah ', '85863201543', '1998-08-25', 'L', '2017-03-17'),
('1701170008', 'MUHAMAD FIKRI ANSORULLOH', 'JL.Prof.Moch.Yamin No.118 RT.02 RW.08 Cianjur', '85863201544', '1998-08-26', 'P', '2017-03-18'),
('1701170009', 'MUHAMMAD HISYAM FADHIL', 'Kp. Tegal Batu RT02/RW02 Kec.Cilaku Kab.cianjur', '85863201545', '1998-08-27', 'L', '2017-03-19'),
('1701170010', 'MUHAMMAD RIFA PAHLEVI', 'Jl.Aria Cikondang Gg harapan 2', '85863201546', '1998-08-28', 'P', '2017-03-20'),
('1701170011', 'MUHAMMAD YUSUP ANDREAN', 'Kp Lampegan, Rt 04,Rw 12', '85863201547', '1998-08-29', 'L', '2017-03-21'),
('1701170012', 'NABILLA YUSUP', 'Gadung Permai Jl. Flamboyan No. A23 RT. 01 / 16 Ci', '85863201548', '1998-08-30', 'P', '2017-03-22'),
('1701170013', 'NOVI ARISANTI ARFANSYAH', 'Kp. Pateken Ds.Sukataris RT.02 RW.03 Kec.Karangten', '85863201549', '1998-08-31', 'L', '2017-03-23'),
('1701170014', 'PUTTY RASPUTIN', 'kp. Sadewata Kaler RT/RW 04/01', '85863201550', '1998-09-01', 'P', '2017-03-24'),
('1701170015', 'REGI SAPUTRA', 'Jl.Perintis Kemerdekaan No.107 A  Kp.Margaluyu', '85863201551', '1998-09-02', 'L', '2017-03-25'),
('1701170016', 'RENALDI RAMADANI', 'Kp. Rawa bango RT02/RW03 Kec.Ciranjang Kab.cianjur', '85863201552', '1998-09-03', 'P', '2017-03-26'),
('1701170017', 'RIVALDY TIRTA TEDJASUKMANA', 'Kp.Kopem RT 01 RW 10 kelurahan sawah gede', '85863201553', '1998-09-04', 'L', '2017-03-27'),
('1701170018', 'SALMA NAJIBAH MULYARISTIA', 'Kp. Panembong Wetan  RT. 01/01 kec. Cianjur kab.  ', '85863201554', '1998-09-05', 'P', '2017-03-28'),
('1701170019', 'SENO SETIANTO', 'Komplek Coolibah Utama No. 87', '85863201555', '1998-09-06', 'L', '2017-03-29'),
('1701170020', 'TRESNA GUMILANG INDAYANA', 'Jl.Aria Cikondang Gg.Harapan 2', '85863201556', '1998-09-07', 'P', '2017-03-30'),
('1701170021', 'VENNA FUSHILA', 'Kp. Pasarean. kec. Cianjur kab. Cianjur', '85863201557', '1998-09-08', 'L', '2017-03-31'),
('1701170022', 'WORO AGUNG', 'Jl.raya bandung,kp ciburial,desa bojong ,Rt 03,Rw ', '85863201558', '1998-09-09', 'P', '2017-04-01'),
('1701200001', 'denis', 'kp. dimana', '003948483944', '2017-01-20', 'L', '2017-01-20'),
('1702020001', 'Woro agung', 'kp.woro agung', '1111111111111111', '2017-02-02', 'P', '2017-02-01'),
('1702050001', 'Ahmad Mulyana', 'cipadang kalapa', '00493849384', '1998-06-01', 'L', '2017-02-05'),
('1702050002', 'qary ayatulloh', 'perum bumi mas', '09494384938', '2016-07-13', 'L', '2017-02-05'),
('nopasien', 'nopasien', 'nopasien', 'nopasien', '0000-00-00', 'j', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `nip` char(10) NOT NULL,
  `namapeg` varchar(50) DEFAULT NULL,
  `almpeg` varchar(50) DEFAULT NULL,
  `telppeg` varchar(20) DEFAULT NULL,
  `tgllhrpeg` date DEFAULT NULL,
  `jnlkelpeg` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `namapeg`, `almpeg`, `telppeg`, `tgllhrpeg`, `jnlkelpeg`) VALUES
('1234567890', 'denis muhamad ramdan', 'kp. selakawung bayubud', '085863201500', '1998-07-13', 'L'),
('141510077', 'siapa', 'siapa', '01111111122222222222', '2017-02-03', 'P'),
('141510088', 'dede komarudin', 'kp. kupukiland', '0356346348', '2017-02-01', 'L'),
('141510099', 'nama', 'alamat', '3434343434', '2017-12-31', 'P'),
('Dr001', 'P0001', ' TEDI HERDIANSAH', 'Jl. Siliwangi Gg.Gun', '0000-00-00', NULL),
('Dr002', 'P0002', ' YUSUP SOPANDI', 'Jl. Mangunsarkoro No', '0000-00-00', NULL),
('Dr004', 'P0004', 'ACHMAD DJOHARI', 'Jl. Wuluku No.1 Baba', '0000-00-00', NULL),
('Dr005', 'P0005', 'ACHMAD IRWANTO', 'Jl. Dipawangi II No.', '0000-00-00', NULL),
('Dr006', 'P0001', 'AGUS RAHMAT MULYANA', 'Gg. Rinjani II Rt/Rw', '0000-00-00', NULL),
('Dr007', 'P0002', 'AGUS YUDIANTO', 'Jl. Perwira No.4B', '0000-00-00', NULL),
('Dr008', 'P0003', 'AGUSTINA SOETEDJO', 'Jl. Santosa Asih III', '0000-00-00', NULL),
('Dr009', 'P0004', 'AHMAD HUDAYA', 'KP KARANG TENGAH', '0000-00-00', NULL),
('Dr010', 'P0005', 'ANI ISMAYANI', 'Jl.Pr.Hidayatullah N', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `peglog`
--
CREATE TABLE IF NOT EXISTS `peglog` (
`nip` char(10)
,`namapeg` varchar(50)
,`almpeg` varchar(50)
,`telppeg` varchar(20)
,`tgllhrpeg` date
,`jnlkelpeg` varchar(1)
,`username` varchar(15)
,`password` varchar(15)
,`typeuser` varchar(5)
);
-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE IF NOT EXISTS `pemeriksaan` (
  `nopemeriksaan` int(15) NOT NULL,
  `nopendaftaran` int(15) NOT NULL,
  `keluhan` text,
  `diagnosa` text,
  `perawatan` text,
  `tindakan` text,
  `beratbadan` int(11) DEFAULT NULL,
  `tensidiastolik` int(11) DEFAULT NULL,
  `tensisistolik` int(11) DEFAULT NULL,
  PRIMARY KEY (`nopemeriksaan`),
  KEY `nopendaftaran` (`nopendaftaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`nopemeriksaan`, `nopendaftaran`, `keluhan`, `diagnosa`, `perawatan`, `tindakan`, `beratbadan`, `tensidiastolik`, `tensisistolik`) VALUES
(1702010001, 1701310006, 'keluhan', 'diagnosa', 'perawatan', 'tindakan', 123, 123, 123),
(1702010002, 1701310003, 'keluhan', 'diagnosa', 'perawatan', 'tindakan', 123, 123, 1223),
(1702020001, 1701310001, 'keluhan', 'doagnosa', 'perawatan', 'tindakan', 222, 222, 222),
(1702030001, 1702030001, 'Sakit Gigi', 'Gigi Berlubang', 'Gigi diberi obat', 'Gigi di tambah', 55, 120, 80),
(1702030002, 1702030002, 'Pusing', 'Darah Tinggi', 'Diberi obat', 'Di beri obat', 60, 64, 80),
(1702050001, 1702050001, 'sakit gigi', 'gigi berlubang', 'gigi di bersihkan', 'gigi di tambal', 55, 89, 76);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `nopendaftaran` int(15) NOT NULL,
  `kodejadwal` char(5) NOT NULL,
  `nip` char(10) NOT NULL,
  `nopasien` char(10) NOT NULL,
  `tglpendaftaran` date DEFAULT NULL,
  `nourut` int(11) DEFAULT NULL,
  PRIMARY KEY (`nopendaftaran`),
  KEY `nip` (`nip`),
  KEY `nopasien` (`nopasien`),
  KEY `kodejadwal` (`kodejadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`nopendaftaran`, `kodejadwal`, `nip`, `nopasien`, `tglpendaftaran`, `nourut`) VALUES
(1701310001, '12345', '1234567890', '1701160001', '2017-01-31', 1),
(1701310002, '12345', '1234567890', '1701200001', '2017-01-31', 2),
(1701310003, '12345', '1234567890', '1701160001', '2017-01-31', 3),
(1701310004, '12345', '1234567890', '1701200001', '2017-01-31', 4),
(1701310005, '12345', '1234567890', '1701200001', '2017-01-31', 5),
(1701310006, '12345', '1234567890', '1701200001', '2017-01-31', 6),
(1702020001, 'J0004', '1234567890', '1702020001', '2017-02-02', 1),
(1702020002, '12345', '1234567890', '1701200001', '2017-02-02', 2),
(1702030001, 'J0002', '1234567890', '1701170010', '2017-02-03', 1),
(1702030002, 'J0004', '1234567890', '1701170017', '2017-02-03', 2),
(1702050001, 'J0003', '1234567890', '1702050001', '2017-02-05', 1),
(1702050002, 'J0009', '1234567890', '1702050002', '2017-02-05', 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pendapatanhari`
--
CREATE TABLE IF NOT EXISTS `pendapatanhari` (
`noresep` char(15)
,`hargakotor` double
);
-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE IF NOT EXISTS `poliklinik` (
  `kodepoli` char(5) NOT NULL,
  `namapoli` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kodepoli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`kodepoli`, `namapoli`) VALUES
('12345', 'Poliklinik Cianjur Sehat'),
('P0001', 'Poli Gigi'),
('P0002', 'Poli kulit'),
('P0003', 'Poli jantung'),
('P0004', 'Poli mata'),
('P0005', 'Poli Umum');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE IF NOT EXISTS `resep` (
  `noresep` char(15) NOT NULL,
  `nopemeriksaan` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`noresep`),
  KEY `nopemeriksaan` (`nopemeriksaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`noresep`, `nopemeriksaan`, `tanggal`) VALUES
('RES170204000001', 1702030002, '2017-02-04'),
('RES170204000002', 1702010002, '2017-02-04');

-- --------------------------------------------------------

--
-- Stand-in structure for view `riwayatpass`
--
CREATE TABLE IF NOT EXISTS `riwayatpass` (
`nopasien` char(10)
,`namapass` varchar(50)
,`almpass` varchar(50)
,`telppas` varchar(20)
,`tgllahirpass` date
,`jeniskelpas` varchar(1)
,`tglregistrasi` date
,`keluhan` text
,`diagnosa` text
,`perawatan` text
,`tindakan` text
,`beratbadan` int(11)
,`tensidiastolik` int(11)
,`tensisistolik` int(11)
);
-- --------------------------------------------------------

--
-- Structure for view `cpem`
--
DROP TABLE IF EXISTS `cpem`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cpem` AS select `pendaftaran`.`nopendaftaran` AS `nopendaftaran`,`pasien`.`nopasien` AS `nopasien`,`pasien`.`namapass` AS `namapass` from (`pendaftaran` join `pasien`) where (`pasien`.`nopasien` = `pendaftaran`.`nopasien`);

-- --------------------------------------------------------

--
-- Structure for view `datpeg`
--
DROP TABLE IF EXISTS `datpeg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datpeg` AS select `login`.`username` AS `username`,`login`.`password` AS `password`,`login`.`typeuser` AS `typeuser`,`pegawai`.`nip` AS `nip`,`pegawai`.`namapeg` AS `namapeg`,`pegawai`.`almpeg` AS `almpeg`,`pegawai`.`telppeg` AS `telppeg`,`pegawai`.`tgllhrpeg` AS `tgllhrpeg`,`pegawai`.`jnlkelpeg` AS `jnlkelpeg` from (`login` join `pegawai`) where (`login`.`nip` = `pegawai`.`nip`);

-- --------------------------------------------------------

--
-- Structure for view `detresobat`
--
DROP TABLE IF EXISTS `detresobat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detresobat` AS select `obat`.`kodeobat` AS `kodeobat`,`obat`.`namaobat` AS `namaobat`,`obat`.`merk` AS `merk`,`obat`.`satuan` AS `satuan`,`obat`.`hargajual` AS `hargajual`,`detailresep`.`iddetailresep` AS `iddetailresep`,`detailresep`.`noresep` AS `noresep`,`detailresep`.`jumlah` AS `jumlah`,`detailresep`.`dosis` AS `dosis` from (`obat` join `detailresep`) where (`obat`.`kodeobat` = `detailresep`.`kodeobat`);

-- --------------------------------------------------------

--
-- Structure for view `jaddok`
--
DROP TABLE IF EXISTS `jaddok`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jaddok` AS select `dokter`.`kodedokter` AS `kodedokter`,`dokter`.`kodepoli` AS `kodepoli`,`dokter`.`namadokter` AS `namadokter`,`dokter`.`almdokter` AS `almdokter`,`dokter`.`telpdokter` AS `telpdokter`,`jadwalpraktek`.`kodejadwal` AS `kodejadwal`,`jadwalpraktek`.`hari` AS `hari`,`jadwalpraktek`.`jammulai` AS `jammulai`,`jadwalpraktek`.`jamselesai` AS `jamselesai` from (`dokter` join `jadwalpraktek`) where (`dokter`.`kodedokter` = `jadwalpraktek`.`kodejadwal`);

-- --------------------------------------------------------

--
-- Structure for view `jadper`
--
DROP TABLE IF EXISTS `jadper`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jadper` AS select `dokter`.`namadokter` AS `namadokter`,`poliklinik`.`namapoli` AS `namapoli`,`jadwalpraktek`.`hari` AS `hari`,`jadwalpraktek`.`jammulai` AS `jammulai`,`jadwalpraktek`.`jamselesai` AS `jamselesai` from ((`dokter` join `poliklinik`) join `jadwalpraktek`) where ((`dokter`.`kodepoli` = `poliklinik`.`kodepoli`) and (`jadwalpraktek`.`kodedokter` = `dokter`.`kodedokter`));

-- --------------------------------------------------------

--
-- Structure for view `peglog`
--
DROP TABLE IF EXISTS `peglog`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `peglog` AS select `pegawai`.`nip` AS `nip`,`pegawai`.`namapeg` AS `namapeg`,`pegawai`.`almpeg` AS `almpeg`,`pegawai`.`telppeg` AS `telppeg`,`pegawai`.`tgllhrpeg` AS `tgllhrpeg`,`pegawai`.`jnlkelpeg` AS `jnlkelpeg`,`login`.`username` AS `username`,`login`.`password` AS `password`,`login`.`typeuser` AS `typeuser` from (`pegawai` join `login`) where (`pegawai`.`nip` = `login`.`nip`);

-- --------------------------------------------------------

--
-- Structure for view `pendapatanhari`
--
DROP TABLE IF EXISTS `pendapatanhari`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pendapatanhari` AS select `detailresep`.`noresep` AS `noresep`,sum(`detailresep`.`hargajual`) AS `hargakotor` from (`detailresep` join `resep`) where ((`resep`.`noresep` = `detailresep`.`noresep`) and (`resep`.`tanggal` = '2017-02-04')) group by `detailresep`.`noresep`;

-- --------------------------------------------------------

--
-- Structure for view `riwayatpass`
--
DROP TABLE IF EXISTS `riwayatpass`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `riwayatpass` AS select `pasien`.`nopasien` AS `nopasien`,`pasien`.`namapass` AS `namapass`,`pasien`.`almpass` AS `almpass`,`pasien`.`telppas` AS `telppas`,`pasien`.`tgllahirpass` AS `tgllahirpass`,`pasien`.`jeniskelpas` AS `jeniskelpas`,`pasien`.`tglregistrasi` AS `tglregistrasi`,`pemeriksaan`.`keluhan` AS `keluhan`,`pemeriksaan`.`diagnosa` AS `diagnosa`,`pemeriksaan`.`perawatan` AS `perawatan`,`pemeriksaan`.`tindakan` AS `tindakan`,`pemeriksaan`.`beratbadan` AS `beratbadan`,`pemeriksaan`.`tensidiastolik` AS `tensidiastolik`,`pemeriksaan`.`tensisistolik` AS `tensisistolik` from ((`pasien` join `pendaftaran`) join `pemeriksaan`) where ((`pasien`.`nopasien` = `pendaftaran`.`nopasien`) and (`pendaftaran`.`nopendaftaran` = `pemeriksaan`.`nopendaftaran`));

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailbiaya`
--
ALTER TABLE `detailbiaya`
  ADD CONSTRAINT `jenisbiaya` FOREIGN KEY (`idjenisbiaya`) REFERENCES `jenisbiaya` (`idjenisbiaya`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftaran` FOREIGN KEY (`nopendaftaran`) REFERENCES `pendaftaran` (`nopendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detailresep`
--
ALTER TABLE `detailresep`
  ADD CONSTRAINT `kodeobat` FOREIGN KEY (`kodeobat`) REFERENCES `obat` (`kodeobat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `noresep` FOREIGN KEY (`noresep`) REFERENCES `resep` (`noresep`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `kodepoli` FOREIGN KEY (`kodepoli`) REFERENCES `poliklinik` (`kodepoli`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jadwalpraktek`
--
ALTER TABLE `jadwalpraktek`
  ADD CONSTRAINT `kodedokter` FOREIGN KEY (`kodedokter`) REFERENCES `dokter` (`kodedokter`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `nip` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD CONSTRAINT `nopendaftaran` FOREIGN KEY (`nopendaftaran`) REFERENCES `pendaftaran` (`nopendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `kodejadwal` FOREIGN KEY (`kodejadwal`) REFERENCES `jadwalpraktek` (`kodejadwal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `nippen` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nopasien` FOREIGN KEY (`nopasien`) REFERENCES `pasien` (`nopasien`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `nopemeriksaan` FOREIGN KEY (`nopemeriksaan`) REFERENCES `pemeriksaan` (`nopemeriksaan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
