<?php

namespace App\Services;

class NovaPoshtaService implements CourierServiceInterface
{
    public function sendDeliveryData(array $shipmentData, array $recipientData): bool
    {
        return true;
    }
}