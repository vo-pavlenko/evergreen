<?php


namespace App\Models\Filters\User;


use App\Services\Filters\BaseSearch;
use App\Services\Filters\Searchable;
use App\User;

class UserSearch implements Searchable
{
    const MODEL = User::class;

    use BaseSearch;
}
