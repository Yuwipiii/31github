<?php

namespace App\Orchid\Layouts\Lesson;

use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class LessonListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'lessons';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name',"Название")->render(function ($lesson){
                return Link::make($lesson)
                    ->route('platform.lessons.view',['lesson'=>$lesson]);
            }),
            TD::make('slug',"Slug")->render(function ($lesson){
                return $lesson->slug;
            }),
            TD::make('credit','Кредит')->render(function ($lesson){
                return $lesson->credit;
            }),
            TD::make('teacher','Учитель')->render(function ($lesson){
                return $lesson->teacher->name;
            })

        ];
    }
}
