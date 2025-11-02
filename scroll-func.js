const root = document.documentElement;

window.addEventListener('scroll', () => {
    if(window.scrollY >= 150) {
        root.style.setProperty('--moving-bg-img', '-250px');
    } else{
        root.style.setProperty('--moving-bg-img', '-150px');   
    }
});