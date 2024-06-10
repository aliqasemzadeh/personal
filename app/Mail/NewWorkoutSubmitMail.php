<?php

namespace App\Mail;

use App\Models\LessonWorkout;
use App\Models\StudentWorkout;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewWorkoutSubmitMail extends Mailable
{

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public LessonWorkout $workout)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: __('New Workout Mail') . ": " . date("Y-m-d H:i:s"),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.new-workout-submit',
            with: [
                'title' => $this->workout->description,
                'url' => route('admin.lesson.workout',[$this->workout->lesson_id]),
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.new-workout-submit'); // -> pointing to views/mail/new-message.blade.php containing above message
    }
}
