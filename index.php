<?php

// Main program loop
while (true) {
    echo "Enter a list of numbers separated by spaces (or type 'exit' to quit): ";

    $input = trim(fgets(STDIN));

    // Exit condition
    if (strtolower($input) === 'exit') {
        echo "Exiting the program. Goodbye!\n";
        break;
    }

    // Split input into an array of values
    $parts = explode(' ', $input);
    $numbers = [];

    // Validate each input
    $isValid = true;
    foreach ($parts as $part) {
        if (is_numeric($part)) {
            $numbers[] = floatval($part);
        } else {
            $isValid = false;
            break;
        }
    }

    if (!$isValid || count($numbers) === 0) {
        echo "Invalid input. Please enter only numbers separated by spaces.\n\n";
        continue;
    }

    // Perform calculations
    $max = max($numbers);
    $min = min($numbers);
    $sum = array_sum($numbers);
    $avg = $sum / count($numbers);

    // Display results
    echo "\n=== Results ===\n";
    echo "Maximum: $max\n";
    echo "Minimum: $min\n";
    echo "Sum: $sum\n";
    echo "Average: " . number_format($avg, 2) . "\n\n";
}
