window.addToCart = id =>
{

    
    $.ajax({

        type: 'POST',
        url: '/user/cart/add',
        data: { c_book: id },

        headers: {
            'X-CSRF-TOKEN': document.querySelector('head > meta[name=csrf-token]').content,
            Accept: 'application/json'
        },
        success: function (response, type) {
            console.log(response);
            if(response.success)
            {   
                updateCartIcon(response.data.count);
            }
        },

        error: function (ob, type, ex) {

        }

    });


}

window.updateCartIcon = count =>
{
    let text = "";
    console.log(count);
    if(count > 0)
    {
        text = count;
    }
    document.querySelector('span#cartIcon').innerText = text;

}
