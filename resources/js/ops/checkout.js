
function submitCheckout() {
    if (document.querySelector('input[value=bkash]').checked == false) {
        document.querySelector('input[name=bkash_phone]').remove();
    }
    document.getElementById('checkoutForm').submit();    

}
document.getElementById('submitButton').addEventListener('click', submitCheckout);