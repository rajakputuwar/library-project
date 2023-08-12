<?php

namespace App\Console\Commands;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Console\Command;

class BookingDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'booking:booking-delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete the booking not taken';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        $bookings = Booking::get();

        foreach ($bookings as $booking) {
            $date = Carbon::parse($booking->booked_on);

            if ($date->addDays(2) < $currentDate) {
                $booking->delete();
            }
        }
    }
}
