<?php

namespace App\Nova\Actions;

use App\Exports\CardsExport;
use App\Models\Card;
use App\Models\Course;
use Carbon\Carbon;
use Collator;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\Text;
use Maatwebsite\Excel\Facades\Excel;

class GenerateCards extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */

    public function handleResult(ActionFields $fields,$results)
    {
        //
        $ids = collect($results)->flatten();

        $models = DB::table('cards')
        ->leftJoin('courses', 'courses.id', '=', 'cards.course_id')
        ->select('cards.serial_number', 'cards.password' , 'courses.name' )
        ->whereIn('cards.id' ,$ids)
        ->get();

        $file_name = 'cards-' . Carbon::now()->format('Y-m-d') . '.Xlsx' ;

        Excel::store(new CardsExport($models) ,"/$file_name"  ,'public', 'Xlsx');

        Card::whereIn('id' ,$ids)->update(['is_printed'=>'1']);

        return Action::download(asset("storage/$file_name"), $file_name);

    }
    public function handle(ActionFields $fields, Collection $models)
    {
        //

        return $models->pluck('id')->toArray();


    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [];
    }
}
