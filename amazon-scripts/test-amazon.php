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

$access = 'AKIAICVMD7QV2EKUFA3Q';
$secret = 'lHbep+kvYeqg5xs5e6hxHO0wrAjpDmqzEsxrOVVy';

$s3Client = S3Client::factory(array('key' => $access, 'secret' => $secret));

/*// Instantiate the S3 client with your AWS credentials
$s3 = new S3Client::factory(array(
    'credentials' => array(
        'key'    => 'AKIAICVMD7QV2EKUFA3Q',
        'secret' => 'lHbep+kvYeqg5xs5e6hxHO0wrAjpDmqzEsxrOVVy',
    ),
	//'Bucket' => 'artbeef'
));
//$s3->registerStreamWrapper();*/


vardump($s3Client);
