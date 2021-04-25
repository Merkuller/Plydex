let panelWidth = document.querySelector('.entryField1_page3');
let panelHeight = document.querySelector('.entryField2_page3');
let btn = document.querySelector('.contentPart1_4MenuBtn_page3');
let showPrice = document.querySelector('.panelQuantity_page13');
let defaultWidth = document.querySelector('.panelWidth_page13');
let defaultHeight = document.querySelector('.panelHeight_page13');
let panelPerRow;
let rowQuantity;
let price = document.querySelector('.panelPrice_page13');
let pricePerMeter = document.querySelector('.contentPart2MenuCostNumber_page3');
let pricePerPanel = document.querySelector('.pricePerPanel_page13');


btn.onclick = function() {
    panelPerRow = Math.ceil(panelWidth.value / defaultWidth.value);
    rowQuantity = Math.ceil(panelHeight.value / defaultHeight.value);
    showPrice.textContent = panelPerRow * rowQuantity;
    price.textContent = Math.round((panelWidth.value * panelHeight.value) * pricePerMeter.textContent);
    pricePerPanel.textContent = Math.round(price.textContent / showPrice.textContent); 
};