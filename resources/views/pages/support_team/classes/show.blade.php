@extends('layouts.master')
@section('page_title', 'Class ( '.$class_students[0]->my_class->name .' ) Information')
@section('content')

    <div class="content">

        <div id="ajax-alert" style="display: none"></div>

        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 class="card-title">{{$class_students[0]->my_class->name}}</h6>

                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <table class="table datatable-button-html5-columns dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S/N: activate to sort column descending">S/N</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Class Type: activate to sort column ascending">Section</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Class Type: activate to sort column ascending">Teacher</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($class_students as $index=>$row)
                        <tr role="row" class="odd">
                            <td class="sorting_1">{{$index + 1}}</td>
                            <td>{{$row->user->name}}</td>
                            <td>{{$row->section->name}}</td>
                            <td>{{optional($row->section->teacher)->name ?? '---'}}</td>
                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-left">
                                            @if(Qs::userIsTeamSA())
                                                <a href="{{ route('students.edit', Qs::hash($row->user->id)) }}" class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
                                            @endif

                                            <a id="6" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                            <form method="post" id="item-delete-6" action="http://127.0.0.1:8000/classes/6" class="hidden"><input type="hidden" name="_token" value="5Z2RUvGnoRPdsEiSDk9tzkJrELP4aM9TnJwlhp9G"> <input type="hidden" name="_method" value="delete"></form>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
