<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

use App\Models\Commentaire;
class ConfirmationCommentaire extends Mailable
{
    use Queueable, SerializesModels;
    private $_fromMail = 'fournitures.scolaires@bidon.ca';
    private $_fromName = 'Fournitures scolaires inc.';
    private $commentaire = null;


    /**
     * Create a new message instance.
     */
    public function __construct(Commentaire $commentaire)
    {
        $this->commentaire = $commentaire;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->_fromMail, $this->_fromName),
            subject: "Votre a bien été reçu",
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'courriel/confirmationCourriel',
            with: [
                'messages' => $this->commentaire->message,
                'choix' => $this->commentaire->question,
                'sujet' => $this->commentaire->sujet,
            ]
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
}
