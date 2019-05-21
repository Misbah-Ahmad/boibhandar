@extends('admin_layouts.master')

@section('main-content')

<section class="content">

    <div class="row">

        <div class="col-md-6">
            <h3>File Uploads</h3>
        </div>
    </div>



    <div class="row">

        <div class="col-md-6">
            {{-- Author File --}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Upload Authors</h3>

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

        <div class="col-md-6">
            {{-- Author File Processor --}}            
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Uploaded Files</h3>

                    @if (session()->has('author_processed'))
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('author_processed') }}
                    </div>
                    @endif


                </div>

                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>File Name</th>
                                <th>Processed</th>
                                <th>Uploader</th>
                                <th>Action</th>
                                <th>Delete</th>
                            </tr>

                            @foreach ($authorFiles as $authorFile)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $authorFile->fileName }} </td>
                                    <td> {{ $authorFile->processed ? 'Yes' : 'No' }} </td>
                                    <td> {{ $authorFile->user->sname }} </td>
                                    <form method="POST" id="authorFile{{ $authorFile->id }}" action="{{ route('uploads.process', $authorFile->id) }}" style="display:none;">@csrf</form>
                                    <td> <span> <button class="btn btn-primary" onclick="document.getElementById('authorFile{{ $authorFile->id }}').submit();">Process</button></span></td>
                                    <form method="POST" id="authorFileDelete{{ $authorFile->id }}" action="{{ route('uploads.delete', $authorFile->id) }}" style="display:none;">@csrf</form>
                                    <td> <span> <button class="btn btn-primary" onclick="document.getElementById('authorFileDelete{{ $authorFile->id }}').submit();">Delete</button></span></td>
                                </tr>
                                
                            @endforeach


                        </tbody>
                    </table>
                </div>

            </div>

        </div>


    </div>



    <div class="row">

        <div class="col-md-6">

            {{-- Publisher File --}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Upload Publishers</h3>

                    @if (session()->has('publisher_uploaded'))
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('publisher_uploaded') }}
                    </div>
                    @endif

                </div>

                <form role="form" method="POST" action="{{ route('uploads.publisher') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label for="publisherPassword">Admin Password</label>
                            <input type="password" class="form-control" name="password" id="publisherPassword"
                                placeholder="Password" required>

                        </div>

                        <div class="form-group">
                            <label for="publisherInputFile">Select Excel File</label>
                            <input type="file" id="publisherInputFile" name="publisher_file" accept=".xls,.xlsx" required>

                            <p class="help-block">Upload only xlsx/xls file. File must include header row.</p>
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>


        <div class="col-md-6">
            {{-- Publisher File Processor --}}            
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Uploaded Files</h3>

                    @if (session()->has('publisher_processed'))
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('publisher_processed') }}
                    </div>
                    @endif


                </div>

                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>File Name</th>
                                <th>Processed</th>
                                <th>Uploader</th>
                                <th>Action</th>
                                <th>Delete</th>
                            </tr>

                            @foreach ($publisherFiles as $publisherFile)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $publisherFile->fileName }} </td>
                                    <td> {{ $publisherFile->processed ? 'Yes' : 'No' }} </td>
                                    <td> {{ $publisherFile->user->sname }} </td>
                                    <form method="POST" id="publisherFile{{ $publisherFile->id }}" action="{{ route('uploads.process', $publisherFile->id) }}" style="display:none;">@csrf</form>
                                    <td> <span> <button class="btn btn-primary" onclick="document.getElementById('publisherFile{{ $publisherFile->id }}').submit();">Process</button></span></td>
                                    <form method="POST" id="publisherFileDelete{{ $publisherFile->id }}" action="{{ route('uploads.delete', $publisherFile->id) }}" style="display:none;">@csrf</form>
                                    <td> <span> <button class="btn btn-primary" onclick="document.getElementById('publisherFileDelete{{ $publisherFile->id }}').submit();">Delete</button></span></td>
                                </tr>
                                
                            @endforeach


                        </tbody>
                    </table>
                </div>

            </div>

        </div>


    </div>


    <div class="row">


        <div class="col-md-6">

            {{-- Category File --}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Upload Categories</h3>

                    @if (session()->has('category_uploaded'))
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('category_uploaded') }}
                    </div>
                    @endif

                </div>

                <form role="form" method="POST" action="{{ route('uploads.category') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label for="categoryPassword">Admin Password</label>
                            <input type="password" class="form-control" name="password" id="categoryPassword"
                                placeholder="Password" required>

                        </div>

                        <div class="form-group">
                            <label for="categoryInputFile">Select Excel File</label>
                            <input type="file" id="categoryInputFile" name="category_file" accept=".xls,.xlsx" required>

                            <p class="help-block">Upload only xlsx/xls file. File must include header row.</p>
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>


        </div>

        <div class="col-md-6">
            {{-- Category File Processor --}}            
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Uploaded Files</h3>

                    @if (session()->has('category_processed'))
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('category_processed') }}
                    </div>
                    @endif


                </div>

                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>File Name</th>
                                <th>Processed</th>
                                <th>Uploader</th>
                                <th>Action</th>
                                <th>Delete</th>
                            </tr>

                            @foreach ($categoryFiles as $categoryFile)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $categoryFile->fileName }} </td>
                                    <td> {{ $categoryFile->processed ? 'Yes' : 'No' }} </td>
                                    <td> {{ $categoryFile->user->sname }} </td>
                                    <form method="POST" id="categoryFile{{ $categoryFile->id }}" action="{{ route('uploads.process', $categoryFile->id) }}" style="display:none;">@csrf</form>
                                    <td> <span> <button class="btn btn-primary" onclick="document.getElementById('categoryFile{{ $categoryFile->id }}').submit();">Process</button></span></td>
                                    <form method="POST" id="categoryFileDelete{{ $categoryFile->id }}" action="{{ route('uploads.delete', $categoryFile->id) }}" style="display:none;">@csrf</form>
                                    <td> <span> <button class="btn btn-primary" onclick="document.getElementById('categoryFileDelete{{ $categoryFile->id }}').submit();">Delete</button></span></td>
                                </tr>
                                
                            @endforeach


                        </tbody>
                    </table>
                </div>

            </div>


        </div>

    </div>



