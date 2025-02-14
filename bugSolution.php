This corrected code uses strict comparison (`===`), which accurately checks for `null` values.

```php
function checkNull($value) {
  if ($value === null) {
    return true;
  } else {
    return false;
  }
}
```

Using strict comparison avoids the issues caused by loose comparison and ensures your code behaves as intended.