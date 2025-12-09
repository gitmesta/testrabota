<?php
//
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{

    // внесение данных в таблицу
    public function newZapis(Request $request)
    {
        // валидация данных
        $request->validate([
            'title' => 'required|string',
        ]);
        // валидация прошла успешно
        $test = Test::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ]);
        return response()->json(['message' => 'Zapisal'], 200);
        
    }
    // получение всех записей из таблицы
    public function vseZapisi()
    {
        $tests=Test::all();
        return response()->json($tests);
    }
    // получение одной записи по id
    public function odnaZapis(Request $request){
        $test=Test::find($request->input('ident'));
        if ($test) {
            return response()->json($test);
        } else {
            return response()->json(['message' => 'NET ZAPISI'], 404);
        }
    }
    // обновление одной записи
    public function obnovitZapis(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
        ]);
        $test=Test::find($request->input('ident'));
        if($test) {
            $test->update([
                'title' => $request->input('title', $test->title),
                'description' => $request->input('description', $test->description),
                'status' => $request->input('status', $test->status),
            ]);
            return response()->json(['message' => 'Obnovil'], 200);
        }else
        {
            return response()->json(['message' => 'Net zapisi'], 404);
        }
    }
    // удаление одной записи
    public function udalitZapis(Request $request){
        $test=Test::find($request->input('ident'));
        if($test){
            $test->delete();
            return response()->json(['message' => 'Udalil'], 200);
        }else{
            return response()->json(['message' => 'Net zapisi'], 404);
        }
    }
}
