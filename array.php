<?php
// array indexing
$animals = ['Kucing', 'Kambing', 'Kuda'];

// Mengakses array indexing
foreach ($animals as $animal) {
    echo $animal . '<br>';
}

// array assosiatif
$student1 = [
    'name' => 'Alex',
    'nim' => 1441511038,
    'major' => 'Information System'
] ;

// Mengakses array assosiatif
echo $student1['major'];