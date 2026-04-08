document.addEventListener('DOMContentLoaded', function () {

    // --- Year Navigation ---
    const yearLabel = document.getElementById('msYearLabel');
    const yearPrev = document.getElementById('msYearPrev');
    const yearNext = document.getElementById('msYearNext');
    let currentYear = 2025;

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
    const clearFilterBtn = document.getElementById('msClearFilter');
    const filterSelect = document.getElementById('msFilterByStatus');

    clearFilterBtn.addEventListener('click', function () {
        filterSelect.selectedIndex = 0;
    });

});
