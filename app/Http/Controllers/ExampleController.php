<?php

namespace App\Http\Controllers;

use App\Http\Resources\CashTransacaoResource;
use App\Http\Response\CollectionResponse;
use App\Models\CashTransacao;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function teste()
    {
        $teste = CashTransacaoResource::collection(CashTransacao::limit(150)->get());
        return new CollectionResponse($teste);
    }
}
