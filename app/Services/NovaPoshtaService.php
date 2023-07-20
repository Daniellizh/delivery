<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;


class NovaPoshtaService implements CourierServiceInterface
{
    public function sendDeliveryData(array $shipmentData, array $recipientData): bool
    {
        Log::info('Sending delivery data to Nova Poshta:', [
            'shipment_data' => $shipmentData,
            'recipient_data' => $recipientData,
        ]);

        return true;
    }
}