<?php 
/**
 * @copyright Copyright (C) 2016 Usha Singhai Neo Informatique Pvt. Ltd
 * @license https://www.gnu.org/licenses/gpl-3.0.html
 */
namespace common\modules\localization\modules\city\models;
    
use usni\library\components\UiSecuredActiveRecord;
/**
 * CityTranslated class file
 * @package common\modules\localization\modules\city\models
 */
class CityTranslated extends UiSecuredActiveRecord
{
    /**
     * @inheritdoc
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'owner_id']);
    }
}
?>