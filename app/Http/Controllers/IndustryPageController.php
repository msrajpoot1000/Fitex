<?php

namespace App\Http\Controllers;

use App\Models\IndustryPage;
use Illuminate\Http\Request;
use App\Models\Industry;

class IndustryPageController extends Controller
{
    public function index()
    {
        $items1 = Industry::get();
        $items2 = IndustryPage::with('industry')->latest()->get();
        return view('admin.pages.industry-page', compact('items1', 'items2'));
    }

   public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'description' => 'nullable|string',
            'is_active' => 'required|boolean',
            'ref_id' => 'required|exists:industries,id'
    ]);
    
        if ($request->hasFile('image')) {
            $folder = 'upload/industry_pages';
            $path = public_path($folder);
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file = $request->file('image');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);
            $data['image'] = $folder . '/' . $filename;
        }

    IndustryPage::create($data);
    return redirect()->route('admin-industry-page.index')->with('success', 'IndustryPage created successfully.');
}


    public function edit(string $id)
    {
        $items1 = Industry::get();
        $item2 = IndustryPage::findOrFail($id);
        return view('admin.pages.industry-page-edit', compact('items1', 'item2'));
    }

    public function update(Request $request, string $id)
{
    $item = IndustryPage::findOrFail($id);
    $data = $request->validate([
        'name' => 'required|string',
            'status_image' => 'nullable|in:0,1',
            'description' => 'nullable|string',
            'is_active' => 'required|boolean',
            'ref_id' => 'required|exists:industries,id'
    ]);

            $photoFields = ['image'];

        foreach ($photoFields as $field) {
            $statusField = 'status_' . $field;

            if ($request->input($statusField)) {
                if ($request->hasFile($field)) {
                    if (!empty($item->$field) && file_exists(public_path($item->$field))) {
                        unlink(public_path($item->$field));
                    }

                    $folder = 'upload/industry_pages';
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
    return redirect()->route('admin-industry-page.index')->with('success', 'IndustryPage updated successfully.');
}



    public function destroy(string $id)
    {
        $item = IndustryPage::findOrFail($id);
                if (!empty($item->image) && file_exists(public_path($item->image))) {
            unlink(public_path($item->image));
        }

        $item->delete();
        return redirect()->route('admin-industry-page.index')->with('success', 'IndustryPage deleted successfully.');
    }

    
    public function indexF()
    {
        return view('user.pages.industry-page');
    }
}