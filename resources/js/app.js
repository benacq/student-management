window.onload = () => {
    let faculties = document.querySelectorAll('.faculty');
    let colleges = document.querySelectorAll('.colleges')
    colleges[0].style.display = 'block';
    faculties[0].classList.add('slanted-div-active')

    for (let i = 0; i < faculties.length; i++) {
        faculties[i].addEventListener('click', () => {
            hideColleges();
            colleges[i].style.display = 'block';
            faculties[i].classList.add('slanted-div-active')
        })
    }


    function hideColleges() {
        for (let i = 0; i < colleges.length; i++) {
            faculties[i].classList.remove('slanted-div-active')
            colleges[i].style.display = 'none';
        }
    }
}
