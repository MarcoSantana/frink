<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenPay;

class OpenpayController extends Controller
{
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
                //$this->users = $users;
                $openpay = new OpenPay;

        }
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
                //
                return view('openpay.index');
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
                //Here we will send the example form to be seen
                return view('openpay.index');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
                //Here we recibe the data from the openpay form with all their magic
                //already done
            /* $openpay = Openpay::getInstance('mzdtln0bmtms6o3kck8f', 
              'sk_e568c42a6c384b7ab02cd47d2e407cab');

            $customer = array(
                         'name' => $_POST["name"],
                              'last_name' => $_POST["last_name"],
                                   'phone_number' => $_POST["phone_number"],
                                        'email' => $_POST["email"],
                                );

            $chargeData = array(
                        'method' => 'card',
                            'source_id' => $_POST["token_id"],
                                'amount' => (float)$_POST["amount"],
                                    'description' => $_POST["description"],
                                        'use_card_points' => $_POST["use_card_points"], // Opcional, si estamos usando puntos
                                            'device_session_id' => $_POST["deviceIdHiddenFieldName"],
                                                'customer' => $_POST[$customer]

                                        );

            $charge = $openpay->charges->create($chargeData);
             */
                //return $request;
                //TODO add to the openpay form the amount
                //TODO where do I get the customer??

                $chargeData = $chargeData = ['method' => 'card',
                        'source_id' => $request->token_id,
                        'device_session_id' => $request->deviceIdHiddenFieldName,
                ];

                //Make the charge
                $charge = $openpay->charges->create($chargeData);
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
                //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
                //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
                //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
                //
        }
}
