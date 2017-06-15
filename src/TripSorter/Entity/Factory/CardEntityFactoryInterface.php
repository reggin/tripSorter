<?php

namespace TripSorter\Entity\Factory;

use TripSorter\Entity\CardEntityInterface;

interface CardEntityFactoryInterface
{
    const SEAT_INFORMATION_DEFAULT_DATA = 'No seat assignment';

    public function create(
        string $transport,
        string $from,
        string $to,
        string $seatInformation = '',
        string $additionalInformation = ''
    ): CardEntityInterface;
}