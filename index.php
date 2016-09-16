
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
        include('Student.php');

        // Create an array, meant to hold Students
        $students = array();

        //Create, instantiate, and add John Doe
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        // Create, instantiate, and add Albert Einstein
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
        
        // Create, instantiate, and add myself
        $third = new Student();
        $third->surname = "Robertson";
        $third->first_name = "Theresa";
        $third->add_email('home','theresa.n.robertson@gmail.com');
        $third->add_grade(95);
        $students['q789'] = $third;
        
        // Sort the array
        ksort($students);
        
        // Print each Student in the array
        foreach($students as $student){
            echo $student->toString();
        }
        ?>
    </body>
</html>
