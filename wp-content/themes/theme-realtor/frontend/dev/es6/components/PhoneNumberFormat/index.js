const PhoneNumberFormat = () => {
    const doc = document;
    if (doc.querySelectorAll('input[name="PhoneNumber"]')) {
        const tels = Array.from(doc.querySelectorAll('input[name="PhoneNumber"]'));
        tels.forEach(phone => {
            phone.addEventListener('input', e => {
                const x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
                e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
            })
        });
    }
}

export default PhoneNumberFormat;