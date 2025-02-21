<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     echo 'Index method';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo 'Create method';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      echo 'Store method';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo 'Show method ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    echo 'Edit method' . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo 'Update method' . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       echo 'Destroy method '.$id;
    }
}
