```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately (e.g., log an error, throw an exception)
      echo "Warning: Non-numeric value encountered: " . $number . "\n";
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum;
```