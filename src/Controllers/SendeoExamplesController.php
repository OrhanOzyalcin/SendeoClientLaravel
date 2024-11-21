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
        $token = $response['result']['Token'];

        if(!$token) {
            return ['error' => 'Authentication failed, token not found'];
        }

        return $token;
    }

    // Track a Delivery
    public function trackDelivery()
    {
        $token = $this->login();

        $trackDelivery = new TrackDelivery('TRACK123456', 'REF123456');
        $response = Sendeo::trackDelivery($token, $trackDelivery);
        dd($response);
    }

    // Cancel a Delivery
    public function cancelDelivery()
    {
        $token = $this->login();
        
        $cancelDelivery = new CancelDelivery('TRACK123456', 'REF123456');
        $response = Sendeo::cancelDelivery($token, $cancelDelivery);
        dd($response);
    }

    // Set a Delivery
    public function setDelivery()
    {
        dd('Coming soon!');
    }
}