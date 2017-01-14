<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 1/11/2017
 * Time: 10:41 AM
 */
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
    </head>
    <body>
        <?php
            include('Student.php');

            $students = array();

            //add values of first student
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;

            //add values of second student
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;

            //add values of third student
            $third = new Student();
            $third->surname = "Arreola";
            $third->first_name = "Karl";
            $third->add_email('home','karreola@my.bcit.ca');
            $third->add_grade(100);
            $third->add_grade(100);
            $third->add_grade(100);
            $third->add_grade(100);
            $students['a009'] = $third;

            //print all students
            foreach($students as $student) {
                echo $student->toString();
            }
        ?>
    </body>
</html>
