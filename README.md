# Kata: Islands


## Premise:


Given a 2D map of `1`s (land) and `0`s water, count the number of islands.

- An island is a group of connected areas of land, or an individual unconnected area of land.
- Land is considered to be connected if it is adjacent orthoganally (horizontally and vertically), not diagonally.

## Examples:

### Example 1 (result: 1)

```json
[
  [1, 1],
  [0, 1]
]
```

### Example 2 (result: 2)

```json
[
  [1, 0],
  [0, 1]
]
```

### Example 3 (result: 1)

```json
[
    [1, 1, 1, 1, 0],
    [1, 1, 0, 1, 0],
    [1, 1, 0, 0, 0],
    [0, 0, 0, 0, 0]
]
```

### Example 4 (result: 3)
```json
[
    [1, 1, 0, 0, 0],
    [1, 1, 0, 0, 0],
    [0, 0, 1, 0, 0],
    [0, 0, 0, 1, 1]
]
```

## Instructions

 - Clone the repository
 - Run `composer install`
 - `vendor/bin/phpspec run`
 - Write an implementation for the IslandCounter class to make the tests pass.
 - You may write additional classes to help break the problem down if you wish.
