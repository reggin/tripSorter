**Trip Sorter**

Sorting pass cards step by step for delivering to needed location.

Create card entity using factory:
```
\TripSorter\Entity\Factory\CardEntityFactory::create
```

Sort cards, using trip sorter service:
```
$tripSorter = new TripSorter(
    new CardListSorter()
);
$sortedCards = $tripSorter->sortCards($inputData);
```

You can also check tests for examples, how to use service:

Install dependencies, using composer 
```
composer install
```

Then run tests, using phpunit:
```
vendor/bin/phpunit
```