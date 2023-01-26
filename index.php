<?php
$db = new SQLite3('college.db');

$SQL_create_table = "CREATE TABLE IF NOT EXISTS Students
(
StudentId VARCHAR(10) NOT NULL,
FirstName VARCHAR(80),
LastName VARCHAR(80),
School VARCHAR(50),
PRIMARY KEY (StudentId)
);";
$db->exec($SQL_create_table);

$SQL_insert_data = "INSERT INTO Students (StudentId, FirstName, LastName, School)
VALUES
('A00111111', 'Tom', 'Max', 'Science'),
('A00222222', 'Ann', 'Fay', 'Mining'),
('A00333333', 'Joe', 'Sun', 'Nursing'),
('A00444444', 'Sue', 'Fox', 'Computing'),
('A00555555', 'Ben', 'Ray', 'Mining')
";
// $db->exec($SQL_insert_data);

$res = $db->query('SELECT * FROM Students');
while ($row = $res->fetchArray()) {
  echo "{$row['StudentId']} {$row['FirstName']} {$row['LastName']} {$row['School']}<br />";
}

$db->close();

?>