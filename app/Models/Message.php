<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 *
 * @property string $name Имя
 * @property string $email Почта
 * @property string $text Текст
 *
 * @property-read \Illuminate\Support\Carbon $created_at
 */
class Message extends Model
{
    public $timestamps = false;
    protected $fillable = ['created_at'];
}
