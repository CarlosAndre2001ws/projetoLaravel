<?php

namespace App\Http\Controllers\collections;

use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
        Collection::macro('toLower', function () {
            return $this->map(function (string $value) {
                return Str::lower($value);
            });
        });

        $collection = collect(['larAveL', 'php', 'javascript']);

        $upper = $collection->toLower();

        dd($upper);
    }
}
