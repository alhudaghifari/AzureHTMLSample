<?php

require_once 'vendor/autoload.php';

use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Blob\Models\CreateContainerOptions;
use MicrosoftAzure\Storage\Blob\Models\PublicAccessType;

$accountName = "dicodingghifariblob";
$accountkey1 = "22YryvN/y7QSq+uZa1sI33VaDtG2nSPn7eq30KeXqT1atiRs2yj+pdOP62GRgZPlLvfNzqyef5l3OLfVRxIgEg==";
$accountkey2 = "2zDZ2cNkQ6XKI2FEzfgq9svhHgfoTMhS/yp001aNw8kZKdV9q6VipmDXR4EqJ3ePblHJ47ct9ucYtujyxE0Zfw==";

# Mengatur instance dari Azure::Storage::Client
$connectionString = "DefaultEndpointsProtocol=https;AccountName=" . $accountName . ";AccountKey=" . $accountkey1;

// Membuat blob client.
$blobClient = BlobRestProxy::createBlobService($connectionString);

# Membuat BlobService yang merepresentasikan Blob service untuk storage account
$createContainerOptions = new CreateContainerOptions();

$createContainerOptions->setPublicAccess(PublicAccessType::CONTAINER_AND_BLOBS);

// Menetapkan metadata dari container.
$createContainerOptions->addMetaData("key1", $accountkey1);
$createContainerOptions->addMetaData("key2", $accountkey2);

$containerName = "img";
