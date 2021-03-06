<?php

namespace App\Console\Commands;

use App\Catalog;
use App\Product;
use Illuminate\Console\Command;
use Illuminate\Foundation\Auth\User;

class Count extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'esgi:count:table {table=list}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Count elements of a table';

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
                $this->info("- Catalog");
                $this->info("- User");
                break;
            case 'Product' :
                $this->info(Product::all()->count());
                break;
            case 'Catalog' :
                $this->info(Catalog::all()->count());
                break;
            case 'User' :
                $this->info(User::all()->count());
                break;
            default :
                $this->error("Cette table n'existe pas");
                break;
        }
    }
}
