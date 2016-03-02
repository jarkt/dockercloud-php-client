<?php
namespace jarkt\dockercloud\requestHandlers;

/**
* Class RequestHandler
*/
abstract class RequestHandler
{

	/**
	 * @param $ch
	 * @return mixed
	 */
	abstract public function handle($ch);
}
