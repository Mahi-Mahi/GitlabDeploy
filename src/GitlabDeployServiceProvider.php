<?php

namespace MahiMahi\GitlabDeploy;

use Illuminate\Support\ServiceProvider;

class GitlabDeployServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __dir__ . '/../config/gitlab-deploy.php' => config_path('gitlab-deploy.php')
        ], 'config');
        $this->loadRoutesFrom(__dir__ . '/routes.php');
        $this->loadViewsFrom(__dir__ . '/views', 'gitlab-deploy');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__dir__ . '/../config/gitlab-deploy.php', 'gitlab-deploy');
        $this->app->bind('gitlab_deploy', function ($app) {
            return new GitlabDeploy;
        });
    }
}
