<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;

use Leeto\MoonShine\Resources\Resource;
use Leeto\MoonShine\Fields\ID;
use Leeto\MoonShine\Fields\Text;

class GroupResource extends Resource
{
	public static string $model = \App\Models\Group::class;

	public static string $title = 'Группы';

    public string $titleField = 'name';

	public function fields(): array
	{
		return [
            ID::make()->sortable(),
            Text::make('Название', 'name')
            ->required(),
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id', 'name'];
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
