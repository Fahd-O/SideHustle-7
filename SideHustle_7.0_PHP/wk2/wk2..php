<?php

echo "<h2>Start of the line... Bounce back to Week 1 here: <a href='../wk1/wk1..php'>Week 1</a></h2>";

echo "<h1>1...</h1>";
echo "<h1>2...</h1>";
echo "<h1>3. if...else</h1>";

$fish = "food";

if ($fish == "food" )
{
    echo "true";
} 
else 
{
    echo "false";
}
echo "<br><br>";
$x = 10;
$y = 20;
if ($x >= $y)
{
    echo "true";
} 
else
{
    echo "false";
}

echo "<h1>4. if...elseif</h1>";

$age = 23;

if ($age <= 12)
{
    echo "child";
} 
elseif ($age > 12 && $age < 20) 
{
    echo "teen";
}
else
{
    echo "adult";
}

echo "<h1>5. Switch Statement</h1>";

$today = "ahad";

switch ($today) 
{
    case 'ahad':
        echo "Today is yawmu l-ahad";
        break;
    case 'ithnayn':
        echo "Today is yawmu l-ithnayn";
        break;
    case 'thalaatha':
        echo "Today is yawmu l-thalaatha";
        break;
    case 'arbaah':
        echo "Today is yawmu l-arbaah";
        break;
    case 'khamees':
        echo "Today is yawmu l-khamees";
        break;
    
    default:
        echo "Its weekend";
        break;
}

?>