<?php

namespace App\Orchid\Screens\Lesson;

use App\Models\Lesson;
use Illuminate\Http\Client\Request;
use Illuminate\Http\RedirectResponse;
use Orchid\Alert\Alert;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\Sight;
use Orchid\Support\Facades\Layout;

class LessonViewScreen extends Screen
{
    private Lesson $lesson;

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
        return 'LessonViewScreen';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Изменить'))
                ->icon('pencil')
                ->route('platform.systems.lesson.edit',[$this->lesson]),
            Button::make(__('Удалить'))->icon('trash')
                ->method('delete', ['lesson' => $this->lesson->id])->confirm()
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
            Layout::legend('lesson', [
                Sight::make(__('Название'))
                    ->render(function ($lesson) {
                        return $lesson->name;
                    }),
                Sight::make(__('Сокращение'))
                    ->render(function ($lesson) {
                        return $lesson->slug;
                    }),

            ])
        ];
    }


    public function delete(Request $request): RedirectResponse
    {
        $lesson = Lesson::find($request->lesson);
        $lesson->delete() ? Alert::info(__('Вы успешно удалили урок')) : Alert::warning(__('Ошибка при удаление'));
        return redirect()->route('platform.lessons.list');
    }
}
