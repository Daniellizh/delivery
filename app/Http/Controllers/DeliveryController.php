<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CourierServiceInterface;

use App\Services\UkrPoshtaService;

class DeliveryController extends Controller
{
    private $courierService;

    public function __construct(UkrPoshtaService $courierService)
    {
        $this->courierService = $courierService;
    }

    public function sendDeliveryData()
    {
        $shipmentData = [
            'width' => 10,
            'height' => 20,
            'length' => 30,
            'weight' => 5,
        ];

        $recipientData = [
            'name' => 'John Doe',
            'phone' => '+380950000000',
            'email' => 'some@email.com',
            'address' => 'delivery address here, apt. 17',
        ];

        $result = $this->courierService->sendDeliveryData($shipmentData, $recipientData);

        return response()->json(['success' => $result]);
    }
}
