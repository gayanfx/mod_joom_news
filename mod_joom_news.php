<?php
/**
 * Joom News
 *
 * @package Joom News
 * @subpackage Joom News
 * @version   1.0 July 15, 2011
 * @author    Gayan.W http://www.joomnews.com
 * @copyright Copyright (C) 2010 - 2011 www.joomnews.com, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 */


/** ensure this file is being included by a parent file */
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

// Include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');

require(JModuleHelper::getLayoutPath('mod_joom_news'));
