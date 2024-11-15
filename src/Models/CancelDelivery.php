<?php

namespace SendeoClientLaravel\Models;

class CancelDelivery
{
    public string $trackingNo;
    public string $referenceNo;

    public function __construct(string $trackingNo, string $referenceNo)
    {
        $this->trackingNo = $trackingNo;
        $this->referenceNo = $referenceNo;
    }
}
