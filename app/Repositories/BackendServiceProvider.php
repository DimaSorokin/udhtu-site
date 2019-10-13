<?php
namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
        'App\Repositories\StateInterface',
        'App\Repositories\StateRepository'
        );
        $this->app->bind(
            'App\Repositories\ApplicantInterface',
            'App\Repositories\ApplicantRepository'
        );
        $this->app->bind(
            'App\Repositories\AnnouncementInterface',
            'App\Repositories\AnnouncementRepository'
        );
        $this->app->bind(
            'App\Repositories\ContactInterface',
            'App\Repositories\ContactRepository'
        );
        $this->app->bind(
            'App\Repositories\StudyInterface',
            'App\Repositories\StudyRepository'
        );
        $this->app->bind(
            'App\Repositories\PostInterface',
            'App\Repositories\PostRepository'
        );
        $this->app->bind(
            'App\Repositories\PublicationInterface',
            'App\Repositories\PublicationRepository'
        );
        $this->app->bind(
            'App\Repositories\PhotoInterface',
            'App\Repositories\PhotoRepository'
        );
    }
}
