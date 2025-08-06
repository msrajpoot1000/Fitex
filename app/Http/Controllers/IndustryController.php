<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function indexF()
    {
        return view('user.pages.industries');
    }

    public function index()
    {
        $items = Industry::latest()->get();
  return view('admin.pages.industry', compact('items'));



    }

    public function create() {}

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        'logo' => 'image|mimes:jpg,jpeg,png|max:2048|nullable',
        'is_active' => 'required|boolean'
        ]);
        
        if ($request->hasFile('logo')) {
            $folder = 'upload/industries';
            $path = public_path($folder);
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file = $request->file('logo');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
            $data['logo'] = $folder . '/' . $filename;
        }

        Industry::create($data);
        return redirect()->route('admin-industry.index')->with('success', 'Industry created successfully.');
    }

    public function edit(string $id)
    {
        $item = Industry::findOrFail($id);
   return view("admin.pages.industry-edit", compact('item'));



    }

    public function update(Request $request, string $id)
    {
        $item = Industry::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
        'status_logo' => 'nullable|in:0,1',
        'is_active' => 'required|boolean'
        ]);

        $data = $request->only(['name', 'is_active']);

                $photoFields = ['logo'];

        foreach ($photoFields as $field) {
            $statusField = 'status_' . $field;

            if ($request->input($statusField)) {
                if ($request->hasFile($field)) {
                    if (!empty($item->$field) && file_exists(public_path($item->$field))) {
                        unlink(public_path($item->$field));
                    }

                    $folder = 'upload/industries';
                    $path = public_path($folder);
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }

                    $file = $request->file($field);
                    $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move($path, $filename);

                    $data[$field] = $folder . '/' . $filename;
                } else {
                    $data[$field] = $item->$field;
                }
            } else {
                if (!empty($item->$field) && file_exists(public_path($item->$field))) {
                    unlink(public_path($item->$field));
                }

                $data[$field] = null;
            }
        }

        $item->update($data);

        return redirect()->route('admin-industry.index')->with('success', 'Industry updated successfully.');
    }

   public function destroy(string $id)
{
    $item = Industry::findOrFail($id);

        if (!empty($item->logo) && file_exists(public_path($item->logo))) {
            unlink(public_path($item->logo));
        }

    $item->delete();

    return redirect()->route('admin-industry.index')->with('success', 'Industry deleted successfully.');
}

}