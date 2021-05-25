<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\User;
use App\Notifications\ContactNotification;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    /**
     * @param ContactRequest $request
     * @return RedirectResponse
     */

    public function store(ContactRequest $request): RedirectResponse
    {
        // store new contact
        $contact = new Contact($request->all(['name', 'email', 'phone']));
        $contact->save();
        // Notification
        $user = User::first();
        $user->notify(new ContactNotification($contact));
        // session success
        session()->flash('success', 'Votre demande a bien été transmit aux staff de communication vous serais contacter dès que possible');
        // redirect to welcome
        return redirect()->route('welcome');
    }
}
