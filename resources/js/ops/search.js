window.mobile_fun =  () => {
	var check = false;
	(a => { if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true; })(navigator.userAgent || navigator.vendor || window.opera);
	return check;
};

window.mobile = window.mobile_fun();
window.result = false;
	if(window.mobile)
	{
		document.getElementById('mobileSearchBtn').addEventListener('click', e => search(e));
	} else {
		document.getElementById('searchAsync').addEventListener('keyup', e => search(e));		
	}



	function search(e)
	{

		const allowedKeys = [32, 220, 191, 8, 13]; //space, backslash, question mark, backspace, enter
//		console.log(e);
		var term = '';
		if(e.type == "click")
		{
			term = e.target.previousElementSibling.previousElementSibling.value.trim().toLowerCase();

			populateSearchList(searchPlaceHolder(`Searching...`));

		} else {
			if (!allowedKeys.includes(e.keyCode) && (e.keyCode < 65 || e.keyCode > 90)) {
				return;
			}

			term = e.target.value.trim().toLowerCase();
			if(term.length == 0 && e.keyCode == 8)
			{
				populateSearchList('');
				window.result = false;
				return;
			}
			if (window.result == false)
			{
				populateSearchList(searchPlaceHolder(`Searching...`));
			}

		}



		const filter = ['to', 'the', 'of', 'for'];
		if(filter.includes(term) || term.length < 2)
		{
			if(window.result == false)
			{
				populateSearchList(searchPlaceHolder(''));

			}
			return;
		}

		$.ajax({
			type: 'GET',
			url: '/api/search?__q='+term,
			headers: {
				//'X-CSRF-TOKEN': document.querySelector('head > meta[name=csrf-token]').content,
				Accept: 'application/json'
			},
			success: function (response, type) {
				//console.log(response);
				if (response.success == true)
				{	window.result = true;
					populateSearchList(getSearchDom(response.data));
				} else {
					if(window.result == false)
					{
						populateSearchList(searchPlaceHolder(''));

					}
					if(e.type == 'keyup')
					{
						if (e.keyCode != 8)
						{
							window.result = false;
						}

					} else {
						window.result = false;
					}

				}
			},

			error: function (ob, type, ex) {
				window.result = false;
				populateSearchList(searchPlaceHolder(''));
				//console.log(ex);
			}

		});



		// fetch(`/api/search?__q=${term}`)
	    //     .then(response => response.json())
		// 	.then(parsedJson => document.querySelector('.search-results').innerHTML = parsedJson.success == false ? '' : getSearchDom(parsedJson.data))
	    //     .catch(function(error){

	    //     });

	}

    const getSearchDom = data => {

		return Array.from(data).map(d => {
        	return `<li>
        		<a href="/books/${d.id}">
                    <div class="search-results-item">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="search-results-item-thumb">
                                	<img src="${d.image_link}" alt="Product">
                                </div>
                                <div class="search-results-item-info">
                                    <h4 class="search-results-item-title">${d.title}</h4>
                                    <span>${d.authors}</span>
                                </div>
                            </div>
                            <div class="col-md-4 search-results-item-d-none">
                                <div class="text-center">
                                <p>
                                    <span class="pr-3">${d.discount > 0 ? d.discount_percent : ''}</span>
                                    <span class="search-results-item-price font-weight-medium">Tk. ${d.price}</span>
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </li>`;
        });
	}
	
	const searchPlaceHolder = holderString => {

		return `<li>${holderString}</li>`;

	};

	const populateSearchList = resultString => {
		document.querySelector('.search-results').innerHTML = resultString;
	}