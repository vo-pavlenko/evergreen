<?php

namespace App;

use App\Models\Filters\User\UserSearch;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{


    public function getUsersBySearch(Request $request) : Builder
    {
        $builder = (new UserSearch())->apply($request);
        return $builder;
    }
}
