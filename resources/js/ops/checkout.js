
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


function handleDistrictChange(event) {

    let selectedDistrictId = parseInt(event.target.value);

    if (selectedDistrictId < 1 || selectedDistrictId > 64) {
        return;
    }

    let subDistrictSelect = document.querySelector("select[name=checkout_pickup]");

    subDistrictSelect.innerHTML = window.districtData.sub_districts.reduce((acc, item) => {

        return selectedDistrictId == item.district_id ? `${acc}<option value="${item.id}">${item.name}</option>` : acc;

    }, `<option selected disabled value="">Choose An Area</option>`);

}

function loadDistrictData() {
    let data = JSON.parse(document.querySelector('p#districts_data').innerText);
    window.districtData = data;
    
    let districtSelect = document.querySelector("select[name=district]");
    
    districtSelect.innerHTML = data.districts.reduce((acc, item) => {
        return `${acc}<option value="${item.id}">${item.name}</option>`;    
    }, districtSelect.innerHTML.toString().trim());

    districtSelect.addEventListener('change', handleDistrictChange);
}

window.addEventListener("load", loadDistrictData);