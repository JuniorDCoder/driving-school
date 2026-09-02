<?php

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

it('sends contact messages to the configured admin and replies to the customer', function () {
    Mail::fake();

    $response = $this->post(route('contact.send'), [
        'name' => 'Test Customer',
        'email' => 'customer@example.com',
        'subject' => 'Lesson enquiry',
        'message' => 'I would like to ask about available lessons.',
    ]);

    $response->assertSessionHas('success');
    Mail::assertSent(ContactMail::class, function (ContactMail $mail) {
        return $mail->hasTo(config('services.contact.admin'))
            && $mail->hasReplyTo('customer@example.com')
            && $mail->details['subject'] === 'Lesson enquiry';
    });

    $body = (new ContactMail([
        'name' => 'Test Customer',
        'email' => 'customer@example.com',
        'subject' => 'Lesson enquiry',
        'message' => 'I would like to ask about available lessons.',
    ]))->render();

    expect($body)
        ->toContain('mailto:customer@example.com')
        ->toContain('Reply to customer');
});

it('sends appointment requests with all customer details', function () {
    Mail::fake();

    $response = $this->post(route('contact.appointment'), [
        'name' => 'Test Customer',
        'email' => 'customer@example.com',
        'license_type' => 'Manual car',
        'car_type' => 'Hatchback',
        'message' => 'I would like to arrange an appointment.',
    ]);

    $response->assertSessionHas('success');
    Mail::assertSent(ContactMail::class, function (ContactMail $mail) {
        return $mail->hasTo(config('services.contact.admin'))
            && $mail->hasReplyTo('customer@example.com')
            && $mail->view === 'appointment'
            && $mail->details['license_type'] === 'Manual car'
            && $mail->details['car_type'] === 'Hatchback';
    });

    $body = (new ContactMail([
        'name' => 'Test Customer',
        'email' => 'customer@example.com',
        'license_type' => 'Manual car',
        'car_type' => 'Hatchback',
        'message' => 'I would like to arrange an appointment.',
    ], 'appointment'))->render();

    expect($body)
        ->toContain('mailto:customer@example.com')
        ->toContain('Manual car')
        ->toContain('Hatchback');
});
