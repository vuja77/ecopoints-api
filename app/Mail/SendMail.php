<?php 
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pdf;

    public function __construct($pdf)
    {
        $this->pdf = $pdf;
    }

    public function build()
    {
        return $this->view('mail')
                    ->attachData($this->pdf->output(), 'filename.pdf', [
                        'mime' => 'application/pdf',
                    ])
                    ->subject('Subjekt e-maila');
    }
}
?>