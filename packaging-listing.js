document.addEventListener('DOMContentLoaded', function () {

    // --- Actions Header Popover Toggle ---
    const actionsHeader = document.getElementById('actionsHeader');
    const actionsPopover = document.getElementById('actionsPopover');

    if (actionsHeader && actionsPopover) {
        actionsHeader.addEventListener('click', function (e) {
            e.stopPropagation();
            actionsPopover.classList.toggle('pk-popover--open');
        });

        document.addEventListener('click', function () {
            actionsPopover.classList.remove('pk-popover--open');
        });

        actionsPopover.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    }

    // --- Delete All ---
    const deleteAllBtn = document.getElementById('deleteAllBtn');
    if (deleteAllBtn) {
        deleteAllBtn.addEventListener('click', function () {
            if (confirm('Are you sure you want to delete all packing list items?')) {
                // Delete all logic here
            }
            actionsPopover.classList.remove('pk-popover--open');
        });
    }

    // --- Selected Items Modal (triggered by SELECT header) ---
    const selectHeader = document.getElementById('selectHeader');
    const pkSelectedOverlay = document.getElementById('pkSelectedOverlay');
    const pkSelectedClose = document.getElementById('pkSelectedClose');

    if (selectHeader && pkSelectedOverlay) {
        selectHeader.addEventListener('click', function (e) {
            e.stopPropagation();
            pkSelectedOverlay.classList.add('pk-overlay--open');
        });
    }

    if (pkSelectedClose) {
        pkSelectedClose.addEventListener('click', function () {
            pkSelectedOverlay.classList.remove('pk-overlay--open');
        });
    }

    if (pkSelectedOverlay) {
        pkSelectedOverlay.addEventListener('click', function (e) {
            if (e.target === pkSelectedOverlay) {
                pkSelectedOverlay.classList.remove('pk-overlay--open');
            }
        });
    }

});
