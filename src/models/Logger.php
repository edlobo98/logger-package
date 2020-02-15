<?php

namespace Edlobo\Logger\Models;

use Illuminate\Database\Eloquent\Model;

class Logger extends Model
{
    protected $table = 'ex_logs';

    protected $fillable = [
        "id",
        "error_id",
        "err_name",
        'hour_occurred',
        'err_message',
        'stack_trace',
        'server',
    ];


    public static function Log( $error_id,
                         $err_name,
                         $hour_occurred,
                         $err_message,
                         $stack_trace,
                         $server
    ){

        // Inserting into the database

        Logger::create([
            'error_id' => $error_id,
            'err_name' => $err_name,
            'hour_occurred' => $hour_occurred,
            'err_message' => $err_message,
            'stack_trace' => $stack_trace,
            'server' => $server
        ]);

    }

}


