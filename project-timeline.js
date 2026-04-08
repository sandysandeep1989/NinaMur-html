document.addEventListener('DOMContentLoaded', function () {

    // --- Year Navigation ---
    const yearLabel = document.getElementById('ptYearLabel');
    const yearPrev = document.getElementById('ptYearPrev');
    const yearNext = document.getElementById('ptYearNext');
    let currentYear = new Date().getFullYear();

    function updateYear(year) {
        currentYear = year;
        yearLabel.textContent = currentYear;
    }

    yearPrev.addEventListener('click', function () {
        updateYear(currentYear - 1);
    });

    yearNext.addEventListener('click', function () {
        updateYear(currentYear + 1);
    });

    // --- Navigation Buttons ---
    const btnMacrotasks = document.getElementById('ptBtnMacrotasks');
    const btnProjects = document.getElementById('ptBtnProjects');
    const btnMacrotasksTimeline = document.getElementById('ptBtnMacrotasksTimeline');
    const navBtns = [btnMacrotasks, btnProjects, btnMacrotasksTimeline];

    navBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            navBtns.forEach(function (b) {
                b.classList.remove('pt-nav-btn--active');
            });
            btn.classList.add('pt-nav-btn--active');
        });
    });

});
