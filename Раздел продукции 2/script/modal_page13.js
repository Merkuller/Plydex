if (document.querySelector('.contentPart1_2Menu_2_CardImg_page3')) {
    
    let popup = document.querySelector('.popup');
        closePopupBtn = document.querySelectorAll('.popupCloseBtn');
        html = document.querySelector('html');
        closeBtn = popup.querySelector('.popupCloseBtn');
        modals = document.querySelectorAll('.contentPart1_2Menu_2_CardImg_page3');
        modalImg = popup.querySelector('img');
        overlay = document.querySelector('.testBlur');

    let popupOpen = () => {
        popup.classList.add('showPopup');
        overlay.style.display = 'block';
        bodyLock();
    };

    let popupClose = () => {
        popup.classList.remove('showPopup');
        overlay.style.display = 'none';
    };

    let bodyLock = function () {
        let popupActive = document.querySelector('.popup.showPopup');
        if (popupActive) {
            html.classList.add('lock');
            html.classList.add('bodyPaddingRight');
        } else {
            html.classList.remove('lock');
            html.classList.remove('bodyPaddingRight');
        }
    };

    let changeBackground = function (newBg, bg) {
        setTimeout(() => {
            bg.setAttribute('src', newBg)
        }, 500);
        bg.style.animation = 'fade 1s linear';
        bg.style.animationDelay = '1.s';
    }

    let popupAppear = function (newBg, bg) {
        popupClose(popup);
        bodyLock();
        changeBackground(newBg, bg);
    }
    
    modals.forEach(modal => {
        modal.addEventListener('click', () => {
            popupOpen();
            let imgSrc = modal.querySelector('img').getAttribute('data-src');
            let backgroundImg = modal.querySelector('img');
            modalImg.setAttribute('src', imgSrc)
            closeBtn.addEventListener('click', () => {
                popupAppear(imgSrc, backgroundImg);
            });
            document.addEventListener('keydown', function(evt){
                if (evt.key === 'Escape') {
                    popupAppear(imgSrc, backgroundImg);
                }
            });
            popup.addEventListener('click', function(e) {
                if (!e.target.closest('.popupContent')) {
                    popupAppear(imgSrc, backgroundImg);
                }
            })
        });
    });
}