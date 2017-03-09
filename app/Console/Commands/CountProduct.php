<?php

namespace App\Console\Commands;

use App\Product;$
use Illuminate\Console\Command;

class CountProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'esgi_count:product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Count products';

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
        $this->info(Product::all()->count());
    }
}
