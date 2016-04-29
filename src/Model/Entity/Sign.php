<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sign Entity.
 *
 * @property string $user_id
 * @property string $nome
 * @property \Cake\I18n\Time $created
 * @property string $hash
 * @property int $proposal_id
 * @property \App\Model\Entity\Proposal $proposal
 * @property int $id
 */
class Sign extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
