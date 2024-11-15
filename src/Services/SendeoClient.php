<?php

namespace SendeoClientLaravel\Services;


use SendeoClientLaravel\Models\TrackDelivery;
use SendeoClientLaravel\Models\CancelDelivery;
use SendeoClientLaravel\Models\SetDelivery;
use SendeoClientLaravel\Models\LoginAES;
use SendeoClientLaravel\Models\CargoMeasurementUpdate;
use SendeoClientLaravel\Models\GetBarcodeByTrackingNumber;
use SendeoClientLaravel\Models\GetCityDistricts;


class SendeoClient
{
    // Test Base Url
    public string $BaseUrl = "https://api.sendeo.com.tr";

    public string $TestUrl = "https://api-dev.sendeo.com.tr";

    public function Login(LoginAES $req)
    {
        return $this->LoginAES($req, '/api/Token/LoginAES');
    }

    public function SetDelivery(string $token, SetDelivery $req)
    {
        return $this->Request($req, $token, '/api/Cargo/SETDELIVERY', true);
    }

    public function TrackDelivery(string $token, TrackDelivery $req)
    {
        $queryString = '?trackingNo=' . $req->trackingNo . '&referenceNo=' . $req->referenceNo;
        return $this->Request(null, $token, '/api/Cargo/TRACKDELIVERY' . $queryString, false);
    }

    public function CancelDelivery(string $token, CancelDelivery $req)
    {
        $queryString = '?trackingNo=' . $req->trackingNo . '&referenceNo=' . $req->referenceNo;
        return $this->Request(null, $token, '/api/Cargo/CANCELDELIVERY' . $queryString, true);
    }

    public function CargoMeasurementUpdate(string $token, CargoMeasurementUpdate $req)
    {
        return $this->Request($req, $token, '/api/Cargo/CARGOMEASUREMENTUPDATE', true);
    }

    public function GetBarcodeByTrackingNumber(string $token, GetBarcodeByTrackingNumber $req)
    {
        return $this->Request($req, $token, '/api/Cargo/GETBARCODEBYTRACKINGNUMBER', true);
    }

    public function GetCityDistricts(string $token, GetCityDistricts $req)
    {
        $queryString = '?CityName=' . $req->CityName . '&DistrictName=' . $req->DistrictName;
        return $this->Request(null, $token, '/api/Cargo/GetCityDistricts' . $queryString, false);
    }

    private function Request($data, string $authToken, string $path, bool $isPost = false)
    {
        $ch = curl_init($this->TestUrl . $path);

        $headers = [
            'Authorization: Bearer ' . $authToken,
            'Content-Type: application/json',
        ];

        $options = [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => $isPost ? 'POST' : 'GET',
            CURLOPT_HTTPHEADER => $headers,
        ];

        if ($isPost && $data !== null) {
            $options[CURLOPT_POSTFIELDS] = json_encode($data);
        }

        curl_setopt_array($ch, $options);

        $response = curl_exec($ch);

        if ($response === false) {
            throw new \Exception('CURL Error: ' . curl_error($ch));
        }

        curl_close($ch);

        return json_decode($response, true);
    }

    private function LoginAES(LoginAES $data, string $path)
    {
        $ch = curl_init($this->TestUrl . $path);

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        ]);

        $response = curl_exec($ch);

        if ($response === false) {
            throw new \Exception('CURL Error: ' . curl_error($ch));
        }

        curl_close($ch);

        return json_decode($response, true);
    }
}
