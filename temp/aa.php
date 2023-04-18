<?php 
echo "<pre>";
//print_r($_SERVER);
// get IP Address
$ip=$_SERVER['REMOTE_ADDR'];

// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, 'http://whois.arin.net/rest/ip/' . $ip);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));

// execute
$returnValue = curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);

$result = json_decode($returnValue);

echo <<<END
<pre>
Handle: {$result->net->handle->{'$'}}
Ref: {$result->net->ref->{'$'}}
Name: {$result->net->name->{'$'}}
echo "OrgRef: {$result->net->orgRef->{'@name'}}";
</pre>
END;

// eof
?>