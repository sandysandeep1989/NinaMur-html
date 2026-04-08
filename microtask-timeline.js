document.addEventListener('DOMContentLoaded', function () {

    // --- Year Navigation ---
    const yearLabel = document.getElementById('mtYearLabel');
    const yearPrev = document.getElementById('mtYearPrev');
    const yearNext = document.getElementById('mtYearNext');
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

    // --- Clear Filter ---
    const clearFilterBtn = document.getElementById('mtClearFilter');
    const filterDepartment = document.getElementById('mtFilterByDepartment');
    const filterPerson = document.getElementById('mtFilterByPerson');

    clearFilterBtn.addEventListener('click', function () {
        filterDepartment.selectedIndex = 0;
        filterPerson.selectedIndex = 0;
    });

    // --- Navigation Buttons ---
    const btnMacrotasks = document.getElementById('mtBtnMacrotasks');
    const btnProjects = document.getElementById('mtBtnProjects');
    const btnProjectTimeline = document.getElementById('mtBtnProjectTimeline');
    const navBtns = [btnMacrotasks, btnProjects, btnProjectTimeline];

    navBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            navBtns.forEach(function (b) {
                b.classList.remove('mt-nav-btn--active');
            });
            btn.classList.add('mt-nav-btn--active');
        });
    });

});
