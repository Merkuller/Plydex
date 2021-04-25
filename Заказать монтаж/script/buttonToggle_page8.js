let tab1 = document.querySelector('.C3SBtn1_page8');
let tab2 = document.querySelector('.C3SBtn2_page8');
let tab3 = document.querySelector('.C3SBtn3_page8');
let block1 = document.querySelector('.content4Section1_page8');
let block2 = document.querySelector('.content4Section2_page8');
let block3 = document.querySelector('.content4Section3_page8');

tab1.onclick = function () {
    tab1.classList.add('activeButton_page8');
    tab2.classList.remove('activeButton_page8');
    tab3.classList.remove('activeButton_page8');
    block1.classList.add('showMeBlock_page8');
    block2.classList.remove('showMeBlock_page8');
    block3.classList.remove('showMeBlock_page8');
}

tab2.onclick = function () {
    tab1.classList.remove('activeButton_page8');
    tab2.classList.add('activeButton_page8');
    tab3.classList.remove('activeButton_page8');
    block1.classList.remove('showMeBlock_page8');
    block2.classList.add('showMeBlock_page8');
    block3.classList.remove('showMeBlock_page8');
}

tab3.onclick = function () {
    tab1.classList.remove('activeButton_page8');
    tab2.classList.remove('activeButton_page8');
    tab3.classList.add('activeButton_page8');
    block1.classList.remove('showMeBlock_page8');
    block2.classList.remove('showMeBlock_page8');
    block3.classList.add('showMeBlock_page8');
}