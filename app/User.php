<?php

namespace App;

use App\Models\Post;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property string $label
 * @property string $salutation
 * @property string $company
 * @property string $vatid
 * @property string $title
 * @property string $firstname
 * @property string $lastname
 * @property string $address1
 * @property string $address2
 * @property string $address3
 * @property string $postal
 * @property string $city
 * @property string $state
 * @property string $langid
 * @property string $countryid
 * @property string $telephone
 * @property string $telefax
 * @property string $website
 * @property float $longitude
 * @property float $latitude
 * @property string $birthday
 * @property string $vdate
 * @property integer $status
 * @property string $editor
 */
class user extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'label',
        'salutation',
        'company',
        'vatid',
        'title',
        'firstname',
        'lastname',
        'address1',
        'address2',
        'address3',
        'postal',
        'city',
        'state',
        'langid',
        'countryid',
        'telephone',
        'telefax',
        'website',
        'longitude',
        'latitude',
        'birthday',
        'vdate',
        'status',
        'editor'
    ];


}
