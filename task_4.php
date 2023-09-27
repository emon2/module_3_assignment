<?php
$studentGrades = [
    'student_1' => ['Math' => 50, 'English' => 50, 'Science' => 50],
    'student_2' => ['Math' => 60, 'English' => 60, 'Science' => 60],
    'student_3' => ['Math' => 70, 'English' => 70, 'Science' => 70]
];
function calculateAverageGrade($studentGrades) {
    foreach ($studentGrades as $key => $student) {
           $averageGrade = array_sum($student) / count($student);
           echo $key . "average grade is:" . ($averageGrade >= 80 ? "A" : ($averageGrade >= 70 ? "B" : ($averageGrade >= 60 ? "C" : ($averageGrade >= 50 ? "D" : "F"))));
        echo "\r\n";
    }
}
calculateAverageGrade($studentGrades);
?>