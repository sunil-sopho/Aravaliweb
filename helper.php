<?php 
/*renders footer.
*
* @param array $data
*/
function renderFooter($data = array())
{
extract($data);
require('footer.php');
}

function renderFooter1($data = array())
{
extract($data);
require('footer1.php');
}
/**
* Renders header.
*
* @param array $data
*/
function renderHeader($data = array())
{
extract($data);
require('header.php');
}

function renderHeader1($data = array())
{
extract($data);
require('header1.php');
}
?>
