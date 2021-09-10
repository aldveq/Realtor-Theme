const feedback = (type, msg) => {
    const doc = document;
    if(type === 'error') {
        doc.getElementById('feedback').innerHTML = `<p>${msg}</p>`;
        
        setTimeout(() => {
            doc.getElementById('feedback').classList.add('error');
            removeFeedback();
        }, 500);
    }
}

const removeFeedback = () => {
    const doc = document;
    
    setTimeout(() => {
        doc.getElementById('feedback').classList.remove('error');
        setTimeout(() => {
            doc.getElementById('feedback').innerHTML = '';
        }, 500);
    }, 6500);
}

export { feedback };