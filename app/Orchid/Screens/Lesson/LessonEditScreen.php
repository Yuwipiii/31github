<?php

namespace App\Orchid\Screens\Lesson;

use App\Models\Lesson;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class LessonEditScreen extends Screen
{
    public $lesson;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Lesson $lesson): iterable
    {
        $this->lesson = $lesson;
        return [
            'lesson' => $lesson
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'LessonEditScreen';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Изменить')->method('update', ['lesson' => $this->lesson->id]),
            Link::make('Назад')->route('platform.systems.lessons')
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::rows(
                [
                    Input::make('name')
                        ->type('string')
                        ->title(__('Название'))
                        ->value($this->lesson->name),

                ]
            )
        ];
    }

    public function update()
    {

    }
}
