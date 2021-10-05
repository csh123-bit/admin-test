<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function index(){

        $clients = Client::orderBy('id','desc')->paginate(5);

        return view('/clients',['clients'=>$clients]);
    }

    public function create(Request $request){
        $params = $request->all();
        Client::create(
            $params
        );//문법 실수 조심

        return redirect('/');
    }

    public function edit($id){

        $clientInfo=Client::where('id',$id)->first();

        return view('/edit',['clientInfo'=>$clientInfo]);
    }

    public function update(Request $request, $id){
        $clientInfo=Client::where('id',$id)->first();
        $clientInfo->email = $request->input('email');
        $clientInfo->name = $request->input('name');
        $clientInfo->kind = $request->input('kind');

        $clientInfo->save();

        return redirect('/');
    }

    public function delete($id){
        $clientInfo=Client::where('id',$id)->first();
        $clientInfo->delete();
        return redirect('/');
    }

    public function search(Request $request){
        $criteria = $request->kind;
        $keyword = $request->searchBar;
        $clSearch = Client::where('kind','=','%'.$keyword.'%')->where('kind',$criteria);
        return view('/clients',['clients'=>$clSearch]);
    }
}
