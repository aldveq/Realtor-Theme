import Cleave from 'cleave.js';
import { feedback } from '../../utilities/tools';

const MortgageCalculator = () => {
    const doc = document;
    if(doc.querySelector('section.mortgage-calculator-container')) {
        doc.getElementById('homeValue').addEventListener('blur', validateHomeValueInput);
        doc.getElementById('downPayment').addEventListener('blur', validateDownPaymentInput);
        doc.getElementById('interestRate').addEventListener('blur', validateInterestRateInput);

        doc.getElementById('calculateMortgageButton').addEventListener('click', calculateMortgage);
        doc.getElementById('switchType').addEventListener('click', switchTypeOfDownPayment);

        setNumberFormatToInputs();
    }
}

const switchTypeOfDownPayment = () => {
    const doc = document;

    if (doc.getElementById('switchType').checked === true) { // Percentage amount
        doc.querySelector('svg.switch-percentage-icon-down-payment').classList.add('show');
        doc.querySelector('svg.switch-money-amount-icon-down-payment').classList.add('hide');
        doc.getElementById('downPayment').value = '';
        doc.getElementById('downPayment').focus();
    } else { // Money amount
        doc.querySelector('svg.switch-percentage-icon-down-payment').classList.remove('show');
        doc.querySelector('svg.switch-money-amount-icon-down-payment').classList.remove('hide');
        doc.getElementById('downPayment').value = '';
        doc.getElementById('downPayment').focus();
    }
}

const calculateMortgage = () => {
    const doc = document;

    const homeValueWOComma = getNumberWithoutComma(doc.getElementById('homeValue').value);
    const downPaymentWOComma = getNumberWithoutComma(doc.getElementById('downPayment').value);
    const interestRateWOComma = getNumberWithoutComma(doc.getElementById('interestRate').value);

    const homeValue = parseFloat(homeValueWOComma);
    const downPayment = parseFloat(downPaymentWOComma);
    const loanProgram = parseInt(doc.getElementById('loanProgram').options[document.getElementById('loanProgram').selectedIndex].text);
    const interestRate = parseFloat(interestRateWOComma);

    if((homeValueWOComma === '' || homeValue <= 0) || (downPaymentWOComma === '' || downPayment <= 0 ) || (interestRateWOComma === '' || interestRate <= 0)) {
        feedback('error', 'Please, add all the inputs and not use either negatives values or zeros!');
        validateInputs();
    } else {

        if (doc.getElementById('switchType').checked === true) { // Percentage amount

            const downPaymentWithPercentage = getDownPaymentWithPercentage(downPaymentWOComma);
            
            if(downPaymentWithPercentage > homeValue) {
                feedback('error', 'The down payment amount cannot be greater than the home value amount!');
                validateInputs();
            } else {
                removeInputsValidations();
    
                const principal = getPrincipal(homeValue, downPaymentWithPercentage);
            
                const montlyMortgagePayment = ((interestRate / 100 / 12) * principal) / ( 1 - ( Math.pow( ( 1 + (interestRate / 100 / 12) ), ( -loanProgram * 12 ) ) ) )
                const montlyMortgagePaymentStr = `$${numberWithCommas(montlyMortgagePayment.toFixed(2))} <span class="mortgage-calculator-container__estimated-payment-month-text">/mt</span>`;
            
                doc.querySelector('span.mortgage-calculator-container__estimated-payment-number').innerHTML = montlyMortgagePaymentStr;
            }

 
        } else { // Money amount

            if(downPayment > homeValue) {
                feedback('error', 'The down payment amount cannot be greater than the home value amount!');
                validateInputs();
            } else {

                removeInputsValidations();
    
                const principal = getPrincipal(homeValue, downPayment);
            
                const montlyMortgagePayment = ((interestRate / 100 / 12) * principal) / ( 1 - ( Math.pow( ( 1 + (interestRate / 100 / 12) ), ( -loanProgram * 12 ) ) ) )
                const montlyMortgagePaymentStr = `$${numberWithCommas(montlyMortgagePayment.toFixed(2))} <span class="mortgage-calculator-container__estimated-payment-month-text">/mt</span>`;
            
                doc.querySelector('span.mortgage-calculator-container__estimated-payment-number').innerHTML = montlyMortgagePaymentStr;
            }
        }
    }
}

const getDownPaymentWithPercentage = downPaymentInPercentage => {
    const doc = document;
    const homeValue = parseFloat(getNumberWithoutComma(doc.getElementById('homeValue').value));

    const homeValuePercentage = homeValue * (parseFloat(downPaymentInPercentage) / 100);

    return parseFloat(homeValuePercentage);
}

const getPrincipal = (homeValue, downPayment) => {
    return homeValue - downPayment;
}

const validateInputs = () => {
    const doc = document; 

    const homeValueWOComma = getNumberWithoutComma(doc.getElementById('homeValue').value);
    const downPaymentWOComma = getNumberWithoutComma(doc.getElementById('downPayment').value);
    const interestRateWOComma = getNumberWithoutComma(doc.getElementById('interestRate').value);

    const homeValueNum = parseFloat(homeValueWOComma);
    const downPaymentNum = parseFloat(downPaymentWOComma);
    const interestRateNum = parseFloat(interestRateWOComma);


    if( homeValueWOComma === '' || homeValueNum <= 0) {
        doc.getElementById('homeValue').classList.add('error');
    }

    if( downPaymentWOComma === '' || downPaymentNum <= 0) {
        doc.getElementById('downPayment').classList.add('error');
    }

    if( interestRateWOComma === '' || interestRateNum <= 0) {
        doc.getElementById('interestRate').classList.add('error');
    }

    if(downPaymentNum > homeValueNum) {
        doc.getElementById('downPayment').classList.add('error');
    }
}

const removeInputsValidations = () => {
    const doc = document;

    doc.getElementById('homeValue').classList.remove('error');
    doc.getElementById('downPayment').classList.remove('error');
    doc.getElementById('interestRate').classList.remove('error');

}

const validateHomeValueInput = () => {
    const doc = document;
    if (doc.getElementById('homeValue').value !== '' && parseFloat(doc.getElementById('homeValue').value) > 0) {
        doc.getElementById('homeValue').classList.remove('error');
    }
}

const validateDownPaymentInput = () => {
    const doc = document;
    if (doc.getElementById('downPayment').value !== '' && parseFloat(doc.getElementById('downPayment').value) > 0) {
        doc.getElementById('downPayment').classList.remove('error');
    }
}

const validateInterestRateInput = () => {
    const doc = document;
    if (doc.getElementById('interestRate').value !== '' && parseFloat(doc.getElementById('interestRate').value) > 0) {
        doc.getElementById('interestRate').classList.remove('error');
    }
}

const numberWithCommas = number => {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}

const setNumberFormatToInputs = () => {

    new Cleave('.mortgage-calculator-container__home-value-input', {
        numeral: true,
        numeralThousandsGroupStyle: 'thousand'
    });

    new Cleave('.mortgage-calculator-container__down-payment-input', {
        numeral: true,
        numeralThousandsGroupStyle: 'thousand'
    });

    new Cleave('.mortgage-calculator-container__interest-rate-input', {
        numeral: true,
        numeralThousandsGroupStyle: 'thousand'
    });

}

const getNumberWithoutComma = numberVal => {
    return numberVal.replace(/,/g, '');
}

export default MortgageCalculator;