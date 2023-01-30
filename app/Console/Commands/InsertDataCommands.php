<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Login;

class InsertDataCommands extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'inserting user data to table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->table(
            ['Username', 'Email', 'Password'],
            Login::all(['username', 'email', 'password'])->toArray()
        );
        return Command::SUCCESS;
    }
}
