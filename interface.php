<?php


interface Borrowable 
{
    public function checkIn();
    public function checkOut();
}