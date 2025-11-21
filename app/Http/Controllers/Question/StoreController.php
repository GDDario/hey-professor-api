<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Question;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        Question::create([
            'user_id' => auth()->id(),
            'question' => $request->question,
        ]);
    }
}
