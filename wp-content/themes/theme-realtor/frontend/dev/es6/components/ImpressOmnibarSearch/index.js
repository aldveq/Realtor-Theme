const ImpressOmnibarSearch = () => {
    if (document.querySelector('.impress-omnibar-search-container')) {
        setupPlaceholders();
        addMoreOptionsButton();
    }
}

const setupPlaceholders = () => {
    const doc = document;

    doc.querySelector('div.impress-omnibar-search-container input.idx-omnibar-min-price').setAttribute('placeholder', 'Min. Price');
    doc.querySelector('div.impress-omnibar-search-container input.idx-omnibar-price').setAttribute('placeholder', 'Max. Price');
    doc.querySelector('div.impress-omnibar-search-container input.idx-omnibar-bed').setAttribute('placeholder', 'Bedrooms');
    doc.querySelector('div.impress-omnibar-search-container input.idx-omnibar-bath').setAttribute('placeholder', 'Bathrooms');
    
}

const addMoreOptionsButton = () => {
    const moreOptionButton = document.createElement('button');
    const svgIcon = `<svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" class="button__outline-hamburguer-icon">
    <path d="M0 15C0 15.55 0.45 16 1 16H6V14H1C0.45 14 0 14.45 0 15ZM0 3C0 3.55 0.45 4 1 4H10V2H1C0.45 2 0 2.45 0 3ZM10 17V16H17C17.55 16 18 15.55 18 15C18 14.45 17.55 14 17 14H10V13C10 12.45 9.55 12 9 12C8.45 12 8 12.45 8 13V17C8 17.55 8.45 18 9 18C9.55 18 10 17.55 10 17ZM4 7V8H1C0.45 8 0 8.45 0 9C0 9.55 0.45 10 1 10H4V11C4 11.55 4.45 12 5 12C5.55 12 6 11.55 6 11V7C6 6.45 5.55 6 5 6C4.45 6 4 6.45 4 7ZM18 9C18 8.45 17.55 8 17 8H8V10H17C17.55 10 18 9.55 18 9ZM13 6C13.55 6 14 5.55 14 5V4H17C17.55 4 18 3.55 18 3C18 2.45 17.55 2 17 2H14V1C14 0.45 13.55 0 13 0C12.45 0 12 0.45 12 1V5C12 5.55 12.45 6 13 6Z"/>
    </svg>`;
    moreOptionButton.className = 'button button__outline-hamburguer';
    moreOptionButton.id = 'moreOptionsImpressOmnibarSearch';

    moreOptionButton.innerHTML = svgIcon; 
    
    const formContainer = document.querySelector('form.idx-omnibar-form');

    formContainer.insertBefore(moreOptionButton, formContainer.children[2]);
    
    setTimeout(addMoreOptionButtonListener, 1000);

}

const addMoreOptionButtonListener = () => {
    const doc = document;

    doc.getElementById('moreOptionsImpressOmnibarSearch').addEventListener('click', e => {
        e.preventDefault();
        e.stopPropagation();

        doc.querySelector('div.impress-omnibar-search-container input.idx-omnibar-extra-input').classList.toggle('mb-1');
        doc.querySelector('div.impress-omnibar-search-container input.idx-omnibar-min-price').classList.toggle('mb-1');
        doc.querySelector('div.impress-omnibar-search-container input.idx-omnibar-price').classList.toggle('mb-1');
        doc.querySelector('div.impress-omnibar-search-container input.idx-omnibar-bed').classList.toggle('mb-1');
        doc.querySelector('div.impress-omnibar-search-container input.idx-omnibar-bath').classList.toggle('mb-1');

        doc.querySelector('div.impress-omnibar-search-container input.idx-omnibar-min-price').classList.toggle('active');
        doc.querySelector('div.impress-omnibar-search-container input.idx-omnibar-price').classList.toggle('active');
        doc.querySelector('div.impress-omnibar-search-container input.idx-omnibar-bed').classList.toggle('active');
        doc.querySelector('div.impress-omnibar-search-container input.idx-omnibar-bath').classList.toggle('active');
    });
}

export default ImpressOmnibarSearch;