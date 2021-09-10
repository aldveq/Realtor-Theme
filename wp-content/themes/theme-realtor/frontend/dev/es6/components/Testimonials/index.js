const Testimonials = () => {
    if(document.querySelector('.testimonials-container')) {
        const doc = document;
        
        window.getTestimonial = function(element, event) {
            event.stopImmediatePropagation();
            event.stopPropagation();
          
            const testimonialId = element.getAttribute("data-testimonial-id");
            getTestimonialData(testimonialId);
        }

        doc.getElementById('testimonialModalWindowCloseIcon').addEventListener('click', closeModalWindow);
        doc.getElementById('testimonialModalWindowCloseButton').addEventListener('click', closeModalWindow);

    }
}

const getTestimonialData = id => {
    const siteUrl = main.siteurl;

    const requestOptions = {
        method: 'GET',
    };
      
    fetch(`${siteUrl}/wp-json/wp/v2/testimonials/${id}`, requestOptions)
    .then(response => response.json())
    .then(result => drawTestimonial(result))
    .catch(error => alert('There was an error trying to get the testimonial: ', error));
}

const drawTestimonial = testimonial => {
    const doc = document;

    displayRatingOrQuoteIcon(testimonial.rating);

    doc.getElementById('testimonialName').textContent = testimonial.title.rendered;
    doc.getElementById('testimonialContent').innerHTML = testimonial.testimonial_content;

    if(testimonial.source !== false && testimonial.source !== 'N/A') {
        doc.getElementById('testimonialSource').textContent = testimonial.source;
    }

    setTimeout(() => {
        doc.getElementById('testimonialModalWindow').classList.add('active');
    }, 300);
}

const closeModalWindow = () => {
    const doc = document;

    doc.getElementById('testimonialModalWindow').classList.remove('active');
    
    setTimeout(() => {

        doc.getElementById('testimonialName').textContent = '';
        doc.getElementById('testimonialContent').innerHTML = '';
        doc.getElementById('testimonialSource').textContent = '';
        doc.getElementById('testimonialRating').innerHTML = '';
        doc.getElementById('testimonialRating').classList.remove('active');
        doc.querySelector('.testimonial-modal-window-wrapper__quote').classList.remove('active');
    }, 800);
}

const displayRatingOrQuoteIcon = rating => {
    const doc = document;

    const showQuoteIcon = doc.querySelector('.testimonial-modal-window-wrapper__container').getAttribute('data-quote-icon');

    if (showQuoteIcon === 'no') {
        const ratingNumber = parseInt(rating);
        const remainigRating = 5 - ratingNumber;
        let ratingStr = '';
        let remainingRatingStr = '';
        let ratingTotal = '';
        let ratingIteration = 0;
        let ratingRemainingIteration = 0;

        for (ratingIteration; ratingIteration < ratingNumber; ratingIteration++) {
            ratingStr += '<span class="icon-star testimonials-container__rating-star active"></span>';
        }

        for (ratingRemainingIteration; ratingRemainingIteration < remainigRating; ratingRemainingIteration++) {
            remainingRatingStr += '<span class="icon-star testimonials-container__rating-star "></span>';
        }

        ratingTotal = ratingStr + remainingRatingStr;

        doc.getElementById('testimonialRating').innerHTML = ratingTotal;
        doc.getElementById('testimonialRating').classList.add('active');
    } else {
        doc.querySelector('.testimonial-modal-window-wrapper__quote').classList.add('active');
    }

    

}

export default Testimonials;