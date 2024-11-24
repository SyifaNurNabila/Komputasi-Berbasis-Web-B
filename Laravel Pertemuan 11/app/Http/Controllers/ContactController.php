<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact'); // Menggunakan contact.blade.php
    }

    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Log::info('Pesan Kontak:', $validated);

        return back()->with('success', 'Pesan Anda telah terkirim. Terima kasih telah menghubungi kami!');
    }
}