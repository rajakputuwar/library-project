<?php

namespace App\Console\Commands;

use App\Models\IssueBook;
use Carbon\Carbon;
use Illuminate\Console\Command;

class FineCalculation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'issuebook:fine-calculation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add fine to the issued books';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        $issueBooks = IssueBook::get();

        foreach ($issueBooks as $issueBook) {

            $date = Carbon::parse($issueBook->issued_on);

            if ($date->addWeek() < $currentDate) {
                $issueBook->fine = 0.25 * $issueBook->book->price;
                $issueBook->save();
            }
        }
    }
}
