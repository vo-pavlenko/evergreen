<?php


namespace App\Models\Filters\User;


use App\Services\Filters\Filterable;
use Illuminate\Database\Eloquent\Builder;

class Gender implements Filterable
{
    public static function apply(Builder $builder, $value)
    {
        return $builder->where('gender', $value);
    }
}
