<?php
/**
 * Helper class file.
 * @author Christoffer Niska <christoffer.niska@nordsoftware.com>
 * @copyright Copyright &copy; Nord Software Ltd 2014-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package nordsoftware.yii_account.helpers
 */

namespace nordsoftware\yii_account\helpers;

use nordsoftware\yii_account\Module;

class Helper
{
    /**
     * @return string
     */
    public static function sqlNow()
    {
        return \Yii::app()->db->createCommand('SELECT NOW()')->queryScalar();
    }

    /**
     * @param string $className
     * @return string
     */
    public static function classNameToKey($className)
    {
        return str_replace('\\', '_', ltrim($className, '\\'));
    }

    /**
     * @param string $category
     * @param string $message
     * @param array $params
     * @return string
     */
    public static function t($category, $message, $params = array())
    {
        return \Yii::t(
            '\nordsoftware\yii_account\Module.' . $category,
            $message,
            $params,
            self::getModule()->messageSource
        );
    }

    /**
     * @return \nordsoftware\yii_account\Module
     */
    public static function getModule()
    {
        return \Yii::app()->getModule(Module::MODULE_ID);
    }
}