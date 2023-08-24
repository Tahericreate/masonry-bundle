<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**

 * PHP version 7
 * @package   [Masonry-Bundle]
 * @author    Taheri Create Core Team
 * @license   GNU/LGPL
 * @copyright Taheri Create 2023 - 2026
 */

/**
 * Table tl_content
 */

// Palettes
$GLOBALS['TL_DCA']['tl_content']['palettes']['masonry_wrapper_start'] = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['masonry_wrapper_stop']  = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['masonry_gallery']       = '{type_legend},type,headline;{source_legend},multiSRC;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';




 ?>