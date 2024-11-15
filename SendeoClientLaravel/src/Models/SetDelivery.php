<?php

namespace SendeoClientLaravel\Models;

class SetDelivery
{
    public int $deliveryType;
    public string $referenceNo;
    public string $description;
    public string $sender;
    public int $senderBranchCode;
    public string $senderId;
    public string $senderAuthority;
    public string $senderAddress;
    public int $senderCityId;
    public int $senderDistrictId;
    public string $senderPhone;
    public string $senderGsm;
    public string $senderEmail;
    public string $receiver;
    public int $receiverBranchCode;
    public string $receiverId;
    public string $receiverAuthority;
    public string $receiverAddress;
    public int $receiverCityId;
    public int $receiverDistrictId;
    public string $receiverPhone;
    public string $receiverGsm;
    public string $receiverEmail;
    public int $paymentType;
    public int $collectionType;
    public int $collectionPrice;
    public string $dispatchNoteNumber;
    public string $additionalValue;
    public int $serviceType;
    public int $barcodeLabelType;
    /** @var Products[] */
    public array $products;
    public int $payType;
    public string $customerReferenceType;
    public bool $isReturn;
    public string $senderTaxpayerId;
    public string $receiverTaxpayerId;
    public string $integratorCustomerCode;
    public string $otherDescription;
    public bool $isMobilePickUp;
    public string $pickUpDate;

    public function __construct(
        int $deliveryType,
        string $referenceNo,
        string $description,
        string $sender,
        int $senderBranchCode,
        string $senderId,
        string $senderAuthority,
        string $senderAddress,
        int $senderCityId,
        int $senderDistrictId,
        string $senderPhone,
        string $senderGsm,
        string $senderEmail,
        string $receiver,
        int $receiverBranchCode,
        string $receiverId,
        string $receiverAuthority,
        string $receiverAddress,
        int $receiverCityId,
        int $receiverDistrictId,
        string $receiverPhone,
        string $receiverGsm,
        string $receiverEmail,
        int $paymentType,
        int $collectionType,
        int $collectionPrice,
        string $dispatchNoteNumber,
        string $additionalValue,
        int $serviceType,
        int $barcodeLabelType,
        array $products,
        int $payType,
        string $customerReferenceType,
        bool $isReturn,
        string $senderTaxpayerId,
        string $receiverTaxpayerId,
        string $integratorCustomerCode,
        string $otherDescription,
        bool $isMobilePickUp,
        string $pickUpDate
    ) {
        $this->deliveryType = $deliveryType;
        $this->referenceNo = $referenceNo;
        $this->description = $description;
        $this->sender = $sender;
        $this->senderBranchCode = $senderBranchCode;
        $this->senderId = $senderId;
        $this->senderAuthority = $senderAuthority;
        $this->senderAddress = $senderAddress;
        $this->senderCityId = $senderCityId;
        $this->senderDistrictId = $senderDistrictId;
        $this->senderPhone = $senderPhone;
        $this->senderGsm = $senderGsm;
        $this->senderEmail = $senderEmail;
        $this->receiver = $receiver;
        $this->receiverBranchCode = $receiverBranchCode;
        $this->receiverId = $receiverId;
        $this->receiverAuthority = $receiverAuthority;
        $this->receiverAddress = $receiverAddress;
        $this->receiverCityId = $receiverCityId;
        $this->receiverDistrictId = $receiverDistrictId;
        $this->receiverPhone = $receiverPhone;
        $this->receiverGsm = $receiverGsm;
        $this->receiverEmail = $receiverEmail;
        $this->paymentType = $paymentType;
        $this->collectionType = $collectionType;
        $this->collectionPrice = $collectionPrice;
        $this->dispatchNoteNumber = $dispatchNoteNumber;
        $this->additionalValue = $additionalValue;
        $this->serviceType = $serviceType;
        $this->barcodeLabelType = $barcodeLabelType;
        $this->products = $products;
        $this->payType = $payType;
        $this->customerReferenceType = $customerReferenceType;
        $this->isReturn = $isReturn;
        $this->senderTaxpayerId = $senderTaxpayerId;
        $this->receiverTaxpayerId = $receiverTaxpayerId;
        $this->integratorCustomerCode = $integratorCustomerCode;
        $this->otherDescription = $otherDescription;
        $this->isMobilePickUp = $isMobilePickUp;
        $this->pickUpDate = $pickUpDate;
    }
}
