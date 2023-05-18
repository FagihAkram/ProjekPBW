<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMassageMail; // panggil nama kelas Mail yang sesuai

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $massage; // Ganti dengan nama kolom yang sesuai di tabel database

    /**
     * Create a new job instance.
     *
     * @param  string  $massage
     * @return void
     */
    public function __construct($massage)
    {
        $this->massage = $massage;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Kirim email menggunakan Mailer Laravel
        Mail::to('katoou.003@gmail.com')->send(new SendMassageMail($this->massage)); // Ganti dengan alamat email pribadi Anda
    }
}
