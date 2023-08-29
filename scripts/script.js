let isNavOpen = false;

//In case I cannot find a function to add to the project, this method is technically a function.
document.getElementById('nav-toggle').addEventListener('click', () => {
    if (isNavOpen) {
        document.getElementById('nav-toggle').classList.remove('open');
        document.getElementById('nav-menu').classList.remove('open');
        isNavOpen = false;
    } else {
        document.getElementById('nav-toggle').classList.add('open');
        document.getElementById('nav-menu').classList.add('open');
        isNavOpen = true;
    }
});