<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OptionFormRequest;
use App\Models\Options;
use Illuminate\Http\Request;
use PhpOption\Option;

class OptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $options = Options::OrderBy('created_at', 'desc')->paginate(10);
        // dd($options);
        return view("admin.options.index", [
            'options' => $options
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.options.form', [
            "option" => new Options()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionFormRequest $request)
    {
        Options::create($request->validated());
        return to_route("admin.option.index")->with("success", "Option crée avec succès.");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Options $option)
    {
        return view("admin.options.form", compact("option"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OptionFormRequest $request, Options $option)
    {
        $option->update($request->validated());
        return to_route('admin.option.index')->with("success", "Option modifié avec brio.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Options $option)
    {
        $option->delete();
        return to_route('admin.option.index')->with("success", "Option supprimer.");
    }
}
