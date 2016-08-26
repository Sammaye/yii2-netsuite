<?php
namespace sammaye\netsuite;

require_once 'NetSuiteService.php';

use Yii;
use yii\base\Component;

class NetSuite extends Component
{
	/**
	 * This is the nsClient from the php toolkit
	 * @var nsClient
	 */
	public $host;
	public $role;
	public $email;
	public $account;
	public $password;

	private $service;

	public function init()
	{
		define("NS_ENDPOINT", "2016_1");
		define("NS_HOST", $this->host);
		define("NS_EMAIL", $this->email);
		define("NS_PASSWORD", $this->password);
		define("NS_ROLE", $this->role);
		define("NS_ACCOUNT", $this->account);
		define("NS_APPID", "4AD027CA-88B3-46EC-9D3E-41C6E6A325E2");
		$this->service = new \NetSuiteService();
	}
	
	public function getService()
	{
		return $this->service;
	}
}