<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuration;

class ConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/configuration/create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datas = $request->except('_token', '_method');
        foreach ($datas as $key =>  $data) {
            $isExist = Configuration::where('key', $key)->first();
            if ($isExist) {

                $isExist->update(['value' => $data]);
            } else {
                Configuration::create(['value' => $data, 'key' => $key]);
            }
        }

        if ($request->hasFile('scanner')) {
            $scanner = $request->file('scanner');
            $storagePath = 'configurations';
            $scannerPath = $scanner->store($storagePath, 'public');

            $scannerConfig = Configuration::where('key', 'scanner')->first();

            if ($scannerConfig) {
                $scannerConfig->update(['value' => $scannerPath]);
            } else {
                Configuration::create([
                    'key' => 'scanner',
                    'value' => $scannerPath,
                ]);
            }
        }
        return redirect('configuration')->withSuccess('added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
