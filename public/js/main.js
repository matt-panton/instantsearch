var search = instantsearch({
	appId: 'JRXFDVTRJZ',
	apiKey: '066642d29749fc35333ebce421dd4925', // search only API key, no ADMIN key
	indexName: 'bikes',
	urlSync: true
});


search.addWidget(
	instantsearch.widgets.searchBox({
		container: '#search-input',
		placeholder: 'Search for bikes'
	})
);



search.addWidget(
	instantsearch.widgets.hits({
		container: '#hits',
		hitsPerPage: 10,
		templates: {
			item: getTemplate('hit'),
			empty: getTemplate('no-results')
		}
	})
);


search.addWidget(
	instantsearch.widgets.stats({
		container: '#stats'
	})
);


search.addWidget(
	instantsearch.widgets.sortBySelector({
		container: '#sort-by',
		autoHideContainer: true,
		indices: [{
			name: search.indexName, label: 'Most relevant'
		}, {
			name: search.indexName + '_price_asc', label: 'Lowest price'
		}, {
			name: search.indexName + '_price_desc', label: 'Highest price'
		}]
	})
);


search.addWidget(
	instantsearch.widgets.pagination({
		container: '#pagination'
	})
);


search.addWidget(
	instantsearch.widgets.refinementList({
		container: '#manufacturer',
		attributeName: 'manufacturer',
		sortBy: ['isRefined', 'count:desc', 'name:asc'],
		operator: 'or',
		templates: {
			header: '<h5>Manufacturer</h5>'
		}
	})
);


search.addWidget(
	instantsearch.widgets.refinementList({
		container: '#discipline',
		attributeName: 'disciplines',
		sortBy: ['isRefined', 'count:desc', 'name:asc'],
		operator: 'or',
		templates: {
			header: '<h5>Discipline</h5>'
		}
	})
);


search.addWidget(
	instantsearch.widgets.refinementList({
		container: '#suspension',
		attributeName: 'suspension',
		sortBy: ['isRefined', 'count:desc', 'name:asc'],
		operator: 'or',
		templates: {
			header: '<h5>Suspension</h5>'
		}
	})
);


search.addWidget(
  instantsearch.widgets.rangeSlider({
    container: '#price',
    attributeName: 'price',
    templates: {
      header: '<h5>Price</h5>'
    }
  })
);


search.start();






function getTemplate(templateName) {
	return document.getElementById(templateName + '-template').innerHTML;
}