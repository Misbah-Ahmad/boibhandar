function addToWishlist(id)
{
    $.ajax({

        type: 'POST',
        url: '/user/wishlist',
        data: { w_book: id },

        headers: {
            'X-CSRF-TOKEN': document.querySelector('head > meta[name=csrf-token]').content,
            Accept: 'application/json'
        },
        success: function (response, type) {
            if (response.success) {
                //
            } else {
                
            }
        },

        error: function (ob, type, ex) {

        }

    });    


}