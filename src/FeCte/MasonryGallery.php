<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   [Masonry-Bundle]
 * @author    Taheri Create Core Team
 * @license   GNU/LGPL
 * @copyright Taheri Create 2023 - 2026
 */


/**
 * Namespace
 */

namespace Tahericreate\MasonryBundle\FeCte;
use Tahericreate\MasonryBundle\Model\ContentExtendedModel;

/**
 * Class ContactForm
 * 
 * @package    [Masonry-Bundle]
 * @author     Taheri Create Core Team
 * @copyright  Taheri Create 2023 - 2026
 * 
 */
class MasonryGallery extends \ContentElement
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'masonry_gallery';

    /**
     * Display a wildcard in the back end
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### Tahericreate Masonry Gallery ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&table=tl_module&act=edit&id=' . $this->id;

            return $objTemplate->parse();
        }
        return parent::generate();
    }

    /**
     * Generate the content
     */
    protected function compile()
    {
        // Add public assets to global list
        $GLOBALS['TL_CSS'][] = 'bundles/masonry/css/style.css';
        $GLOBALS['TL_CSS'][] = 'bundles/masonry/css/jquery.fancybox.min.css';
        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/masonry/js/jquery.fancybox.min.js';
        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/masonry/js/masonry.pkgd.js';
        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/masonry/js/imagesloaded.pkgd.js';

        //Fatch this content
        $objContents = \ContentModel::findById($this->id);
        $headline = unserialize($objContents->headline);

        
        // Fetch wrapper start id
        $sorting = ($objContents->sorting)-128 ;
        $objWrapperStart = ContentExtendedModel::findMasonryWrapperStart($this->pid, $sorting);
        
    
        $this->Template->objContents = $objContents;
        $this->Template->headline  = $headline;
        $this->Template->objWrapperStart  = $objWrapperStart;
    }
}
class_alias(MasonryGallery::class, 'MasonryGallery');