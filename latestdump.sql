-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contents`
--

DROP TABLE IF EXISTS `contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chap_num` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contents`
--

LOCK TABLES `contents` WRITE;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;
INSERT INTO `contents` VALUES (1,1,'Introduction to Digital Image Processing',1,1,'2017-12-19 15:01:38','2017-12-19 15:01:38',NULL),(2,2,'Image Representation and Matrix Operation',1,1,'2017-12-19 15:31:39','2017-12-19 15:31:39',NULL),(3,3,'Image Degradation Types and Causes',1,1,'2017-12-19 15:43:26','2017-12-19 15:43:26',NULL);
/*!40000 ALTER TABLE `contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `courseName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `courseCode` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,'Digital Image Processing','TMM2434',1,'2017-12-19 15:01:10','2017-12-19 15:01:10',NULL),(2,'Human Computer Interaction','DCS 20703',1,'2017-12-20 22:51:22','2017-12-20 22:51:22',NULL);
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (8,'2014_10_12_000000_create_users_table',1),(9,'2014_10_12_100000_create_password_resets_table',1),(10,'2017_07_22_114650_create_courses_table',1),(11,'2017_07_25_081843_create_contents_table',1),(12,'2017_08_05_114526_create_sub_content_ones_table',1),(13,'2017_10_03_051036_create_sub_content_two_repositories_table',1),(14,'2017_11_14_062346_create_videos_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_content_ones`
--

DROP TABLE IF EXISTS `sub_content_ones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_content_ones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sub_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_content_ones`
--

LOCK TABLES `sub_content_ones` WRITE;
/*!40000 ALTER TABLE `sub_content_ones` DISABLE KEYS */;
INSERT INTO `sub_content_ones` VALUES (1,'1.1','What is Digital Image Processing','<p>An image may be defined as a two-dimensional function f(x, y),where x and y are spatial (plane) coordinates, and the amplitude of f at any pair of coordinates (x, y) is called the intensity or gray level of the image at that point.<br />When x, y and the amplitude values of f are all finite, discrete quantities, we call the image a digital image.<br />The field of digital image processing refers to processing digital images by means of a digital computer.<br />Note that a digital image is composed of a finite number of elements, each of which has a particular location and value.<br />These elements are referred to as image elements or pixels.<br />Pixel is the term most widely used to denote the elements of a digital image.</p>\r\n<p>Images are generated by different sources such as: ultrasound, electron microscopy, and computer-generated images.<br />Digital image processing encompasses three types of computerized processes in this field: low-, mid-, and high-level processes.<br />Low-level processes involve primitive operations such as image preprocessing to reduce noise, contrast enhancement and image sharpening. <br />inputs and outputs are images. <br />Mid-level processing on images involves tasks such as segmentation (partitioning an image into regions or objects). <br />inputs generally are images, but its outputs are attributes extracted from those images (e.g., edges, contours, and the identity of individual objects). <br />Finally, higher-level processing involves &ldquo;making sense&rdquo; of an ensemble of recognized objects, as in image analysis, and at the far end of the field, performing the reasoning functions normally associated with vision.</p>\r\n<p><img src=\"http://eeweb.poly.edu/~onur/example_slide.jpg\" alt=\"\" width=\"500\" height=\"364\" /></p>',1,'2017-12-19 15:04:42','2017-12-19 15:04:42',NULL),(2,'1.2','The Origins of Digital Image Processing','<p>The first application of digital images was in the newspaper industry, when pictures were first sent by submarine cable between London and New York.<br />Introduction of the Bartlane cable picture transmission system in the early 1920s reduced the time required to transport a picture across the Atlantic from more than a week to less than three hours.</p>\r\n<p>The first computers powerful enough to carry out meaningful image processing tasks appeared in the early 1960s.<br />The birth of what we call digital image processing today can be traced to the availability of those machines and the onset of the space program during that period.<br />In 1964, pictures of the moon transmitted by Ranger 7 were processed by a computer to correct various types of image distortion inherent in the onboard television camera.</p>\r\n<p>&nbsp;</p>',1,'2017-12-19 15:06:12','2017-12-19 15:06:12',NULL),(3,'1.3','Examples of Fields That Use Digital Image Processing','<p>The use of digital image&nbsp; processing techniques has exploded and they are now used for all kinds of tasks in all kinds of areas:</p>',1,'2017-12-19 15:08:33','2017-12-19 15:08:33',NULL),(4,'1.4','Components of Digital Image Processing System','<p>Many models of image processing systems being sold throughout the world.<br />The next Figure shows the basic components comprising a typical general-purpose system used for digital image processing.<br />With reference to sense, two elements are required to acquire digital images.<br />The first is a physical device that is sensitive to the energy radiated by the object we wish to image.<br />The second, called a digitizer, is a device for converting the output of the physical sensing device into digital form. <br />For instance, in a digital video camera, the sensors produce an electrical output proportional to light intensity. <br />The digitizer converts these outputs to digital data.</p>\r\n<p><img src=\"http://4.bp.blogspot.com/-CTBz9HJ2Zg4/UTU92zH6C0I/AAAAAAAAAFk/Jnw-R-Nmewk/s1600/e+4.JPG\" alt=\"\" width=\"312\" height=\"288\" /></p>',1,'2017-12-19 15:19:15','2017-12-20 15:02:35',NULL),(5,'1.5','Image Data Type','<p>Binary Images <br />are2-D arrays that assign one numerical value from the set {0, 1} to each Pixel in the image. <br />These are sometimes referred to as logical images: black corresponds to zero (an &lsquo;off&rsquo; or &lsquo;background&rsquo; pixel) and white corresponds to one (an &lsquo;on&rsquo; or foreground&rsquo; pixel). <br />As no other values are permissible, these images can be represented as a simple bit-stream, but in practice, they are represented as 8-bit integer images in the common image formats. <br />A fax (or facsimile) image is an example of a binary image.</p>\r\n<p><img src=\"https://bam.files.bbci.co.uk/bam/live/content/zdcxfg8/large\" alt=\"\" width=\"287\" height=\"120\" /></p>',1,'2017-12-19 15:21:43','2017-12-20 15:03:07',NULL),(6,'2.1','Computer Representation of Images','<p>Digital Images can be represented by a two-dimensional Matrix (array) of picture elements, or pixels.<br />Digital Images have an MxN Size.<br />Digital Images can be regarded as a mapping from {0, ... , M-1} x {0, ... , N-1} to {0, ... , L-1}.<br />The set {0, ... , L-1} is called the gray level set, and L is the number of distinct gray levels<br />For example, if we use 3 bits to represent each pixel, then L is 8<br />If 8 bits are used, L is 256.</p>\r\n<p>More expensive digital cameras will have larger digital sensors than less expensive ones (larger sensors cost more)<br />So if the two cameras produce images with the same number of pixels, the pixels in the larger array will represent a larger area &ndash; so more information is packed into each pixel<br />gray-value images contain different number of brightness scale.</p>\r\n<p><img src=\"http://pippin.gimp.org/image_processing/images/sample_grid_a_square.png\" alt=\"\" width=\"253\" height=\"148\" /></p>\r\n<p>&nbsp;</p>',2,'2017-12-19 15:33:40','2017-12-20 15:07:12',NULL),(7,'2.2','Understanding Matrices','<p>The size of a matrix is defined by the number of rows and columns that it contains. <br />A matrix with m rows and n columns is called an m &times; n matrix or m-by-n matrix, while m and n are called its dimensions.<br />Matrices which have a single row are called row vectors.<br />Matrices which have a single column are called column vectors. <br />Square matrix is a matrix which has the same number of rows and columns. <br />Zero matrix is a matrix that all its elements are Zeros.</p>',2,'2017-12-19 15:36:28','2017-12-19 15:36:28',NULL),(8,'3.1','Image Degradations','<p>Are the factors that reduces the image quality and make it appear as a different version of the original scene.<br />Degradation means A decline that lower a condition, quality, or level.<br />Image degradations are caused by caused by the absorption of photons, particularly those wavelengths found in sunlight, such as infrared radiation, visible light, and ultraviolet light.<br />Image degradations reduce the image quality . <br />Imaging systems may introduce some amounts of distortion or artifacts in the signal, so the quality assessment is an important problem.<br />Image quality is a characteristic of an image that measures the apparent image degradation (typically, compared to an ideal or perfect image).</p>',3,'2017-12-19 15:43:58','2017-12-19 15:43:58',NULL),(9,'3.2','Image Noise','<p>Noise in general happen due to different reasons:<br />Hardware and software errors.<br />Sensor errors.<br />Analog-to-digital converter errors<br />transmission errors.<br />Variation in the number of photons sensed at a given exposure level.<br />Low photons absorption.<br />low light environments.<br />longer shutter speeds lead to increased noise.<br />The size of the image sensor. (larger sensors typically create lower noise images than smaller sensors).<br />Temperature can also have an effect on the amount of noise produced by an image sensor. (more noise is produced during summer than winter).</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>',3,'2017-12-19 15:44:42','2017-12-19 15:44:42',NULL),(10,'3.3','Image Blur','<p>Blur in general happen due to different reasons:<br />The subject moves while the shutter is open.<br />The camera moves while the shutter is open.<br />Imaging a long distance object (the atmosphere).<br />Imperfect resolution of the imaging system.<br />Losing information during the acquisition process.<br />Slow Shutter Speed.<br />Employing low-pass filters for reducing noise leads to blur amplification.</p>',3,'2017-12-19 15:45:51','2017-12-19 15:45:51',NULL);
/*!40000 ALTER TABLE `sub_content_ones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_content_two_repositories`
--

DROP TABLE IF EXISTS `sub_content_two_repositories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_content_two_repositories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sub_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_content_one_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_content_two_repositories`
--

LOCK TABLES `sub_content_two_repositories` WRITE;
/*!40000 ALTER TABLE `sub_content_two_repositories` DISABLE KEYS */;
INSERT INTO `sub_content_two_repositories` VALUES (1,'1.2.1','The Origins Cont','<p>digital image processing techniques began in the late 1960s and early 1970s to be used in medical imaging, remote Earth resources observations, and astronomy.<br />The invention in the early 1970s of computerized axial tomography (CAT), also called computerized tomography (CT) for short, is one of the most important events in the application of image processing in medical diagnosis.<br />From the 1960s until the present, the field of image processing has grown significantly. <br />In addition to applications in medicine and the space program, digital image processing techniques now are used in a broad range of applications.<br />The continuing decline in the ratio of computer price to performance and the expansion of networking and communication bandwidth via the World Wide Web and the Internet have created extraordinary opportunities for continued growth of digital image processing.</p>',2,'2017-12-19 15:06:45','2017-12-19 15:06:45',NULL),(2,'1.3.1','Gamma Ray Imaging','<ul>\r\n<li>Include nuclear medicine and astronomical observations</li>\r\n<li>Nuclear imaging called positron emission tomography (PET)</li>\r\n</ul>\r\n<p><img src=\"https://ssl.c.photoshelter.com/img-get/I0000mpaLWkWFuIw/s/860/860/tk36FC.jpg\" alt=\"\" width=\"219\" height=\"313\" /></p>',3,'2017-12-19 15:12:53','2017-12-20 15:03:38',NULL),(3,'1.3.2','X-ray Imaging','<p>X-rays are among the oldest sources of radiation used for imaging. <br />The best known use of X-rays is medical diagnostics, but they also are used extensively in industry and other areas, like astronomy.<br />The intensity of the X-rays is modified by absorption of photons as they pass through the patient.<br />Angiography is another major application in an area called contrast enhancement radiography. (used to detect blood vessels).<br />the best known of all uses of X-rays in medical imaging is computerized tomography (CT).<br />Such images, representative of literally hundreds of industrial applications of X-rays, are used to examine circuit boards for flaws in manufacturing, such as missing components or broken traces. <br />Industrial CT scans are useful when the parts can be penetrated by X-rays, such as in plastic assemblies, and even large bodies, like solid-propellant rocket motors.</p>\r\n<p><img src=\"https://www.researchgate.net/profile/Uwe_Ewert2/publication/273832887/figure/fig1/AS:294794627698688@1447295924156/Figure-1-Imaging-principles-of-the-X-ray-backscatter-technique-using-the-a-Compton.png\" alt=\"\" width=\"211\" height=\"156\" /></p>\r\n<p><img src=\"https://www.xconomy.com/wordpress/wp-content/images/2017/01/Depositphotos_11802437_l-2015.jpg\" alt=\"\" width=\"209\" height=\"171\" /></p>',3,'2017-12-19 15:15:41','2017-12-20 15:04:02',NULL),(4,'1.3.3','Imaging in the Microwave Band','<p>The dominant application of imaging in the microwave band is radar.<br />The unique feature of imaging radar is its ability to collect data over virtually any region at any time, regardless of weather or ambient lighting conditions. <br />Some radar waves can penetrate clouds and under certain conditions can also see through vegetation, Ice and extremely dry sand.<br />In many cases radar is the only way to explore inaccessible regions of the Earth&rsquo;s surface.<br />An imaging radar works like a flash camera in that it provides its own illumination (microwave pulses) to illuminate an area on the ground and take a snapshot image.<br />Instead of a camera lens, a radar uses an antenna and digital computer processing to record its images.</p>\r\n<p><img src=\"https://crisp.nus.edu.sg/~research/tutorial/emsp1.gif\" alt=\"\" width=\"228\" height=\"133\" /></p>',3,'2017-12-19 15:17:14','2017-12-20 15:04:24',NULL),(5,'1.4.1','Components of Digital Image Processing System Cont','<p>Specialized image processing hardware usually consists of the digitizer just mentioned, plus hardware that performs other primitive operations, such as an arithmetic logic unit (ALU),which performs arithmetic and logical operations in parallel on entire images. One example of how an ALU is used is in averaging images as quickly as they are digitized, for the purpose of noise reduction.<br />The computer in an image processing system is a general-purpose computer and can range from a PC to a supercomputer.<br />Software for image processing consists of specialized modules that perform specific tasks.<br />Mass storage capability is a must in image processing applications. <br />An image of size 1024*1024 pixels, in which the intensity of each pixel is an 8-bit quantity, requires one megabyte of storage space if the image is not compressed.</p>\r\n<p>Image displays in use today are mainly color (preferably flat screen) TV monitors.<br />Monitors are driven by the outputs of image and graphics display cards that are an integral part of the computer system.<br />Hardcopy devices for recording images include laser printers, film cameras, heat-sensitive devices, inkjet units, and digital units, such as optical and CD-ROM disks.<br />Film provides the highest possible resolution, but paper is the obvious medium of choice for written material.<br />Networking is almost a default function in any computer system in use today.<br />Because of the large amount of data inherent in image processing applications, the key consideration in image transmission is bandwidth. In dedicated networks, this typically is not a problem, but communications with remote sites via the Internet are not always as efficient. Fortunately, this situation is improving quickly as a result of optical fiber and other broadband technologies.</p>',4,'2017-12-19 15:20:05','2017-12-19 15:20:05',NULL),(6,'1.5.1','Data Types Intensity or Grey Scale','<p>They are 2-D arrays that assign one numerical value to each pixel which is representative of the intensity at this point. <br />the pixel value range is bounded by the bit resolution of the image and such images are stored as N-bit integer images with a given format.</p>\r\n<p><img src=\"http://www.color-hex.com/palettes/3046.png\" alt=\"\" width=\"205\" height=\"136\" /></p>',5,'2017-12-19 15:23:48','2017-12-20 15:05:29',NULL),(7,'1.5.2','Indexed Images','<p><br />Indexed images permit only a limited number of distinct colors and therefore are used mostly for illustrations and graphics that contain large regions of the same color. <br />Often these types of images are stored in indexed GIF or PNG files for use on the Web. <br />In these indexed images, the pixel array does not contain color or brightness data but instead consists of integer numbers k that are used to index into a color table or &ldquo;palette&rdquo;.<br />the maximum number of distinct image colors (typically N = 2 to 256). <br />Since the color table can contain any RGB color value (rk,gk,bk), it must be saved as part of the image.</p>\r\n<p><img src=\"https://image.slidesharecdn.com/csc447dipch2-160628142820/95/digital-image-processing-digital-image-fundamentals-14-638.jpg?cb=1467133010\" alt=\"\" width=\"279\" height=\"209\" /></p>',5,'2017-12-19 15:25:06','2017-12-20 15:05:57',NULL),(8,'2.2.1','Matrix Notation','<p>Matrices are commonly written in box brackets or large parentheses.<br />Matrices are usually symbolized using upper-case letters (A ), while the corresponding lower-case letters, with two subscript indices (e.g., a11, or a1,1), represent the entries.<br />Aij refers to the number in the i-th row and j-th column.</p>\r\n<p><img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Matrix.svg/1200px-Matrix.svg.png\" alt=\"\" width=\"266\" height=\"224\" /></p>',7,'2017-12-19 15:38:48','2017-12-20 15:07:40',NULL),(9,'2.2.2','Matrix Multiplication','<p><img src=\"https://www.mathsisfun.com/algebra/images/matrix-multiply-order.gif\" alt=\"\" width=\"259\" height=\"106\" /></p>\r\n<p><img src=\"http://www.mathwarehouse.com/algebra/matrix/images/matrix-multiplication/matrix-multiplication.png\" width=\"249\" height=\"211\" /></p>\r\n<p><img src=\"https://www.intmath.com/matrices-determinants/img/2x3x3x2d.png\" width=\"239\" height=\"174\" /></p>',7,'2017-12-19 15:40:48','2017-12-20 15:08:19',NULL),(10,'2.2.3','Matrix inverse','<p><img src=\"http://mathworld.wolfram.com/images/equations/MatrixInverse/NumberedEquation4.gif\" /></p>\r\n<p><img src=\"https://www.mathsisfun.com/algebra/images/matrix-inverse-2x2-singular.gif\" width=\"295\" height=\"119\" /></p>\r\n<p><img src=\"https://www.mathsisfun.com/algebra/images/matrix-inverse-2x2-ex2.gif\" width=\"298\" height=\"109\" /></p>',7,'2017-12-19 15:41:53','2017-12-20 15:08:50',NULL),(11,'3.1.1','Sample of Image Degredation','<p><img src=\"https://image.slidesharecdn.com/imagedegradationandnoisebymd-naseemashraf-130627013215-phpapp01/95/image-degradation-and-noise-by-mdnaseem-ashraf-2-638.jpg?cb=1373247549\" alt=\"\" width=\"312\" height=\"234\" /></p>\r\n<p><img src=\"https://www.researchgate.net/profile/Victor_Alva/publication/228500833/figure/fig6/AS:340319141941256@1458149814241/Fig-9-Atrazine-degradation-in-synthetic-media-inoculated-with-sample-P2-26-at-5-C.png\" alt=\"\" width=\"277\" height=\"172\" /></p>\r\n<p><img src=\"http://2.bp.blogspot.com/-FCNle0KUIQQ/VH1vSrP8rEI/AAAAAAAAFC0/PbyR7m0c0B4/s1600/land%2Bdegradation%2Bin%2Bindia.jpg\" alt=\"\" width=\"273\" height=\"174\" /></p>',8,'2017-12-19 15:47:49','2017-12-20 15:09:58',NULL),(12,'3.1.2','Sample of Image Noise','<p>These are some sample of image noise:</p>\r\n<p><img src=\"http://cognitrn.psych.indiana.edu/busey/homepage/images/FaceInNoise/MH.jpg\" alt=\"\" width=\"198\" height=\"198\" /></p>\r\n<p><img src=\"http://community.photostockplus.com/wp-content/uploads/noise.jpg\" alt=\"\" width=\"230\" height=\"130\" /></p>',8,'2017-12-19 15:49:26','2017-12-20 15:11:22',NULL),(13,'3.1.3','Sample of Image Blur','<p><img src=\"http://slideplayer.com/slide/4898831/16/images/2/EE465:+Introduction+to+Digital+Image+Processing.jpg\" alt=\"\" width=\"263\" height=\"197\" /></p>\r\n<p><img src=\"http://slideplayer.com/slide/4898831/16/images/12/EE465:+Introduction+to+Digital+Image+Processing.jpg\" alt=\"\" width=\"256\" height=\"192\" /></p>\r\n<p><img src=\"https://image.slidesharecdn.com/ieeediptalkf2011-120903013148-phpapp02/95/introduction-to-digital-image-processing-using-matlab-66-728.jpg?cb=1416960372\" alt=\"\" width=\"260\" height=\"196\" /></p>',8,'2017-12-19 15:51:00','2017-12-20 15:10:55',NULL);
/*!40000 ALTER TABLE `sub_content_two_repositories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `staffID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'01201509077','drmusab@gmail.com','$2y$10$rbRJ3gYD2SF34xDqqgG4vOJRcxv64Drdzkq0WivDXm2atM8wZE16O','CiLzQTmb03BUgHSC9PizV9z5PtWBdl7LOtFy8qD0wqf56qtEz58IzOvuLZnF','2017-12-19 15:00:39','2017-12-19 15:00:39');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_mime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'/storage/an-introduction-to-Image-Processing.mp4','mp4',1,'2017-12-19 20:08:40','2017-12-19 20:08:40');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-12 15:04:03
