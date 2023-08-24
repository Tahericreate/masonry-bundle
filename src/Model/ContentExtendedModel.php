<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Tahericreate\MasonryBundle\Model;
use \Contao\Model;

/*
 * Class  ContentExtendedModel
 *
 * @author Taheri Create Core Team
 */

class ContentExtendedModel extends \ContentModel
{
 
    
    /**
	 * Function findActiveByType Find the Order Items
     * 
	 * Author: Taheri Create Core Team
	 * @param $type
	 * @return @collection
	 **/

    //Find Masonry Wrapper Start Id From the tl_content Table
    public static function findMasonryWrapperStart($pId,$sorting) {
        $objWrapperStart = \Database::getInstance()->prepare("SELECT * FROM " . self::$strTable . " WHERE pid=? AND sorting=? AND type='masonry_wrapper_start'")->execute($pId, $sorting);
        if ($objWrapperStart->numRows) {
            return static::createCollectionFromDbResult($objWrapperStart, self::$strTable);
        }
        return null;
    }
	
	
}
class_alias(ContentExtendedModel::class, 'ContentExtendedModel');


