<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kulup_kayit".
 *
 * @property int $id
 * @property int|null $kulup_id
 * @property int|null $ogrenci_id
 * @property string|null $ogr_role
 * @property string|null $uyelik_tarihi
 * @property int|null $is_approved
 * @property int|null $aktif
 *
 * @property Kulupler $kulup
 * @property Ogrenci $ogrenci
 */
class KulupKayit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kulup_kayit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kulup_id', 'ogrenci_id', 'is_approved', 'aktif'], 'integer'],
            [['ogr_role'], 'string'],
            [['uyelik_tarihi'], 'safe'],
            [['kulup_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kulupler::className(), 'targetAttribute' => ['kulup_id' => 'id']],
            [['ogrenci_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ogrenci::className(), 'targetAttribute' => ['ogrenci_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kulup_id' => 'Kulup ID',
            'ogrenci_id' => 'Ogrenci ID',
            'ogr_role' => 'Ogr Role',
            'uyelik_tarihi' => 'Uyelik Tarihi',
            'is_approved' => 'Is Approved',
            'aktif' => 'Aktif',
        ];
    }

    /**
     * Gets query for [[Kulup]].
     *
     * @return \yii\db\ActiveQuery|KuluplerQuery
     */
    public function getKulup()
    {
        return $this->hasOne(Kulupler::className(), ['id' => 'kulup_id']);
    }

    /**
     * Gets query for [[Ogrenci]].
     *
     * @return \yii\db\ActiveQuery|OgrenciQuery
     */
    public function getOgrenci()
    {
        return $this->hasOne(Ogrenci::className(), ['id' => 'ogrenci_id']);
    }

    /**
     * {@inheritdoc}
     * @return KulupKayitQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KulupKayitQuery(static::class);
    }
}
