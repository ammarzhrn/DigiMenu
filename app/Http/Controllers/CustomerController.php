<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Menu;
use App\Models\Meja;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = Customer::all();
        $menu = Menu::all();
        return view('customer.index', compact('customer', 'menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Order::create($input);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Menu::find($id);
        $meja = Meja::find($id);
        $customer = Customer::find($id);

        return view('customer.detail', compact('data','meja','customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer)
    {
        //
    }
}
