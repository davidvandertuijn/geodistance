# Geo Distance

<a href="https://packagist.org/packages/davidvandertuijn/geodistance"><img src="https://poser.pugx.org/davidvandertuijn/geodistance/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/davidvandertuijn/geodistance"><img src="https://poser.pugx.org/davidvandertuijn/geodistance/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/davidvandertuijn/geodistance"><img src="https://poser.pugx.org/davidvandertuijn/geodistance/license.svg" alt="License"></a>

![Geo Distance](https://cdn.davidvandertuijn.nl/github/geodistance.png)

The Geo Distance calculator is a powerful tool designed to determine the distance between two geographic locations on the Earth’s surface. Whether you are planning a trip, conducting research, or managing logistics, understanding the distance between points is crucial for effective decision-making.

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.buymeacoffee.com/davidvandertuijn)

## Install

```
composer require davidvandertuijn/geodistance
```
## Usage

```php
use Davidvandertuijn\Geodistance;
```

```php
// Rotterdam
$lat1 = 51.924419;
$lon1 = 4.47917;
```

```php
// Amsterdam
$lat2 = 52.370216;
$lon2 = 4.477733;
```

**Miles**
```php
Geodistance::distance($lat1, $lon1, $lat2, $lon2, 'M'); // 30.800174981173
```

**Kilometers**
```php
Geodistance::distance($lat1, $lon1, $lat2, $lon2, 'K'); // 49.568076804901
```

**Nautical Miles**
```php
Geodistance::distance($lat1, $lon1, $lat2, $lon2, 'N'); // 26.746871953651
```
