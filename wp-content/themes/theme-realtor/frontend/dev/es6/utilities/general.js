const general = () => {
    window.addEventListener('load', () => {
        addShareButton();
    });
    //call function on scroll
    document.addEventListener("scroll",(e) => {
        if (document. readyState === 'complete') {
            addShareButton();
        }
    });
    //Add share button behaviour on posts grid
    const addShareButton =() => {

        let shareButton = document.querySelectorAll('.card:not(.assigned) .blog-container__share-button');
        shareButton.forEach(element => {
            element.classList.add('assigned');
            //add class to addToAny Elemento
            let p = element.parentElement.parentElement.parentElement;
            p.querySelector('.addtoany_shortcode').classList.add('addtoany_share_save_container', 'addtoany_content', 'addtoany_content_bottom');
            if(a2a != null){
                a2a.init_all();
            }
            element.addEventListener("click", (e) => {
                closeContainers();
                
                //get Close button
                let newBlock = document.createElement("a");
                let closeButtonContent = '<span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: transparent; width: 32px; line-height: 24px; height: 32px; background-size: 24px; border-radius: 3px;"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="none" d="M 8.33,6.14 C 8.33,6.14 17.80,15.76 17.80,15.76 17.80,15.76 15.67,17.86 15.67,17.86 15.67,17.86 6.20,8.24 6.20,8.24 6.20,8.24 8.33,6.14 8.33,6.14 Z M 15.76,6.20 C 15.76,6.20 17.86,8.33 17.86,8.33 17.86,8.33 8.24,17.80 8.24,17.80 8.24,17.80 6.14,15.67 6.14,15.67 6.14,15.67 15.76,6.20 15.76,6.20 Z" /></svg></span>';
                newBlock.innerHTML = closeButtonContent; 
                newBlock.classList.add('a2a_button_email');
                newBlock.classList.add('a2a_button_close');
                
                const parentElement = e.target.closest('.card');
                const targetEl = e.target.closest('.blog-container__tools-container');

                parentElement.querySelector('.blog-container__share-button').classList.add('share-button-selected');

                newBlock.addEventListener('click', (e) =>{
                    closeContainers();
                }); 

                // finds targets position
                let rect =targetEl.getBoundingClientRect();
                let parentRect = parentElement.getBoundingClientRect();

                let top = rect.bottom - parentRect.top - 20;
                let left = (rect.left - parentRect.left) - 2;
                

                const addToAnyElement = parentElement.querySelector('.addtoany_share_save_container.addtoany_content.addtoany_content_bottom');
                if(addToAnyElement != null){
                    addToAnyElement.classList.add('addtoany_selected');
                    addToAnyElement.querySelector('div.addtoany_list').appendChild(newBlock);
                    addToAnyElement.style.top = top+"px";
                    addToAnyElement.style.left = left + "px";
                    addToAnyElement.style.zIndex = "100";
                }
            });
        });
    }
    //function to close share option list on posts grid
    const closeContainers = () => {
        let activeShareBox = document.querySelector('.addtoany_selected');
        let shareBoxClose = document.querySelector('.a2a_button_close');
        let shareButton = document.querySelector('.share-button-selected');

        if (activeShareBox != null){
            activeShareBox.classList.remove('addtoany_selected');
        }
        if (activeShareBox != null){
            shareBoxClose.remove();
        }
        if(shareButton != null){
            shareButton.classList.remove('share-button-selected');
        }
    }

    //repositioning add to any on single post page
    let singlePost = document.querySelector('article.post');
    let screenSize = document.querySelector('body').getBoundingClientRect();
    
    if (singlePost != null){
        let addToAnyElement = singlePost.querySelector('.addtoany_share_save_container.addtoany_content.addtoany_content_bottom');
        if (addToAnyElement != null){
            if(screenSize.width > 400){
                singlePost.querySelector('.post-share').appendChild(addToAnyElement);
            }else if(screenSize.width <= 400){
                singlePost.querySelector('.entry-content').insertBefore(addToAnyElement, singlePost.querySelector('.entry-content > p') );
            }
        }
    }
    

}

export default general;