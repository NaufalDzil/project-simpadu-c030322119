<?php

namespace App\Http\Controllers\Api;
use App\Models\Schedule;
use App\Http\Resources\ScheduleResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $schedule = DB::table('schedules')->get();
        return view('pages.schedules.index',compact('schedule'));

    }

    public function create()
    {
        return view('pages.schedules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScheduleRequest $request)
    {

        Schedule::create([
            'subject' => $request['subject'],
            'hari' => $request['hari'],
            'jam_mulai' => $request['jam_mulai'],
            'jam_selesai' => $request['jam_selesai'],
            'ruangan' => $request['ruangan'],
        ]);

        return redirect(route('schedule.index'))->with('success', 'data berhasil disimpan');
    }

    public function edit(Schedule $schedule)
    {
        return view('pages.schedules.edit')->with('schedule', $schedule);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $schedule->delete();
        return redirect()->route('schedule.index')->with('success', 'Delete Schedule Successfully');
    }
}
