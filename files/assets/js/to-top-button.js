let calcScrollValue = () => {
    let toTopButton = document.querySelector(".progressbar");
    let progress = document.querySelector("#progress");
    let topValue = document.documentElement.scrollTop;
    let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrollValue = Math.round((topValue * 100) / calcHeight);
    if (topValue > 100) {
        toTopButton.style.display = "";
        progress.style.display = "";
    } else {
        toTopButton.style.display = "none";
        progress.style.display = "none";
    }
    toTopButton.addEventListener("click", () => {
        document.querySelector('body,html').getBoundingClientRect().top;
        window.scrollTo({
            behavior: 'smooth',
            top: scroll,
        });
    });
    toTopButton.style.background = `conic-gradient(#8DC63F ${scrollValue}%, #FFFFFF ${scrollValue}%)`;
};
window.onscroll = calcScrollValue;
window.onload = calcScrollValue;

