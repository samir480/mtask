 @extends('layout')
 @section('main')
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0">Dashboard</h1>
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->
     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
             <div class="row">
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-info">
                         <div class="inner">
                             <h3 id="project_count">processing...</h3>

                             <p>Projects</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-stats-bars"></i>
                         </div>
                         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-success">
                         <div class="inner">
                             <h3 id="task_count">processing...</sup></h3>

                             <p>Tasks</p>
                         </div>
                         <div class="icon">
                             <i class="ion ion-stats-bars"></i>
                         </div>
                         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
             </div>
             <!-- /.row -->
             <!-- Main row -->
             <div class="row">
                 <!-- Left col -->
                 <section class="col-lg-12 connectedSortable">
                     <!-- TO DO List -->
                     <div class="card">
                         <div class="card-header">
                             <h3 class="card-title">
                                 <i class="ion ion-clipboard mr-1"></i>
                                 Task List
                             </h3>
                             <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-plus"></i> Add Project</button>
                             {{-- <div class="card-tools">
                                        <ul class="pagination pagination-sm">
                                            <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                                            <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                                        </ul>
                                    </div> --}}
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <ul class="todo-list" data-widget="todo-list" id="task_list">
                                 {{-- <li>
                                     <!-- drag handle -->
                                     <span class="handle">
                                         <i class="fas fa-ellipsis-v"></i>
                                         <i class="fas fa-ellipsis-v"></i>
                                     </span>
                                     <!-- checkbox -->
                                     <div class="icheck-primary d-inline ml-2">
                                         <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                         <label for="todoCheck1"></label>
                                     </div>
                                     <!-- todo text -->
                                     <span class="text">Design a nice theme</span>
                                     <!-- Emphasis label -->
                                     <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                                     <!-- General tools such as edit or delete-->
                                     <div class="tools">
                                         <i class="fas fa-edit"></i>
                                         <i class="fas fa-trash-o"></i>
                                     </div>
                                 </li>
                                 <li>
                                     <span class="handle">
                                         <i class="fas fa-ellipsis-v"></i>
                                         <i class="fas fa-ellipsis-v"></i>
                                     </span>
                                     <div class="icheck-primary d-inline ml-2">
                                         <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                                         <label for="todoCheck2"></label>
                                     </div>
                                     <span class="text">Make the theme responsive</span>
                                     <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                                     <div class="tools">
                                         <i class="fas fa-edit"></i>
                                         <i class="fas fa-trash-o"></i>
                                     </div>
                                 </li>
                                 <li>
                                     <span class="handle">
                                         <i class="fas fa-ellipsis-v"></i>
                                         <i class="fas fa-ellipsis-v"></i>
                                     </span>
                                     <div class="icheck-primary d-inline ml-2">
                                         <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                         <label for="todoCheck3"></label>
                                     </div>
                                     <span class="text">Let theme shine like a star</span>
                                     <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                                     <div class="tools">
                                         <i class="fas fa-edit"></i>
                                         <i class="fas fa-trash-o"></i>
                                     </div>
                                 </li>
                                 <li>
                                     <span class="handle">
                                         <i class="fas fa-ellipsis-v"></i>
                                         <i class="fas fa-ellipsis-v"></i>
                                     </span>
                                     <div class="icheck-primary d-inline ml-2">
                                         <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                         <label for="todoCheck4"></label>
                                     </div>
                                     <span class="text">Let theme shine like a star</span>
                                     <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                                     <div class="tools">
                                         <i class="fas fa-edit"></i>
                                         <i class="fas fa-trash-o"></i>
                                     </div>
                                 </li>
                                 <li>
                                     <span class="handle">
                                         <i class="fas fa-ellipsis-v"></i>
                                         <i class="fas fa-ellipsis-v"></i>
                                     </span>
                                     <div class="icheck-primary d-inline ml-2">
                                         <input type="checkbox" value="" name="todo5" id="todoCheck5">
                                         <label for="todoCheck5"></label>
                                     </div>
                                     <span class="text">Check your messages and notifications</span>
                                     <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                                     <div class="tools">
                                         <i class="fas fa-edit"></i>
                                         <i class="fas fa-trash-o"></i>
                                     </div>
                                 </li>
                                 <li>
                                     <span class="handle">
                                         <i class="fas fa-ellipsis-v"></i>
                                         <i class="fas fa-ellipsis-v"></i>
                                     </span>
                                     <div class="icheck-primary d-inline ml-2">
                                         <input type="checkbox" value="" name="todo6" id="todoCheck6">
                                         <label for="todoCheck6"></label>
                                     </div>
                                     <span class="text">Let theme shine like a star</span>
                                     <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                                     <div class="tools">
                                         <i class="fas fa-edit"></i>
                                         <i class="fas fa-trash-o"></i>
                                     </div>
                                 </li> --}}
                             </ul>
                         </div>
                         <!-- /.card-body -->
                         <div class="card-footer clearfix">
                             <button type="button" class="btn btn-primary float-right" onClick="addTask()"><i class="fas fa-plus"></i> Add Task</button>
                         </div>
                     </div>
                     <!-- /.card -->
                 </section>
                 <!-- /.Left col -->

             </div>
             <!-- /.row (main row) -->
         </div><!-- /.container-fluid -->
     </section>
     <!-- /.content -->
 </div>
 <div class="modal fade" id="modal-lg" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">New Project</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             {{ Form::open(['url' => '#', 'name' => 'validateForm', 'id' => 'validateForm', 'enctype' => 'multipart/form-data', 'class' => 'form-validate']) }}

             <div class="modal-body">
                 <div class="form-group">
                     <label for="exampleInputEmail1">Project Name</label>
                     <input type="text" name="name" id="name" class="form-control" placeholder="Enter project name">
                 </div>
                 <div class="form-group">
                     <label for="exampleInputEmail1">Description</label>
                     <textarea class="form-control" rows="3" placeholder="Enter Description ..." name="description" id="description"></textarea>
                 </div>
             </div>
             <div class="modal-footer justify-content-between">
                 {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
                 <button type="submit" class="btn btn-primary" id="submit">Save changes</button>
             </div>
             {{ Form::close() }}
         </div>

     </div>

 </div>
 <div class="modal fade" id="task-modal" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title" id="task-title">New Task</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             {{ Form::open(['url' => '#', 'name' => 'validateForm2', 'id' => 'validateForm2', 'enctype' => 'multipart/form-data', 'class' => 'form-validate']) }}
             <input type="hidden" name="task_id" id="task_id">
             <div class="modal-body">
                 <div class="form-group">
                     <label for="exampleInputEmail1">Project</label>
                     <select class="form-control select2" style="width: 100%;" name="project_id" id="project_id">

                     </select>
                 </div>
                 <div class="form-group">
                     <label for="exampleInputEmail1">Task Title</label>
                     <input type="text" name="title" id="title" class="form-control" placeholder="Enter task title">
                 </div>
                 <div class="form-group">
                     <label for="exampleInputEmail1">Description</label>
                     <textarea class="form-control" rows="3" placeholder="Enter Description ..." name="description_task" id="description_task"></textarea>
                 </div>
             </div>
             <div class="modal-footer justify-content-between">
                 {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
                 <button type="submit" class="btn btn-primary" id="submit">Save changes</button>
             </div>
             {{ Form::close() }}
         </div>

     </div>

 </div>
 @endsection
 @section('js')
 <script>
     var Toast = Swal.mixin({
         toast: true
         , position: 'top-end'
         , showConfirmButton: false
         , timer: 3000
     });
     $(document).ready(function() {
         $('.select2').select2({
             theme: 'bootstrap4'
         })
         // jQuery UI sortable for the todo list
         $('.todo-list').sortable({
             placeholder: 'sort-highlight'
             , handle: '.handle'
             , forcePlaceholderSize: true
             , zIndex: 999999
         })

         jQuery.validator.setDefaults({
             debug: true
             , success: "valid"
         });

         $("#validateForm").validate({
             ignore: ".ignore"
             , rules: {
                 name: {
                     required: true
                 }
                 , description: {
                     required: true
                 }
             }
             , submitHandler: function(form) {
                 $("#submit").html('<span> Processing...</span>');
                 $("#submit").attr('disabled', true);

                 var formData = new FormData($("#validateForm")[0]);
                 $.ajax({
                     url: "{{route('save.project')}}"
                     , type: 'POST'
                     , data: formData
                     , processData: false
                     , contentType: false
                     , dataType: "json"
                     , success: function(response) {
                         if (response.status == 0) {
                             $("#submit").html('Save Changes');
                             $("#submit").attr('disabled', false);
                             Toast.fire({
                                 icon: 'error'
                                 , title: response.message
                             });
                         } else {
                             Toast.fire({
                                 icon: 'success'
                                 , title: response.message
                             });
                             $("#submit").attr('disabled', false);
                             $("#submit").html('Save Changes');
                             $("#modal-lg").modal('hide');
                             $("#validateForm").trigger('reset');
                             getCount();
                         }
                     }
                     , error: function(jqXHR, textStatus, errorThrown) {
                         var flag = 0;
                         $("#submit").html('Save Changes');
                         $("#submit").attr('disabled', false);
                         $.each(jqXHR.responseJSON.errors, function(index, data) {
                             if (flag == 0) {
                                 $('input[name="' + index + '"]').focus();
                                 flag = 1;
                             }
                             if (document.getElementsByName(index)[0]
                                 .tagName == "INPUT" && document
                                 .getElementsByName(index)[0].type != 'radio'
                             ) {
                                 $('input[name="' + index + '"]').after(
                                     '<label id="' + index +
                                     '-error" class="error" for="' +
                                     index + '">' + data + '</label>');
                             } else if (document.getElementsByName(index)[0]
                                 .tagName == "SELECT") {
                                 $('select[name="' + index + '"]').after(
                                     '<label id="' + index +
                                     '-error" class="error" for="' +
                                     index + '">' + data + '</label>');
                             } else if (document.getElementsByName(index)[0]
                                 .tagName == "TEXTAREA") {
                                 $('textarea[name="' + index + '"]').after(
                                     '<label id="' + index +
                                     '-error" class="error" for="' +
                                     index + '">' + data + '</label>');
                             } else if (document.getElementsByName(index)[0]
                                 .tagName == "INPUT" && document
                                 .getElementsByName(index)[0].type == 'radio'
                             ) {
                                 $('input[name="' + index + '"]').after(
                                     '<label id="' + index +
                                     '-error" class="error" for="' +
                                     index + '">' + data + '</label>');
                             }
                         });
                     }
                 }); //ajax
             }
         });

         $("#validateForm2").validate({
             ignore: ".ignore"
             , rules: {
                 project_id: {
                     required: true
                 }
                 , title: {
                     required: true
                 }
                 , description_task: {
                     required: true
                 }
             }
             , submitHandler: function(form) {
                 // return false;
                 $("#submit2").html('<span> Processing...</span>');
                 $("#submit2").attr('disabled', true);

                 var formData = new FormData($("#validateForm2")[0]);
                 $.ajax({
                     url: "{{route('save.task')}}"
                     , type: 'POST'
                     , data: formData
                     , processData: false
                     , contentType: false
                     , dataType: "json"
                     , success: function(response) {
                         if (response.status == 0) {
                             $("#submit2").html('Save Changes');
                             $("#submit2").attr('disabled', false);
                             Toast.fire({
                                 icon: 'error'
                                 , title: response.message
                             });
                         } else {
                             Toast.fire({
                                 icon: 'success'
                                 , title: response.message
                             });
                             $("#submit2").attr('disabled', false);
                             $("#submit2").html('Save Changes');
                             $("#task-modal").modal('hide');
                             $("#task_id").val('');
                             $("#validateForm2").trigger('reset');
                             getTasks();
                             getCount();
                         }
                     }
                     , error: function(jqXHR, textStatus, errorThrown) {
                         var flag = 0;
                         $("#submit2").html('Save Changes');
                         $("#submit2").attr('disabled', false);
                         $.each(jqXHR.responseJSON.errors, function(index, data) {
                             if (flag == 0) {
                                 $('input[name="' + index + '"]').focus();
                                 flag = 1;
                             }
                             if (document.getElementsByName(index)[0]
                                 .tagName == "INPUT" && document
                                 .getElementsByName(index)[0].type != 'radio'
                             ) {
                                 $('input[name="' + index + '"]').after(
                                     '<label id="' + index +
                                     '-error" class="error" for="' +
                                     index + '">' + data + '</label>');
                             } else if (document.getElementsByName(index)[0]
                                 .tagName == "SELECT") {
                                 $('select[name="' + index + '"]').after(
                                     '<label id="' + index +
                                     '-error" class="error" for="' +
                                     index + '">' + data + '</label>');
                             } else if (document.getElementsByName(index)[0]
                                 .tagName == "TEXTAREA") {
                                 $('textarea[name="' + index + '"]').after(
                                     '<label id="' + index +
                                     '-error" class="error" for="' +
                                     index + '">' + data + '</label>');
                             } else if (document.getElementsByName(index)[0]
                                 .tagName == "INPUT" && document
                                 .getElementsByName(index)[0].type == 'radio'
                             ) {
                                 $('input[name="' + index + '"]').after(
                                     '<label id="' + index +
                                     '-error" class="error" for="' +
                                     index + '">' + data + '</label>');
                             }
                         });
                     }
                 }); //ajax
             }
         });
     });


     function addTask() {
         $("#task_id").val('');
         $("#validateForm2").trigger('reset');
         //get all projects
         $.ajax({
             url: "{{ route('projects.fetch') }}"
             , type: 'GET'
             , dataType: "json"
             , success: function(response) {
                 html = "<option value=''>Select Project</option>";
                 $(response.allProjects).each(function(index, element) {
                     html += "<option value='" + element['id'] + "' >" + element['name'] + "</option>";
                 });
                 $("#project_id").html(html);
                 $("#project_id").select2({
                     theme: 'bootstrap4'
                 });
                 $("#task-modal").modal('show');
             }
         });
     }

     getTasks();

     function getTasks() {
         //get all projects
         $.ajax({
             url: "{{ route('get.task') }}"
             , type: 'GET'
             , dataType: "json"
             , success: function(response) {
                 html = "";
                 if (response.length > 0) {

                     $(response).each(function(index, element) {
                         var checked = element['isCompleted'] == 'Yes' ? 'checked' : '';
                         var done = element['isCompleted'] == 'Yes' ? 'done' : '';
                         html += '<li class="">' +
                             '<span class="handle">' +
                             '<i class="fas fa-ellipsis-v"></i>' +
                             '<i class="fas fa-ellipsis-v"></i>' +
                             '</span>' +
                             '<div class="icheck-primary d-inline ml-2">' +
                             '<input type="checkbox" onChange="check(this,' + element['id'] + ')" value="" name="todo1" id="todoCheck' + index + '" ' + checked + ' >' +
                             '<label for="todoCheck' + index + '"></label>' +
                             '</div>' +
                             '<span class="text"> ' + element['title'] + ' (' + element['project']['name'] + ')</span>' +
                             '<small class="badge badge-danger"><i class="far fa-clock"></i> ' + element['created_at'] + '</small>' +
                             '<div class="tools">' +
                             '<i class="fas fa-edit" onClick="editTask(' + element['id'] + ')"></i>' +
                             '<i class="fa fa-trash" onClick="deleteTask(' + element['id'] + ')"></i>' +
                             '</div>' +
                             '</li>';
                     });
                 } else {
                     html = "No task found.";
                 }
                 $("#task_list").html(html);
             }
         });
     }


     function check(d, id) {
         //get all projects
         $.ajax({
             url: "{{ route('check.task') }}"
             , type: 'POST'
             , dataType: "json"
             , data: {
                 'id': id
                 , 'checked': d.checked
                 , _token: "{{ csrf_token() }}"
             }
             , success: function(response) {}
         });
     }


     function deleteTask(id) {
         //get all projects
         $.ajax({
             url: "{{ route('delete.task','') }}/" + id
             , type: 'delete'
             , dataType: "json"
             , data: {
                 _token: "{{ csrf_token() }}"
             }
             , success: function(response) {
                 if (response.status == 0) {
                     Toast.fire({
                         icon: 'error'
                         , title: response.message
                     });
                 } else {
                     Toast.fire({
                         icon: 'success'
                         , title: response.message
                     });
                     getTasks();
                 }
             }
         });
     }

     function editTask(id) {


         $.ajax({
             url: "{{ route('projects.fetch') }}"
             , type: 'GET'
             , dataType: "json"
             , success: function(response) {
                 html = "<option value=''>Select Project</option>";
                 $(response.allProjects).each(function(index, element) {
                     html += "<option value='" + element['id'] + "' >" + element['name'] + "</option>";
                 });
                 $("#project_id").html(html);
                 $("#project_id").select2({
                     theme: 'bootstrap4'
                 });
             }
         });


         $.ajax({
             url: "{{ route('get.task.details','') }}/" + id
             , type: 'GET'
             , dataType: "json"
             , success: function(response) {
                 $("#task_id").val(id);
                 $("#title").val(response.title);
                 $("#description_task").val(response.description);
                 $("#project_id").val(response.project_id).select2({
                     theme: 'bootstrap4'
                 });
                 $("#task-modal").modal('show');
             }
         });
     }
     getCount();

     function getCount() {
         $.ajax({
             url: "{{ route('dashboard.count') }}"
             , type: 'GET'
             , dataType: "json"
             , success: function(response) {
                 $("#project_count").html(response.project_count);
                 $("#task_count").html(response.task_count);
             }
         });
     }

 </script>
 @endsection
