This code uses a non-standard way to check for null values.  It relies on loose comparison (`==`) which can lead to unexpected behavior.

```php
function checkNull($value) {
  if ($value == null) {
    return true;
  } else {
    return false;
  }
}
```

This function will return `true` for `null`, `0`, `""`, `false`, and `[]`.  A strict comparison (`===`) is necessary to only return true for `null`. 