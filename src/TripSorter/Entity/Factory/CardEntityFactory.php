<?php

namespace TripSorter\Entity\Factory;

use TripSorter\Entity\CardEntity;
use TripSorter\Entity\CardEntityInterface;

class CardEntityFactory implements CardEntityFactoryInterface
{

    public function create(
        string $transport,
        string $from,
        string $to,
        string $seatInformation = '',
        string $additionalInformation = ''
    ): CardEntityInterface {
        return new CardEntity(
            $transport,
            $from,
            $to,
            $this->prepareSeatInformation($seatInformation),
            $additionalInformation
        );
    }

    private function prepareSeatInformation(string $seatInformation): string
    {
        return empty($seatInformation) ? self::SEAT_INFORMATION_DEFAULT_DATA : $seatInformation;
    }
}