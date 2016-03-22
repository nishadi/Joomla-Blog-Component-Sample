<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die;

JFormHelper::loadFieldClass('list');

/**
 * Blog Form Field class for the Blog component
 *
 * @since  0.0.1
 */
class JFormFieldBlog extends JFormFieldList
{
	/**
	 * The field type.
	 *
	 * @var         string
	 */
	protected $type = 'Blog';

	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return  array  An array of JHtml options.
	 */
	protected function getOptions()
	{
		$db    = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id,title,articletext');
		$query->from('#__tbl_post');
		$db->setQuery((string) $query);
		$posts = $db->loadObjectList();
		$options  = array();

		if ($posts)
		{
			foreach ($posts as $post)
			{
				$options[] = JHtml::_('select.option', $post->id, $post->title);
			}
		}

		$options = array_merge(parent::getOptions(), $options);

		return $options;
	}
}
