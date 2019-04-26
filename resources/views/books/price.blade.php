        Tk.
        @if ($book->hasDiscount && $book->discountedPrice < $book->price)
            
          <del class="text-muted"> {{ $book->price }}</del> {{ $book->discountedPrice }}
          
        @else
        
          {{ $book->price }}
      
        @endif
