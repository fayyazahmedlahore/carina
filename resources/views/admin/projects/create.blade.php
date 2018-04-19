@extends("layouts.app")
@section("content")


<section class="panel">
    <header class="panel-heading">
        Add Supplier
        <span class="tools pull-right">
            <a class="fa fa-chevron-down" href="javascript:;"></a>
            <a class="fa fa-cog" href="javascript:;"></a>
            <a class="fa fa-times" href="javascript:;"></a>
        </span>
    </header>
    <div class="panel-body">
        <div class="form">
            {!! Form::open(array('route' => 'admin.payments.store', 'class' => 'cmxform form-horizontal')) !!}

            <div class="form-group">
                {{ Form::label('Project Name', null, ['class' => 'control-label col-lg-3']) }}
                <div class="col-lg-6">
                    {{ Form::text('project_name', null, ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('City Number', null, ['class' => 'control-label col-lg-3']) }}
                <div class="col-lg-6">
                    {{ Form::text('city_number', null, ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('Project Status', null, ['class' => 'control-label col-lg-3']) }}
                <div class="col-lg-6">
                    {{ Form::text('status', null, ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('Contract', null, ['class' => 'control-label col-lg-3']) }}
                <div class="col-lg-6">
                    {{ Form::text('contract', null, ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-offset-3 col-lg-6">
                    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</section>

<script type="text/javascript" src="<?php echo url('/'); ?>/js/jquery.validate.min.js"></script>
<!--this page script-->
<script>
    var Script = function () {

        $().ready(function() {
            $("#supplier_form").validate({
                rules: {
                    name: "required",
                    phone_number: "required",
                    email: "required",
                    contact_person_name: "required",
                }
            });
        });
    }();
</script>

@stop