<?php

namespace TripSorter;

use TripSorter\Entity\CardEntityInterface;

interface TripSorterInterface
{

    /**
     * @param CardEntityInterface[] $cards
     *
     * @return CardEntityInterface[]
     */
    public function sortCards(array $cards);
}