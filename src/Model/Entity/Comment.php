<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comment Entity
 *
 * @property string $id
 * @property string|null $post_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $title
 * @property string|null $comment
 * @property string|null $user_id
 * @property string|null $email
 * @property \Cake\I18n\FrozenTime|null $created
 *
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Post $post
 * @property \CakeDC\Users\Model\Entity\User $user
 */
class Comment extends Entity
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
        'post_id' => true,
        'first_name' => true,
        'last_name' => true,
        'title' => true,
        'comment' => true,
        'user_id' => true,
        'email' => true,
        'created' => true,
        'comments' => true,
        'post' => true,
        'user' => true
    ];
}
