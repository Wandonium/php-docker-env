<?php
    $string = 'Hello World';

    // Get the length of a string
    echo strlen($string);

    // Find the position of the first occurrence of a substring in a string
    echo '<br/>' . strpos($string, 'l');

    // Find the position of the last occurrence of a substring in a string
    echo '<br/>' . strrpos($string, 'l');

    // Reverse a string
    echo '<br/>' . strrev($string);

    // Convert all characters to lowercase
    echo '<br/>' . strtolower($string);
    
    // Convert all characters to uppercase
    echo '<br/>' . strtoupper($string);

    // Uppercase the first character of each word
    echo '<br/>' . ucwords($string);

    // String replace
    echo '<br/>' . str_replace('World', 'Everyone', $string);

    // Return portion of a string specified by the offset and length
    echo '<br/>' . substr($string, 0, 5);
    echo '<br/>' . substr($string, 5);

    // Starts with
    if(str_starts_with($string, 'Hello')) {
        echo '<br/> YES';
    }

    // Ends with
    if(str_ends_with($string, 'ld')) {
        echo '<br/> YES';
    }

    $string2 = '<script>alert(1)</script>';
    // echo $string2;
    echo htmlspecialchars($string2);

    printf('<br/> %s likes to %s', 'Hillary', 'code');
    printf('<br/> 1+1=%d', 1+1);
    printf('<br/> 1.5+1.5=%f', 1.5+1.5);