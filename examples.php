<?php

namespace App\Http\Controllers;

use SendeoClientLaravel\Facades\Sendeo;
use SendeoClientLaravel\Models\LoginAES;
use SendeoClientLaravel\Models\TrackDelivery;
use SendeoClientLaravel\Models\CancelDelivery;
use SendeoClientLaravel\Models\SetDelivery;
use SendeoClientLaravel\Models\CargoMeasurementUpdate;
use SendeoClientLaravel\Models\Measurements;
use SendeoClientLaravel\Models\GetBarcodeByTrackingNumber;
use SendeoClientLaravel\Models\GetCityDistricts;

class SendeoExamplesController
{
    // Authenticate
    public function login()
    {
        $loginUser = new LoginAES(config('sendeo.api_id', ''), config('sendeo.api_password', ''));
        $response = Sendeo::login($loginUser);
        return $response;
    }

    // Track a Delivery
    public function trackDelivery()
    {
        $loginResponse = $this->login();

        $trackDelivery = new TrackDelivery('TRACK123456', 'REF123456');
        $response = Sendeo::trackDelivery($loginResponse->token, $trackDelivery);
        print_r(['Track Delivery Response' => $response]);
    }

    // Cancel a Delivery
    public function cancelDelivery()
    {
        $loginResponse = $this->login();
        
        $cancelDelivery = new CancelDelivery('TRACK123456', 'REF123456');
        $response = Sendeo::cancelDelivery($loginResponse->token, $cancelDelivery);
        print_r(['Cancel Delivery Response' => $response]);
    }

    // Set a Delivery
    public function setDelivery()
    {
        // Henüz uygulanmamış
        print_r(['Set Delivery Response' => 'Coming soon!']);
    }
}