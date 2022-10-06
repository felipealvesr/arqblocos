<?php
$token = '37255f02f70fd644fe4fa7a23ca2aba4fde839d350fea841b280f4a27dadf75113f8dd4f';

$dataToFirstRequest = ['contact' => [
    'firstName' => $_POST['name'],
    'phone' => $_POST['whatsapp'],
    'email' => $_POST['email']
]];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://nexawide.api-us1.com/api/3/contact/sync');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dataToFirstRequest));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Api-Token: ' . $token,
    'Content-Type: application/json',
]);
$result = curl_exec($ch);
$json_result = json_decode($result);

$dataToSecondRequest = [
    'contactList' => [
        'status' => '1',
        'contact' => $json_result->contact->id,
        'list' => 15
    ]
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://nexawide.api-us1.com/api/3/contactLists');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dataToSecondRequest));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Api-Token: ' . $token,
    'Content-Type: application/json',
]);
$result = curl_exec($ch);
$json_result = json_decode($result);

$newURL = 'https://api.whatsapp.com/send?phone=5511971815638&text=Gostaria%20de%20receber%20a%20Biblioteca%20de%20Blocos%203D%20que%20voc%C3%AAs%20disponibilizam%20de%20forma%20gratuita.%20Pode%20me%20enviar%3F';

header('Location: '.$newURL);
