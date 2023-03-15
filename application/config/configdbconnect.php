<?php
$globleConnectDB = array();
$globleConnectCartCheckout = array();
$globleConnectReport = array(); 
$globleRoutes = array();
try {
    $username = "j2k5e6r5_octopus";
    $password = "India$2017";
    $conn = new PDO('mysql:host=localhost;dbname=j2k5e6r5_varbin2', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    $stmt = $conn->prepare('SELECT * FROM configuration_site');
    $stmt->execute();
    while($row = $stmt->fetch()) {
        $globleConnectDB = $row;
    }
    
    $stmt = $conn->prepare('SELECT * FROM configuration_report');
    $stmt->execute();
    while($row = $stmt->fetch()) {
        $globleConnectReport = $row;
    }
    
    $stmt = $conn->prepare('SELECT * FROM configuration_cartcheckout');
    $stmt->execute();
    while($row = $stmt->fetch()) {
        $globleConnectCartCheckout = $row;
    }
        $stmt1 = $conn->prepare('SELECT id, uri FROM content_pages');
    $stmt1->execute();
    while($row = $stmt1->fetch()) {
        array_push($globleRoutes, $row);
    }
    
    
    
} catch(PDOException $e) {
 
}
