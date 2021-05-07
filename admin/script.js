


function toggleAreaViaChecked(checked, areaElm, styleToChange, styleValueIfChecked, styleValueIfUnChecked) {
	areaElm.style[styleToChange] = checked ? styleValueIfChecked : styleValueIfUnChecked;
	
	let inputElms = areaElm.querySelectorAll('input,select,textarea');
	for (let i = 0; i < inputElms.length; i++) {
		if (checked) inputElms[i].removeAttribute('disabled');
		else inputElms[i].setAttribute('disabled', 'true');
	}
}



let shipOrderElm = Get('ship-order');
if (shipOrderElm) shipOrderElm.ae('onchange', function() {
	toggleAreaViaChecked(shipOrderElm.checked, Get('shipping-method-area'), 'opacity', '1', '.5');
	toggleAreaViaChecked(!shipOrderElm.checked, Get('pickup-area'), 'opacity', '1', '.5');
});