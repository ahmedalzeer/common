@extends('layouts.master')
@section('page_title', 'Manage TimeTables')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">@lang('app.manage_timetables')</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                @if(Qs::userIsTeamSA())
                <li class="nav-item"><a href="#add-tt" class="nav-link active" data-toggle="tab">@lang('app.create_timetable')</a></li>
                @endif
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">@lang('app.show_timeTables')</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        @foreach($my_classes as $mc)
                            <a href="#ttr{{ $mc->id }}" class="dropdown-item" data-toggle="tab">{{ $mc->name }}</a>
                        @endforeach
                    </div>
                </li>
            </ul>


            <div class="tab-content">

                @if(Qs::userIsTeamSA())
                <div class="tab-pane fade show active" id="add-tt">
                   <div class="col-md-8">
                       <form class="ajax-store" method="post" action="{{ route('ttr.store') }}">
                           @csrf
                           <div class="form-group row">
                               <label class="col-lg-3 col-form-label font-weight-semibold">@lang('app.name') <span class="text-danger">*</span></label>
                               <div class="col-lg-9">
                                   <input name="name" value="{{ old('name') }}" required type="text" class="form-control" placeholder="Name of TimeTable">
                               </div>
                           </div>

                           <div class="form-group row">
                               <label for="my_class_id" class="col-lg-3 col-form-label font-weight-semibold">@lang('app.class') <span class="text-danger">*</span></label>
                               <div class="col-lg-9">
                                   <select required data-placeholder="Select Class" class="form-control select" name="my_class_id" id="my_class_id">
                                       @foreach($my_classes as $mc)
                                           <option {{ old('my_class_id') == $mc->id ? 'selected' : '' }} value="{{ $mc->id }}">{{ $mc->name }}</option>
                                       @endforeach
                                   </select>
                               </div>
                           </div>

                           <div class="form-group row">
                               <label for="exam_id" class="col-lg-3 col-form-label font-weight-semibold">@lang('app.type_class_or_exam')</label>
                               <div class="col-lg-9">
                                   <select class="select form-control" name="exam_id" id="exam_id">
                                       <option value="">@lang('app.class_timetable')</option>
                                       @foreach($exams as $ex)
                                           <option {{ old('exam_id') == $ex->id ? 'selected' : '' }} value="{{ $ex->id }}">{{ $ex->name }}</option>
                                       @endforeach
                                   </select>
                               </div>
                           </div>


                           <div class="text-right">
                               <button id="ajax-btn" type="submit" class="btn btn-primary">@lang('app.submit_form')<i class="icon-paperplane ml-2"></i></button>
                           </div>
                       </form>
                   </div>

                </div>
                @endif

                @foreach($my_classes as $mc)
                    <div class="tab-pane fade" id="ttr{{ $mc->id }}">                         <table class="table datatable-button-html5-columns">
                            <thead>
                            <tr>
                                <th>@lang('app.s/n')</th>
                                <th>@lang('app.name')</th>
                                <th>@lang('app.class')</th>
                                <th>@lang('app.type')</th>
                                <th>@lang('app.year')</th>
                                <th>@lang('app.action')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tt_records->where('my_class_id', $mc->id) as $ttr)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ttr->name }}</td>
                                    <td>{{ $ttr->my_class->name }}</td>
                                    <td>{{ ($ttr->exam_id) ? $ttr->exam->name : 'Class TimeTable' }}
                                    <td>{{ $ttr->year }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right">
                                                    {{--View--}}
                                                    <a href="{{ route('ttr.show', $ttr->id) }}" class="dropdown-item"><i class="icon-eye"></i> @lang('app.view')</a>

                                                    @if(Qs::userIsTeamSA())
                                                    {{--Manage--}}
                                                    <a href="{{ route('ttr.manage', $ttr->id) }}" class="dropdown-item"><i class="icon-plus-circle2"></i> @lang('app.manage')</a>
                                                    {{--Edit--}}
                                                    <a href="{{ route('ttr.edit', $ttr->id) }}" class="dropdown-item"><i class="icon-pencil"></i> @lang('app.edit')</a>
                                                    @endif

                                                    {{--Delete--}}
                                                    @if(Qs::userIsSuperAdmin())
                                                        <a id="{{ $ttr->id }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> @lang('app.delete')</a>
                                                        <form method="post" id="item-delete-{{ $ttr->id }}" action="{{ route('ttr.destroy', $ttr->id) }}" class="hidden">@csrf @method('delete')</form>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    {{--TimeTable Ends--}}

@endsection
