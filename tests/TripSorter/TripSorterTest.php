<?php

namespace TripSorter;

use TripSorter\Entity\Factory\CardEntityFactory;
use TripSorter\Handler\CardListSorter;

class TripSorterTest extends \PHPUnit_Framework_TestCase
{

    private $cardFactory;

    public function setUp()
    {
        parent::setUp();

        $this->cardFactory = new CardEntityFactory();
    }

    public function testTripSorter()
    {
        $inputData = [];
        $outputData = [];
        $data = [
            [
                'transport' => 'train 78A',
                'from' => 'Madrid',
                'to' => 'Barcelona',
                'seat_information' => 'seat 45B',
                'additional_information' => '',
            ],
            [
                'transport' => 'airport bus',
                'from' => 'Barcelona',
                'to' => 'Gerona Airport',
            ],
            [
                'transport' => 'flight SK455',
                'from' => 'Gerona Airport',
                'to' => 'Stockholm',
                'seat_information' => 'Gate 45B, seat 3A',
            ],
            [
                'transport' => 'flight SK22',
                'from' => 'Stockholm',
                'to' => 'New York JFK',
                'seat_information' => 'Gate 22, seat 7B',
                'additional_information' => 'Baggage will we automatically transferred from your last leg.',
            ],
        ];

         foreach ($data as $item) {
             $inputData[] = $this->createCardEntity($item);
         }

        shuffle($inputData);

        $tripSorter = new TripSorter(
            new CardListSorter()
        );

        $data[1]['seat_information'] = 'No seat assignment';
        $data[1]['additional_information'] = '';
        $data[2]['additional_information'] = '';

        foreach ($data as $item) {
            $outputData[] = $this->createCardEntity($item);
        }

        self::assertEquals($outputData, $tripSorter->sortCards($inputData));
    }

    private function createCardEntity(array $data)
    {
        return call_user_func_array([$this->cardFactory, 'create'], $data);
    }
}