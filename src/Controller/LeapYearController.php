<?php

namespace Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Model\LeapYear;
 
class LeapYearController
{
    public function indexAction(Request $request, $year)
    {
        $leapyear = new LeapYear();
        if ($leapyear->isLeapYear($year)) {
            // $response = new Response('Yep, this is a leap year!');
            $response = 'Yep, this is a leap year!';
        } else {
            $response = new Response('Nope, this is not a leap year!');
            $response = 'Nope, this is not a leap year!';
        }

        return $response;
    }
}