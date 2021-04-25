let calcBtn_page13 = document.querySelector('.contentPart1_4MenuBtn_page3');
let inputField1_page13 = document.querySelector('.entryField1_page3');
let inputField2_page13 = document.querySelector('.entryField2_page3');
calcBtn_page13.disabled = true;
inputField1_page13.oninput = function () {
    if (inputField1_page13.value.length < 1) {
        calcBtn_page13.disabled = true;
    } else {
        calcBtn_page13.disabled = false;
    };
};
inputField2_page13.oninput = function () {
    if (inputField2_page13.value.length < 1) {
        calcBtn_page13.disabled = true;
    } else {
        calcBtn_page13.disabled = false;
    };
};