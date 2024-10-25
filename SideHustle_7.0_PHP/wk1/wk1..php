<?php
    //Week 1, Lesson 1 code
    echo "<h1>Lesson 1</h1>";
    echo "Bismi Llahi Rahmaani Raheem";
    //end of week 1, lesson 1 code


    //Week 1, Lesson 2 code
    /*
    multi-line comment, this a revision
    */
    echo "<h1>Lesson 2</h1>";
    echo "Bismi Llahi Rahmaani Raheem</b>";

    $this_is_an_example_of_a_variable= "this text the content of a variable";
    echo "<br><br>$this_is_an_example_of_a_variable<br><br>";
    //end of week 1, lesson 2 code


    //Week 1, Lesson 3 code starts
    /* 
    **Constants
    value assigned to constant is not changeable once declared unlike variables
     */
    //varible example
    echo "<h1>Lesson 3</h1>";
    $numb1 = 1440;
    $numb1= 1444;
    echo $numb1; //output of this variable will be 1444, 1st value is ignored, overwritten.

    //constant example
    define("plants", "fern");
    echo plants; //give expected output
   // echo "<br><br>".PLANTS;//give un expected output

    define("sound", "noises", true);
    echo "<br><br>".sound;//give expected output
   // echo "<br><br>".SOUND;//give expected output
    //end of week 1, lesson 3 code


    //Week 1, Lesson 4 code starts here
    //Data types
    echo "<h1>Lesson 4</h1>";
    $something = "book, pencil, eraser... ";
    $food = "fish, egg, meat";
    echo $something.$food;
    //wk 1 lesson 4 ends.


    //Week 1, Lesson 5 code starts here
    //float, boolean, operators
    echo "<h1>Lesson 5</h1>";
    $arg1 = "oranges are acidic";
    $arg2 = "fishes fly in the air";
    $a = true;
    $n =false;
    if ($a == 0 && $n == 1) 
    {
        echo $arg2;
    }
    elseif ($a == 1 && $n == 0) 
    {
        echo $arg1;
    }
    echo "<br><br>";
    $t = 9;
    $h = 5;
    echo $t + $h;
    echo "<br><br>";
    echo $t - $h;
    echo "<br><br>";
    echo $t * $h;
    echo "<br><br>";
    echo $t / $h;
    echo "<br><br>";
    echo $t % $h;
    //wk 1 lesson 5 ends.


    //Week 1, Lesson 6 code starts here
    echo "<h1>Lesson 6</h1>";
    echo "<h3>Assignment operators</h3>";

    echo "<h2>End of the line... Jump to Week 2 here: <a href='../wk2/wk2..php'>Week 2</a></h2>";
?>