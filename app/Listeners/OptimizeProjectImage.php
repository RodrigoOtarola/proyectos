<?php

namespace App\Listeners;

use App\Event\ProjectSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class OptimizeProjectImage implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  \App\Event\ProjectSaved  $event
     * @return void
     */
    public function handle(ProjectSaved $event)
    {

        //Probar failed-job
        //throw new \Exception("Error procesing image",1);

        //Optimizar imagen, storage_path para la ruta de la foto.
        $image = Image::make(Storage::get($event->project->image))
            ->widen(300)
            ->heighten(300)
            ->limitColors(255)
            ->encode();

        Storage::put($event->project->image,(string)$image);
    }
}
