<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\TypePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function allPage(){
        $types = TypePage::all();
        $pages = DB::table('pages')
        ->join('type_pages','pages.idTypePage','=','type_pages.id')
        ->select('*')->get();
        return view('PARENT.ADMINISTRATEUR.page',compact('pages','types'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'contenue'=>'required',
            'image'=>'required',
            'date'=>'required',
            'idTypePage'=>'required',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $path = $request->file('image')->storeAs('images', $imageName,'public');
        $page = new Page();
        $page->contenue = $request->contenue;
        $page->image = $path;
        $page->date = $request->date;
        $page->idTypePage = $request->idTypePage;
        $page->idUtilisateur = 2;
        $page->save();
        return redirect('page');
    }

    public function destroy($id){
        DB::table('pages')::whereId($id)->delete();
        return redirect('page');
    }


}
