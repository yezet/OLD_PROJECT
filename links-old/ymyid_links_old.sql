-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2020 at 02:02 AM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ymyid_links_old`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `kd_level` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ket` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`kd_level`, `level`, `ket`) VALUES
('A', '1', 'Administrator'),
('B', '2', 'User Level 2'),
('C', '3', 'User Level 3'),
('D', '4', 'User Level 4'),
('sa', 'administrator', 'System Administrator'),
('u1', 'user', 'Reguler User');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `note` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat`, `note`) VALUES
(1, 'Bootstrap', 'Bootsrap'),
(2, 'Web Programming', 'Web Programming'),
(3, 'Framework', 'PHP Framework'),
(5, 'Religi', 'Sejarah Islam'),
(6, 'WIP', 'Wrok IN Progress'),
(7, 'Wordpress', 'Wordpress Plugin & Themes'),
(9, 'Source & Tut', 'Source & Tut'),
(10, 'Inspire', 'Inspiration '),
(11, 'All in 1', 'All in One'),
(12, 'Download', 'Download'),
(13, 'Framework', 'Etc'),
(15, 'NETWORKING', 'Jarkom'),
(16, 'Linux-WIP', 'Linux Tutor'),
(17, 'Project', 'Project Aloha'),
(18, 'Framework', 'Work'),
(19, 'PATCH & UPDATE', 'OS Patch & Security'),
(20, 'github', 'git'),
(21, 'Browser', 'Web browser'),
(22, 'URGENT', 'Segera!'),
(23, 'DETECTIVE CONAN', 'Film detective conan'),
(24, 'Game', 'Game'),
(25, 'Fix - Online Tools', 'Online Tools'),
(26, 'Fix - Urgent', 'asap'),
(27, 'Fix - Linux Server Control Panel', 'Server Control Panel'),
(28, 'Fix - Ain1', 'all in 1'),
(29, 'Fix - Web Ain1', 'web all in 1'),
(30, 'Fix - Download', 'download'),
(31, 'DATA TABLE', 'data table'),
(32, 'Fix - Microsoft', 'Microsoft');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `tgl_upload`, `nama`) VALUES
(1, '2017-07-16', '1.jpg'),
(2, '2017-07-16', '2.jpg'),
(3, '2017-07-16', '3.jpg'),
(4, '2017-07-16', '4.jpg'),
(5, '2017-07-16', '2.jpg'),
(6, '2017-07-16', '6.jpg'),
(7, '2017-07-16', '7.jpg'),
(8, '2017-07-16', '8.jpg'),
(9, '2017-07-16', 'hijabdosa1.jpg'),
(10, '2017-07-16', 'Cup-with-coffee-abstract-illustration-vector-02.jpg'),
(11, '2017-07-16', 'miulan-logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `url_id` int(5) NOT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `des` text COLLATE utf8_unicode_ci NOT NULL,
  `cat` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`url_id`, `url`, `des`, `cat`) VALUES
(81, 'https://wordpress.org/plugins/better-wp-security/', 'plugin wp', 'Wordpress'),
(83, 'https://www.ilmuwebsite.com/download-semua-ebook-tutorial-php-ilmuwebsite', 'download', 'web'),
(270, 'https://www.youtube.com/channel/UC5uekIwJ2N-M3P8ewfIf7Cw', 'is', 'Religi'),
(273, 'https://computerscience.id/2015/11/source-code-crudapi-sederhana-dengan-lumen-ajax-dan-codeigniter.html', 'Php mysql', 'Web Programming'),
(274, 'https://github.com/laravel', 'php framework', 'PHP Framework'),
(275, 'https://computerscience.id/', 'Tut', 'TUT'),
(276, 'https://computerscience.id/2014/04/design-relasi-tabel-pada-database-di-phpmyadmin.html', 'wip', 'WIP'),
(277, 'https://aqitutorial.blogspot.com/2016/04/membuat-relasi-antar-tabel-di-mysql.html', 'wip', 'WIP'),
(278, 'https://jagowebdev.com/membuat-mengedit-menghapus-foreign-key-dengan-phpmyadmin/', 'Tut', 'TUT'),
(279, 'https://jagowebdev.com/memahami-session-pada-php/', 'PHP', 'TUT'),
(280, 'https://jagowebdev.com/character-set-dan-collation-pada-mysql/', 'Mysql', 'TUT'),
(281, 'https://jagowebdev.com/cookie-pada-php/', 'php', 'Web Programming'),
(282, 'https://jagowebdev.com/membuat-tabel-responsive-dengan-css/', 'css', 'TUT'),
(283, 'http://saifuddinlutfi.blogspot.com/2016/05/cara-membuat-relasi-tabel-pada.html', 'phpmysql', 'TUT'),
(284, 'http://achmadfirmansyah123.blogspot.com/2014/06/cara-relasi-antar-table-dengan.html', 'phpmysql', 'TUT'),
(285, 'https://komputasistat.blogspot.com/2016/08/membuat-relasi-relationship-tabel.html', 'phpmyadmin', 'WIP'),
(286, 'http://wepsetindo.blogspot.com/2017/08/relasi-tabel-mysql-cascade-restrict-set.html', 'phpmysql', 'WIP'),
(287, 'https://www.sourcecodester.com/', 'S', 'Source & Tut'),
(288, 'http://gudangcodingaplikasi.blogspot.com/', 'SC', 'Source & Tut'),
(289, 'http://www.ilmuprogrammer.com/', 'Tut', 'Source & Tut'),
(290, 'https://livelaughrowe.com/', 'Insp', 'Inspire'),
(291, 'https://tympanus.net/codrops/', 'All in 1', 'Fix - Ain1'),
(292, 'https://www.script-tutorials.com/', 'Aione', 'Fix - Web Ain1'),
(294, 'https://www.software182.com/', 'w', 'Download'),
(296, 'https://xmpp.org/', 'wip', 'WIP'),
(297, 'https://prosody.im/', 'w', 'WIP'),
(298, 'https://ittutorials.net/', 'Tut', 'Source & Tut'),
(299, 'https://www.computersnyou.com/', 'w', 'Source & Tut'),
(300, 'https://iwantsourcecodes.com/', 'coding', 'Source & Tut'),
(301, 'http://www.nulis-ilmu.com/', 'w', 'WIP'),
(302, 'https://alternativeto.net/', 'etc', 'Etc'),
(303, 'https://www.topbestalternatives.com/', 'etc', 'Etc'),
(305, 'https://www.xigmanas.com/index.php?id=2', 'w', 'WIP'),
(306, 'http://www.openmediavault.org/', 'w', 'WIP'),
(307, 'https://www.freenas.org/', 'w', 'WIP'),
(308, 'https://cozy.io/en/', 'w', 'WIP'),
(309, 'https://www.iredmail.org/', 'w', 'WIP'),
(310, 'http://www.candra.web.id/', 'w', 'Source & Tut'),
(311, 'http://www.nyekrip.com/', 'w', 'Source & Tut'),
(313, 'https://www.dumetschool.com/blog/Cara-Mereset-Auto-Increment-pada-Database-MySQL', 'tut', 'Source & Tut'),
(316, 'https://www.youtube.com/channel/UCkIiNw-qbCy_NHZeg8BNsMQ', 'tut', 'Source & Tut'),
(318, 'https://catatan-lamers.blogspot.com/', 'ain1', 'Fix - Ain1'),
(319, 'http://www.catalog.update.microsoft.com/Search.aspx?q=SP3%20XP%20%20%20%20%20%20%20%20', 'wxpsp3', 'Fix - Microsoft'),
(320, 'https://ngonfig.net/', 'Jarkom', 'NETWORKING'),
(323, 'https://themes.gohugo.io/cupper-hugo-theme/', 't', 'WIP'),
(324, 'http://www.system-rescue-cd.org/disk-partitioning/Repairing-a-damaged-Grub/', 'linx tut', 'WIP'),
(325, 'https://modemly.com/d/', 'tut', 'WIP'),
(327, 'https://www.youtube.com/watch?v=hO-5ad8ngYE', 'linux', 'WIP'),
(328, 'https://www.youtube.com/watch?v=uaY3QDadLcI', 'linux', 'WIP'),
(330, 'https://www.itechtics.com/microsoft-sql-server-versions-direct-download-links-2008-2012-2014-2016/', 'msql server', 'Fix - Microsoft'),
(331, 'https://linuxcommando.blogspot.com/2008/05/run-ifconfig-as-non-root-user-for-read.html', 'Ifconfig', 'WIP'),
(332, 'https://www.cyberciti.biz/faq/debian-ubuntu-linux-auto-mounting-windows-ntfs-file-system/', 'Auto mount NTFS', 'Linux-WIP'),
(333, 'https://computingforgeeks.com/how-to-install-php-7-3-on-debian-9-debian-8/', 'OK', 'Linux-WIP'),
(334, 'https://stackoverflow.com/questions/35988990/how-to-enable-php7-module-in-apache', 'OK', 'Linux-WIP'),
(335, 'http://www.alohatravelbatam.com/', 'Project', 'Project'),
(337, 'https://www.catalog.update.microsoft.com/home.aspx', 'Microsoft update catalog', 'Fix - Microsoft'),
(340, 'https://www.teamviewer.com/en/download/previous-versions/?_ga=2.225242521.2044872202.1552988183-843460399.1552988183', 'Teamviewer', 'Download'),
(341, 'https://wiki.x2go.org/doku.php/start', 'REMOTE', 'WIP'),
(342, 'https://www.meshcommander.com/meshcentral2', 'remote', 'WIP'),
(344, 'http://guacamole.apache.org', 'remote', 'WIP'),
(346, 'https://www.debian.org/releases/jessie/amd64/pr01.html', 'DEBIAN', 'Source & Tut'),
(351, 'http://ftp.gunadarma.ac.id/', 'wip', 'WIP'),
(353, 'https://www.jeasyui.com', 'tabl', 'Fix - Web Ain1'),
(354, 'https://jspreadsheets.com', 'd', 'All in 1'),
(355, 'https://www.jqwidgets.com/jquery-widgets-documentation/', 'sd', 'All in 1'),
(359, 'http://js-grid.com', 'dsd', 'All in 1'),
(360, 'https://www.angularminds.com/blog/article/15-useful-javascript-based-data-grid-libraries-for-web-app-development.html', 'sd', 'All in 1'),
(361, 'https://www.mozilla.org/en-US/firefox/all/', 'Firefox Offline INstaller', 'Fix - Download'),
(362, 'https://www.google.com/intl/en/chrome/?standalone=1', 'Google chrome offline installer', 'Fix - Download'),
(363, 'https://www.helpjet.net', 'Driver', 'Download'),
(364, 'https://penguinstunnel.blogspot.com/2017/06/berkomunikasi-dengan-mikrotik-routeros.html', 'MKTK', 'WIP'),
(365, 'https://tecadmin.net/install-php-debian-9-stretch/', 'deb', 'Linux-WIP'),
(366, 'https://medium.com/@arvanria/how-to-install-php-7-3-7-2-5-6-on-debian-9-stretch-821d209a0d25', 'deb', 'Linux-WIP'),
(367, 'https://tecnstuff.net/how-to-install-php-on-debian-9/', 'f', 'Linux-WIP'),
(368, 'https://www.starwindsoftware.com', 'download', 'Download'),
(369, 'http://www.winimage.com/download.htm', 'd', 'Download'),
(370, 'https://lucanuscervus-notes.readthedocs.io/en/latest/Virtualization/Virsh/Convert%20VBox%20disks%20to%20qcow2/', 'x', 'WIP'),
(371, 'https://blog.sleeplessbeastie.eu/2012/04/29/virtualbox-convert-raw-image-to-vdi-and-otherwise/', 's', 'WIP'),
(372, 'https://www.petanikode.com/', 'Tut', 'Source & Tut'),
(373, 'https://badoystudio.com', 'x', 'Web Programming'),
(374, 'https://www.idrails.com', 'c', 'Source & Tut'),
(375, 'https://codewithawa.com', 'd', 'Source & Tut'),
(376, 'https://www.egrappler.com/10-free-wordpress-portfolio-plugins/', 'wp', 'Wordpress'),
(377, 'https://www.freshtechtips.com/2015/12/custom-google-drive-form-for-wordpress.html', 'wp', 'Wordpress'),
(378, 'https://wordpress.org/plugins/loginizer/#description', 'wp', 'Wordpress'),
(379, 'http://html5blank.com', 'wp', 'Wordpress'),
(382, 'https://www.pcsteps.com', 'd', 'Fix - Ain1'),
(383, 'https://github.com/dimaspermadiyp?tab=repositories', 'd', 'github'),
(384, 'https://github.com/Andirohandi', 's', 'github'),
(385, 'https://www.sarjanakomedi.com/category/source-code/freebies/', 'd', 'Web Programming'),
(386, 'https://belajarphp.net/channel-video-tutorial-gratis-youtube/', 'd', 'Source & Tut'),
(387, 'https://www.mozilla.org/en-US/firefox/all/#product-desktop-release', 'Firefox offline installer', 'Fix - Download'),
(388, 'https://community.spiceworks.com/topic/642302-syncing-access-and-sql', 'segera', 'URGENT'),
(389, 'https://bytes.com/topic/access/answers/210777-synchronize-sql-server-access-mdb', 's', 'URGENT'),
(390, 'https://www.got-it.ai/solutions/sqlquerychat/sql-help/others/convert-access-database-to-sql-server-by-using-ssma-querychat/', 's', 'URGENT'),
(391, 'https://forums.asp.net/t/1803783.aspx?Synchronize+Access+DB+and+MsSQL+DB', 's', 'URGENT'),
(392, 'https://www.itprotoday.com/sql-server/15-steps-convert-access-data-sql-server', 's', 'URGENT'),
(393, 'https://searchsqlserver.techtarget.com/feature/DBSync-for-MS-Access-MS-SQL', 's', 'URGENT'),
(394, 'https://dbconvert.com/access/mssql/', 's', 'URGENT'),
(395, 'https://www.codeproject.com/Questions/51688/i-want-to-sync-ms-access-database-to-sql-server-da', 's', 'URGENT'),
(396, 'https://stackoverflow.com/questions/8731408/sync-data-from-ms-access-to-ms-sql', 's', 'URGENT'),
(397, 'https://social.msdn.microsoft.com/Forums/sqlserver/en-US/527b8049-4dc6-4e99-b991-ac3a0d822e66/synchronize-mdb-file?forum=sqlexpress', 's', 'URGENT'),
(399, 'https://koding.club', 'coding', 'Source & Tut'),
(400, 'https://codelatte.org', 'c', 'Source & Tut'),
(401, 'https://sekolahkoding.com', 'd', 'Web Programming'),
(402, 'https://dunia21.pw/playlist/detective-conan/', 'Koleksi', 'DETECTIVE CONAN'),
(403, 'https://www.youtube.com/playlist?reload=9&list=PLr-u_Xi_zguxYQkD9Uj4YiYEK3DmdcL0H', 'try', 'WIP'),
(404, 'https://cyberduck.io', 'ftp client', 'Download'),
(405, 'https://www.zabbix.com/manuals', 'network monitor', 'WIP'),
(406, 'https://www.netxms.org/download/', 'network mntr', 'WIP'),
(407, 'https://www.microsoft.com/en-us/download/details.aspx?id=4865', 'newk', 'WIP'),
(408, 'https://www.tcpvpn.com/vpn-server-singapore', 'test', 'WIP'),
(409, 'https://www.vyprvpn.com/singapore-vpn', 'tes', 'WIP'),
(410, 'https://www.hostinger.co.id/tutorial/cara-mengarahkan-domain-ke-hosting-VPS-server/', 'dns', 'Linux-WIP'),
(411, 'https://daengweb.id/cara-install-konfigurasi-cyberpanel-di-vps', 'vps', 'Linux-WIP'),
(412, 'https://www.mysterydata.com/how-to-install-build-php-5-6-7-0-7-1-7-2-manually-on-cwp-centos-web-panel/', 'vps', 'Linux-WIP'),
(413, 'https://www.linuxbabe.com/mail-server/debian-9-stretch-modoboa', 'v', 'Linux-WIP'),
(414, 'https://cloudpro.zone/index.php/2018/02/26/debian-multidomain-mailserver-part-1/', 'v', 'Linux-WIP'),
(417, 'https://vorkbaard.nl/installing-a-mailserver-on-debian-8-part-1-introduction/', 'v', 'Linux-WIP'),
(419, 'https://ludigoporitas.wordpress.com/2017/07/10/cara-install-dan-konfigurasi-mail-server-postfix-courier-roundcube-di-debian-9-stretch/', 'v', 'Linux-WIP'),
(420, 'https://www.kangarif.net/2018/01/script-auto-install-ssh-openvpn-untuk.html', 'v', 'Linux-WIP'),
(421, 'https://www.kangarif.net/2019/06/cara-install-openvpn-di-vps-centos-7.html', 'v', 'Linux-WIP'),
(422, 'https://www.cyberciti.biz', 'linx', 'Linux-WIP'),
(423, 'https://itsfoss.tradepub.com/category/information-technology-servers-and-linux-server-os/806/', 'lnx', 'Linux-WIP'),
(424, 'https://itsfoss.com', 'd', 'Linux-WIP'),
(427, 'https://yapsamuel.blogspot.com/2016/10/cara-mengirim-email-dengan-php.html', 's', 'URGENT'),
(428, 'https://www.jurnalweb.com/kumpulan-framework-html-css-terbaik-terlengkap/', 's', 'Fix - Web Ain1'),
(429, 'https://www.nirsoft.net', 'download', 'All in 1'),
(439, 'https://www.hienzo.com/2015/06/grand-theft-auto-iv-complete-edition-pc-free-download.html', 'gta', 'Game'),
(440, 'https://www.univention.com/downloads/download-ucs/', 'linux', 'URGENT'),
(442, 'https://intodns.com/', 'cek dns', 'Fix - Online Tools'),
(443, 'http://www.dnsinspect.com/', 'cek dns', 'Fix - Online Tools'),
(444, 'http://www.solvedns.com', 'dns cek', 'Fix - Online Tools'),
(445, 'https://cockpit-project.org', 'Linux server management', 'Fix - Linux Server C'),
(446, 'https://www.cendio.com', 'remote', 'Fix - Urgent'),
(447, 'http://bachors.com', 's', 'WIP'),
(448, 'https://www.techsupportalert.com', 'ai', 'All in 1'),
(449, 'http://43.225.186.91', 'DEBIAN', 'All in 1'),
(450, 'https://kodekidi.blogspot.com/2015/07/tutorial-membuat-pagination-dengan-php.html', 's', 'WIP'),
(451, 'http://johnpolacek.github.io/stacktable.js/', 'data', 'Download'),
(452, 'https://codeb.it/restable/', 'd', 'Fix - Web Ain1'),
(453, 'http://fooplugins.github.io/FooTable/index.html', 's', 'WIP'),
(454, 'https://jspreadsheets.com/', 's', 'WIP');

-- --------------------------------------------------------

--
-- Table structure for table `newlinks`
--

CREATE TABLE `newlinks` (
  `url_id` int(11) NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `des` text COLLATE utf8_unicode_ci NOT NULL,
  `cat` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newlinks`
