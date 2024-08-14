<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boglanish;
use App\Yangilik;
use App\Banner;
use App\Lesson;
use App\Kurs;
use App\Maktab;
use App\Navbar;
use App\Elon;

class XabarController extends Controller
{
    public function xabarsave(Request $request)
    {
        // dd($request);
        $get = new Boglanish();
        $get->name = $request->name;
        $get->email = $request->email;
        $get->number = $request->number;
        $get->title = $request->title;
        $get->save();
        return back();
    }
    public function readMessage($id)
    {
        Boglanish::where('id', $id)->update([
            'readd'=>1
        ]);
        return back();
    }

    public function search(Request $request) 
    {
        // dd($request->news);
        $getvalue = $request->news;
        $taqqoslash = Yangilik::where('news', $getvalue)->get();
        
        return view('yangilik', 
        [
            'yangilik'=>$taqqoslash
        ]);
    }

    public function clear() {

        $get=Yangilik::all();
        return view('yangilik',
        [
            'yangilik'=>$get
        ]);
       
    }

    public function searchteach(Request $request) 
    {
        // dd($request->news);
        $getvalue = $request->teacher;
        $taqqoslash = Lesson::where('teacher', $getvalue)->get();
        
        return view('lesson', 
        [
            'lesson'=>$taqqoslash
        ]);
    }

    public function clearteach() {

        $get=Lesson::all();
        return view('lesson',
        [
            'lesson'=>$get
        ]);
       
    }

    public function searchkurs(Request $request) 
    {
        // dd($request->news);
        $getvalue = $request->kurs;
        $taqqoslash = Kurs::where('kurs', $getvalue)->get();
        
        return view('kurs', 
        [
            'kurs'=>$taqqoslash
        ]);
    }

    public function clearkurs() {

        $get=Kurs::all();
        return view('kurs',
        [
            'kurs'=>$get
        ]);
       
    }

    public function searchch(Request $request) {

        $searchch = Yangilik::all();
        $data =  $request->input('searchch');

        $yangilik  =  Yangilik::where('name', 'like' , '%' . $data . '%')->get();
        
        return view('yangilik',compact('yangilik'));
          
    }

    public function searchles(Request $request) {

        $searchch = Lesson::all();
        $data =  $request->input('searchles');

        $lesson  =  Lesson::where('name', 'like' , '%' . $data . '%')->get();
        
        return view('lesson',compact('lesson'));
    }

    public function searchkurss(Request $request) {

        $searchch = Kurs::all();
        $data =  $request->input('searchkurss');

        $kurs  =  Kurs::where('name', 'like' , '%' . $data . '%')->get();
        
        return view('kurs',compact('kurs'));
    }

    public function searchmalumot(Request $request) {

        $searchch = Maktab::all();
        $data =  $request->input('searchmalumot');

        $malumot  =  Maktab::where('name', 'like' , '%' . $data . '%')->get();
        
        return view('malumot',compact('malumot'));
    }

    public function searchbanner(Request $request) {

        $searchch = Banner::all();
        $data =  $request->input('searchbanner');

        $banner  =  Banner::where('name', 'like' , '%' . $data . '%')->get();
        
        return view('banner',compact('banner'));
    }

    public function searchnavbar(Request $request) {

        $searchch = Navbar::all();
        $data =  $request->input('searchnavbar');

        $navbar  =  Navbar::where('name', 'like' , '%' . $data . '%')->get();
        
        return view('navbar',compact('navbar'));
    }

    public function searchelon(Request $request) {

        $searchch = Elon::all();
        $data =  $request->input('searchelon');

        $elon  =  Elon::where('name', 'like' , '%' . $data . '%')->get();
        
        return view('elon',compact('elon'));
    }

    public function searchnew(Request $request) {

        $searchch = Boglanish::all();
        $data =  $request->input('searchnew');

        $boglanish  =  Boglanish::where('name', 'like' , '%' . $data . '%')->get();
        
        return view('boglanish',compact('boglanish'));
    }

    public function clearles() {

        $get=Lesson::all();
        return view('lesson',
        [
            'lesson'=>$get
        ]);
       
    }

    public function clearbog() {

        $get=Boglanish::all();
        return view('boglanish',
        [
            'boglanish'=>$get
        ]);
       
    }

    public function clearmalumot() {

        $get=Maktab::all();
        return view('malumot',
        [
            'malumot'=>$get
        ]);
    }

    public function clearnavbar() {

        $get=Navbar::all();
        return view('navbar',
        [
            'navbar'=>$get
        ]);
    }

    public function clearkurss() {

        $get=Kurs::all();
        return view('kurs',
        [
            'kurs'=>$get
        ]);
    }

    public function clearbanner() {
      
        $get=Banner::all();
        return view('banner',
        [
            'banner'=>$get
        ]);
    }

    public function clearyangilik() {

        $get=Yangilik::all();
        return view('yangilik',
        [
            'yangilik'=>$get
        ]);
    }
  
}