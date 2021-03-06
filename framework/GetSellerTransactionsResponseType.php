<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'TransactionArrayType.php';
require_once 'AbstractResponseType.php';
require_once 'UserType.php';
require_once 'PaginationResultType.php';

/**
 * Returns an array of transaction data for the seller specified in the request.The 
 * results can be used to create a report of data that is commonlynecessary for 
 * end-of-auction processing.Zero, one, or many Transaction objects can be returned 
 * in the array.The set of transactions returned is limited to those that were 
 * modified betweenthe times specified in the request's ModTimeFrom and ModTimeTo 
 * filters.The transactions returned are sorted by 
 * Transaction.Status.LastTimeModified,ascending order (that is, transactions that 
 * more recently were modified are returned last).Also returns information about 
 * the seller whose transactions were requested.If pagination filters were 
 * specified in the request, returns meta-data describingthe effects of those 
 * filters on the current response and the estimated effects ifthe same filters are 
 * used in subsequent calls. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellerTransactionsResponseType.html
 *
 */
class GetSellerTransactionsResponseType extends AbstractResponseType
{
	/**
	 * @var PaginationResultType
	 */
	protected $PaginationResult;
	/**
	 * @var boolean
	 */
	protected $HasMoreTransactions;
	/**
	 * @var int
	 */
	protected $TransactionsPerPage;
	/**
	 * @var int
	 */
	protected $PageNumber;
	/**
	 * @var int
	 */
	protected $ReturnedTransactionCountActual;
	/**
	 * @var UserType
	 */
	protected $Seller;
	/**
	 * @var TransactionArrayType
	 */
	protected $TransactionArray;
	/**
	 * @var boolean
	 */
	protected $PayPalPreferred;

	/**
	 * @return PaginationResultType
	 */
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}
	/**
	 * @return void
	 * @param PaginationResultType $value 
	 */
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}
	/**
	 * @return boolean
	 */
	function getHasMoreTransactions()
	{
		return $this->HasMoreTransactions;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setHasMoreTransactions($value)
	{
		$this->HasMoreTransactions = $value;
	}
	/**
	 * @return int
	 */
	function getTransactionsPerPage()
	{
		return $this->TransactionsPerPage;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTransactionsPerPage($value)
	{
		$this->TransactionsPerPage = $value;
	}
	/**
	 * @return int
	 */
	function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}
	/**
	 * @return int
	 */
	function getReturnedTransactionCountActual()
	{
		return $this->ReturnedTransactionCountActual;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setReturnedTransactionCountActual($value)
	{
		$this->ReturnedTransactionCountActual = $value;
	}
	/**
	 * @return UserType
	 */
	function getSeller()
	{
		return $this->Seller;
	}
	/**
	 * @return void
	 * @param UserType $value 
	 */
	function setSeller($value)
	{
		$this->Seller = $value;
	}
	/**
	 * @return TransactionArrayType
	 */
	function getTransactionArray()
	{
		return $this->TransactionArray;
	}
	/**
	 * @return void
	 * @param TransactionArrayType $value 
	 */
	function setTransactionArray($value)
	{
		$this->TransactionArray = $value;
	}
	/**
	 * @return boolean
	 */
	function getPayPalPreferred()
	{
		return $this->PayPalPreferred;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setPayPalPreferred($value)
	{
		$this->PayPalPreferred = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSellerTransactionsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PaginationResult' =>
					array(
						'required' => false,
						'type' => 'PaginationResultType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'HasMoreTransactions' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TransactionsPerPage' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PageNumber' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReturnedTransactionCountActual' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Seller' =>
					array(
						'required' => false,
						'type' => 'UserType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TransactionArray' =>
					array(
						'required' => false,
						'type' => 'TransactionArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PayPalPreferred' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
