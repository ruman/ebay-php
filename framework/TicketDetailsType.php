<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'DateType.php';
require_once 'TicketEventTypeCodeType.php';

/**
 * Defines supported fields for searching in ticket categories. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/TicketDetailsType.html
 *
 */
class TicketDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var TicketEventTypeCodeType
	 */
	protected $EventType;
	/**
	 * @var DateType
	 */
	protected $EventDate;
	/**
	 * @var string
	 */
	protected $StateOrProvince;
	/**
	 * @var string
	 */
	protected $CityName;
	/**
	 * @var int
	 */
	protected $TicketQuantity;

	/**
	 * @return TicketEventTypeCodeType
	 */
	function getEventType()
	{
		return $this->EventType;
	}
	/**
	 * @return void
	 * @param TicketEventTypeCodeType $value 
	 */
	function setEventType($value)
	{
		$this->EventType = $value;
	}
	/**
	 * @return DateType
	 */
	function getEventDate()
	{
		return $this->EventDate;
	}
	/**
	 * @return void
	 * @param DateType $value 
	 */
	function setEventDate($value)
	{
		$this->EventDate = $value;
	}
	/**
	 * @return string
	 */
	function getStateOrProvince()
	{
		return $this->StateOrProvince;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setStateOrProvince($value)
	{
		$this->StateOrProvince = $value;
	}
	/**
	 * @return string
	 */
	function getCityName()
	{
		return $this->CityName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCityName($value)
	{
		$this->CityName = $value;
	}
	/**
	 * @return int
	 */
	function getTicketQuantity()
	{
		return $this->TicketQuantity;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTicketQuantity($value)
	{
		$this->TicketQuantity = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('TicketDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'EventType' =>
					array(
						'required' => false,
						'type' => 'TicketEventTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EventDate' =>
					array(
						'required' => false,
						'type' => 'DateType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StateOrProvince' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CityName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TicketQuantity' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
