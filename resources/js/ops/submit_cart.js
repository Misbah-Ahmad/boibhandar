
function submitCart() 
{
    const books = document.querySelectorAll('.book-quantity-id');
    
    const form = document.querySelector('#cartSubmitForm');
    form.innerHTML = '';

    let tokenInput = document.createElement('input');
    tokenInput.type = 'hidden';
    tokenInput.name = '_token';
    tokenInput.value = document.querySelector('head > meta[name=csrf-token]').content;
    form.appendChild(tokenInput);

    var bookList = [];

    books.forEach( b => {

        let item = {
            identifier: parseInt(b.dataset.id),
            quantity: parseInt(b.value)
        };

        bookList.push(item);

    });

    
    bookList = { _b_g: document.querySelector('#ex-check-1').checked, _books: bookList};

    let bookInput = document.createElement('input');
    bookInput.type = 'hidden';
    bookInput.name = 'cart_list';
    bookInput.value = JSON.stringify(bookList);
    form.appendChild(bookInput);

    form.submit();

}

const submitBtn = document.getElementById('submitCart');

submitBtn.addEventListener('click', submitCart);    
