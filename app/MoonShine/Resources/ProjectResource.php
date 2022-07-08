<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;

use Leeto\MoonShine\Resources\Resource;
use Leeto\MoonShine\Fields\WYSIWYG;
use Leeto\MoonShine\Fields\ID;
use Leeto\MoonShine\Fields\Text;
use Leeto\MoonShine\Fields\Image;
use Leeto\MoonShine\Fields\BelongsTo;

class ProjectResource extends Resource
{
	public static string $model = \App\Models\Project::class;

	public static string $title = 'Проекты';

    public string $titleField = 'name';

	public function fields(): array
	{
		return [
            ID::make()->sortable(),
            Text::make('Название', 'name')
            ->required(),
            WYSIWYG::make('Описание', 'other')
            ->required(),
            BelongsTo::make('Группа', 'group', new GroupResource())
            ->searchable(),
            Image::make('Фото работы', 'images')
            ->dir('projects/images') // Директория где будут хранится файлы в storage (по умолчанию /)
            ->disk('public') // filesystems disk
            ->allowedExtensions(['jpg', 'png'])
            ->multiple()
            ->removable()
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
        return [
            BelongsTo::make('Группа', 'group', new GroupResource())
            ->searchable(),
        ];
    }

    public function actions(): array
    {
        return [];
    }
}
