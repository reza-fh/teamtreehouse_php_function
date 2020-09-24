<?php

// create_function hello

function hello()
{
    echo "hello word !!! ";
}

hello(); //hello Word

$current_user="mike";

function is_mike()
{
    global $current_user;

    if($current_user=="mike")
    {
        echo "you is mike";
    }else{
        echo "nop you not like";
    }
}

is_mike();                          

echo PHP_EOL;

function helloName($name)
{
    if(is_array($name) && !empty($name))
    {
        foreach($name as $key)
        {
            echo "hello, $key \n";
        }
    }else
    {
        echo "hello freind !";
    }
}

helloName(["mike", "mohede", "Homton"]);

echo PHP_EOL;

function get_info($name,$title=Null)
{
    if($title)
    {
        echo "$name was arrived,and come as $title";
    }else{
        echo "$name was arrived,Welcome";
    }
}

get_info("mike","frog");

echo PHP_EOL;

function hello_word()
{
    return "\nHello word";
}

$hello=hello_word("Y"); //hello word

echo $hello;

echo PHP_EOL;

function add_up($a,$s)
{
    return [$a,$s,$a+$s];
}

print_r(add_up(2,4));

echo PHP_EOL;

function sumArray($data)
{
    $result=0;
    foreach($data as $key)
    {
        return $result+=$key;
    }
    return $result;
}

var_dump(sumArray([1,2,3,4]));

echo PHP_EOL;

function answer()
{
    return "you answer the question";
}

$answer=answer();

echo PHP_EOL;

$answer_cal="answer";

echo $answer_cal()."!!";

$askName="\nwhat is your Name";
$name="budy";
$qwe="Hermawan";

echo PHP_EOL;

$ask=function()use($askName,$name,$qwe)
{
    return "ask the question,$askName,? $name $qwe";
};

echo $ask();

function br()
{
    echo PHP_EOL;
}

br();

$magang="magang TOP jos";

echo strlen($magang); //14

br();

echo substr($magang,7); // TOP jos

br();

echo substr($magang,7,6); // TOP JO

br();

echo strpos($magang,"jos"); // 11

br();

echo $magang[13]; //s

br();

$team=["mike"=>"developer","michel"=>"designer","Tronton"=>"developer"];


print_r(array_keys($team));

var_dump(array_key_exists("John",$team));

if(array_key_exists("john",$team))
{
    echo "mike found in \$team";
}else{
    echo "key not found in \$team";
}

br();

array_walk($team,function($value,$keys){

echo "$keys is a $value \n";

});