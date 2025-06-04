<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

    /**
     * Атрибуты, которые можно назначать массово.
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'content'
    ];

    /**
     * Указывает, должна ли модель иметь временную метку.
     * @var bool
     */
    public $timestamps = true;

    /**
     * Формат хранения столбцов даты модели.
     * @var string
     */
    protected $dateFormat = 'd.m.Y';
}
