# Laravel Numbers `forHumans()` pt_BR Locale Wrapper

This helper function extends Laravel’s `Number::forHumans()` method by translating its output into Brazilian Portuguese (pt_BR) while maintaining support for number abbreviations.

## Features

- **Translate Number::forHumans Output**: Converts English-formatted outputs like '10 thousand' or '1 million' into pt_BR, such as '10 mil' or '1 milhão'.
- **Abbreviation Option**: Optionally abbreviates the output to formats like '10 mil', '1 mi', or '1 bi'.
- **Seamless Integration**: Simply pass the original `Number::forHumans()` output to the function.

## Usage

```php
/**
 * Translate Number::forHumans to pt_BR locale.
 *
 * @param  string  $formattedNumber  The output from Number::forHumans (e.g., '10 thousand', '1 million').
 * @param  bool|null  $abbreviation  Option to abbreviate the number (e.g., '10 mil', '1 mi').
 * @return string
 */
function forHumansPtBr(string $formattedNumber, ?bool $abbreviation = false): string;

// Example

use App\Helpers\NumberHelper;

$englishOutput = Number::forHumans(10000); // '10 thousand'
$translated = NumberHelper::forHumansPtBr($englishOutput); // '10 mil'

````
## Requirements

-   **Laravel 10.33+**: Ensure your project is running Laravel version 10.33 or higher, as this relies on the `Number::forHumans()` method.

## Installation

1.  **Add the Helper**: Include the `Helper.php` file in your project’s `app/Helpers` directory.
2.  **Use the Helper**: Import and call the `forHumansPtBr()` function wherever you need to translate `Number::forHumans()` output.


