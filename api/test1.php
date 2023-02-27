<?php echo 'test1'; echo __DIR__ . '../vendor/autoload.php'; echo __DIR__ . '/../vendor/autoload.php'; 


require_once __DIR__ . '/../vendor/autoload.php';
use Automattic\WooCommerce\Client;
use Automattic\WooCommerce\HttpClient\HttpClientException;

print_r($_POST);

$woocommerce = new Client(
  $_POST['domain'],
  $_POST['consumer_key'],
  $_POST['consumer_secret'], 
  [
    'wp_api' => true,
    'version' => 'wc/v2',
    'timeout' => 4000,
    'verify_ssl'=> false
  ] 
);

print_r($woocommerce);

ECHO 'OPPPPPPPPPPPPP';
print_r($woocommerce->get('products'));

?>