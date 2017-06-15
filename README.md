**Trip Sorter**

Sorting pass cards step by step for delivering to needed location.

Using:
```
$tripSorter = new TripSorter(
    new CardEntitySerializer(),
    new CardListSorter()
);

$tripSorter->sortCards($inputData);
```