<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>PHP Basic</title>
</head>

<body>
    <h1>Hello World</h1>
    <?php


 //Question 1


echo "<br>";
    if (date("m") === "08") {
       
        echo ("It's August, so it's still holidays.");
    } else {
        
        $monthName = date("F", mktime(0, 0, 0, date("m"), 10));
        echo ("Not August, This is $monthName so i don't have any holidays" . "<br>");
    }

    
    echo "<br>";

    //Question 2

    $Color = "#FF0000";
    $notRed = "#FF1111";

    if ($Color == "#FF0000") {
        echo "Color is red" . "<br>";
    } else {
        echo "Color is not red" . "<br>";
    }

    
    echo "<br>";


    //Question3

    $marks = 75;
    if ($grade > 80) {
        echo "Excellent " . "<br>" . "<br>" . "<br>";
    } else if ($grade < 80 && $grade > 70) {
        echo "Great " . "<br>" . "<br>" . "<br>";
    } else if ($grade < 70 && $grade > 60) {
        echo "Good " . "<br>" . "<br>" . "<br>";
    } else if ($grade < 60 && $grade > 50) {
        echo "Pass " . "<br>" . "<br>" . "<br>";
    } else if ($grade < 50) {
        echo "Fail " . "<br>" . "<br>" . "<br>";
    }
   
    ?>


  //Question 4

        <?php
        
        $nameErr = $emailErr =  "";
        $name = $Age =  "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Enter Your Name";
            } else {
                $name = test_input($_POST["name"]);
            }

            if (empty($_POST["email"])) {
                $emailErr = "Enter Your Email";
            } else {
                $Age = test_input($_POST["email"]);
            }
        }

                function test_input($data)
                {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                ?>

    <h2>Voting Validation</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        Age: <input type="text" name="email" value="<?php echo $Age; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $Age;
    echo "<br>";
    if ($Age > "18") {
        echo "You're eligible to vote" . "<br>";
    } else {
        echo "You're  not eligible to vote" . "<br>";
    }
    ?>


    <?php
     echo "<br>";
     echo "<br>";
    for ($i = 8; $i >= 0; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
    ?>



    <?php
    for ($i = 0; $i <= 8; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
    ?>






















</body>

</html>