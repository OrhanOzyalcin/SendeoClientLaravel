<?php

namespace SendeoClientLaravel\Models;

class CargoMeasurementUpdate
{
    public string $customerReferenceNo;
    /** @var Measurements[] */
    public array $measurements;
    public int $customerChannel;
    public int $senderBranchId;

    /**
     * @param Measurements[] $measurements
     */
    public function __construct(
        string $customerReferenceNo,
        array $measurements,
        int $customerChannel,
        int $senderBranchId
    ) {
        $this->customerReferenceNo = $customerReferenceNo;
        $this->measurements = $measurements;
        $this->customerChannel = $customerChannel;
        $this->senderBranchId = $senderBranchId;
    }
}

class Measurements
{
    public int $quantity;
    public int $width;
    public int $length;
    public int $height;
    public int $deci;
    public int $weight;

    public function __construct(
        int $quantity,
        int $width,
        int $length,
        int $height,
        int $deci,
        int $weight
    ) {
        $this->quantity = $quantity;
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
        $this->deci = $deci;
        $this->weight = $weight;
    }
}
