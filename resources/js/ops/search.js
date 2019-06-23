
	// function triggerSearch()
	// {
	// 	// let q = e.target.value;
 //  //   	filter = ['to', 'the', 'of', 'for'];
		
	// 	// search(q);


	// 	console.log(e);
	// }

	document.querySelector('#searchAsync').addEventListener('keyup', e => search(e));


	function search(e)
	{
		const allowedKeys = [32, 220, 191, 8]; //space, backslash, question mark
		console.log(e.keyCode);
		if(!allowedKeys.includes(e.keyCode) && (e.keyCode < 65 || e.keyCode > 90))
		{
			return;
		}
		
		term = e.target.value.trim();
		const filter = ['to', 'the', 'of', 'for'];
		if(filter.includes(term) || term.length < 3)
		{
			document.querySelector('.search-results').innerHTML = '';
			return;
		}

		fetch(`http://127.0.0.1:8000/api/search?__q=${term}`)
	        .then(response => response.json())
			.then(parsedJson => document.querySelector('.search-results').innerHTML = parsedJson.success == false ? '' : getSearchDom(parsedJson.data))
	        .catch(function(error){

	        });

	}

    const getSearchDom = data => {
		console.log(data);
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
                                    <span class="pr-3">30%</span>
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
