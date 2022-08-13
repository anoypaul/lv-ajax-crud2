<?php

namespace App\Http\Controllers\New_crud_c;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\New_crud_m\State;
use App\Models\New_crud_m\Customer;
use App\Models\New_crud_m\Customer_detail;

use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){
        $country = DB::table('countries')->get();
        return view('new_crud.home', compact('country'));
    }

    public function getState(Request $request){
        $countries_id = $request->post('country');
        $state = DB::table('states')->where('countries_id', $countries_id)->get();
        $html = '<option value="">Select state</option>';
        foreach ($state as $list) {
            $html .= '<option value="'.$list->states_id.'">'.$list->states_name.'</option>';
        }
        echo $html;
    }
    public function getCity(Request $request){
        $states_id = $request->post('state');
        $city = DB::table('cities')->where('states_id', $states_id)->get();
        print_r($city->toArray());
        $html = '<option value="">Select city</option>';
        foreach ($city as $list) {
             $html .= '<option value="'.$list->cities_id.'">'.$list->cities_name.'</option>';
         }
         echo $html;
    }

    public function dataStore(Request $request){
        $customer_detail = new Customer_detail();
        $customer_detail->customer_details_country = $request->country;
        $customer_detail->customer_details_state = $request->state;
        $customer_detail->customer_details_city = $request->city;
        $customer_detail->save();

        $insertedId = DB::getPdo()->lastInsertId();

        $customer = new Customer();
        $customer->customer_details_id = $insertedId;
        $customer->customers_name = $request->name;
        $customer->customers_email = $request->email;
        $customer->customers_phone = $request->number;
        $customer->save();

        return response()->json($customer);
    }

    public function dataStoreAj(Request $request){
        $customer_detail = new Customer_detail();
        $customer_detail->customer_details_country = $request->customer_details_country;
        $customer_detail->customer_details_state = $request->customer_details_state;
        $customer_detail->customer_details_city = $request->customer_details_city;
        $customer_detail->save();

        $insertedId = DB::getPdo()->lastInsertId();

        $customer = new Customer();
        $customer->customer_details_id = $insertedId;
        $customer->customers_name = $request->customers_name;
        $customer->customers_email = $request->customers_email;
        $customer->customers_phone = $request->customers_phone;
        $customer->save();

        return response()->json($customer);
    }

    public function dataRead(){
        $users = DB::table('customers')
            ->join('customer_details', 'customers.customers_id', '=', 'customer_details.customer_details_id')
            ->join('countries', 'customer_details.customer_details_country', '=', 'countries.countries_id')
            ->join('states', 'customer_details.customer_details_state', '=', 'states.states_id')
            ->join('cities', 'customer_details.customer_details_city', '=', 'cities.cities_id')
            ->get();
        return view('new_crud.table', compact('users'));
    }

    public function dataReadAj(){
        $users = DB::table('customers')
            ->join('customer_details', 'customers.customers_id', '=', 'customer_details.customer_details_id')
            ->join('countries', 'customer_details.customer_details_country', '=', 'countries.countries_id')
            ->join('states', 'customer_details.customer_details_state', '=', 'states.states_id')
            ->join('cities', 'customer_details.customer_details_city', '=', 'cities.cities_id')
            ->get();
        return response()->json($users);
    }

    public function dataEditAj(Request $request, $id){
        $customer = Customer::find($id);
        // $customer = Customer_detail::find($id);
        // $customer = DB::table('customers')
        //     ->join('customer_details', 'customers.customers_id', '=', 'customer_details.customer_details_id')
        //     ->join('countries', 'customer_details.customer_details_country', '=', 'countries.countries_id')
        //     ->join('states', 'customer_details.customer_details_state', '=', 'states.states_id')
        //     ->join('cities', 'customer_details.customer_details_city', '=', 'cities.cities_id')
        //     ->where('customers_id', $id)
        //     ->get();
        return response()->json($customer);
    }

    public function dataUpdateAj(Request $request, $id){
       
        $customer_detail = Customer_detail::find($id);
        $customer_detail->customer_details_country = $request->customer_details_country;
        $customer_detail->customer_details_state = $request->customer_details_state;
        $customer_detail->customer_details_city = $request->customer_details_city;
        $customer_detail->save();

        $insertedId = DB::getPdo()->lastInsertId();

        $customer = Customer::find($id);
        $customer->customer_details_id = $insertedId;
        $customer->customers_name = $request->customers_name;
        $customer->customers_email = $request->customers_email;
        $customer->customers_phone = $request->customers_phone;
        $customer->save();

        return response()->json($customer);
    }

    public function dataDeleteAj(Request $request, $id){
        $users = DB::table('customers')
            ->join('customer_details', 'customers.customers_id', '=', 'customer_details.customer_details_id')
            ->join('countries', 'customer_details.customer_details_country', '=', 'countries.countries_id')
            ->join('states', 'customer_details.customer_details_state', '=', 'states.states_id')
            ->join('cities', 'customer_details.customer_details_city', '=', 'cities.cities_id')
            ->where('customers_id', $id);
            DB::table('customer_details')->where('customer_details_id', $id)->delete();
        $users->delete();
        return response()->json($users);
    }
}
