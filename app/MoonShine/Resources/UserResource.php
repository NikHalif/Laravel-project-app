<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use Leeto\MoonShine\Resources\Resource;
use Leeto\MoonShine\Fields\ID;

class UserResource extends Resource
{
	public static string $model = User::class;

	public static string $title = 'Пользователи';

	public function fields(): array
	{
		return [
            ID::make()->sortable(),
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [];
    }
}
