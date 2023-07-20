Создание запроса через HTTP клиент:
Вы можете использовать Postman, cURL или другой HTTP клиент для создания POST-запроса на API. Для простоты я сосредоточился на использовании curl из командной строки.
Откройте терминал и выполните следующую команду curl для отправки POST-запроса:
curl -X POST -H "Content-Type: application/json" -d '{
    "shipmentData": {
        "width": 10,
        "height": 20,
        "length": 30,
        "weight": 5
    },
    "recipientData": {
        "name": "John Doe",
        "phone": "+380950000000",
        "email": "some@email.com",
        "address": "delivery address here, apt. 17"
    }
}' http://your-app-url/api/send-delivery
В случае успешного выполнения, должен вернуть JSON:
{
    "success": true
}
