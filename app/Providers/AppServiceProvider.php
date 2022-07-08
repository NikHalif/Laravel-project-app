<?php

namespace App\Providers;

use App\MoonShine\Resources\GroupResource;
use Illuminate\Support\ServiceProvider;

use App\MoonShine\Resources\UserResource;
use App\MoonShine\Resources\ProjectResource;
use Leeto\MoonShine\MoonShine;
use Leeto\MoonShine\Resources\MoonShineUserResource;
use Leeto\MoonShine\Resources\MoonShineUserRoleResource;
use Leeto\MoonShine\Menu\MenuGroup;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        app(MoonShine::class)->registerResources([
        MenuGroup::make('Управление', [
            MoonShineUserResource::class, // Системный раздел с администраторами
            //MoonShineUserRoleResource::class // Системный раздел с ролями администраторов
            ])->icon('app'),
            /*MenuGroup::make('Пользователи', [
            UserResource::class,
        ])->icon('users'),*/
        MenuGroup::make('Проекты', [
            ProjectResource::class,
            GroupResource::class,
        ])->icon('bookmark'),
        ]);
    }
}
