<?php
// 1. Single-line comment: Hello World output
echo "Hello, World!\n";

// 2. Variables and Basic Math
$number1 = 10;
$number2 = 20;
$sum = $number1 + $number2;
echo "The sum of $number1 and $number2 is: " . $sum . "\n";

// 3. Conditional Statements (If-Else)
$age = 18;
if ($age >= 18) {
    echo "You are an adult.\n";
} else {
    echo "You are a minor.\n";
}

// 4. Arrays (Indexed and Associative)
$fruits = ["Apple", "Banana", "Cherry"]; // Indexed
$user = [                                // Associative
    "name" => "Alex",
    "role" => "Developer"
];

// 5. Loops (Foreach)
echo "Fruit list:\n";
foreach ($fruits as $fruit) {
    echo "- " . $fruit . "\n";
}

// 6. Custom Functions
function greetUser($name, $role) {
    return "Welcome back, $name! Role: $role.\n";
}

// Calling the function
echo greetUser($user['name'], $user['role']);
?>
