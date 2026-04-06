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

    // --- Order Items Modal ---
    const orderItemsOverlay = document.getElementById('orderItemsOverlay');
    const orderItemsClose = document.getElementById('orderItemsClose');

    // Open modal when clicking any menu icon in Order Items column
    document.querySelectorAll('.ol-icon-cell img[src*="icon-menu"]').forEach(function (icon) {
        icon.closest('.ol-icon-cell').style.cursor = 'pointer';
        icon.closest('.ol-icon-cell').addEventListener('click', function () {
            if (orderItemsOverlay) {
                orderItemsOverlay.classList.add('oi-overlay--open');
            }
        });
    });

    // Close modal
    if (orderItemsClose) {
        orderItemsClose.addEventListener('click', function () {
            orderItemsOverlay.classList.remove('oi-overlay--open');
        });
    }

    // Close on overlay click
    if (orderItemsOverlay) {
        orderItemsOverlay.addEventListener('click', function (e) {
            if (e.target === orderItemsOverlay) {
                orderItemsOverlay.classList.remove('oi-overlay--open');
            }
        });
    }

});
