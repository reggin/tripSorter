<?php

namespace TripSorter\Entity;

class CardEntity implements CardEntityInterface
{
    /**
     * @var string
     */
    private $transport;

    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $to;

    /**
     * @var string
     */
    private $seatInformation;

    /**
     * @var string
     */
    private $additionalInformation;

    public function __construct(
        $transport,
        $from,
        $to,
        $seatInformation,
        $additionalInformation
    ) {
        $this->transport = $transport;
        $this->from = $from;
        $this->to = $to;
        $this->seatInformation = $seatInformation;
        $this->additionalInformation = $additionalInformation;
    }

    public function getTransport(): string
    {
        return $this->transport;
    }

    public function getFrom(): string
    {
        return $this->from;
    }

    public function getTo(): string
    {
        return $this->to;
    }

    public function getSeatInformation(): string
    {
        return $this->seatInformation;
    }

    public function getAdditionalInformation(): string
    {
        return $this->additionalInformation;
    }
}