<?php

namespace App\Orchid\Screens\Lesson;

use App\Models\Lesson;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;

class LessonViewScreen extends Screen
{
    private Lesson $lesson ;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Lesson $lesson): iterable
    {
        $this->lesson = $lesson;
        return [
            'lesson'=>$lesson
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'LessonViewScreen';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            TD::make('name',"Название")->render(function ($lesson){
                return $lesson->name;
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
