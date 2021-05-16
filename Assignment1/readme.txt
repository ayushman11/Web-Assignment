This is a Read-Me documentation for the first assignment of the web converner selection process.

Name: Ayushman Choudhary
Roll No. 200020039
Phone: 9654462777
For any query or missing file, please contact above.

I have created a video on the final project workings, please visit:
https://drive.google.com/file/d/1Dg88JD5uZR1ygJDGnpyMWCVOw2-s2ov9/view?usp=sharing

Database name: student
Table name: student_info

The HTML documentation is present in index.html while the php part could be found in connect.php.
I had used local host xampp server for the working of this assignment using apache and mySQL.
The webpage consists of a simple HTML form in a div box with the table of previous entries below it.
Much of the work consists of CSS and PHP part.

CSS :
a) Placeholders on form increase in size and have a green aesthetic on clicking.
b) Submit button has a hover effect of changing background.
c) The Table heading has been fixed when it reaches top: 0; for better readability.
d) An alternate coloring pattern is used in Table along with a background change hover effect.
e) The box around form has a shadow-effect encompassing it.

PHP :
a) Connection is made with the database, wherein table : student_info, Roll_No is set as Primary Key.
b) While filling out form Roll Nunmber and First Name have been identified as compulsory fields.
c) The message is being displayed using alert() of JavaScript with certain conditions.
d) After message display from connect.php, browser redirects to index.php.
e) Entered Data is stored in table student_info using INSERT INTO command of mySQL.
f) The data from mySQL is fetched using SELECT FROM * command to get whole table, which is displayed in new table rows.

Further additions in mind that couldn't be added:
a) Display message on the same page above the placeholder instead of a new page (like those when we type in incorrect password)
b) Have a count for the current size of the table, to know how many students' info has been received.
c) Have a search bar for a particular student entry search.
