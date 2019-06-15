<div class="col-md-6">
    <div class="prod-spec-details">
  <h3 class="h6 block-title">Details</h3>
    <div class="table-responsive prod-spec-table">
      <table class="table">
        <tbody>
    
          <tr>
            <th scope="row">Title</th>
            <td><span class="product-name"> {{ $book->title }} </span></td>
          </tr>
          @if ($book->hasAuthor)
            <tr>
              <th scope="row">Author</th>
              <td><span class="author-profile-link">{!! implode(', ', $book->anchoredAuthors()) !!}</span></td>
            </tr>
          @endif

            @if ($book->hasEditor)
            <tr>
              <th scope="row">Editor</th>
              <td><span class="author-profile-link">{!! implode(', ', $book->anchoredEditors()) !!}</span></td>
            </tr>
              
          @endif
        
          @if ($book->hasTranslator)
            <tr>
              <th scope="row">Translator</th>
              <td><span class="author-profile-link">{!! implode(', ', $book->anchoredTranslators()) !!}</span></td>
            </tr>
          @endif
          


          <tr>
            <th scope="row">Publisher</th>
            <td><span class="publication-name"><a href=" {{ route('publishers.show', $book->publisher->id) }} "> {{ $book->publisher->name }} </a></span></td>
          </tr>
    
          <tr>
            <th scope="row">Edition</th>
            <td><span class="product-edition"> {{ $book->edition }} </span></td>
          </tr>
    
          <tr>
            <th scope="row">ISBN</th>
            <td><span class="product-isbn"> {{ $book->isbn }} </span></td>
          </tr>
    
          <tr>
            <th scope="row">Language</th>
            <td><span class="product-language"> {{ $book->language }} </span></td>
          </tr>
    
          <tr>
            <th scope="row">Total Pages</th>
            <td><span class="product-pages">{{ $book->pageCount }} </span></td>
          </tr>
    
        </tbody>
    
      </table>
    
    </div>
    </div>

<!--             <h3 class="h6">Shipping Options:</h3>
    <ul class="list-unstyled mb-4 pb-2">
      <li><strong>Courier:</strong> 2 - 4 days, $22.50</li>
      <li><strong>Local Shipping:</strong> up to one week, $10.00</li>
      <li><strong>UPS Ground Shipping:</strong> 4 - 6 days, $18.00</li>
      <li><strong>Unishop Global Export:</strong> 3 - 4 days, $25.00</li>
    </ul> -->
  </div>