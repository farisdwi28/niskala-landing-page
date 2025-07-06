<?php
namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->take(6)->get(); 
        $teamMembers = TeamMember::all();

        return view('welcome', compact('projects', 'teamMembers'));
    }
}