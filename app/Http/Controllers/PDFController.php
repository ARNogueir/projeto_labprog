<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use PDF;
use Mail;

class PDFController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function index()
    {
        $data["email"] = "user1@conf.pt";
        $data["title"] = "Conferências - Ciência & Sociedade";
        $data["body"] = "A sua inscrição na plataforma foi realizada com êxito. Bem-vindo!";

        $pdf = PDF::loadView('emails.myTestMail', $data);

        Mail::send('emails.myTestMail', $data, function ($message) use ($data, $pdf) {
            $message->to($data["email"], $data["email"])
                ->subject($data["title"])
                ->attachData($pdf->output(), "registoConf.pdf");
        });

        return redirect(RouteServiceProvider::DASHBOARD);
    }
}
