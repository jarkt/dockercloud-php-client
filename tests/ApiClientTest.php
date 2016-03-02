<?php
namespace jarkt\dockercloud;

class ApiClientTest extends \PHPUnit_Framework_TestCase
{

	public function testConnect()
	{
		$dockercloud = new ApiClient('cloud.docker.com', 'username', 'passwd');

		$this->assertTrue($dockercloud instanceof ApiClient);

		return $dockercloud;
	}

	/**
	 * @depends testConnect
	 */
	public function test1(ApiClient $dockercloud)
	{
		$response = $dockercloud->get('/api/app/v1/service/');
		$responseHandler = new responseHandlers\Json($response);

		$this->assertTrue(is_array($responseHandler->getData()));
	}
}
