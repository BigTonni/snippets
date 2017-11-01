<?php
//Debug
function vardump($str) {
    var_dump('<pre>');
    var_dump($str);
    var_dump('</pre>');
}
// Require the Composer autoloader.
require 'vendor/autoload.php';

use Aws\S3\S3Client;

// Instantiate an Amazon S3 client.
$s3 = new S3Client([
    'version' => 4,
    'region'  => 'eu-central-1'
]);

$access = 'XXX';
$secret = 'YYY';

$s3Client = S3Client::factory(array('key' => $access, 'secret' => $secret));

/*// Instantiate the S3 client with your AWS credentials
$s3 = new S3Client::factory(array(
    'credentials' => array(
        'key'    => 'XXX',
        'secret' => 'YYY',
    ),
	//'Bucket' => 'artbeef'
));
//$s3->registerStreamWrapper();*/


vardump($s3Client);
