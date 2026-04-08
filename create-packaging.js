// =============================================
// Create Packaging Page Scripts (cp- prefix)
// =============================================

document.addEventListener('DOMContentLoaded', function () {

    // --- Actions header popover toggle ---
    const actionsHeader = document.getElementById('actionsHeader');
    const actionsPopover = document.getElementById('actionsPopover');

    if (actionsHeader && actionsPopover) {
        actionsHeader.addEventListener('click', function (e) {
            e.stopPropagation();
            actionsPopover.classList.toggle('cp-popover--open');
        });

        document.addEventListener('click', function () {
            actionsPopover.classList.remove('cp-popover--open');
        });

        actionsPopover.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    }

    // --- Delete All action ---
    const deleteAllBtn = document.getElementById('deleteAllBtn');
    if (deleteAllBtn) {
        deleteAllBtn.addEventListener('click', function () {
            actionsPopover.classList.remove('cp-popover--open');
        });
    }

    // --- ORDER ITEMS Modal (hamburger icon click) ---
    const orderItemsOverlay = document.getElementById('orderItemsOverlay');
    const orderItemsClose = document.getElementById('orderItemsClose');

    // Open Order Items modal when clicking hamburger icons in "Select Items for Packaging"
    document.querySelectorAll('.cp-icon-cell--clickable').forEach(function (icon) {
        icon.addEventListener('click', function () {
            if (orderItemsOverlay) {
                orderItemsOverlay.classList.add('cp-overlay--open');
            }
        });
    });

    // Close Order Items modal
    if (orderItemsClose) {
        orderItemsClose.addEventListener('click', function () {
            orderItemsOverlay.classList.remove('cp-overlay--open');
        });
    }

    // Close on backdrop click
    if (orderItemsOverlay) {
        orderItemsOverlay.addEventListener('click', function (e) {
            if (e.target === orderItemsOverlay) {
                orderItemsOverlay.classList.remove('cp-overlay--open');
            }
        });
    }

    // --- SELECTED ITEMS Modal ---
    const selectedItemsOverlay = document.getElementById('selectedItemsOverlay');
    const selectedItemsClose = document.getElementById('selectedItemsClose');
    const selectItemsHeader = document.getElementById('selectItemsHeader');

    // Open Selected Items modal when clicking the column header
    if (selectItemsHeader && selectedItemsOverlay) {
        selectItemsHeader.addEventListener('click', function () {
            selectedItemsOverlay.classList.add('cp-overlay--open');
        });
    }
    const confirmPackingBtn = document.getElementById('confirmPackingBtn');

    // Close Selected Items modal
    if (selectedItemsClose) {
        selectedItemsClose.addEventListener('click', function () {
            selectedItemsOverlay.classList.remove('cp-overlay--open');
        });
    }

    // Close on backdrop click
    if (selectedItemsOverlay) {
        selectedItemsOverlay.addEventListener('click', function (e) {
            if (e.target === selectedItemsOverlay) {
                selectedItemsOverlay.classList.remove('cp-overlay--open');
            }
        });
    }

    // Confirm button — close selected items modal
    if (confirmPackingBtn) {
        confirmPackingBtn.addEventListener('click', function () {
            selectedItemsOverlay.classList.remove('cp-overlay--open');
        });
    }

});
