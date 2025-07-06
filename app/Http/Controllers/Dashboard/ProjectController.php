<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::latest()->paginate(10);
        return view('dashboard.projects.index', compact('projects'));
    }

    public function create() {
        return view('dashboard.projects.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'url' => 'nullable|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $file = $request->file('image');
        $validated['image'] = 'data:' . $file->getMimeType() . ';base64,' . base64_encode(file_get_contents($file));
        Project::create($validated);
        return redirect()->route('projects.index')->with('success', 'Proyek berhasil ditambahkan.');
    }

    public function show(Project $project) {
        return view('dashboard.projects.show', compact('project'));
    }

    public function edit(Project $project) {
        return view('dashboard.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'url' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $validated['image'] = 'data:' . $file->getMimeType() . ';base64,' . base64_encode(file_get_contents($file));
        }
        $project->update($validated);
        return redirect()->route('projects.index')->with('success', 'Proyek berhasil diperbarui.');
    }

    public function destroy(Project $project) {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Proyek berhasil dihapus.');
    }
}