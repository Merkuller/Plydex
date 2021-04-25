let btn1_page10 = document.querySelector('.content2SectionBtn1_page10');
let btn2_page10 = document.querySelector('.content2SectionBtn2_page10');
let btn3_page10 = document.querySelector('.content2SectionBtn3_page10');

let contentField1 = document.querySelector('.content3_1Section_page10');
let contentField2 = document.querySelector('.content3_2Section_page10');
let contentField3 = document.querySelector('.content3_3Section_page10');

btn1_page10.onclick = function () {
    btn1_page10.classList.add('btnToggle_page10');
    btn2_page10.classList.remove('btnToggle_page10');
    btn3_page10.classList.remove('btnToggle_page10');

    contentField1.classList.add('showMeField_page10');
    contentField2.classList.remove('showMeField_page10');
    contentField3.classList.remove('showMeField_page10');
};
btn2_page10.onclick = function () {
    btn1_page10.classList.remove('btnToggle_page10');
    btn2_page10.classList.add('btnToggle_page10');
    btn3_page10.classList.remove('btnToggle_page10');

    contentField1.classList.remove('showMeField_page10');
    contentField2.classList.add('showMeField_page10');
    contentField3.classList.remove('showMeField_page10');
};
btn3_page10.onclick = function () {
    btn1_page10.classList.remove('btnToggle_page10');
    btn2_page10.classList.remove('btnToggle_page10');
    btn3_page10.classList.add('btnToggle_page10');

    contentField1.classList.remove('showMeField_page10');
    contentField2.classList.remove('showMeField_page10');
    contentField3.classList.add('showMeField_page10');
};