<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Answer;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PemilikJawaban
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        $answer = Answer::findOrFail($request->id);

        if ($answer->user_id != $user->id){
            return response()->json(['message' => 'data not found'], 404); 
        }
        return $next($request);
    }
}
