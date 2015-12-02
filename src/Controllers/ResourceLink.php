<?php

namespace Elearn\Subject\Controllers;

use Illuminate\Support\Facades\Redis;

trait ResourceLink
{
    /**
     * @param int $start
     * @param int $end
     * @param string $view
     *
     * @return \Illuminate\View\View
     */
    protected function linkView($start, $end, $view)
    {
        $links = [];
        for ($i = $start; $i <= $end; $i += 1) {
            $hash = 'link:' . $i;
            $title = Redis::command('hget', [$hash, 'title']);
            if ($title !== null)
                $links[$i] = $title;
        }
        return view($view, ['links' => $links]);
    }
}