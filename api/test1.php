<?php echo 'test1'; echo __DIR__ . '../vendor/autoload.php'; echo __DIR__ . '/../vendor/autoload.php'; 

require_once  __DIR__ . '../vendor/autoload.php';
use Automattic\WooCommerce\Client;

print_r($_POST);

$woocommerce = new Client(
  $_POST['domain'],
  $_POST['consumer_key'],
  $_POST['consumer_secret'], 
  [
    'version' => 'wc/v3',
  ]
);

print_r($woocommerce->get('products'));

?>