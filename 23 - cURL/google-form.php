<?php

$ch = curl_init("https://docs.google.com/forms/u/0/d/e/1FAIpQLSdZ2aaXt1X-g1CZrm-QTLfs_vZXbGPsWaVZo7VfIHM-awM8nw/formResponse");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

if (curl_error($ch)) {
    echo curl_error($ch);
} else {
    echo $result;
}
