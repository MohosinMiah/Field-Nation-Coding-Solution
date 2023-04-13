## Field Nation Coding Solution

## Solution for: 1. (PHP/HTML)  

<?php
/**
 * ArrayTable class is for displaying an array as an HTML table using the ArrayObject class
 * @version 1.0.0
 * @author  MD MOHOSIN MIAH
 * @date    2023-04-13 (YY-MM-DD)
 */

class ArrayTable extends ArrayObject {

	/**
	 * Display the data as an HTML table
	 * @return void
	 * @access public
	 */
	public function displayAsTable()
	{
		$tableHtmlDom  = '<table>';
		$tableHtmlDom .= '<thead><tr>';
		$keys          = array_keys( $this->getArrayCopy() );
		$values        = array_values( $this->getArrayCopy() );

		foreach( $keys as $key )
		{
			$tableHtmlDom .= '<th>' . $key . '</th>';
		}

		$tableHtmlDom     .= '</tr></thead><tbody>';
		$tableHtmlDom     .= '<tr>';
		foreach( $values as $value )
		{
			$tableHtmlDom .= '<td>' . $value . '</td>';
		}
		$tableHtmlDom     .= '</tr></tbody></table>';

		echo $tableHtmlDom;
	}
}

// Create an instance of the ArrayTable class
$dataTable = new ArrayTable();

// Set the data
$dataTable[ 'Country' ]     = 'Bangladesh';
$dataTable[ 'Location' ]    = 'South Asia';
$dataTable[ 'Description' ] = 'A beautiful country';

// Display the data as an HTML table
$dataTable->displayAsTable();
?>

