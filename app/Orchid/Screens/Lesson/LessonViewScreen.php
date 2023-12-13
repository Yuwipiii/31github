<?php

namespace App\Orchid\Screens\Lesson;

use App\Models\Lesson;
use Orchid\Screen\Screen;

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
        return [];
    }
}
