<?php

namespace TripSorter\Handler;

use TripSorter\Entity\CardEntityInterface;

class CardListSorter
{

    /**
     * @param CardEntityInterface[] $cards
     *
     * @return CardEntityInterface[] $cards
     */
    public function sortCardsByPlace(array $cards)
    {
        $response = [];

        $cardsByPlace = [];
        foreach ($cards as $card) {
            $cardsByPlace[$card->getFrom()] = $card;
        }

        $currentItem = $this->getFirstItem($cardsByPlace);

        while (true) {
            $response[] = $currentItem;
            if (false === array_key_exists($currentItem->getTo(), $cardsByPlace)) {
                break;
            }
            $currentItem = $cardsByPlace[$currentItem->getTo()];
        }

        return $response;
    }

    /**
     * @param CardEntityInterface[] $cardsWithKeys
     *
     * @return CardEntityInterface
     */
    private function getFirstItem(array $cardsWithKeys): CardEntityInterface
    {
        $fromItems = array_map(function (CardEntityInterface $card) {
            return $card->getFrom();
        }, $cardsWithKeys);

        $toItems = array_map(function (CardEntityInterface $card) {
            return $card->getTo();
        }, $cardsWithKeys);

        return $cardsWithKeys[current(array_diff($fromItems, $toItems))];
    }
}