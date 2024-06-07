<?php

namespace App\Http\Controllers;

use App\Models\InsuredData;
use Illuminate\Http\Request;

class InsuredDataController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $insuredData = InsuredData::where('name', 'like', "%{$search}%")->paginate(10);
        return view('insured-data.index', compact('insuredData'));
    }

    public function create()
    {
        return view('insured-data.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ktp' => 'required',
            'name' => 'required',
            'sex' => 'required',
            'birth_of_date' => 'required|date',
        ]);

        InsuredData::create($validated);

        return redirect()->route('insured-data.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show(InsuredData $insuredData)
    {
        return view('insured-data.show', compact('insuredData'));
    }

    public function edit(InsuredData $insuredData)
    {
        return view('insured-data.edit', compact('insuredData'));
    }

    public function update(Request $request, InsuredData $insuredData)
    {
        $validated = $request->validate([
            'ktp' => 'required',
            'name' => 'required',
            'sex' => 'required',
            'birth_of_date' => 'required|date',
        ]);

        $insuredData->update($validated);

        return redirect()->route('insured-data.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(InsuredData $insuredData)
    {
        $insuredData->delete();
        return redirect()->route('insured-data.index')->with('success', 'Data berhasil dihapus.');
    }
}
