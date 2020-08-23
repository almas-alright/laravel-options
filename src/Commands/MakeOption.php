<?php

namespace Alright\Options\Commands;

use Alright\Options\Models\Option;
use Illuminate\Console\Command;

class MakeOption extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'option:create
        {name : The name of the option}
        {value : The value of the option}
        {type : value type }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create an option';

//    /**
//     * Create a new command instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        parent::__construct();
//    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       $option = new Option();
       $option->option_name = $this->argument('name');
       $option->option_value = $this->argument('value');
       $option->opt_val_type = $this->argument('type');
       $option->save();
       $this->info("Role `{$option->option_name}` created");
    }
}
