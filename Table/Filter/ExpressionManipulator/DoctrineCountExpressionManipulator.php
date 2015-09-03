<?php

/*
 * This file is part of the TableBundle.
 *
 * (c) Jan Mühlig <mail@janmuehlig.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JGM\TableBundle\Table\Filter\ExpressionManipulator;

/**
 * Expression manipulator, which will
 * implement a count expression for the
 * QueryBuilderDataSource.
 * 
 * @author	Jan Mühlig <mail@janmuehlig.de>
 * @since	1.0
 */
class DoctrineCountExpressionManipulator implements ExpressionManipulatorInterface
{
	public function getExpression($columnName, $columnValue = null)
	{
		return sprintf("count(%s)", $columnName);
	}

	public function getName()
	{
		return 'count';
	}
}
