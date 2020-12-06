
function submitCheckout() {
    if (document.querySelector('input[value=bkash]').checked == false) {
        document.querySelector('input[name=bkash_phone]').remove();
    }
    document.getElementById('checkoutForm').submit();    

}
document.getElementById('submitButton').addEventListener('click', submitCheckout);

function handlePaymentMethodChange(event) {
    if (event.target.value == 'bkash') {
        document.querySelector('.bkash-detail').style.display = 'block';
    } else if (event.target.value == 'cod') {
        document.querySelector('.bkash-detail').style.display = 'none';
    }
}

document.querySelectorAll("input[name=payment_method]").forEach(element => element.addEventListener('change', handlePaymentMethodChange));