# PHP Loose Comparison Bug

This repository demonstrates a common error in PHP: using loose comparison (`==`) when checking for null values. This can lead to unexpected behavior and bugs in your code.

## The Problem

The `checkNull` function in `bug.php` uses loose comparison (`==`). This means that the function will return `true` not only for `null` but also for other values that are considered loosely equal to `null` such as `0`, an empty string (`""`), `false` and empty arrays (`[]`).

## The Solution

The corrected function in `bugSolution.php` uses strict comparison (`===`) which ensures that the function only returns `true` when the value is strictly equal to `null`.

## How to run the code

1. Clone the repository.
2. Run the PHP code using your preferred method (e.g., PHP CLI).