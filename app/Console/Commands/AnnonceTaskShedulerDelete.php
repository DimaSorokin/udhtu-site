<?php

namespace App\Console\Commands;

use App\Announcement;
use Carbon\Carbon;
use Illuminate\Console\Command;

class AnnonceTaskShedulerDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:annonce->delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $records = Announcement::whereDate('created_at',  '<', Carbon::now()->addDays(-7)->format('Y-m-d H:m:i'))->get();
        foreach ($records as $record) {
            $record->delete();
        }
    }
}
