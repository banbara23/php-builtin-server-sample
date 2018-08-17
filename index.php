<?php
if (!preg_match('#\A/memo/(?P<id>\d+)\z#', $_SERVER['PATH_INFO'], $matches)) {
  header('HTTP/1.1 404 Not Found');
}
$response = [
  'id'=> (int)$matches['id'],
  'memo' => 'memo' . $matches['id'],
];
header('Content-Typej: application/json; charset=utf-8');
echo json_encode($response);