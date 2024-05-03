@extends('layout.main') @section('content')

@if(session()->has('not_permitted'))
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('not_permitted') }}</div>
@endif
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>{{trans('Update User')}}</h4>
                    </div>
                    <div class="card-body">
                        <p class="italic"><small>{{trans('The field labels marked with * are required input fields')}}.</small></p>
                        {!! Form::open(['route' => ['user.update', $lims_user_data->id], 'method' => 'put', 'files' => true]) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><strong>{{trans('UserName')}} *</strong> </label>
                                        <input type="text" name="name" required class="form-control" value="{{$lims_user_data->name}}">
                                        @if($errors->has('name'))
                                       <span>
                                           <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label><strong>{{trans('Change Password')}}</strong> </label>
                                        <div class="input-group">
                                            <input type="password" name="password" class="form-control">
                                            <div class="input-group-append">
                                                <button id="genbutton" type="button" class="btn btn-default">{{trans('Generate')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Expire Date *</strong> </label>
                                        <input type="date" name="expire_date" class="form-control" value="{{$lims_user_data->expire_date}}">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label><strong>{{trans('Email')}} *</strong></label>
                                        <input type="email" name="email" placeholder="example@example.com" required class="form-control" value="{{$lims_user_data->email}}">
                                        @if($errors->has('email'))
                                       <span>
                                           <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group mt-3">
                                        <label><strong>{{trans('Phone Number')}} *</strong></label>
                                        <input type="text" name="phone" required class="form-control" value="{{$lims_user_data->phone}}">
                                    </div>
                                    <div class="form-group">
                                        @if($lims_user_data->is_active)
                                        <input class="mt-2" type="checkbox" name="is_active" value="1" checked>
                                        @else
                                        <input class="mt-2" type="checkbox" name="is_active" value="1">
                                        @endif
                                        <label class="mt-2"><strong>{{trans('Active')}}</strong></label>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="{{trans('submit')}}" class="btn btn-primary">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><strong>{{trans('Role')}} *</strong></label>
                                        <input type="hidden" name="role_id_hidden" value="{{$lims_user_data->role_id}}">
                                        <select name="role_id" required class="selectpicker form-control" data-live-search="true" data-live-search-style="begins" title="Select Role...">
                                          @foreach($lims_role_list as $role)
                                              <option value="{{$role->id}}">{{$role->name}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">




    $('select[name=role_id]').val($("input[name='role_id_hidden']").val());
    if($('select[name=role_id]').val() > 2){
        $('#warehouseId').show();
        $('select[name=warehouse_id]').val($("input[name='warehouse_id_hidden']").val());
        $('#biller-id').show();
        $('select[name=biller_id]').val($("input[name='biller_id_hidden']").val());
    }
    $('.selectpicker').selectpicker('refresh');

    $('select[name="role_id"]').on('change', function() {
        if($(this).val() > 2){
            $('select[name="warehouse_id"]').prop('required',true);
            $('select[name="biller_id"]').prop('required',true);
            $('#biller-id').show();
            $('#warehouseId').show();
        }
        else{
            $('select[name="warehouse_id"]').prop('required',false);
            $('select[name="biller_id"]').prop('required',false);
            $('#biller-id').hide();
            $('#warehouseId').hide();
        }
    });

    $('#genbutton').on("click", function(){
      $.get('../genpass', function(data){
        $("input[name='password']").val(data);
      });
    });

</script>
@endsection
