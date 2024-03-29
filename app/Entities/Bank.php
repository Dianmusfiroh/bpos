<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Bank.
 *
 * @package namespace App\Entities;
 */
class Bank extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id_bank',
       'bank',
       'rekening',
       'pemilik',
       'is_active',
       'id_user'
    ];
    protected $table = 't_bank';
    public $timestamps = false;

}
