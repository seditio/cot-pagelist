<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=pagelist.loop
[END_COT_EXT]
==================== */

/**
 * Star Ratings Support for the PageList Plugin
 *
 * @package PageList
 * @copyright (c) 2012-2016 seditio.by
 */

defined('COT_CODE') or die('Wrong URL');

global $cfg;
if ($cfg['plugin']['pagelist']['ratings'] && cot_plugin_active('ratings'))
{
	require_once cot_incfile('ratings', 'plug');
	list ($ratings_display, $ratings_average, $ratings_count) = cot_ratings_display('page', $row['page_id'], $row['page_cat'], true);
	$t->assign(array(
		'PAGE_ROW_RATINGS_DISPLAY' => $ratings_display,
		'PAGE_ROW_RATINGS_AVERAGE' => $ratings_average,
		'PAGE_ROW_RATINGS_COUNT'   => $ratings_count
	));
}