document.addEventListener('DOMContentLoaded', function () {

    // --- Actions Header Popover Toggle ---
    const actionsHeader = document.getElementById('actionsHeader');
    const actionsPopover = document.getElementById('actionsPopover');

    if (actionsHeader && actionsPopover) {
        actionsHeader.addEventListener('click', function (e) {
            e.stopPropagation();
            actionsPopover.classList.toggle('ol-popover--open');
        });

        document.addEventListener('click', function () {
            actionsPopover.classList.remove('ol-popover--open');
        });

        actionsPopover.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    }

    // --- Delete All ---
    const deleteAllBtn = document.getElementById('deleteAllBtn');
    if (deleteAllBtn) {
        deleteAllBtn.addEventListener('click', function () {
            if (confirm('Are you sure you want to delete all orders?')) {
                // Delete all logic here
            }
            actionsPopover.classList.remove('ol-popover--open');
        });
    }

    // --- Clear Filter ---
    const clearFilter = document.getElementById('clearFilter');
    const filterByType = document.getElementById('filterByType');
    const filterByStatus = document.getElementById('filterByStatus');

    if (clearFilter) {
        clearFilter.addEventListener('click', function () {
            if (filterByType) filterByType.value = '';
            if (filterByStatus) filterByStatus.value = '';
        });
    }

});
