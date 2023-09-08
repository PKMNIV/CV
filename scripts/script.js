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

// Run function requiredBullcrap if the user is on the page located at pages/required-bullcrap.html
if (window.location.pathname === '/pages/required.html') {
    countryDiv();
}


// Make an array with 5 countries. When the function countryDiv is ran, it should make divs for every country in the array. Append it to body

function countryDiv(){
    let countries = ['Sweden', 'Norway', 'Finland', 'Denmark', 'Iceland'];
    let body = document.getElementsByTagName('body')[0];
    for (let i = 0; i < countries.length; i++) {
        let div = document.createElement('div');
        div.innerHTML = countries[i];
        body.appendChild(div);
    }
}