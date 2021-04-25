function parallax(event) {
    this.querySelectorAll('.pageImg_page15').forEach(pageImg_page15 => {
        pageImg_page15.style.transform = `translateX(${event.clientX/100}px) translateY(${event.clientY/100}px)`
    });
}

document.addEventListener('mousemove', parallax); 