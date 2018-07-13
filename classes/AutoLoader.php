<?php

/**
 * Autoloader
 *
 * @category   Phpdocx
 * @package    loader
 * @copyright  Copyright (c) Narcea Producciones Multimedia S.L.
 *             (http://www.2mdc.com)
 * @license    phpdocx LICENSE
 * @version    2016.12.10
 * @link       https://www.phpdocx.com
 */
class AutoLoader
{

    /**
     * Main tags of relationships XML
     *
     * @access public
     * @static
     */
    public static function load()
    {
        spl_autoload_register(array('AutoLoader', 'autoloadGenericClasses'));
    }

    /**
     * Autoload phpdocx
     *
     * @access public
     * @param string $className Class to load
     */
    public static function autoloadGenericClasses($className)
    {
        $pathPhpdocx = dirname(__FILE__) . '/' . $className . '.php';
        if (file_exists($pathPhpdocx)) {
            $arrayClassesEnc = array(
                'AutoLoader',
                'CreateDocx',
                'CreateElement',
                'DOMPDF_lib',
                'Helpers',
                'Phpdocx_config',
                'TCPDF_lib',
            );
            if (in_array($className, $arrayClassesEnc)) {
                require_once $pathPhpdocx;
            } else {
                eval (gzinflate(base64_decode(file_get_contents($pathPhpdocx))));
            }
        }
    }

}
