<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    function save(Request $request)
    {
        DB::beginTransaction();
        if ($request->ajax()) {
            if ($request->task_id == '') {
                $request->validate([
                    'title' => 'required|not_regex:/<(?:(?!input)[^>])*>(?:<\\/[^>]*>)?/|unique:tasks,title,NULL,id,project_id,' . $request->project_id,
                    'description_task' => 'required|not_regex:/<(?:(?!input)[^>])*>(?:<\\/[^>]*>)?/',
                ], ['unique' => 'Already exist in record.', 'required' => 'This field is required.', 'not_regex:invalid input formate']);
                $Tasks = new Tasks();
                $priority = Tasks::where('project_id', $request->project_id)->max('priority');
                $Tasks->priority = is_null($priority) ? 1 : $priority + 1;
                $return['message'] = 'New recored insered successfully';
            } else {
                $request->validate([
                    'title' => 'required|not_regex:/<(?:(?!input)[^>])*>(?:<\\/[^>]*>)?/|unique:tasks,title,' . $request->task_id . ',id,project_id,' . $request->project_id,
                    'description_task' => 'required|not_regex:/<(?:(?!input)[^>])*>(?:<\\/[^>]*>)?/',
                ], ['unique' => 'Already exist in record.', 'required' => 'This field is required.', 'not_regex:invalid input formate']);
                $Tasks = Tasks::findorfail($request->task_id);
                $return['message'] = 'Recored updated successfully';
            }
            try {
                $Tasks->project_id = $request->project_id;
                $Tasks->title = $request->title;
                $Tasks->description = $request->description_task;
                $Tasks->save();
                $return['status'] = 1;
                DB::commit();
                echo json_encode($return);
            } catch (\Exception $e) {
                DB::rollback();
                $return['message'] = 'Something went wrong';
                $return['status'] = 0;
                echo json_encode($e);
            }
        } else {
            abort(404);
        }
    }

    function get()
    {
        $data = Tasks::with('project')->get();
        echo json_encode($data->toArray());
    }

    function check(Request $request)
    {
        if ($request->checked == 'true') {
            $Tasks = Tasks::find($request->id);
            $Tasks->isCompleted  = 'Yes';
            $Tasks->save();
        } else {
            $Tasks = Tasks::find($request->id);
            $Tasks->isCompleted  = 'No';
            $Tasks->save();
        }
    }

    function detail($id, Request $request)
    {
        $data = Tasks::findOrFail($id)->toArray();
        return json_encode($data);
    }
}
