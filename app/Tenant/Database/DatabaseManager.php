<?php

namespace App\Tenant\Database;

use App\Models\Company;
use Illuminate\Support\Facades\DB;

class DatabaseManager
{

    public function createdDatabase(Company $company)
    {
        return DB::statement("CREATE DATABASE {$company->bd_database} CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    }

}
