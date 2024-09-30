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
use Carbon\Carbon;
use App\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\UserRequest;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Log;
use App\Exports\ExporKurs;
use App\Exports\ExporNavbar;
use App\Exports\ExporBanner;
use App\Imports\ImportNavbar;
use App\Imports\ImporBanner;
use App\Imports\ImportMaktab;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use App\Http\Controllers\Disneyplus;
use PDF;

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
        $getvalue = $request->kurs;
        $taqqoslash = Lesson::where('kurs', $getvalue)->get();
        
        if ($taqqoslash->isEmpty()) {
            return view('lesson', [
                'lesson'=>$taqqoslash,
                'message' => 'Bu kursda talabalar mavjud emas'
            ]);
        }
        return view('lesson', [
            'lesson' => $taqqoslash,
            'message' => null // Bu yerda xabar yo'qligini ko'rsatamiz
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

    public function import(Request $request) {
        Excel::import(new UsersImport,
            $request->file('file')->store('files'));
            return redirect()->back();
    }

    
    public function export(Request $request){
        return Excel::download(new ExporKurs, 'users.xlsx');
    }

    public function exportnavbar(Request $request){
        return Excel::download(new ExporNavbar, 'navbar.xlsx');
    }

    public function exportbanner(Request $request){
        return Excel::download(new ExporBanner, 'banner.xlsx');
    }

    public function exportpdf($id)
    {
        $baza = Lesson::where('id', $id)->first();
        $currentTime = Carbon::now('Asia/Tashkent')->format('H:i:s');

        $pdf = PDF::loadView('lessonpdf', [
            'lesson'=>$baza,
            'time'=>$currentTime
        ]);
        return $pdf->download('lesson.pdf');
        // dd($baza);
    }

    public function exportword() {

        // PhpWord obyekti yaratamiz
        $phpWord = new PhpWord();

        // Yangi hujjat sahifasi yaratamiz
        $section = $phpWord->addSection();

        // Jadval uslubi
        $tableStyle = [
            'borderSize' => 6,
            'borderColor' => '000000',
            'cellMargin' => 50,
        ];

        // Jadvalni uslublash
        $phpWord->addTableStyle('myTable', $tableStyle);

        // Jadval yaratamiz
        $table = $section->addTable('myTable');

        // Hujayra uslubi
        $cellStyle = [
            'borderSize' => 6,
            'borderColor' => '000000',
            'valign' => 'center',
        ];

        // Jadvalning ustun sarlavhalarini qo'shamiz
        $table->addRow();
        $table->addCell(2000, $cellStyle)->addText('id');
        $table->addCell(4000, $cellStyle)->addText('name');
        $table->addCell(6000, $cellStyle)->addText('title');
        $table->addCell(8000, $cellStyle)->addText('news');

        // Ma'lumotlarni bazadan olamiz
        $bazas = Yangilik::all();

        // Har bir foydalanuvchini jadvalga qo'shamiz
        foreach ($bazas as $b) {
            $table->addRow();
            $table->addCell(2000, $cellStyle)->addText($b->id);
            $table->addCell(4000, $cellStyle)->addText($b->name);
            $table->addCell(4000, $cellStyle)->addText($b->title);
            $table->addCell(4000, $cellStyle)->addText($b->news);
        }

        // Word faylni saqlash uchun ob'ekt yaratamiz
        $writer = IOFactory::createWriter($phpWord, 'Word2007');

        // Faylni chiqish oqimiga (output) yozamiz
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header('Content-Disposition: attachment; filename="baza.docx"');
        $writer->save("php://output");
    }



    public function exportpdfmalumot() {
        $baza = Maktab::all();
        $currentTime = Carbon::now('Asia/Tashkent')->format('H:i:s');

        $pdf = PDF::loadView('malumotpdf', [
            'malumot'=>$baza,
            'time'=>$currentTime
        ]);
        return $pdf->download('malumot.pdf');
        // dd($baza);
    }

        public function importnavbar(Request $request){
            Excel::import(new ImportNavbar, 
                          $request->file('file')->store('files'));
            return redirect()->back();
    }

    public function importbanner(Request $request){
        Excel::import(new ImporBanner, 
                      $request->file('file')->store('files'));
        return redirect()->back();
    }

    public function importmalumot(Request $request){
        Excel::import(new ImportMaktab, 
                    $request->file('file')->store('files'));
        return redirect()->back();
    }


    public function peoples() {

        $get = Lesson::all();

        return response()->json($get);
    }

    public function users() {

        $get = User::all();

        return  response()->json($get);
    }

    public function bannernew() {

        $get = Banner::all();

        return  response()->json($get);
    }

    public function elonnew() {

        $get = Elon::all();

        return response()->json($get);
    }

    public function information() {

        $get = Maktab::all();

        return response()->json($get);
    }

    public function navbarnew() {

        $get = Navbar::all();

        return response()->json($get);
    }

    public function yangiliknew() {

        $get = Yangilik::all();

        return response()->json($get);
    }

    public function kursnew() {

        $get = Kurs::all();

        return response()->json($get);
    }

}
