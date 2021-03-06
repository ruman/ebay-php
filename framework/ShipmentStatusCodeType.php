<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShipmentStatusCodeType.html
 *
 * @property string Active
 * @property string Canceled
 * @property string CustomCode
 */
class ShipmentStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Active = 'Active';
	const CodeType_Canceled = 'Canceled';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShipmentStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ShipmentStatusCodeType = new ShipmentStatusCodeType();

?>
