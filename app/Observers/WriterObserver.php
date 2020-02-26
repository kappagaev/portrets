<?php

namespace App\Observers;

use App\Writer;

class WriterObserver
{
    /**
     * Handle the writer "created" event.
     *
     * @param  \App\Writer  $writer
     * @return void
     */
    public function created(Writer $writer)
    {
        //
    }

    /**
     * Handle the writer "updated" event.
     *
     * @param  \App\Writer  $writer
     * @return void
     */
    public function updated(Writer $writer)
    {
        //
    }

    /**
     * Handle the writer "deleted" event.
     *
     * @param  \App\Writer  $writer
     * @return void
     */
    public function deleted(Writer $writer)
    {
        //
    }

    /**
     * Handle the writer "restored" event.
     *
     * @param  \App\Writer  $writer
     * @return void
     */
    public function restored(Writer $writer)
    {
        //
    }

    /**
     * Handle the writer "force deleted" event.
     *
     * @param  \App\Writer  $writer
     * @return void
     */
    public function forceDeleted(Writer $writer)
    {
        //
    }
}
