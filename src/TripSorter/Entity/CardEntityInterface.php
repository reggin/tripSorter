<?php

namespace TripSorter\Entity;

interface CardEntityInterface
{

    public function getTransport(): string;

    public function getFrom(): string;

    public function getTo(): string;

    public function getSeatInformation(): string;

    public function getAdditionalInformation(): string;
}