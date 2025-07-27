<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::orderBy('order')->get();
        return view('admin.slides.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.slides.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'button_text' => 'required|string|max:50',
            'button_link' => 'required|string|max:255',
            'order' => 'required|integer'
        ]);

        $imagePath = $request->file('image')->store('slides', 'public');

        Slide::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image_path' => $imagePath,
            'button_text' => $validated['button_text'],
            'button_link' => $validated['button_link'],
            'order' => $validated['order']
        ]);

        return redirect()->route('admin.slides.index')->with('success', 'Slide created successfully!');
    }
    // app/Http/Controllers/Admin/SlideController.php
    // Show the form for creating a new slide


// Display the specified slide
public function show(Slide $slide)
{
    return view('admin.slides.show', compact('slide'));
}

// Update the specified slide
public function update(Request $request, Slide $slide)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'order' => 'required|integer',
        'is_active' => 'boolean',
        // Add other validation rules
    ]);

    // Handle image upload if new image was provided
    if ($request->hasFile('image')) {
        // Delete old image
        Storage::delete('public/'.$slide->image_path);
        
        // Store new image
        $path = $request->file('image')->store('public/slides');
        $validated['image_path'] = str_replace('public/', '', $path);
    }

    $slide->update($validated);

    return redirect()->route('admin.slides.index')
                   ->with('success', 'Slide updated successfully');
}
// app/Http/Controllers/Admin/SlideController.php
public function edit(Slide $slide)
{
    // Verify image exists
    if (!Storage::exists('public/'.$slide->image_path)) {
        logger()->warning("Missing slide image", [
            'slide_id' => $slide->id,
            'image_path' => $slide->image_path
        ]);
    }

    return view('admin.slides.edit', compact('slide'));
}
    // Add edit, update, delete methods...
}
?>