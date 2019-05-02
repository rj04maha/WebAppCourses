<?php
	
require('functions.php');

$table_name = 'rj04maha_courses';

$sql = "INSERT INTO $table_name (`sub`, `num`, `title`, `descr`, `year`, `sem`, `uid`) VALUES
('CSIS', '110', 'Introduction to Computer Science', 'Best course ever', 2015, 'Fall', '1'),
('MATH', '110', 'Calculus I', '', 2015, 'Fall', '1'),
('FYSM', '100', 'First Year Seminar I', 'Lots of writing', 2015, 'Fall', '1'),
('HIST', '103', 'The West and the World 1500-1900', '', 2015, 'Fall', '1'),
('ENGL', '101', 'Introduction to Literature', '', 2015, 'Fall', '1'),
('CSIS', '120', 'Software Development', '', 2016, 'Spring', '1'),
('MATH', '120', 'Calculus II', '', 2016, 'Spring', '1'),
('FYSM', '101', 'First Year Seminar II', '', 2016, 'Spring', '1'),
('ECON', '101', 'Principles of Economics', '', 2016, 'Spring', '1'),
('PHIL', '101', 'Philosophy and the Human Being', '', 2016, 'Spring', '1'),
('CSIS', '210', 'Data Structures', '', 2016, 'Fall', '1'),
('MATH', '250', 'Discrete Structures', '', 2016, 'Fall', '1'),
('CREA', '101', 'Intro to the Creative Arts', '', 2016, 'Fall', '1'),
('CSIS', '220', 'Assembly Lang and Comp Architecture', '', 2016, 'Fall', '1'),
('RELG', '141', 'An Introduction to Religious Thought', '', 2016, 'Fall', '1'),
('CSIS', '225', 'Advanced Programming', '', 2017, 'Spring', '1'),
('MATH', '350', 'Theory of Computation', '', 2017, 'Spring', '1'),
('CSIS', '385', 'Design & Analysis of Algorithms', '', 2017, 'Spring', '1'),
('MGMT', '211', 'Management', '', 2017, 'Spring', '1'),
('CSIS', '390', 'Web Application Development', '', 2017, 'Spring', '1'),
('MRKT', '212', 'Marketing', '', 2017, 'Fall', '1'),
('POSC', '205', 'State and Local Government', '', 2017, 'Fall', '1'),
('ENVA', '100', 'Environmental Science', '', 2017, 'Fall', '1'),
('CSIS', '499', 'Independent Study', 'Advanced Web App. Development', 2017, 'Fall', '1'),
('CREA', '251', 'World Theatre History', '', 2017, 'Fall', '1'),
('ENGL', '220', 'Literature and the Environment', '', 2018, 'Spring', '1'),
('ENGL', '250', 'The Drama', '', 2018, 'Spring', '1'),
('EDUC', '225', 'Sociology of Education', '', 2018, 'Spring', '1'),
('FREN', '027', 'French Cinema', '', 2018, 'Spring', '1'),
('FINC', '025', 'Personal Finance', '', 2018, 'Spring', '1'),
('SCDV', '480', 'Internship', '', 2018, 'Fall', '1'),
('CSIS', '350', 'Database Management Systems', '', 2018, 'Fall', '1'),
('ASTR', '010', 'Astronomy', '', 2018, 'Fall', '1'),
('CSIS', '410', 'Software Engineering I', '', 2018, 'Fall', '1'),
('CSIS', '415', 'Software Engineering II', '', 2019, 'Spring', '1'),
('CSIS', '201', 'Diversity in CS', '', 2019, 'Spring', '1'),
('CSIS', '320', 'Machine Learning', '', 2019, 'Spring', '1'),
('CSIS', '380', 'Computer Graphics', 'I made a game', 2019, 'Spring', '1'),
('CSIS', '110', 'Introduction to Computer Science', 'Best course ever', 2015, 'Fall', '2'),
('MATH', '110', 'Calculus I', '', 2015, 'Fall', '2'),
('FYSM', '100', 'First Year Seminar I', 'Lots of writing', 2015, 'Fall', '2'),
('HIST', '103', 'The West and the World 1500-1900', '', 2015, 'Fall', '2'),
('ENGL', '101', 'Introduction to Literature', '', 2015, 'Fall', '2'),
('CSIS', '120', 'Software Development', '', 2016, 'Spring', '2'),
('MATH', '120', 'Calculus II', '', 2016, 'Spring', '2'),
('FYSM', '101', 'First Year Seminar II', '', 2016, 'Spring', '2'),
('ECON', '101', 'Principles of Economics', '', 2016, 'Spring', '2'),
('PHIL', '101', 'Philosophy and the Human Being', '', 2016, 'Spring', '2'),
('CSIS', '210', 'Data Structures', '', 2016, 'Fall', '2'),
('MATH', '250', 'Discrete Structures', '', 2016, 'Fall', '2'),
('CREA', '101', 'Intro to the Creative Arts', '', 2016, 'Fall', '2'),
('CSIS', '220', 'Assembly Lang and Comp Architecture', '', 2016, 'Fall', '2'),
('RELG', '141', 'An Introduction to Religious Thought', '', 2016, 'Fall', '2'),
('CSIS', '225', 'Advanced Programming', '', 2017, 'Spring', '2'),
('MATH', '350', 'Theory of Computation', '', 2017, 'Spring', '2'),
('CSIS', '385', 'Design & Analysis of Algorithms', '', 2017, 'Spring', '2'),
('MGMT', '211', 'Management', '', 2017, 'Spring', '2'),
('CSIS', '390', 'Web Application Development', '', 2017, 'Spring', '2'),
('MRKT', '212', 'Marketing', '', 2017, 'Fall', '2'),
('POSC', '205', 'State and Local Government', '', 2017, 'Fall', '2'),
('ENVA', '100', 'Environmental Science', '', 2017, 'Fall', '2'),
('CSIS', '499', 'Independent Study', 'Advanced Web App. Development', 2017, 'Fall', '2'),
('CREA', '251', 'World Theatre History', '', 2017, 'Fall', '2'),
('ENGL', '220', 'Literature and the Environment', '', 2018, 'Spring', '2'),
('ENGL', '250', 'The Drama', '', 2018, 'Spring', '2'),
('EDUC', '225', 'Sociology of Education', '', 2018, 'Spring', '2'),
('FREN', '027', 'French Cinema', '', 2018, 'Spring', '2'),
('FINC', '025', 'Personal Finance', '', 2018, 'Spring', '2'),
('SCDV', '480', 'Internship', '', 2018, 'Fall', '2'),
('CSIS', '350', 'Database Management Systems', '', 2018, 'Fall', '2'),
('ASTR', '010', 'Astronomy', '', 2018, 'Fall', '2'),
('CSIS', '410', 'Software Engineering I', '', 2018, 'Fall', '2'),
('CSIS', '415', 'Software Engineering II', '', 2019, 'Spring', '2'),
('CSIS', '201', 'Diversity in CS', '', 2019, 'Spring', '2'),
('CSIS', '320', 'Machine Learning', '', 2019, 'Spring', '2'),
('CSIS', '380', 'Computer Graphics', 'I made a game', 2019, 'Spring', '2'),
('CSIS', '415', 'Software Engineering II', '', 2019, 'Spring', '3'),
('CSIS', '201', 'Diversity in CS', '', 2019, 'Spring', '3'),
('CSIS', '320', 'Machine Learning', '', 2019, 'Spring', '3'),
('CSIS', '380', 'Computer Graphics', 'I made a game', 2019, 'Spring', '3')";
	
run_query($sql);

$out = show_table($table_name);

make_basic_page("Table $table_name", $out);		
	
?>