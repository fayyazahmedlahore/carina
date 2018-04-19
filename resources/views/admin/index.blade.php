@extends("layouts.app")
@section("content")

<div class="row">
    <div class="col-lg-12">
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
                    <form class="cmxform form-horizontal" id="supplier_form" method="POST" action="" >
                        <div class="form-group ">
                            <label for="firstname" class="control-label col-lg-3">Bussiness Name</label>
                            <div class="col-lg-6">
                                <input class=" form-control" name="name" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="lastname" class="control-label col-lg-3">Phone Number</label>
                            <div class="col-lg-6">
                                <input class=" form-control" name="number" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="username" class="control-label col-lg-3">Email Addres</label>
                            <div class="col-lg-6">
                                <input class="form-control " name="email" type="email" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="password" class="control-label col-lg-3">Contact Person</label>
                            <div class="col-lg-6">
                                <input class="form-control " name="contact_person" type="password" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>


<script type="text/javascript" src="<?php echo url('/'); ?>/js/jquery.validate.min.js"></script>

<!--this page script-->
<script>
    var Script = function () {

        $().ready(function() {
            $("#supplier_form").validate({
                rules: {
                    name: "required",
                    number: "required",
                    email: "required",
                    contact_person: "required",
                }
            });
        });


    }();
</script>

@stop