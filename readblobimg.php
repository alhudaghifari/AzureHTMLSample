<?php
include("connecttoblob.php");
require_once 'vendor/autoload.php';

use MicrosoftAzure\Storage\Common\Exceptions\ServiceException;
use MicrosoftAzure\Storage\Blob\Models\ListBlobsOptions;

try {
    $listBlobsOptions = new ListBlobsOptions();
    $listBlobsOptions->setPrefix("img");

    echo "These are the blobs present in the container: <br>";

    do {
        $result = $blobClient->listBlobs($containerName, $listBlobsOptions);
        $counter = 1;
        foreach ($result->getBlobs() as $blob) {
            echo $counter . ") " . $blob->getName() . "<br> &nbsp &nbsp Link : " . $blob->getUrl() . "<br />";
            $counter++;
        }

        $listBlobsOptions->setContinuationToken($result->getContinuationToken());
    } while ($result->getContinuationToken());
} catch (ServiceException $e) {
    // Handle exception based on error codes and messages.
    // Error codes and messages are here:
    // http://msdn.microsoft.com/library/azure/dd179439.aspx
    $code = $e->getCode();
    $error_message = $e->getMessage();
    echo $code . ": " . $error_message . "<br />";
} catch (InvalidArgumentTypeException $e) {
    // Handle exception based on error codes and messages.
    // Error codes and messages are here:
    // http://msdn.microsoft.com/library/azure/dd179439.aspx
    $code = $e->getCode();
    $error_message = $e->getMessage();
    echo $code . ": " . $error_message . "<br />";
}
