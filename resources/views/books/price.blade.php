        Tk.
        @if ($book->hasDiscount && $book->discountedPrice < $book->price)
            
          <del class="text-muted"> {{ $book->price }}</del> {{ intval($book->discountedPrice)  }} <span class="badge badge-danger" style="background-color:#ff0000;">{{ 'Sale ' . $book->discountPercent . '%' }}</span> 
          
        @else
        
          {{ $book->price }}
      
        @endif
