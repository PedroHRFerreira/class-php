<?php

class Address
{
    public string $street;
    public string $number;
    public string $neighborhood;
    public string $city;

    public function __construct(string $street, string $number, string $neighborhood, string $city)
    {
        $this->street = $street;
        $this->number = $number;
        $this->neighborhood = $neighborhood;
        $this->city = $city;
    }
    public function getStreet(): string
    {
        return $this->street;
    }
    public function getNumber(): string
    {
        return $this->number;
    }
    public function getNeighborhood(): string
    {
        return $this->neighborhood;
    }
    public function getCity(): string
    {
        return $this->city;
    }
}
