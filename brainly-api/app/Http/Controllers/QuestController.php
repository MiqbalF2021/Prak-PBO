<?php

namespace App\Http\Controllers;

use App\Models\Quest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\QuestResource;
use App\Http\Resources\QuestDetailResource;

class QuestController extends Controller
{
    public function index()
    {
        $quests = Quest::all();
        return QuestDetailResource::collection($quests->loadMissing(['writer:id,name', 'answer:id,quest_id,user_id,is_answer']));
    }

    public function show($id)
    {
        $quest = Quest::with('writer:id,name')->findOrFail($id);
        return new QuestDetailResource($quest->loadMissing(['writer:id,name', 'answer:id,quest_id,user_id,is_answer']));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
                'title' => 'required|max:255',
                'question' => 'required',
            ]);

            $request['author'] = Auth::user()->id;
            $quest = Quest::create($request->all());

            return new QuestDetailResource($quest->loadMissing('writer:id,name'));
    }

    public function update(Request $request, $id)
    {
      
        $validated = $request->validate([
            'title' => 'required|max:255',
            'question' => 'required',
        ]);

        $quest = Quest::findOrFail($id);
        $quest->update($request->all());

        return new QuestDetailResource($quest->loadMissing('writer:id,name'));
    }

    public function destroy($id)
    {
        $quest = Quest::findOrFail($id);
        $quest->delete();

        return new QuestDetailResource($quest->loadMissing('writer:id,name'));
    }
}
