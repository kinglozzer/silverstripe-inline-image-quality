# SilverStripe inline image quality

Allows setting image quality on a per-image basis in templates.

## Installation

`composer require kinglozzer/silverstripe-inline-image-quality:^1`

## Usage

Use with `.Quality()` in templates, passing a number between 0 and 100. For example:

```html
<!-- Max image quality -->
{$CarouselImage.Quality(100).Fill(1280, 480)}

<!-- Low image quality -->
{$ObscuredImage.Quality(5).Fill(350, 350)}
```
