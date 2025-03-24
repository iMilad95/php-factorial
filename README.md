# PHP Factorial Function

This repository contains a simple PHP implementation of a factorial function. The factorial of a non-negative integer n is the product of all positive integers less than or equal to n.

## Function Description

The `factorial()` function:
- Calculates the factorial of a given non-negative integer
- Handles error cases (negative numbers)
- Uses recursive implementation

## Usage

```php
require_once 'factorial.php';

try {
    $result = factorial(5);  // Returns 120
    echo $result;
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}
```

## Examples

- `factorial(5)` returns 120 (5 * 4 * 3 * 2 * 1)
- `factorial(0)` returns 1
- `factorial(1)` returns 1
- `factorial(-1)` throws InvalidArgumentException

## Requirements

- PHP 7.0 or higher

## License

This project is open source and available under the MIT License.