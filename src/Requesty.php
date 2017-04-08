<?php

namespace Wattanar;

class Requesty
{
	public static function post($url, $params)
	{
		// Build Http query using params
		$query = http_build_query($params);

		// Context
		$context = [
	    'method' => 'POST',
	    'header' => "Connection: close\r\n".
	    						"Content-type: application/x-www-form-urlencoded\r\n".
	                "Content-Length: ".strlen($query)."\r\n",
	    'content'=> $query
	  ];

	  // Read page rendered as result of your POST request
		$result =  file_get_contents(
	    $url,
	    false,
		  stream_context_create(['http' => $context])
	  );

	  return $result;
	}
}