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


/**
 * Class ContactForm
 *
 * @copyright  Taheri Create 2023 - 2026
 * @author     Taheri Create Core Team
 * @package    [Masonry-Bundle]
 */
class MasonryWrapperStop extends \ContentElement
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'masonry_wrapper_stop';

    /**
     * Display a wildcard in the back end
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### Tahericreate Masonry Gallery Wrapper Stop ###';
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
    protected function compile(){
		
    }
}
class_alias(MasonryWrapperStop::class, 'MasonryWrapperStop');
