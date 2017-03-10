<?php

namespace App\Console\Commands;

use App\Catalog;
use App\Product;
use Illuminate\Console\Command;
use Illuminate\Foundation\Auth\User;

class ListTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'esgi:list:table {table=list}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List name of all element in table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $table = $this->argument('table');
        switch($table) {
            case 'list' :
                $this->info("Table available :");
                $this->info("- Product");
                $this->info("- User");
                break;
            case 'Product' :
                $this->info("Product :");
                foreach (Product::all() as $data){
                    $this->info("- status : ". $data->status . " | label : " . $data->label);
                }
                break;
            case 'User' :
                $this->info("User :");
                foreach (User::all() as $data){
                    $this->info("- email : ". $data->email);
                }
                break;
            default :
                $this->error("Cette table n'existe pas");
                break;
        }
    }
}
