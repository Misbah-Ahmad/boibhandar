function changePrice(quantity, index)
{
    index = index.replace(/[^\d]/g, '');

    var unit =  parseFloat(document.getElementById(`unitHidden${index}`).innerText);
    document.getElementById(`subPrice${index}`).innerText = unit*quantity;

    //update summary
    var currentQuantity = parseInt(document.getElementById(`cartSumQuant${index}`).innerText);
    document.getElementById(`cartSumQuant${index}`).innerText = quantity;

    var currentSumPrice = parseFloat(document.getElementById(`cartSumPrice${index}`).innerText);
    document.getElementById(`cartSumPrice${index}`).innerText = unit * quantity;
    
    var currentTotalQuant = parseInt(document.getElementById('cartSumSubTotalQuant').innerText);
    document.getElementById('cartSumSubTotalQuant').innerText = currentTotalQuant - currentQuantity + quantity;

    var currentSubTotal = parseFloat(document.getElementById('cartSumSubTotalPrice').innerText);
    document.getElementById('cartSumSubTotalPrice').innerText = currentSubTotal - currentSumPrice + (unit * quantity);

    var currentTotal = parseFloat(document.getElementById('cartSumTotal').innerText);
    document.getElementById('cartSumTotal').innerText = currentTotal - currentSumPrice + (unit * quantity);

}

$('.btn-number').click(function (e) {
    e.preventDefault();

    fieldName = $(this).attr('data-field');
    type = $(this).attr('data-type');
    var input = $("input[name='" + fieldName + "']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if (type == 'minus') {

            if (currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
                
                //changePrice(currentVal-1, fieldName);
            }
            if (parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if (type == 'plus') {

            if (currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();

                // changePrice(currentVal+1, fieldName);
            }
            if (parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(1).change();

    }
});

$('.input-number').focusin(function () {
    $(this).data('oldValue', $(this).val());
});

$('.input-number').change(function () {

    minValue = parseInt($(this).attr('min'));
    maxValue = parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    name = $(this).attr('name');



    if (valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')

        changePrice(valueCurrent, name)

    } else {

        $(this).val($(this).data('oldValue'));

        changePrice($(this).data('oldValue'), name)
    }

    if (valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')

        changePrice(valueCurrent, name)

    } else {

        $(this).val($(this).data('oldValue'));
        changePrice($(this).data('oldValue'), name)

    }


});

$(".input-number").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
        // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) ||
        // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        // let it happen, don't do anything
        return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});


function _checkGift()
{

    let gift_checked = this.checked;

    let current_sub_total = parseFloat(document.getElementById('cartSumSubTotalPrice').innerText);
    let shipping = parseFloat(document.getElementById('cartSumShipping').innerText);
    let gift = gift_checked ? 30 : 0;

    document.getElementById('cartSumTotal').innerText = shipping + current_sub_total + gift;        

}

document.getElementById('ex-check-1').addEventListener('click', _checkGift);