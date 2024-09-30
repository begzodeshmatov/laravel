<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Elon;
use App\Navbar;
use App\Banner;
use App\Lesson;
use App\Boglanish;
use App\Kurs;
use App\Maktab;
use App\Yangilik;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Http\Requests\ElonRequest;
use App\Http\Requests\BannerRequest;
use App\Http\Requests\KursRequest;
use App\Http\Requests\NavbarRequest;
use App\Http\Requests\LessonRequest;
use App\Http\Requests\YangilikRequest;
use App\Http\Requests\MalumotRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all();
        return view('home', [
            'users'=>$user
        ]);
         
    }
    public function elon() {
        $olish = Elon::all();
        $xabarsana = Boglanish::count();  
        $headersana = Navbar::count();
        $bannersana = Banner::count();
        $lessonsana = Lesson::count();
        $kurssana = Kurs::count();
        $malumotsana = Maktab::count();
        return view('elon',[
            'elon'=>$olish,
            'xabarcount'=>$xabarsana,
            'headercount'=>$headersana,
            'bannercount'=>$bannersana,
            'lessoncount'=>$lessonsana,
            'kurscount'=>$kurssana,
            'malumotcount'=>$malumotsana
        ]);
    }
    public function navbar() {
        $get = Navbar::all();
        return view('navbar',[
            'navbar'=>$get
        ]);
    }
    public function banner() {
        $banner = Banner::all();
        return view('banner',[
            'banner'=>$banner
        ]);
    }
    public function lesson() {
        $lesson = Lesson::all();
        return view('lesson',[
            'lesson'=>$lesson
        ]);
    }
    public function boglanish() {
        $boglanish = Boglanish::all();
        return view('boglanish',[
            'boglanish'=>$boglanish
        ]);
    }
    public function kurs() {
        $kurs = Kurs::all();
        return view('kurs',[
            'kurs'=>$kurs
        ]);
    }
    public function malumot() {
        $malumot = Maktab::all();
        return view('malumot',[
            'malumot'=>$malumot
        ]);
    }
    public function yangilik() {
        $yangilik = Yangilik::all();
        return view('yangilik',[
            'yangilik'=>$yangilik
        ]);
    }
    public function navbarAdd() {
        return view('navbarAdd');
    }
    public function userAdd() {
        return view('userAdd');
    }
    public function elonAdd() {
        return view('elonAdd');
    }
    public function bannerAdd() {
        return view('bannerAdd');
    }
    public function lessonAdd() {
        return view('lessonAdd');
    }
    public function boglanishAdd() {
        return view('boglanishAdd');
    }
    public function kursAdd() {
        return view('kursAdd');
    }
    public function malumotAdd() {
        return view('malumotAdd');
    }
    public function YangilikAdd() {
        return view('YangilikAdd'); 
    }
    public function userSave(Request $request) {
        //dd($request);.
        $get = new User();
        $get->name = $request->name;
        $get->email = $request->email;
        
        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('filelar'),$fileName);
        $get->file=$fileName;

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('rasmlar'),$imageName);
        $get->image=$imageName;

        $get->password = Hash::make($request->password);
        $get->save();
        return redirect('/home');
    }

    public function elonSave(ElonRequest $request) {
        //dd($request);.
        $get = new Elon();
        $get->name = $request->name;
        $get->surname = $request->surname;
        $get->news = $request->news;
        
        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('filelar'),$fileName);
        $get->file=$fileName;

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('rasmlar'),$imageName);
        $get->image=$imageName;

        $get->save();
        return redirect('/elon');
    }

    public function navbarSave(NavbarRequest $request) {
        $get = new Navbar();
        $get->name = $request->name;
        $get->save();
        return redirect('/navbar');
    }

    public function malumotSave(MalumotRequest $request) {
        $get = new Maktab();
        $get->name = $request->name;
        $get->title = $request->title;

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('rasmlar'),$imageName);
        $get->image=$imageName;

        $get->save();
        return redirect('/malumot');
    }

    public function bannerSave(BannerRequest $request) {
        $get = new Banner();
        $get->name = $request->name;
        $get->title = $request->title;

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('rasmlar'),$imageName);
        $get->image=$imageName;

        $get->save();
        return redirect('/banner');
    }

    public function lessonSave(Request $request) {
        $get = new Lesson();
        $get->name = $request->name;
        $get->birthday = $request->birthday;
        $get->t_turi = $request->t_turi;
        $get->q_turi = $request->q_turi;
        $get->fakultet = $request->fakultet;
        $get->t_nomi = $request->t_nomi;
        $get->kurs = $request->kurs;

       

        $get->save();
        // dd($request);
        return redirect('/lesson');
    }
    public function boglanishSave(Request $request) {
        $get = new Boglanish();
        $get->name = $request->name;
        $get->email = $request->email;
        $get->number = $request->number;
        $get->title = $request->title;

        $get->save();
        return redirect('/boglanish');
    }
    public function kursSave(KursRequest $request) {
        $get = new Kurs();
        $get->name = $request->name;
        $get->title = $request->title;
        $get->kurs = $request->kurs;

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('rasmlar'),$imageName);
        $get->image=$imageName;

        $get->save();
        return redirect('/kurs');
    }
    public function xabarSave(Request $request) {
        $get = new Boglanish();
        $get->name = $request->name;
        $get->email = $request->email;
        $get->number = $request->number;
        $get->title = $request->title;

        $get->save();
        return redirect('/boglanish');
    }
    public function yangilikSave(YangilikRequest $request) {
        $get = new Yangilik();
        $get->name = $request->name;
        $get->title = $request->title;
        $get->news = $request->news;

        $get->save();
        return redirect('/yangilik');
    }
    
    public function userEditSave($id, Request $request) 
    {
            $data = [
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
            ];
        if(!empty($request->image) and !empty ($request->file))
        {
            $imageName = time().$request->image->getClientOriginalName();
            $a =  $request->image->move(public_path('/rasmlar/'), $imageName);

            $fileName= time().$request->file->getClientOriginalName();
            $b =  $request->file->move(public_path('/filelar/'), $fileName);

            $data['image'] = $imageName; 
            $data['file'] = $fileName; 

            User::where('id',$id)->update($data);
            return back();
        }
        User::where('id',$id)->update($data);
            return back();
    }

    public function elonEditSave($id, Request $request) 
    {
        $data = [
            'name'=>$request->name,
            'surname'=>$request->surname,
            'news'=>$request->news,
        ];
        if(!empty($request->image) and !empty ($request->file))
        {
            $imageName = time().$request->image->getClientOriginalName();
            $a =  $request->image->move(public_path('/rasmlar/'), $imageName);

            $fileName= time().$request->file->getClientOriginalName();
            $b =  $request->file->move(public_path('/filelar/'), $fileName);

            $data['image'] = $imageName; 
            $data['file'] = $fileName; 

            Elon::where('id',$id)->update($data);
            return back();
        }
        Elon::where('id',$id)->update($data);
        return back();
    }

    public function navbarEditSave($id, Request $request) {
        $data = [
            'name'=>$request->name,
        ];
        Navbar::where('id',$id)->update($data);
        return back();
    }

    public function malumotEditSave($id, Request $request) {
        $data = [
            'name'=>$request->name,
            'title'=>$request->title,
        ];
        if(!empty($request->image))
        {
            $imageName = time().$request->image->getClientOriginalName();
            $a =  $request->image->move(public_path('/rasmlar/'), $imageName);

            $data['image'] = $imageName; 
            
            Maktab::where('id',$id)->update($data);
            return back();
        }
          
        Maktab::where('id',$id)->update($data);
        return back();
    }
    public function bannerEditSave($id, Request $request) {
        $data = [
            'name'=>$request->name,
            'title'=>$request->title,
        ];
        if(!empty($request->image))
        {
            $imageName = time().$request->image->getClientOriginalName();
            $a =  $request->image->move(public_path('/rasmlar/'), $imageName);

            $data['image'] = $imageName; 
            
           
        }
        Banner::where('id',$id)->update($data);
        return back();
    }
    public function lessonEditSave($id, Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'birthday' => 'nullable|date',
            't_turi' => 'nullable|string|max:255',
            'q_turi' => 'nullable|string|max:255',
            'fakultet' => 'nullable|string|max:255',
            't_nomi' => 'nullable|string|max:255',
            'kurs' => 'nullable|string|max:255',
        ]);
        $data = [];
    
        if ($request->has('name')) {
            $data['name'] = $request->name;
        }
        if ($request->has('birthday')) {
            $data['birthday'] = $request->birthday;
        }
        if ($request->has('t_turi')) {
            $data['t_turi'] = $request->t_turi;
        }
        if ($request->has('q_turi')) {
            $data['q_turi'] = $request->q_turi;
        }
        if ($request->has('fakultet')) {
            $data['fakultet'] = $request->fakultet;
        }
        if ($request->has('t_nomi')) {
            $data['t_nomi'] = $request->t_nomi;
        }
        if ($request->has('kurs')) {
            $data['kurs'] = $request->kurs;
        }
        $data = $request->only(['name', 'birthday', 't_turi', 'q_turi', 'fakultet', 't_nomi', 'kurs']);
        if (!empty($data)) {
            Lesson::where('id', $id)->update($data);
        }
    
        return back();
    }
    
    
    public function kursEditSave($id, Request $request) {
        $data = [
            'name'=>$request->name,
            'title'=>$request->title,
            'kurs'=>$request->kurs,
        ];
        if(!empty($request->image))
        {
            $imageName = time().$request->image->getClientOriginalName();
            $a =  $request->image->move(public_path('/rasmlar/'), $imageName);

            $data['image'] = $imageName; 
            
            Kurs::where('id',$id)->update($data);
            return back();
        }
        Kurs::where('id',$id)->update($data);
        return back();
    }
    public function yangilikEditSave($id, Request $request) {
        $data = [
            'name'=>$request->name,
            'title'=>$request->title,
            'news'=>$request->news,
        ];
        Yangilik::where('id',$id)->update($data);
        return back();
    }

    public function xabarEditSave($id, Request $request) {
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'number'=>$request->number,
            'title'=>$request->title,
        ];
        Boglanish::where('id',$id)->update($data);
        return back();
    }

    public function userDelete($id) {
        User::where('id',$id)->delete();
        return back();
    }
    public function elonDelete($id) {
        Elon::where('id',$id)->delete();
        return back();
    }
    public function navbarDelete($id) {
        Navbar::where('id',$id)->delete();
        return back();
    }
    public function bannerDelete($id) {
        Banner::where('id',$id)->delete();
        return back();
    }
    public function lessonDelete($id) {
        Lesson::where('id',$id)->delete();
        return back();
    }
    public function kursDelete($id) {
        Kurs::where('id',$id)->delete();
        return back();
    }
    public function malumotDelete($id) {
        Maktab::where('id',$id)->delete();
        return back();
    }
    public function yangilikDelete($id) {
        Yangilik::where('id',$id)->delete();
        return back();
    }
    public function xabarDelete($id) {
        Boglanish::where('id',$id)->delete();
        return back();
    }









    

}
