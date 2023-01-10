const bg = document.getElementById('header');
window.addEventListener('scroll', function(){
    bg.style.backgroundSize = 100 +window.pageXOffset/12+'%';
    bg.style.opacity = 1 - +window.pageXOffset/700+''
})