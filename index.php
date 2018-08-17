<?php
$response = [
  'id'=> 1,
  'memo' => 'mock api memo',
];
header('Content-Typej: application/json; charset=utf-8');
echo json_encode($response);