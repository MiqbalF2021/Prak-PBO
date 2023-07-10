<?php

namespace App\Http\Controllers;

use App\Http\Resources\AnswerResource;
use App\Models\Answer;
use Illuminate\Http\Request;


//inheritance
class AnswerController extends Controller
{
    public function store (Request $request)
    {
        $validated = $request->validate([
            'quest_id' => 'required|exists:quests,id',
            'is_answer' => 'required',
        ]);

        $request['user_id'] = auth()->user()->id;

        $answer = Answer::create($request->all());

        return new AnswerResource($answer-> loadMissing(['answerer:id,username']));
    }

    public function update (Request $request, $id)
    {
        $validated = $request->validate([
            'is_answer' => 'required',
        ]);

        $answer = Answer::findOrfail($id);
        $answer->update($request->only('is_answer'));

        return new AnswerResource($answer-> loadMissing(['answerer:id,username']));

    }

    public function destroy($id)
    {
        $answer = Answer::findOrFail($id);
        $answer->delete();

        return new AnswerResource($answer-> loadMissing(['answerer:id,username']));
    }


    //Polymorphism
    private function returnAnswerResource(Answer $answer)
    {
        $answer->loadMissing(['answerer:id,username']);

        return new AnswerResource($answer);
    }
}
