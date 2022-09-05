<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function index()
    {
        return view('main');
    }
    function getAllProjects()
    {
        $data['allProjects'] = Projects::all()->toArray();
        echo json_encode($data);
    }
    function save(Request $request)
    {
        DB::beginTransaction();
        if ($request->ajax()) {
            if ($request->project_id == '') {
                $request->validate([
                    'name' => 'required|not_regex:/<(?:(?!input)[^>])*>(?:<\\/[^>]*>)?/|unique:projects',
                    'description' => 'required|not_regex:/<(?:(?!input)[^>])*>(?:<\\/[^>]*>)?/',
                ], ['unique' => 'Already exist in record.', 'required' => 'This field is required.', 'not_regex:invalid input formate']);
                $Project = new Projects();
                $return['message'] = 'New recored insered successfully';
            } else {
                $request->validate([
                    'name' => 'required|not_regex:/<(?:(?!input)[^>])*>(?:<\\/[^>]*>)?/|unique:projects,name,' . $request->project_id . ',id',
                    'description' => 'required|not_reg0ex:/<(?:(?!input)[^>])*>(?:<\\/[^>]*>)?/',
                ], ['unique' => 'Already exist in record.', 'required' => 'This field is required.', 'not_regex:invalid input formate']);
                $Project = Projects::findorfail($request->project_id);
                $return['message'] = 'Recored updated successfully';
            }
            try {
                $Project->name = $request->name;
                $Project->description = $request->description;
                $Project->save();
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
}
