<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;
use App\Mail\FormSubmitted;
use Illuminate\Support\Facades\Mail;


class FormController extends Controller
{
    //

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|email',
            'Phone' => 'required|string|max:15',
            'Message' => 'required|string',
        ]);

        // Process the data (e.g., save to database, send an email, etc.)
       
         // Save the validated data to the database
    Form::create([
        'name' => $validatedData['Name'],
        'email' => $validatedData['Email'],
        'phone' => $validatedData['Phone'],
        'message' => $validatedData['Message'],
    ]);
        // Form::create($validatedData);

         // Send the form data via email
    Mail::to('adenijiololadeh@gmail.com')->send(new FormSubmitted($validatedData));

   



        // Return a response or redirect
        return back()->with('success', 'Your message has been sent successfully!');
    }
}





