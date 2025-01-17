<?php

namespace App\Http\Controllers;

use App\Models\TemplateSurat;
use Illuminate\Http\Request;

class TemplateSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $templates = TemplateSurat::all();
        return view('template_surats.index', compact('templates'));
    }

    public function create()
    {
        return view('template_surats.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ]);

        TemplateSurat::create($request->all());
        return redirect()->route('template-surats.index')
                         ->with('success', 'Template berhasil dibuat.');
    }

    public function show(TemplateSurat $templateSurat)
    {
        return view('template_surats.show', compact('templateSurat'));
    }

    public function edit(TemplateSurat $templateSurat)
    {
        return view('template_surats.edit', compact('templateSurat'));
    }

    public function update(Request $request, TemplateSurat $templateSurat)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ]);

        $templateSurat->update($request->all());
        return redirect()->route('template-surats.index')
                         ->with('success', 'Template berhasil diperbarui.');
    }

    public function destroy(TemplateSurat $templateSurat)
    {
        $templateSurat->delete();
        return redirect()->route('template-surats.index')
                         ->with('success', 'Template berhasil dihapus.');
    }
}