--

INSERT INTO `newlinks` (`url_id`, `url`, `des`, `cat`) VALUES
(1, 'https://www.4shared.com/file/M_4UDOqc/sw_-_get_out_2001.html', 'mp3', 'mp3'),
(2, 'https://www.4shared.com/file/6z0G5Zc3/powerslaves_-_ga_bakal_mati_20.html', 'mp3', 'mp3'),
(3, 'https://www.freehosting.com/', 'Freehosting OK', 'Freehosting'),
(4, 'https://jalantikus.com/tips/cara-mudah-hack-wifi-di-android-tanpa-root/', 'a', 'android');

-- --------------------------------------------------------

--
-- Table structure for table `oldlinks`
--

CREATE TABLE `oldlinks` (
  `url_id` int(5) NOT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `des` text COLLATE utf8_unicode_ci NOT NULL,
  `cat` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `old_links`
--

CREATE TABLE `old_links` (
  `url_id` int(11) NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `des` text COLLATE utf8_unicode_ci NOT NULL,
  `cat` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `old_links`
--

INSERT INTO `old_links` (`url_id`, `url`, `des`, `cat`) VALUES
(1, 'https://laksa19.github.io', 'mktk', 'mktk'),
(2, 'https://mikrotikthemes.airpoint.club', 'd', 'd'),
(5, 'https://www.coderglass.com/php-tutorials.php', 'WIP', 'WIP'),
(7, 'https://uicookies.com/free-login-forms/', 'WIP', 'WIP'),
(8, 'http://www.kodingindonesia.com', 'd', 'd'),
(9, 'https://www.sslforfree.com', 'TRY SOON', 'TRY SOON'),
(10, 'https://ssl.comodo.com/free-ssl-certificate.php', 'TRY SOON', 'TRY SOON'),
(11, 'https://www.wikihow.com/Activate-Windows-XP-Without-a-Genuine-Product-Key', '', 'LATER'),
(12, 'https://boma23.wordpress.com/2012/08/30/windows-xp-stuck-at-login-screen-in-activation-loop/', 'v', 'v'),
(13, 'https://semantic-ui.com/introduction/getting-started.html', 'w', 'w'),
(14, 'https://ionicframework.com/', 'w', 'w'),
(15, 'https://onsen.io/', 'w', 'w'),
(16, 'https://phonegap.com/', 'w', 'w'),
(17, 'https://cssauthor.com/mobile-application-frameworks/', 'v', 'c'),
(18, 'https://www.hongkiat.com/blog/mobile-frameworks/', 'v', 'v'),
(20, 'https://bashooka.com/coding/best-wysiwyg-editors/', 'd', 'd'),
(21, 'https://www.producthunt.com/alternatives/ckeditor-5', 'c', 'c'),
(22, 'https://1stwebdesigner.com/best-wysiwyg-html-editor/', 'c', 'c'),
(23, 'https://linuxconfig.org', 'd', 'Linux'),
(24, 'https://www.scriptcase.net/download/', 'c', 'c'),
(25, 'https://askubuntu.com/questions/120628/ifconfig-command-ifconfig-is-available-in-sbin-ifconfig', 's', 'd'),
(26, 'https://superuser.com/questions/183870/difference-between-bashrc-and-bash-profile/183980#183980', 'c', 'c'),
(28, 'https://www.jqueryscript.net/tags.php?/data%20table/', 'c', 'c'),
(29, 'https://plugins.jquery.com/jdatatable/', 'c', 'c'),
(30, 'https://opensource.com/', 'd', 'd'),
(31, 'https://www.slant.co/options/4840/alternatives/~datatables-alternatives', 'c', 'c'),
(32, 'https://html.com/', 'HTML5', 'HTML'),
(33, 'https://www.tutorialspoint.com/index.htm', 'Tutorial', 'TUTORIAL'),
(35, 'https://www.sitepoint.com/12-amazing-jquery-tables/', 'c', 'c'),
(36, 'https://www.clickdesk.com/', 'chat', 'chat'),
(37, 'https://tutorialzine.com', 'TUTU', 'TUT'),
(38, 'http://www.master.web.id/scriptingworld/02-8_hal_mysql/02-8_hal_mysql.html#sub1', 'C', 'c'),
(39, 'https://www.sarjanakomedi.com/2018/12/02/source-code-aplikasi-siakad/', 'source', 'Download'),
(40, 'https://www.sarjanakomedi.com/2018/11/19/source-code-aplikasi-penggajian-codeigniter/', 'source', 'Download'),
(41, 'https://www.sarjanakomedi.com/2017/04/17/aplikasi-koperasi-simpan-pinjam-php-mysql/', 'source', 'Download'),
(42, 'https://www.sarjanakomedi.com/2017/07/01/source-code-aplikasi-koperasi-simpan-pinjam/', 'source', 'Download'),
(43, 'https://www.sarjanakomedi.com/tag/freebies/', 'source', 'Download'),
(44, 'https://laragon.org/', 'web', 'web server'),
(45, 'https://www.tooplate.com/', 't', 't'),
(46, 'http://sks122.blogspot.com/search/label/Web%20Design', 'Template admin', 'Template'),
(49, 'https://www.hakkoblogs.com/', 'A', 'A'),
(50, 'https://www.taniarascia.com/', 'a', 'a'),
(51, 'https://ourcodeworld.com/articles/read/481/top-5-best-open-source-metro-style-windows-ui-css-framewo', 'c', 'c'),
(52, 'https://www.slant.co/options/510/alternatives/~skeleton-alternatives', 'd', 'd'),
(53, 'https://github.com/kumailht/flakes', 'c', 'c'),
(54, 'http://getflakes.com/preview/index.html', 'admin', 'admin'),
(55, 'http://www.bestjquery.com/2018/02/free-wordpress-page-builder/', 'v', 'v'),
(56, 'https://www.taniarascia.com/responsive-dropdown-navigation-bar/', 'skeleton', 'skeleton'),
(57, 'https://www.cssscript.com/', 'c', 'c'),
(58, 'https://medialoot.com/', 'c', 'c'),
(59, 'http://ieatcss.com/', 'c', 'c'),
(60, 'https://github.com/zurb', 'foundation', 'Framework'),
(61, 'https://css-tricks.com/building-skeleton-screens-css-custom-properties/', 'css', 'csc'),
(63, 'http://www.videolan.org/projects/dvblast.html', 'Streaming', 'Later'),
(64, 'http://103.253.124.142/', 'CCTV', 'CCTV'),
(67, 'https://arsipskpd.batam.go.id/', 'contoh', 'contoh'),
(68, 'https://apok.batam.go.id/', 'contoh', 'contoh'),
(70, 'http://www.donaldlazard.com/', 'sablon', 'sablon'),
(71, 'https://endangcahyapermana.wordpress.com/2016/03/12/e-book-module-erp-enterprise-resource-planning/', 'ERP', 'ERP'),
(72, 'http://blog.rosihanari.net/', 'WEB', 'WE'),
(74, 'https://www.onphpid.com/', 'php', 'php'),
(75, 'http://103.253.124.142/logcctv/index.php/', 'CONTOH', 'contoh'),
(76, 'https://parkir.dishub.batam.go.id/', 'contoh', 'contoh'),
(78, 'https://transparansi.batam.go.id/', 'contoh', 'contoh'),
(79, 'https://code.tutsplus.com/id/articles/sql-for-beginners-part-3-database-relationships--net-8561', 'db', 'db'),
(80, 'http://www.nyekrip.com/', 'web', 'web'),
(82, 'https://www.ilmuwebsite.com/', 'web', 'web'),
(84, 'http://desainweb.ilmuwebsite.com/2014/08/7-template-responsive-keren-gratis.html', 'download', 'web'),
(85, 'https://www.dodiventuraz.net/', 'Mix', 'Networking'),
(86, 'https://www.design3edge.com/2016/09/19/20-responsive-html-templates-in-the-market/', 'tut', 'all'),
(88, 'https://www.petanikode.com/ebook-pemrograman/', 'buku gratis', 'download'),
(89, 'https://desainerhaus.wordpress.com/', 'DG', 'DG'),
(90, 'http://jagocoding.com/', 'Jagocoding.com - Situs Tutorial Pemrograman Berbahasa Indonesia', 'PEMROGRAMAN'),
(91, 'Free source code, https://www.sourcecodester.com/', 'Free source code, tutorials and articles', 'SOURCE CODE'),
(92, 'http://phpdanmysql.com/', 'Belajar Php dan MySQL - Tutorial Php dan MySQL', 'PEMROGRAMAN'),
(93, 'https://api.whatsapp.com/send?phone=6282284405583', 'Wa', 'wa'),
(94, 'http://belajarngoding.com', 'Pemrograman campur', 'PEMROGRAMAN'),
(95, 'https://365psd.com/', 'desain all', 'DESIGN'),
(97, 'http://harviacode.com/', 'tut', 'tutorial'),
(98, 'https://www.tutorialpedia.net/php/', 'tut', 'tutorial'),
(99, 'https://tutorialweb.net/', 'php', 'tutorial'),
(100, 'http://arsipbertuah.blogspot.com/2017/02/koding-php-membuat-nomor-halaman.html', 'tut', 'PHP'),
(101, 'http://www.kursuswebsite.org/', 'tut', 'tutorial'),
(102, 'http://arsipbertuah.blogspot.com/', 'tut', 'tutorial'),
(103, 'https://www.exabytes.co.id/', 'Promo hosting dan domain murah', 'SOON'),
(104, 'https://www.brianabraham.web.id/', 'Tuut', 'tutorial'),
(105, 'http://www.pesonagolf.com/index.html', 'ACUAN', 'ACUAN'),
(106, 'http://kupasanglaguku.blogspot.com/', 'mp3', 'MP3'),
(107, 'https://www.niagahoster.co.id/blog/seo-wordpress-mudah/', 'SEO', 'SEO'),
(108, 'https://www.niagahoster.co.id/blog/plugin-seo-wordpress-terbaik/', 'seo', 'seo'),
(109, 'http://www.pesonagolf.com/', 'Proyek', 'Project'),
(110, 'https://freshdesignweb.com/category/templates/', 'template\r\n', 'template'),
(111, 'https://www.youtube.com/watch?v=9A86n9BWySc', '', 'yt-hp'),
(112, 'https://www.youtube.com/watch?v=FgIt6_pfwpg', '', 'yt-hp'),
(114, 'https://www.vecteezy.com/free-vector/gong-xi-fa-cai?page=2', 'imlek', 'imlek'),
(116, 'https://pestahosting.com/', 'Hosting', 'hosting'),
(117, 'https://github.com/michaeltamsil', 'Wip', 'Wip'),
(119, 'https://www.youtube.com/watch?v=EOS4ru-5QcE&feature=youtu.be', 'hita', 'HITA'),
(120, 'https://www.eukhost.com/forums/forum/technical-support/tutorials-how-tos/20661-mail-php-not-supporte', 'Mailer', 'mailer'),
(121, 'https://jalantikus.com/apps/lacak-ponsel/', 'a', 'android'),
(122, 'https://jalantikus.com/apps/hlr-lookup/', 'a', 'android'),
(123, 'https://jalantikus.com/apps/sms-tracker-plus/', 'a', 'android'),
(125, 'https://www.mediawiki.org/wiki/Topic:Szjssrh2k9y431pm', 'wordpress mysql error', 'mysql-error'),
(126, 'https://akashiro.co.id/', 'what', 'WIP'),
(128, 'https://sshspeed.net/', 'v', 'WIP');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `page` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `page_url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `des` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page`, `page_url`, `des`) VALUES
('deb1', 'Debian', 'https://202.179.186.109:8441/', 'Debian Server'),
('P1', 'Templates', 'http://temp.ymh.web.id/1', 'Template All in 1'),
('P2', 'Lab', 'http://lab.ymh.web.id', 'Lab'),
('P3', 'Mitra', 'http://mitra.ymh.web.id', 'Mitra\r\n'),
('P4', 'GIH:88', 'http://gih.ymh.web.id:88', 'PPS'),
('P5', 'Demo-Fix', 'http://rekanmu.online', 'Demo'),
('P6', 'Host1', 'http://host1.ymh.web.id', 'Host 1');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(3) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `layanan1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `layanan2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `layanan3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `layanan4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `layanan5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `layanan6` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ket` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `bagian` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`, `bagian`) VALUES
(1, 'admin', 'P@ssw0rd', 'Admin', '1', 'Administrator'),
(2, 'user', 'user', 'Reguler User', '2', 'User'),
(3, 'guest', 'guest', 'Guest', '3', 'Guest'),
(4, 'yezet', '04101983', 'Zandra', 'sa', 'System Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`kd_level`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`url_id`);

--
-- Indexes for table `newlinks`
--
ALTER TABLE `newlinks`
  ADD PRIMARY KEY (`url_id`);

--
-- Indexes for table `oldlinks`
--
ALTER TABLE `oldlinks`
  ADD PRIMARY KEY (`url_id`);

--
-- Indexes for table `old_links`
--
ALTER TABLE `old_links`
  ADD PRIMARY KEY (`url_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `url_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=455;

--
-- AUTO_INCREMENT for table `newlinks`
--
ALTER TABLE `newlinks`
  MODIFY `url_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oldlinks`
--
ALTER TABLE `oldlinks`
  MODIFY `url_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `old_links`
--
ALTER TABLE `old_links`
  MODIFY `url_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
