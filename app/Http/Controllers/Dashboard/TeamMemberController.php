<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
{
    public function index() {
        $teamMembers = TeamMember::latest()->paginate(10);
        return view('dashboard.teams.index', compact('teamMembers'));
    }

    public function create() {
        return view('dashboard.teams.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'github' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
        ]);
        $file = $request->file('photo');
        $validated['photo'] = 'data:' . $file->getMimeType() . ';base64,' . base64_encode(file_get_contents($file));
        TeamMember::create($validated);
        return redirect()->route('teams.index')->with('success', 'Anggota tim berhasil ditambahkan.');
    }

    public function edit(TeamMember $team) {
        return view('dashboard.teams.edit', ['member' => $team]);
    }

    public function update(Request $request, TeamMember $team) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'github' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
        ]);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $validated['photo'] = 'data:' . $file->getMimeType() . ';base64,' . base64_encode(file_get_contents($file));
        }
        $team->update($validated);
        return redirect()->route('teams.index')->with('success', 'Anggota tim berhasil diperbarui.');
    }

    public function destroy(TeamMember $team) {
        $team->delete();
        return redirect()->route('teams.index')->with('success', 'Anggota tim berhasil dihapus.');
    }
}