<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Listagem de invoices']);
    }

    public function store(Request $request)
    {
        return response()->json(['message' => 'Invoice criado com sucesso']);
    }
}
