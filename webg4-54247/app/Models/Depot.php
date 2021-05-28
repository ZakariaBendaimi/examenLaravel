<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Depot extends Model
{
    public static function getAllDepots()
    {
        $depots = DB::select("SELECT c.name as contributor ,r.name as repository, COUNT(co.repository_id) as commits FROM contributors c
                           LEFT JOIN repositories r on c.login = r.contributor_login
                           LEFT JOIN commits co on co.repository_id =r.id
                           group by  c.name,r.name");
        return $depots;
    }
}