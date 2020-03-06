<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property string $name
 * @property string $age
 * @property string $country
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \App\Model\Entity\FootballRagistration[] $football_ragistrations
 * @property \App\Model\Entity\PicnicRagistration[] $picnic_ragistrations
 */
class Student extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'age' => true,
        'country' => true,
        'created_at' => true,
        'updated_at' => true,
        'football_ragistrations' => true,
        'picnic_ragistrations' => true,
    ];
}
