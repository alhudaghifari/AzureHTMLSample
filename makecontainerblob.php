<?php

try {
    // Membuat container.
    $blobClient->createContainer($containerName, $createContainerOptions);
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
