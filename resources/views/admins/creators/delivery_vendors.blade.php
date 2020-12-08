@extends('admin_layouts.master')

@section('main-content')

<section class="content">

    <div class="row">

        <div class="col-md-6">
            <h3>Delivery Vendors</h3>
        </div>
    </div>


    <div class="row">

        <div class="col-md-6">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Delivery Vendor</h3>

                    @if (session()->has('vendor_saved'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('vendor_saved') }}
                    </div>
                    @endif

                </div>

                <form role="form" method="POST" action="{{ route('admins.deliveryvendor.store') }}">
                    @csrf
                    <div class="box-body">

                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label class="control-label" for="authorAdminPassword">Admin Password</label>
                            <input type="password" class="form-control" name="password" id="authorAdminPassword"
                                placeholder="Password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label class="control-label" for="vendorName">Vendor Name</label>
                            <input type="text" value="{{old('name')}}" class="form-control" name="name" id="vendorName"
                                placeholder="Vendor Name" required>

                            @if ($errors->has('name'))
                            <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label class="control-label" for="vendorEmail">Vendor Email (optional)</label>
                            <input type="text" value="{{old('email')}}" class="form-control" name="email"
                                id="vendorEmail" placeholder="Vendor Email">

                            @if ($errors->has('email'))
                            <span class="help-block">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <label class="control-label" for="vendorPhone">Vendor Phone</label>
                            <input type="text" value="{{old('phone')}}" class="form-control" name="phone"
                                id="vendorPhone" placeholder="Vendor Phone" required>

                            @if ($errors->has('phone'))
                            <span class="help-block">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
                            <label class="control-label" for="vendorLocation">Vendor Location/Address (optional)</label>
                            <input type="text" value="{{old('location')}}" class="form-control" name="location"
                                id="vendorLocation" placeholder="Vendor Location">

                            @if ($errors->has('location'))
                            <span class="help-block">{{ $errors->first('location') }}</span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('extras') ? 'has-error' : '' }}">
                            <label class="control-label" for="vendorExtras">Extra Information (optional)</label>
                            <textarea rows="3" type="text" class="form-control" name="extras" id="vendorExtras"
                                placeholder="Extra Information">{{ old('extras') }}</textarea>

                            @if ($errors->has('extras'))
                            <span class="help-block">{{ $errors->first('extras') }}</span>
                            @endif
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>

        </div>

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Vendor List</h3>
                </div>

                @if (session()->has('vendor_delete'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('vendor_delete') }}
                </div>
                @endif                
                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Location</th>
                                <th>Extra Info</th>
                                <th>Action</th>
                            </tr>

                        @foreach ($vendors as $vendor)
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $vendor->name }}</td>
                                <td>{{ $vendor->email == null ? 'N/A' : $vendor->email }}</td>
                                <td>{{ $vendor->phone == null ? 'N/A' : $vendor->phone }}</td>
                                <td>{{ $vendor->location == null ? 'N/A' : $vendor->location }}</td>
                                <td>{{ $vendor->extras == null ? 'N/A' : $vendor->extras }}</td>
                                <form id="vendorDeleteForm{{ $vendor->id }}" style="display: none;" method="POST" action="{{route('admins.deliveryvendor.delete', ['vendor' => $vendor->id])}}">@csrf</form>
                                <td><span><button onclick="deleteVendor('{{ $vendor->name }}', '#vendorDeleteForm{{$vendor->id}}').submit()" class="btn btn-sm btn-danger">Delete</button></span></td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                </div>

                {{--<div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>--}}
            </div>

        </div>

    </div>

</section>


@endsection

@section('js')

    <script>
        function deleteVendor(vendorName, formId) {
            if (confirm('Are you sure you want delete the vendor ' + vendorName + '?')) {
                document.querySelector(formId).submit();
            }
        }        
    </script>

@endsection