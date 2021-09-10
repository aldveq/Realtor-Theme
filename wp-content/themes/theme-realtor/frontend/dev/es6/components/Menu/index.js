const Menu = () => {

    if (document.getElementById('hamburguerMenuButton')) {

        document.getElementById('hamburguerMenuButton').addEventListener('click', e => {    
            const buttonTarget = e.target;

            if(buttonTarget.classList.contains('hamburger-box')) {
                buttonTarget.parentElement.classList.toggle('is-active');
            } else if (buttonTarget.classList.contains('hamburger-inner')) {
                buttonTarget.parentElement.parentElement.classList.toggle('is-active');
            } else {
                buttonTarget.classList.toggle('is-active');
            }

            showResponsiveMenu();
            changeMobileNavBackground();

            e.stopPropagation();
            e.stopImmediatePropagation();
        });

        setUpDropdownCssClasses();
    
    }

    window.addEventListener('scroll', menuScrollListener);
    
}

const setUpDropdownCssClasses = () => {
    const allLiItemsHasDropdowns = Array.from(document.querySelectorAll('li.menu-item-has-children'));

    allLiItemsHasDropdowns.forEach(liItem => {
        if(liItem.parentElement.classList.contains('olly-olly-realtor-theme-header__nav-list')) {
            liItem.classList.add('dropdown-first-level');
        } else if(liItem.parentElement.classList.contains('sub-menu')) {
            liItem.classList.add('dropdown-second-level');
        }
    });

    setTimeout(menuDropdownClickListener, 500);
}

const showResponsiveMenu = () => {
    document.querySelector('ul.olly-olly-realtor-theme-header__nav-list').classList.toggle('show');
    document.querySelector('body').classList.toggle('disable-scrolling');
}

const menuDropdownClickListener = () => {
    const mediaQuery = window.matchMedia('(max-width: 1365px)');
    const allDropdowns = Array.from(document.querySelectorAll('li.dropdown-first-level'));
    const allDropdownsSecondLevel = Array.from(document.querySelectorAll('li.dropdown-second-level'));

    if(mediaQuery.matches) {
        allDropdowns.forEach(dropdown => {
            dropdown.addEventListener('click', e => {
                
                const itemTarget = (e.target).tagName;
                const dropdownChildrens = dropdown.children;
                const dropdownList = dropdownChildrens[1]; // obtains the sub-menu ul element
                
                if (itemTarget === 'A') { // go back to the LI element if you want the click on the LI element instead of the A element
                    
                    disableAllDropdowns(dropdown);
                    // activateThirdLevelDropdowns(dropdownList);
                    
                    dropdownList.classList.toggle('show');
                    dropdown.classList.toggle('show');
                    
                }

                e.stopPropagation();
                e.stopImmediatePropagation();
    
            })
        });

        allDropdownsSecondLevel.forEach(dropdown => {
            dropdown.addEventListener('click', e => {
                
                const itemTarget = (e.target).tagName;
                const dropdownChildrens = dropdown.children;
                const dropdownList = dropdownChildrens[1]; // obtains the sub-menu ul element
                
                if (itemTarget === 'A') { // go back to the LI element if you want the click on the LI element instead of the A element
                    
                    disableAllDropdownsSecondLevel(dropdown);
                    // activateThirdLevelDropdowns(dropdownList);
                    
                    dropdownList.classList.toggle('show');
                    dropdown.classList.toggle('show');
                    
                }

                e.stopPropagation();
                e.stopImmediatePropagation();
    
            })
        });
    }
}

const disableAllDropdowns = currentDropdownItem => {
    const allDropdowns = Array.from(document.querySelectorAll('li.dropdown-first-level'));
    
    allDropdowns.forEach(dropdown => {
        const dropdownChildrens = dropdown.children;
        const dropdownList = dropdownChildrens[1]; // obtains the sub-menu ul element

        if ((currentDropdownItem.firstElementChild.textContent).toLowerCase() !== (dropdown.firstElementChild.textContent).toLowerCase()) {            
            dropdownList.classList.remove('show');
            dropdown.classList.remove('show');
        }

    })
}

const disableAllDropdownsSecondLevel = currentDropdownItem => {
    const allDropdowns = Array.from(document.querySelectorAll('li.dropdown-second-level'));
    
    allDropdowns.forEach(dropdown => {
        const dropdownChildrens = dropdown.children;
        const dropdownList = dropdownChildrens[1]; // obtains the sub-menu ul element

        if ((currentDropdownItem.firstElementChild.textContent).toLowerCase() !== (dropdown.firstElementChild.textContent).toLowerCase()) {            
            dropdownList.classList.remove('show');
            dropdown.classList.remove('show');
        }

    })
}

const menuScrollListener = () => {
    const navbar = document.querySelector('.olly-olly-realtor-theme-header');
	const sticky = navbar.offsetTop;

    if (window.pageYOffset > sticky) {
        navbar.classList.add("fixed");
    } else {
        navbar.classList.remove("fixed");
    }

}

const changeMobileNavBackground = () => {
    if(document.querySelector('section.olly-olly-hero-image-container')) {
        document.querySelector('header.olly-olly-hero-image-container__theme-header').classList.toggle('active-mobile-menu');
    }
}

export default Menu;