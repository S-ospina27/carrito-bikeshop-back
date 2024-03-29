<?php

namespace App\Traits\Framework\Database;

use LionSQL\Drivers\MySQL as DB;

trait SoftDeletes {

    public function softDeletes(array $options) {
        return DB::connection($options['connection'])
            ->table($options['table'])
            ->update(['deleted_at' => $options['value']])
            ->where($options['column'])
            ->in(...$options['rows'])
            ->execute();
    }

}
