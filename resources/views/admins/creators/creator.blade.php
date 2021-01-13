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
                    <h3 class="box-title"><b>Create Author</b></h3>

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
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
                </form>

            </div>

        </div>

        <div class="col-md-6">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Create Publisher</b></h3>

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
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
                </form>

            </div>

        </div>
    </div>

    <div class="row">

        <div class="col-md-8">
        
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Create Book</b></h3>
        
                    @if (session()->has('book_saved'))
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('book_saved') }}
                    </div>
                    @endif
        
                </div>
        
                <form role="form" method="POST" action="{{ route('admins.creator.book.save') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        {{-- Admin Password, Thumb, Image --}}

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                    <label class="control-label" for="bookAdminPassword">Admin Password</label>
                                    <input type="password" class="form-control" name="password" id="bookAdminPassword"
                                        placeholder="Password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('book_thumb') ? 'has-error' : '' }}">
                                    <label class="control-label" for="bookThumb">Book Thumb  (Optional)</label>
                                    <input type="file" id="bookThumb" name="book_thumb" accept=".jpg,.png">

                                    <p class="help-block">Upload only jpg/png file.</p>

                                    @if ($errors->has('book_thumb'))
                                        <span class="help-block">{{ $errors->first('book_thumb') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('book_image') ? 'has-error' : '' }}">
                                    <label class="control-label" for="bookImage">Book Image  (Optional)</label>
                                    <input type="file" id="bookImage" name="book_image" accept=".jpg,.png">

                                    <p class="help-block">Upload only jpg/png file.</p>

                                    @if ($errors->has('book_image'))
                                        <span class="help-block">{{ $errors->first('book_image') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- Book Name in Bengali adn English --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('book_title') ? 'has-error' : '' }}">
                                    <label class="control-label" for="bookTitle">Book Name (Bengali)</label>
                                    <input type="text" value="{{old('book_title')}}" class="form-control" name="book_title" id="bookTitle"
                                        placeholder="Book Name" required>

                                    @if ($errors->has('book_title'))
                                        <span class="help-block">{{ $errors->first('book_title') }}</span>                                
                                    @endif
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('book_title_en') ? 'has-error' : '' }}">
                                    <label class="control-label" for="bookTitleEn">Book Name in English (Optional)</label>
                                    <input type="text" value="{{old('book_title_en')}}" class="form-control" name="book_title_en" id="bookTitleEn" placeholder="Book Name in English">

                                    @if ($errors->has('book_title_en'))
                                        <span class="help-block">{{ $errors->first('book_title_en') }}</span>                                
                                    @endif
                                </div>                                
                            </div>
                        </div>

                        {{-- Writer(s) and Translator(s) --}}
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group {{ $errors->has('book_writers') ? 'has-error' : '' }}">
                                    <label class="control-label" for="bookWriters"> Writer(s)</label>
                                    <select id="bookWriters" class="form-control select2" name="book_writers[]" multiple="multiple" data-placeholder="Select Writer(s)" style="width: 100%;" required>
                                        @foreach ($authors as $author)
                                            <option value="{{ $author->id }}">{{ $author->name }}</option>                                            
                                        @endforeach
                                    </select>
                                    @if ($errors->has('book_writers'))
                                        <span class="help-block">{{ $errors->first('book_writers') }}</span>                                
                                    @endif
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group {{ $errors->has('book_translators') ? 'has-error' : '' }}">
                                    <label class="control-label" for="bookTranslators"> Translator(s) [optional]</label>
                                    <select class="form-control select2" id="bookTranslators" name="book_translators[]" multiple="multiple" data-placeholder="Select Translator(s)" style="width: 100%;">
                                        @foreach ($authors as $author)
                                            <option value="{{ $author->id }}">{{ $author->name }}</option>                                            
                                        @endforeach
                                    </select>
                                    @if ($errors->has('book_translators'))
                                        <span class="help-block">{{ $errors->first('book_translators') }}</span>                                
                                    @endif
                                </div>

                            </div>

                        </div>

                        {{-- Editor(s) and Publisher --}}                        
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group {{ $errors->has('book_editors') ? 'has-error' : '' }}">
                                    <label class="control-label" for="bookEditors"> Editor(s) [optional]</label>
                                    <select id="bookEditors" class="form-control select2" name="book_editors[]" multiple="multiple" data-placeholder="Select Editor(s)" style="width: 100%;">
                                        @foreach ($authors as $author)
                                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('book_editors'))
                                        <span class="help-block">{{ $errors->first('book_editors') }}</span>                                
                                    @endif
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group {{ $errors->has('book_publisher') ? 'has-error' : '' }}">
                                    <label class="control-label" for="bookPublisher">Publisher</label>
                                    <select class="form-control single-selectable-select2" id="bookPublisher" name="book_publisher[]" data-placeholder="Select Publisher" style="width: 100%;" required>
                                        <option value="" selected disabled>Select a Publisher</option>
                                        @foreach ($publishers as $publisher)
                                            <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('book_publisher'))
                                        <span class="help-block">{{ $errors->first('book_publisher') }}</span>
                                    @endif
                                </div>

                            </div>

                        </div>

                        {{-- Categories and ISBN --}}
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group {{ $errors->has('book_categories') ? 'has-error' : '' }}">
                                    <label class="control-label" for="bookCategories"> Categories</label>
                                    <select id="bookCategories" class="form-control select2" name="book_categories[]" multiple="multiple" data-placeholder="Select Categories" style="width: 100%;" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('book_categories'))
                                        <span class="help-block">{{ $errors->first('book_categories') }}</span>                                
                                    @endif
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('book_isbn') ? 'has-error' : '' }}">
                                    <label class="control-label" for="bookIsbn">ISBN (optional)</label>
                                    <input type="text" value="{{old('book_isbn')}}" class="form-control" name="book_isbn" id="bookIsbn"
                                        placeholder="ISBN">

                                    @if ($errors->has('book_isbn'))
                                        <span class="help-block">{{ $errors->first('book_isbn') }}</span>                                
                                    @endif
                                </div>                                
                            </div>
                        </div>

                        {{-- Printed Price, Buying Price, IsAvailable --}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('printed_price') ? 'has-error' : '' }}">
                                    <label class="control-label" for="printedPrice">Printed Price</label>
                                    <input type="number" min="1" value="{{old('printed_price')}}" class="form-control" name="printed_price" id="printedPrice"
                                        placeholder="Printed Price" required>

                                    @if ($errors->has('printed_price'))
                                        <span class="help-block">{{ $errors->first('printed_price') }}</span>                                
                                    @endif
                                </div>                                
                            </div>
                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('buying_price') ? 'has-error' : '' }}">
                                    <label class="control-label" for="buyingPrice">Buying Price</label>
                                    <input type="number" min="1" value="{{old('buying_price')}}" class="form-control" name="buying_price" id="buyingPrice"
                                        placeholder="Buying Price" required>

                                    @if ($errors->has('buying_price'))
                                        <span class="help-block">{{ $errors->first('buying_price') }}</span>                                
                                    @endif
                                </div>                                
                            </div>
                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('is_available') ? 'has-error' : '' }}">
                                    <label class="control-label" for="bookIsAvailable">Is Available</label>
                                    <input type="text" value="{{old('is_available') ?? 'Yes' }}" class="form-control" name="is_available" id="bookIsAvailable"
                                        placeholder="Is Available" required>

                                    @if ($errors->has('is_available'))
                                        <span class="help-block">{{ $errors->first('is_available') }}</span>                                
                                    @endif
                                </div>                                
                            </div>
                        </div>

                        {{-- PreOrder, Quantity, Pages, Edition --}}
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('pre_order') ? 'has-error' : '' }}">
                                    <label class="control-label" for="preOrder">Is Pre-Order</label>
                                    <input type="text" value="{{old('pre_order') ?? 'Yes'}}" class="form-control" name="pre_order" id="preOrder"
                                        placeholder="Is Available" required>

                                    @if ($errors->has('pre_order'))
                                        <span class="help-block">{{ $errors->first('pre_order') }}</span>                                
                                    @endif
                                </div>                                
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('book_quantity') ? 'has-error' : '' }}">
                                    <label class="control-label" for="bookQuantity">Quantity</label>
                                    <input type="number" min="0" value="{{old('book_quantity')}}" class="form-control" name="book_quantity" id="bookQuantity"
                                        placeholder="Quantity" required>

                                    @if ($errors->has('book_quantity'))
                                        <span class="help-block">{{ $errors->first('book_quantity') }}</span>                                
                                    @endif
                                </div>                                
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('book_pages') ? 'has-error' : '' }}">
                                    <label class="control-label" for="bookPages">Total Pages</label>
                                    <input type="number" min="5" value="{{old('book_pages') }}" class="form-control" name="book_pages" id="bookPages"
                                        placeholder="Total Pages" required>

                                    @if ($errors->has('book_pages'))
                                        <span class="help-block">{{ $errors->first('book_pages') }}</span>                                
                                    @endif
                                </div>                                
                            </div>
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('book_edition') ? 'has-error' : '' }}">
                                    <label class="control-label" for="bookEdition">Edition</label>
                                    <input type="text" value="{{old('book_edition') }}" class="form-control" name="book_edition" id="bookEdition"
                                        placeholder="Edition" required>

                                    @if ($errors->has('book_edition'))
                                        <span class="help-block">{{ $errors->first('book_edition') }}</span>                                
                                    @endif
                                </div>                                
                            </div>
                        </div>


                        {{-- Langes en & bn, Country en & bn --}}
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('language_en') ? 'has-error' : '' }}">
                                    <label class="control-label" for="languageEn">Language (English)</label>
                                    <input type="text" value="{{old('language_en') ?? 'Bengali'}}" class="form-control" name="language_en" id="languageEn"
                                        placeholder="Language" required>

                                    @if ($errors->has('language_en'))
                                        <span class="help-block">{{ $errors->first('language_en') }}</span>                                
                                    @endif
                                </div>                                
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('language_bn') ? 'has-error' : '' }}">
                                    <label class="control-label" for="languageBn">Language (Bengali)</label>
                                    <input type="text" value="{{old('language_bn') ?? 'বাংলা'}}" class="form-control" name="language_bn" id="languageBn"
                                        placeholder="Language" required>

                                    @if ($errors->has('language_bn'))
                                        <span class="help-block">{{ $errors->first('language_bn') }}</span>                                
                                    @endif
                                </div>                                
                            </div>

                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('country_en') ? 'has-error' : '' }}">
                                    <label class="control-label" for="countryEn">Country (English)</label>
                                    <input type="text" value="{{old('country_en') ?? 'Bangladesh'}}" class="form-control" name="country_en" id="countryEn"
                                        placeholder="Country" required>

                                    @if ($errors->has('country_en'))
                                        <span class="help-block">{{ $errors->first('country_en') }}</span>                                
                                    @endif
                                </div>                                
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('country_bn') ? 'has-error' : '' }}">
                                    <label class="control-label" for="countryBn">Country (Bengali)</label>
                                    <input type="text" value="{{old('country_bn') ?? 'বাংলাদেশ'}}" class="form-control" name="country_bn" id="countryBn"
                                        placeholder="Country" required>

                                    @if ($errors->has('country_bn'))
                                        <span class="help-block">{{ $errors->first('country_bn') }}</span>                                
                                    @endif
                                </div>                                
                            </div>

                        </div>

                        

                    </div>
        
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
                </form>
            </div>
        
        </div>

        <div class="col-md-4">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Create Category</b></h3>

                @if (session()->has('category_saved'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('category_saved') }}
                    </div>
                @endif

                </div>

                <form role="form" method="POST" action="{{ route('admins.creator.category.save') }}">
                    @csrf
                    <div class="box-body">

                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label class="control-label" for="categoryAdminPassword">Admin Password</label>
                            <input type="password" class="form-control" name="password" id="categoryAdminPassword"
                                placeholder="Password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">{{ $errors->first('password') }}</span>                                
                            @endif
                        </div>


                        <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                            <label class="control-label" for="categoryName">Category (Bengali)</label>
                            <input type="text" value="{{old('category')}}" class="form-control" name="category" id="categoryName"
                                placeholder="Category" required>

                            @if ($errors->has('category'))
                                <span class="help-block">{{ $errors->first('category') }}</span>                                
                            @endif
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
                </form>

            </div>

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Fetch Stock</b></h3>

                @if (session()->has('stock_updated'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('stock_updated') }}
                    </div>
                @endif

                </div>

                <form role="form" method="POST" action="{{ route('admins.stock.get') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group {{ $errors->has('stock_book_id') ? 'has-error' : '' }}">
                            <label class="control-label" for="stockBookId">Book ID</label>
                            <input type="text" value="{{old('stock_book_id')}}" class="form-control" name="stock_book_id" id="stockBookId"
                                placeholder="Book Id" required>

                            @if ($errors->has('stock_book_id'))
                                <span class="help-block">{{ $errors->first('stock_book_id') }}</span>                                
                            @endif
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">Get</button>
                    </div>
                </form>

            </div>

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Update Stock</b></h3>

                @if (session()->has('stock_updated'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('stock_updated') }}
                    </div>
                @endif

                </div>

                <form role="form" method="POST" action="{{ route('admins.stock.update') }}">
                    @csrf
                    <div class="box-body">

                        <div class="form-group {{ $errors->has('stock_book_id') ? 'has-error' : '' }}">
                            <label class="control-label" for="stockBookId">Book ID</label>
                            <input type="text" value="{{old('stock_book_id')}}" class="form-control" name="stock_book_id" id="stockBookId"
                                placeholder="Book Id" required>

                            @if ($errors->has('stock_book_id'))
                                <span class="help-block">{{ $errors->first('stock_book_id') }}</span>                                
                            @endif
                        </div>
                        @if (session()->has('book_title'))
                            <div class="form-group">
                                <p> <span style="font-weight: 700;">Book Name: </span> {{ session('book_title') }}</p>
                            </div>
                            
                        @endif

                        <div class="form-group {{ $errors->has('stock_book_count') ? 'has-error' : '' }}">
                            <label class="control-label" for="stockBookCount">Count</label>
                            <input type="text" value="{{ session('stock_book_count') }}" class="form-control" name="stock_book_count" id="stockBookCount"
                                placeholder="Count" required>

                            @if ($errors->has('stock_book_count'))
                                <span class="help-block">{{ $errors->first('stock_book_count') }}</span>                                
                            @endif
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">Update</button>
                    </div>
                </form>

            </div>

        </div>


    </div>




</section>


@endsection

@section('js')
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2({
                allowClear: true
            });

            $('.single-selectable-select2').select2({
                multiple: false
            });
        });
    </script>
@endsection