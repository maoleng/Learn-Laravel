<?php

namespace App\Http\Controllers;

use App\Http\Requests\Course\DestroyRequest;
use App\Http\Requests\Course\StoreRequest;
use App\Http\Requests\Course\UpdateRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        $search = $request->get('q');

        $courses = Course::query()
            ->where('name', 'like', '%' . $search . '%')
                ->paginate(2);
        $courses->appends(['q' => $search]);


        return view('course.index', [
            'courses' => $courses,
            'search' => $search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRequest $request)
    {
//        $object = new Course();
//        $object->fill($request->except(['_token']));
//        $object->save();
        Course::query()->create($request->validated());

        return redirect()->route('course.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Course $course)
    {
//        $object = Course::find($course);
//        $object = Course::where('id', $course)->first();
        return view('course.edit',[
           'course' => $course
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCourseRequest  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateRequest $request, Course $course)
    {
//        echo json_encode($course);

        $course->update($request->except(['_token', '_method']));
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
//        Course::where('id', $course->id)->delete();
//        Course::destroy($course->id);
        $course->delete();
        return redirect()->route('course.index');
    }
}
