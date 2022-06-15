<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Support\Facades\Auth;

class CompanyJobController extends Controller
{
  public function index()
  {
    $rooms = Job::where('company_id', Auth::guard('company')->user()->id)
            ->latest();

    return view('company.jobs.index', [
      'title' => 'Room Data',
      'rooms' => $rooms->filterCompanyAuth(request(['search']))->paginate(10)
    ]);
  }

  public function create()
  {
    return view('company.jobs.create', [
      'title' => 'Create Room',
    ]);
  }

  public function store(Request $request)
  {
    $validData = $request->validate([
      'description' => ['required'],
      'price' => ['required', 'numeric'],
    ]);

    $validData['company_id'] = Auth::guard('company')->user()->id;
    $validData['status'] = 1;

    Job::create($validData);

    return redirect('/owner/rooms')->with('success', 'New Room has been Posted.');
  }

  public function show($id)
  {
    return view('company.jobs.show', [
      'title' => 'Detail Room',
      'room' => Job::find($id)
    ]);
  }

  public function edit($id)
  {
    $this->authorize('edit', Job::find($id));

    return view('company.jobs.edit', [
      'title' => 'Edit Room',
      'room' => Job::find($id),
    ]);
  }

  public function update(Request $request, $id)
  {
    $validData = $request->validate([
      'description' => ['required'],
      'price' => ['required', 'numeric'],
    ]);

    Job::find($id)->update($validData);
    return redirect('/owner/rooms')->with('success', 'Room has been updated.');
  }

  public function destroy($id)
  {
    Job::destroy($id);
    Application::where('job_id', $id)->delete();

    return redirect('/owner/rooms')->with('success', 'Room has been deleted.');
  }

  public function close($id){
    $this->authorize('close', Job::find($id));
    Job::find($id)->update(['status' => 0]);

    return redirect('/owner/rooms')->with('success', 'Room has been closed.');
  }
}
