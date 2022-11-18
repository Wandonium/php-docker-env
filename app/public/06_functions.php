<?php
    // global variable
    $x = 12;
    // normal function
    function registerUser($email) {
        global $x;
        echo "${x} <br/>";
        echo "${email} registered";
    }

    // registerUser("brad@email.com");

    // function that returns something
    function sum($n1, $n2) {
        return $n1 + $n2;
    }

    // echo sum(5, 5);

    // function with default params
    function product($n1 = 4, $n2 = 2) {
        return $n1 * $n2;
    }

    // echo product();

    // function assigned to variable
    $subtract = function($n1, $n2) {
        return $n1 - $n2;
    };

    // echo $subtract(10, 5);

    // arrow function
    $divide = fn($n1, $n2) => $n1 / $n2;

    echo $divide(21, 3);
