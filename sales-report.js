/* =============================================
   Sales Report / Order & Eyewear Analysis JS
   ============================================= */

document.addEventListener('DOMContentLoaded', function () {

    // Sort column click handler
    const sortIcons = document.querySelectorAll('.sr-th-sort');
    sortIcons.forEach(function (icon) {
        icon.addEventListener('click', function () {
            // Toggle active sort state
            sortIcons.forEach(function (i) {
                if (i !== icon) i.classList.remove('sr-th-sort--active');
            });
            icon.classList.toggle('sr-th-sort--active');
        });
    });

    // New Search button → open popup
    const newSearchBtn = document.querySelector('.sr-new-search-btn');
    const popupOverlay = document.getElementById('srPopupOverlay');
    const popupClose = document.getElementById('srPopupClose');

    if (newSearchBtn && popupOverlay) {
        newSearchBtn.addEventListener('click', function () {
            popupOverlay.classList.add('sr-popup--open');
        });
    }

    if (popupClose && popupOverlay) {
        popupClose.addEventListener('click', function () {
            popupOverlay.classList.remove('sr-popup--open');
        });
    }

    // Close popup on overlay click (outside modal)
    if (popupOverlay) {
        popupOverlay.addEventListener('click', function (e) {
            if (e.target === popupOverlay) {
                popupOverlay.classList.remove('sr-popup--open');
            }
        });
    }

    // Toggle buttons (Date Range / Specific Fair)
    var whenDaterange = document.getElementById('srWhenDaterange');
    var whenSpecificfair = document.getElementById('srWhenSpecificfair');

    document.querySelectorAll('.sr-popup-toggle').forEach(function (btn) {
        btn.addEventListener('click', function () {
            btn.closest('.sr-popup-toggle-group').querySelectorAll('.sr-popup-toggle').forEach(function (b) {
                b.classList.remove('sr-popup-toggle--active');
            });
            btn.classList.add('sr-popup-toggle--active');

            var tab = btn.getAttribute('data-toggle');
            if (whenDaterange && whenSpecificfair) {
                if (tab === 'daterange') {
                    whenDaterange.style.display = '';
                    whenSpecificfair.style.display = 'none';
                } else {
                    whenDaterange.style.display = 'none';
                    whenSpecificfair.style.display = '';
                }
            }
        });
    });

    // Reset Filters
    var resetBtn = document.getElementById('srPopupReset');
    if (resetBtn) {
        resetBtn.addEventListener('click', function () {
            popupOverlay.querySelectorAll('input[type="checkbox"]').forEach(function (cb) { cb.checked = false; });
            popupOverlay.querySelectorAll('input[type="text"]').forEach(function (inp) { inp.value = ''; });
            popupOverlay.querySelectorAll('select').forEach(function (sel) { sel.selectedIndex = 0; });
            var ta = popupOverlay.querySelector('.sr-popup-textarea');
            if (ta) ta.value = '';
        });
    }

    // Row action buttons: Delete
    document.querySelectorAll('.sr-row-action-btn--delete').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const row = btn.closest('tr');
            if (row) {
                row.style.opacity = '0.5';
            }
        });
    });

    // Report generation buttons
    document.querySelectorAll('.sr-report-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            // Placeholder: open PDF or XLSX
        });
    });

});
