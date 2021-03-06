<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Depot extends Model
{
    public static function getAllDepots()
    {
        $depots = DB::select("SELECT c.name as contributor ,r.name as repository, r.id as id,COUNT(co.repository_id) as commits FROM contributors c
                           LEFT JOIN repositories r on c.login = r.contributor_login
                           LEFT JOIN commits co on co.repository_id =r.id
                           group by  c.name,r.name,r.id");
        return $depots;
    }

    public static  function selectDepot($id)
    {

        $depot = DB::select("SELECT co.message as message,co.date as date FROM contributors c
        JOIN repositories r on c.login = r.contributor_login
        JOIN commits co on co.repository_id =r.id
        WHERE r.id= ?", [$id]);
        return $depot;
    }
    public static  function selectNames($id)
    {
        $name = DB::select("SELECT c.name as contributor , r.name as repository FROM contributors c
        JOIN repositories r on c.login = r.contributor_login
        WHERE r.id= ?", [$id]);
        return $name;
    }
}