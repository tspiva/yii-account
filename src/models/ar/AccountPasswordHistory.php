<?php
/**
 * AccountPasswordHistory class file.
 * @author Christoffer Niska <christoffer.niska@nordsoftware.com>
 * @copyright Copyright &copy; Nord Software Ltd 2014-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package nordsoftware.yii_account.ar.models
 */

namespace nordsoftware\yii_account\models\ar;

/**
 * This is the model class for table account_password_history".
 *
 * The followings are the available columns in table 'account_password_history':
 *
 * @property integer $id
 * @property integer $accountId
 * @property string $salt
 * @property string $password
 * @property string $createdAt
 */
class AccountPasswordHistory extends \CActiveRecord
{
    /**
     * @return string the associated database table name.
     */
    public function tableName()
    {
        return 'account_password_history';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('accountId, salt, password', 'required'),
            array('accountId', 'numerical', 'integerOnly' => true),
            array('salt, password', 'length', 'max' => 255),
        );
    }

    /**
     * Returns the static model of this class.
     * @param string $className active record class name.
     * @return AccountPasswordHistory the static model class.
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
    
    public function beforeSave() {
        if ($this->isNewRecord) {
            $this->createdAt = new CDbExpression('getdate()');
        }
        return parent::beforeSave();
    }
}
