@extends('base')

@section('top-white')
    <h1>Newsletter</h1>
@stop


@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>
                    Newsletter
                </h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">
                {!! Form::model($item, array(
                                        'role' => 'form',
                                        'name' => 'bookform', 'id' => 'bookform',
                                        'url' => '/admin/newsletters/item'
                                        )
                           )
                !!}



                <div class="form-group">
                    {!! Form::label('title', 'Title', array('class' => 'control-label')) !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-font"></i></span>
                            {!! Form::text('title', null, array('class' => 'required form-control',
                                                                'style' => 'max-width: 400px;',
                                                                'placeholder' => '')) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('url', 'Link', array('class' => 'control-label')) !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                            {!! Form::text('url', null, array('class' => 'required form-control url',
                                                                'style' => 'max-width: 400px;',
                                                                'placeholder' => '')) !!}
                        </div>
                    </div>
                </div>


                <hr>
                <div class="form-group">
                    <div class="controls">
                        {!! Form::submit('Save', array('class' => 'btn btn-primary submit')) !!}
                        @if ($item_id > 0)
                            <a class="btn btn-danger" href="#!" onclick='confirmDelete({!!$item->id!!})'>Delete this item</a>
                        @endif
                    </div>
                </div>
                <div>&nbsp;</div>
                {!! Form::hidden('id', $item_id )!!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('bottom-js')
    <script>
        function confirmDelete(x){
            bootbox.confirm("Are you sure you want to delete this item?", function(result) {
                if (result==true)
                {
                    window.location.href = '/admin/newsletters/delete?id='+x;
                }
            });
        }
        $(document).ready(function () {
            $("#bookform").validate({
                errorClass:'has-error',
                validClass:'has-success',
                errorElement:'span',
                highlight: function (element, errorClass, validClass) {
                    $(element).parents("div[class='form-group']").addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents(".has-error").removeClass(errorClass).addClass(validClass);
                }
            });


        });
    </script>
@stop