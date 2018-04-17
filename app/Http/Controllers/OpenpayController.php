<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Openpay;
use Faker\Factory as Faker;

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
                //$openpay = new OpenPay;
                $faker = Faker::create('es_ES');
                $customer = ['name' => $faker->firstName,
                        'last_name' => $faker->lastName,
                        'phone_number' => $faker->phoneNumber,
                        'email' => $faker->email
                ];


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
                /*$openpay = Openpay::getInstance('mybzouyehednkz8qtbof', 'sk_e1856834504d46e79c122564cdf2a1b4');
                $faker = Faker::create('es_ES');
                $customer = ['name' => $faker->firstName,
                        'last_name' => $faker->lastName,
                        'phone_number' => $faker->phoneNumber,
                        'email' => $faker->email
                ];
                $chargeData = [
                        'method' => 'card',
                        'source_id' => $request->token_id,
                        'device_session_id' => $request->deviceIdHiddenFieldName,
                        'amount' => 100,
                        'currency' => 'MXN',
                        'customer' => $customer
                ];
                //Make the charge
                $charge = $openpay->charges->create($chargeData);
                 */
                $openpay = Openpay::getInstance('mzdtln0bmtms6o3kck8f', 'sk_e568c42a6c384b7ab02cd47d2e407cab');
                $customer = array(
                        'name' => 'Juan',
                        'last_name' => 'Vazquez Juarez',
                        'phone_number' => '4423456723',
                        'email' => 'juan.vazquez@empresa.com.mx'
                );

                $chargeRequest = array(
                        'method' => 'card',
                        'source_id' => 'kqgykn96i7bcs1wwhvgw',
                        'amount' => 100,
                        'currency' => 'MXN',
                        'description' => 'Cargo inicial a mi merchant',
                        'order_id' => 'oid-00051',
                        'device_session_id' => 'kR1MiQhz2otdIuUlQkbEyitIqVMiI16f',
                        'customer' => $customer
                );

                $charge = $openpay->charges->create($chargeRequest);
                return $charge;
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
