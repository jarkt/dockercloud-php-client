<?php
namespace jarkt\dockercloud\requestHandlers;

/**
 * Class Json
 */
class Json extends RequestHandler
{

	private $data;


	/**
	 * Json constructor.
	 * @param array|null $data
	 */
	public function __construct(array $data = null)
	{
		$this->data = $data;
	}

	/**
	 * @param $ch
	 */
	public function handle($ch)
	{
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			'Content-type: application/json',
			'Expect:'
		]);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($this->data));
	}
}
