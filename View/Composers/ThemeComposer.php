<?php

declare(strict_types=1);

namespace Modules\UI\View\Composers;

class ThemeComposer
{
    /**
     * @return string
     */
    public function metatags() {
        /**
         * @phpstan-var view-string
         */
        $view = 'ui::metatags';

        return (string) view($view)->render();
    }

    /**
     * @param string $index
     *
     * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed
     */
    public function metatag($index) {
        $ris = self::__getStatic($index);
        // echo '<br/>['.$index.']['.$ris.']';
        if ('' === $ris || null === $ris) {
            $ris = config('metatag.'.$index);
            self::__setStatic($index, $ris);
        }

        return $ris;
    }


    public function showScripts(): string
    {
        return '';
    }

    public function flag(string $lang): \Illuminate\View\View
    {
        return view("ui::svg.flags.{$lang}");
    }
}
