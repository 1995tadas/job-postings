<?php

namespace App\Services;

use Illuminate\Support\Facades\App;

class LocaleService
{
    public function changeLocale(): void
    {
        $possibleLocales = ['en', 'lt'];

        if (App::isLocale($possibleLocales[0])) {
            $newLocale = $possibleLocales[1];
        } else {
            $newLocale = $possibleLocales[0];
        }

        App::setLocale($newLocale);
        session(['locale' => $newLocale]);
    }
}
