function addToCart(id)
{

    
    if(window.loggedIn)
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
                if(response.success)
                {
                    localStorage.setItem('_bbc_book', JSON.stringify(response.data));
                    updateCartIcon(response.data.length);
                }
            },

            error: function (ob, type, ex) {

            }

        });

    } else {
        ids = JSON.parse(localStorage.getItem('_bbc_bd_book')) || [];
        ids.push(id);

        if(ids.length == (new Set(ids)).size )
        {
            localStorage.setItem('_bbc_bd_book', JSON.stringify(ids));
            updateCartIcon(ids.length);
        }

    }


}

function updateCartIcon(count)
{
    let text = "";
    if(count > 0)
    {
        text = count;
    } else {
        text = "";        
    }
    document.querySelector('header > div > div.navbar >div > ul.navbar-buttons > li >span#cartIcon').innerText = text;

}
