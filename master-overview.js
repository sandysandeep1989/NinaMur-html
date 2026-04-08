document.addEventListener('DOMContentLoaded', function () {

    // --- Actions Header Popover ---
    var actionsHeader = document.getElementById('moActionsHeader');
    var actionsPopover = document.getElementById('moActionsPopover');

    if (actionsHeader && actionsPopover) {
        actionsHeader.addEventListener('click', function (e) {
            e.stopPropagation();
            actionsPopover.classList.toggle('mo-popover--open');
        });

        document.addEventListener('click', function () {
            actionsPopover.classList.remove('mo-popover--open');
        });
    }

    // --- Delete All ---
    var deleteAllBtn = document.getElementById('moDeleteAllBtn');
    if (deleteAllBtn) {
        deleteAllBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            if (confirm('Are you sure you want to delete all?')) {
                var tbody = document.querySelector('.mo-table tbody');
                if (tbody) tbody.innerHTML = '';
            }
            actionsPopover.classList.remove('mo-popover--open');
        });
    }

    // --- Clear Filter ---
    var clearFilter = document.getElementById('moClearFilter');
    var filterSelect = document.getElementById('moFilterByStatus');

    if (clearFilter && filterSelect) {
        clearFilter.addEventListener('click', function () {
            filterSelect.selectedIndex = 0;
        });
    }

    // --- Status Select: update td background color on change ---
    var statusMap = {
        'BOXED': 'boxed',
        'PRE-ASSEMBLY': 'preassembly',
        'ASSEMBLY': 'assembly',
        'PARTLY SHIPPED': 'partly-shipped',
        'READY': 'ready'
    };

    document.querySelectorAll('.mo-status-select').forEach(function (select) {
        select.addEventListener('change', function () {
            var td = this.closest('td');
            var value = this.options[this.selectedIndex].text.trim();
            var key = statusMap[value];

            // Remove old status classes from td and select
            td.className = '';
            this.className = 'mo-status-select';

            if (key) {
                td.classList.add('mo-td-status--' + key);
                this.classList.add('mo-status--' + key);
            }
        });
    });

});
