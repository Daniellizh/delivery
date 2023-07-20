<?php

namespace App\Services;

class UkrPoshtaService implements CourierServiceInterface
{
    public function sendDeliveryData(array $shipmentData, array $recipientData): bool
    {
        return true;
    }
}