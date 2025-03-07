<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Service\GenerateSale;
use App\Http\Service\ServiceListWish;
use App\Http\Service\TrashListWish;
use App\Mail\SaleMail;
use App\Mail\SaleMailPDF;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PDFController extends Controller
{
    use ServiceListWish, GenerateSale, TrashListWish;

    public function generatePDF()
    {
        DB::transaction(function () {
            $this->generateSale();
        });
    
        $user = User::with('profile')->where('id', Auth::id())->first();
        $data = [
            'user' => $user,
            'data' => $this->listWish()
        ];
    
        // Generar un nombre único para el PDF
        $pdf = PDF::loadView('SaleView', $data);
        Storage::disk('public')->put('public/sale.pdf', $pdf->output());
        // Enviar el PDF por correo
        Mail::to($user->email)->send(new SaleMailPDF($data));
        $this->trashListWish();
        return new JsonResponse(['data' => 'register']);
        //return $pdf->download('welcome.pdf');
    }
}