<div class="row">
    
        {{-- File Upload Section --}}
        <div class="col-md-6">
    
            {{-- Book File --}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Upload Books</h3>
    
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
    
    
    
    
        {{-- File Processor --}}
        <div class="col-md-6">
    
            {{-- Book File Processor --}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Uploaded Files</h3>
    
                    @if (session()->has('book_processed'))
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('book_processed') }}
                    </div>
                    @endif
    
    
                </div>
    
                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>File Name</th>
                                <th>Processed</th>
                                <th>Uploader</th>
                                <th>Action</th>
                                <th>Delete</th>
                            </tr>
    
                            @foreach ($bookFiles as $bookFile)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $bookFile->fileName }} </td>
                                <td> {{ $bookFile->processed ? 'Yes' : 'No' }} </td>
                                <td> {{ $bookFile->user->sname }} </td>
                                <form method="POST" id="bookFile{{ $bookFile->id }}"
                                    action="{{ route('uploads.process', $bookFile->id) }}" style="display:none;">@csrf
                                </form>
                                <td> <span> <button class="btn btn-primary"
                                            onclick="document.getElementById('bookFile{{ $bookFile->id }}').submit();">Process</button></span>
                                </td>
                                <form method="POST" id="bookFileDelete{{ $bookFile->id }}"
                                    action="{{ route('uploads.delete', $bookFile->id) }}" style="display:none;">@csrf</form>
                                <td> <span> <button class="btn btn-primary"
                                            onclick="document.getElementById('bookFileDelete{{ $bookFile->id }}').submit();">Delete</button></span>
                                </td>
                            </tr>
    
                            @endforeach
    
    
                        </tbody>
                    </table>
                </div>
    
            </div>
    
        </div>
    
    
    
    
    </div>


</section>


@endsection