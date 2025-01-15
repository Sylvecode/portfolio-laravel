<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Valider les données du formulaire
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Envoyer l'e-mail
        Mail::raw(
            "Nom : {$validated['name']}\nE-mail : {$validated['email']}\n\nMessage :\n{$validated['message']}",
            function ($message) use ($validated) {
                $message->to('perie.sylvain@gmail.com') // Votre adresse e-mail
                    ->subject('Nouveau message depuis le formulaire du portfolio');
            }
        );

        // Rediriger avec un message de succès
        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
