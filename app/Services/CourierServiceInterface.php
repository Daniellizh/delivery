<?php

namespace App\Services;

interface CourierServiceInterface
{
    public function sendDeliveryData(array $shipmentData, array $recipientData): bool;
}