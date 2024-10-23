CREATE DATABASE portofolio;
USE portofolio;
SHOW DATABASES;

CREATE TABLE home (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    description TEXT,
    cv_link VARCHAR(255),
    image VARCHAR(255)
);
INSERT INTO home (name, description, cv_link, image) VALUES
('Syifa Nur Nabila', 'Informatics student at Pembangunan Jaya University', 'cv.pdf', 'home.png');
select * from home;

INSERT INTO home (section, heading, description, link) VALUES
('home', 'Hello, I am', NULL, NULL),
('home', 'Syifa Nur Nabila', NULL, NULL),
('home', NULL, 'Informatics student at Pembangunan Jaya University', NULL);

CREATE TABLE about (
    id INT AUTO_INCREMENT PRIMARY KEY,
    heading VARCHAR(100),
    subheading VARCHAR(150),
    description TEXT,
    cv_link VARCHAR(255)
);

INSERT INTO about (heading, subheading, description, cv_link) VALUES
('About Me', 'Hi, I\'m Here To Help Your Next Project!', 'My name is Syifa Nur Nabila, 
an Informatics student at Pembangunan Jaya University. I have a passion for technology, 
especially in the field of web development. By pursuing technology as a web developer, 
web designer, and front-end developer, I constantly strive to create intuitive and engaging user experiences. 
As a UI/UX designer, I believe that good design should not only look good, but also be functional. 
I love collaborating with teams to come up with creative solutions that solve real problems. 
I am always open to learning new things and new challenges in the digital world. Let\'s connect and explore new possibilities together!', 'cv.pdf');

CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    service_name VARCHAR(100),
    service_description TEXT
);
INSERT INTO services (service_name, service_description) VALUES
('Web Development', 'As a web developer, I focus on creating dynamic and engaging web solutions tailored to your business needs. 
  By leveraging the latest technologies and design trends, I ensure that your website not only performs smoothly but also offers a great user experience. 
  Whether you\'re looking to build a new site, redesign an existing one, or add complex features, I’m here to help you achieve your business goals while delivering a captivating online presence.'),
('Web Designer', 'As a web designer, I create beautiful and user-friendly websites that help your brand shine. 
  I mix creativity with technical skills to design layouts that look great and are easy to use. 
  I take the time to understand what your business needs and who your audience is so I can deliver a design that speaks to them, 
  making it easier for visitors to engage with your content and take action.'),
('UI/UX Designer', 'As a UI/UX designer, my goal is to craft intuitive user experiences that make your website easy to navigate and enjoyable to use. 
  By conducting user research and usability testing, I gather insights to inform my design choices, ensuring that the interfaces I create meet the needs of your audience. 
  I pay attention to every detail, from wireframes to visual elements, to provide a seamless experience that increases user satisfaction and loyalty.'),
('Front-end Developer', 'As a front-end developer, I bring designs to life by transforming creative concepts into functional, responsive websites. 
  My expertise lies in using HTML, CSS, JavaScript, and PHP to build interfaces that look great and perform efficiently across all devices. 
  I focus on performance optimization and cross-browser compatibility, ensuring that your website provides a consistent and smooth experience for all users, regardless of their device or browser.');

-- Membuat tabel portofolio
CREATE TABLE pengalaman (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_title VARCHAR(255),
    project_description TEXT,
    project_image VARCHAR(255),
    project_link VARCHAR(255)
);
-- Menginsert data ke dalam tabel portofolio
INSERT INTO pengalaman (project_title, project_description, project_image, project_link) VALUES
('Duit Gweh', 'Personal Finance Management App with income and expense recording. 
  This app is designed to help teenagers, educated adults, adults preparing for marriage, 
  and parents aged 30-40 years old in planning their future savings.', 'duitgweh.png', NULL),
('Tanamania', 'The “Tanamania” application offers several innovations, namely a digital market for organic products, 
  buying and selling organic products, integrated product management, discussion forum community features, 
  collaboration & networking, statistical dashboard analysis & reporting.', 'tanamania.png', NULL),
('One & Grow', 'The “One & Grow” app is perfect for career women. It offers features to record children\'s growth and development, 
  children\'s activity schedule, food recipes for children, children\'s meal and sleep times.', 
  'one&grow.png', NULL),
('Online Scholarship Competition', 'Article Writer in Online Scholarship Competition.', 'osc.png', 
 'https://osc.medcom.id/community/mengasah-keterampilan-teknologi-dari-hobi-menjadi-karir-6730'),
('Kumparan', 'Article Writer in Kumparan Website.', 'kumparan.png', 'https://kumparan.com/syifanurnabila7'),
('Geotimes', 'Article Writer in Geotimes Website.', 'geotimes.png', 'https://geotimes.id/opini/pelanggaran-hak-kekayaan-intelektual/');

-- Membuat tabel kontak 
CREATE TABLE portofolio (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(50) NOT NULL,
    emailaddress VARCHAR(100) NOT NULL,
    mobilenumber VARCHAR(50) NOT NULL,
    emailsubject VARCHAR(100) NOT NULL,
    yourmessage TEXT NOT NULL
);
-- Menginsert data ke dalam tabel kontak
INSERT INTO portofolio (fullname, mobilenumber, emailaddress, emailsubject, yourmessage) 
VALUES ('<fullname>', '<mobilenumber,>', '<emailaddress>', '<emailsubject>', '<yourmessage>');


