
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>COMP4711 Lab 1</title>
    </head>
    <body>
        <?php
        include('student.php');

        // Create an array of objects, meant to held Students
        $students = array();

        //Create and initialize John Doe
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        //Add John Doe
        $students['j123'] = $first;
        
        // Create and initialize Albert Einstein
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        
        // Add Albert Einstein
        $students['a456'] = $second;
        
        // Create and initialize myself
        $third = new Student();
        $third->surname = "Robertson";
        $third->first_name = "Theresa";
        $third->add_email('home','theresa.n.robertson@gmail.com');
        $third->add_grade(95);
        
        // Add myself
        $students['c789'] = $third;
        
        // Sort the array
        ksort($students, 1);
        
        // Print each Student in the array
        foreach($students as $student){
            echo $student->toString();
        }
        ?>
    </body>
</html>