<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\NewsEventNotice\EventController;
use App\Model\Department\Program;
use App\Model\Department\Department;
use App\Model\FeatureModel\Feature;
use App\Model\NewsEventNotice\Event;
use App\Model\NewsEventNotice\NewsEventNotice;
use App\Model\SliderModel\Slider;
use App\Model\StaffModel\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function frontend(){

        $sliders = Slider::orderBy('slider_id','asc')->where('status', '1')->get();
        $features = Feature::orderBy('feature_id','asc')->get();
        $departments = Department::orderBy('department_id','asc')->get();
        $courses = Program::orderBy('program_id', 'asc')->get();
        $events = Event::orderBy('event_id','desc')->take(7)->get();
        return view ('frontend.index', compact('sliders','features','courses','events','departments'));

    }

    public function cources(){


        $departments = Department::orderBy('department_id')->get();
        return view ('frontend.department', compact('departments'));

    }
    public function events(){
        $news_event_notices = NewsEventNotice::orderBy('nen_id')->get();
        return view ('frontend.events', compact('news_event_notices'));
    }
    public function allevents(){
        $events = EventController::orderBy('nen_id')->get();
        return view ('frontend.allevents', compact('events'));
    }

}
