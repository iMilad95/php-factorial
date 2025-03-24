<?php

/**
 * Calculate the factorial of a given number
 * 
 * @param int $n The number to calculate factorial for
 * @return int|string Returns the factorial result or error message
 * @throws InvalidArgumentException if the input is negative
 */
function factorial($n) {
    // Check for negative numbers
    if ($n < 0) {
        throw new InvalidArgumentException("Factorial is not defined for negative numbers");
    }
    
    // Base cases
    if ($n == 0 || $n == 1) {
        return 1;
    }
    
    // Recursive calculation
    return $n * factorial($n - 1);
}

// Example usage
try {
    echo "Factorial of 5: " . factorial(5) . "\n";  // Output: 120
    echo "Factorial of 0: " . factorial(0) . "\n";  // Output: 1
    
    // This will throw an exception
    // echo factorial(-1);
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>