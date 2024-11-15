<?php

namespace SendeoClientLaravel\Models;

class TrackDelivery
{
    public string $trackingNo;
    public string $referenceNo;

    public function __construct(string $trackingNo, string $referenceNo)
    {
        $this->trackingNo = $trackingNo;
        $this->referenceNo = $referenceNo;
    }
}
