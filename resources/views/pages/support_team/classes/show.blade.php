@extends('layouts.master')
@section('page_title', 'Class '.$class_students .'Information')
@section('content')

    <div class="content">

        <div id="ajax-alert" style="display: none"></div>

        <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 class="card-title">Please fill The form Below To Admit A New Student</h6>

                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <form id="ajax-reg" method="post" enctype="multipart/form-data" class="wizard-form steps-validation wizard clearfix" action="http://127.0.0.1:8000/students" data-fouc="" role="application" novalidate="novalidate" style=""><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="ajax-reg-t-0" href="#ajax-reg-h-0" aria-controls="ajax-reg-p-0" class=""><span class="current-info audible">current step: </span><span class="number">1</span> Personal data</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="ajax-reg-t-1" href="#ajax-reg-h-1" aria-controls="ajax-reg-p-1" class="disabled"><span class="number">2</span> Student Data</a></li></ul></div><div class="content clearfix">
                    <input type="hidden" name="_token" value="oTMNJTrBdmANQc91uyeRs3wqLmJH8BlodzfR4YAW">                <h6 id="ajax-reg-h-0" tabindex="-1" class="title current">Personal data</h6>
                    <fieldset id="ajax-reg-p-0" role="tabpanel" aria-labelledby="ajax-reg-h-0" class="body current" aria-hidden="false">
                        <div class="row">
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
@endsection
