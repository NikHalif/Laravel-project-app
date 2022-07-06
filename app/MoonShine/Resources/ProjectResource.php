<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;

use Leeto\MoonShine\Resources\Resource;
use Leeto\MoonShine\Fields\ID;
use Leeto\MoonShine\Fields\Text;
use Leeto\MoonShine\Fields\Image;

class ProjectResource extends Resource
{
	public static string $model = \App\Models\Project::class;

	public static string $title = 'Проекты';

	public function fields(): array
	{
		return [
            ID::make()->sortable(),
            Text::make('Название', 'name')
            ->required(),
            Image::make('Фото работы', 'images')
            ->dir('projects/images') // Директория где будут хранится файлы в storage (по умолчанию /)
            ->disk('public') // filesystems disk
            ->allowedExtensions(['jpg', 'gif', 'png'])
            ->multiple()
            ->removable()
            ->disableDownload()
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
