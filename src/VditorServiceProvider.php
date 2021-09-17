<?php

namespace iPear\Vditor;

use Encore\Admin\Admin;
use Encore\Admin\Form;
use Illuminate\Support\ServiceProvider;

class VditorServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Vditor $extension)
    {
        if (! Vditor::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'laravel-admin-ext-vditor');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/vditor')],
                'laravel-admin-ext-vditor'
            );
        }

        Admin::booting(function () {
            Form::extend('vditor', Editor::class);
        });

    }
}
