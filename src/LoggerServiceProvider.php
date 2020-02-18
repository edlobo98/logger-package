<?php

namespace Edlobo\Logger;

use Illuminate\Support\ServiceProvider;

class LoggerServiceProvider extends ServiceProvider{

    public function boot(){


        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
            __DIR__.'/config/database.php',
            'database.php'
        );

        $this->publishes([
            __DIR__.'/database/migrations' => base_path('database/migrations'),
        ]);

    }

    public function register(){
        
        

    }


}