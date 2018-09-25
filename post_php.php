function post_to_url( $url, $data ) 
	{
		$fields = http_build_query($data);

		$post = curl_init();

		curl_setopt( $post, CURLOPT_URL, $url );
		curl_setopt( $post, CURLOPT_POST, count( $data ) );
		curl_setopt( $post, CURLOPT_POSTFIELDS, $fields );
		curl_setopt( $post, CURLOPT_RETURNTRANSFER, true );

		$result = curl_exec( $post );
		curl_close( $post );
		return $result;
	}
