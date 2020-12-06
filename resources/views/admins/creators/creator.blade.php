@extends('admin_layouts.master')

@section('main-content')

<section class="content">

    <div class="row">

        <div class="col-md-6">
            <h3>Creator Panel</h3>
        </div>
    </div>


    <div class="row">

        <div class="col-md-6">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Author</h3>

                @if (session()->has('author_saved'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('author_saved') }}
                    </div>
                @endif

                </div>

                <form role="form" method="POST" action="{{ route('admins.creator.author.save') }}" enctype="multipart/form-data">
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


                        <div class="form-group {{ $errors->has('author_name') ? 'has-error' : '' }}">
                            <label class="control-label" for="authorName">Author Name (Bengali)</label>
                            <input type="text" value="{{old('author_name')}}" class="form-control" name="author_name" id="authorName"
                                placeholder="Author Name" required>

                            @if ($errors->has('author_name'))
                                <span class="help-block">{{ $errors->first('author_name') }}</span>                                
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('en_name') ? 'has-error' : '' }}">
                            <label class="control-label" for="authorEnName">Author Name (English)</label>
                            <input type="text" value="{{old('en_name')}}" class="form-control" name="en_name" id="authorEnName"
                                placeholder="Author Name">

                            @if ($errors->has('en_name'))
                                <span class="help-block">{{ $errors->first('en_name') }}</span>                                
                            @endif
                        </div>


                        <div class="form-group {{ $errors->has('author_image') ? 'has-error' : '' }}">
                            <label class="control-label" for="authorImage">Author Image  (Optional)</label>
                            <input type="file" id="authorImage" name="author_image" accept=".jpg,.png">

                            <p class="help-block">Upload only jpg/png file.</p>

                            @if ($errors->has('author_image'))
                                <span class="help-block">{{ $errors->first('author_image') }}</span>                                
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
                    <h3 class="box-title">Create Publisher</h3>

                @if (session()->has('publisher_saved'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('publisher_saved') }}
                    </div>
                @endif

                </div>

                <form role="form" method="POST" action="{{ route('admins.creator.publisher.save') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label class="control-label" for="publisherAdminPassword">Admin Password</label>
                            <input type="password" class="form-control" name="password" id="publisherAdminPassword"
                                placeholder="Password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">{{ $errors->first('password') }}</span>                                
                            @endif
                        </div>


                        <div class="form-group {{ $errors->has('publisher_name') ? 'has-error' : '' }}">
                            <label class="control-label" for="publisherName">Publisher Name (Bengali)</label>
                            <input type="text" value="{{old('publisher_name')}}" class="form-control" name="publisher_name" id="publisherName"
                                placeholder="Publisher Name" required>

                            @if ($errors->has('publisher_name'))
                                <span class="help-block">{{ $errors->first('publisher_name') }}</span>                                
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('en_name') ? 'has-error' : '' }}">
                            <label class="control-label" for="publisherEnName">Publisher Name (English)</label>
                            <input type="text" value="{{old('en_name')}}" class="form-control" name="en_name" id="publisherEnName"
                                placeholder="Publisher Name">

                            @if ($errors->has('en_name'))
                                <span class="help-block">{{ $errors->first('en_name') }}</span>                                
                            @endif
                        </div>

                        <div class="row" style="margin-bottom: 11px;">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
                                    <label class="control-label" for="location">Publisher Location</label>
                                    <input type="text" value="{{old('location')}}" class="form-control" name="location" id="location"
                                        placeholder="Publisher Location">

                                    @if ($errors->has('location'))
                                        <span class="help-block">{{ $errors->first('location') }}</span>                                
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('contact') ? 'has-error' : '' }}">
                                    <label class="control-label" for="contact">Publisher Contact</label>
                                    <input type="text" value="{{old('contact')}}" class="form-control" name="contact" id="contact"
                                        placeholder="Publisher Contact (Email,Phone)">

                                    @if ($errors->has('contact'))
                                        <span class="help-block">{{ $errors->first('contact') }}</span>                                
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>

        </div>

{{--    <div class="row">

        <div class="col-md-8">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Book</h3>

                    @if (session()->has('author_uploaded'))
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('author_uploaded') }}
                    </div>
                    @endif

                </div>

                <form role="form" method="POST" action="{{ route('uploads.author') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label for="authorPassword">Admin Password</label>
                            <input type="password" class="form-control" name="password" id="authorPassword"
                                placeholder="Password" required>

                        </div>

                        <div class="form-group">
                            <label for="authorInputFile">Select Excel File</label>
                            <input type="file" id="authorInputFile" name="author_file" accept=".xls,.xlsx" required>

                            <p class="help-block">Upload only xlsx/xls file. File must include header row.</p>
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>

        <div class="col-md-4">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Category</h3>

                    @if (session()->has('book_uploaded'))
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('book_uploaded') }}
                    </div>
                    @endif

                </div>

                <form role="form" method="POST" action="{{ route('uploads.book') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label for="bookPassword">Admin Password</label>
                            <input type="password" class="form-control" name="password" id="bookPassword"
                                placeholder="Password" required>

                        </div>

                        <div class="form-group">
                            <label for="bookInputFile">Select Excel File</label>
                            <input type="file" id="bookInputFile" name="book_file" accept=".xls,.xlsx" required>

                            <p class="help-block">Upload only xlsx/xls file. File must include header row.</p>
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
        
    </div>--}}

</section>


@endsection