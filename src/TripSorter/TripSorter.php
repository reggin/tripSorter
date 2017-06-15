<?php

namespace TripSorter;

use TripSorter\Entity\CardEntityInterface;
use TripSorter\Handler\CardListSorter;

class TripSorter implements TripSorterInterface
{

    /**
     * @var CardListSorter
     */
    private $cardListSorter;

    public function __construct(
        CardListSorter $cardListSorter
    ) {
        $this->cardListSorter = $cardListSorter;
    }

    /**
     * @param CardEntityInterface[] $cards
     *
     * @return CardEntityInterface[]
     */
    public function sortCards(array $cards)
    {
        return $this->cardListSorter->sortCardsByPlace($cards);
    }
}