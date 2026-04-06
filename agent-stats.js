document.addEventListener('DOMContentLoaded', function () {

    /* =============================================
       Tab Switching
       ============================================= */
    const tabs = document.querySelectorAll('.as-tab');
    const panels = document.querySelectorAll('.as-tab-panel');
    const exportBtn = document.getElementById('as-export-btn');

    // Tabs that show the export button
    const exportTabs = ['area-customers', 'stats-overview'];

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            const target = this.getAttribute('data-tab');

            // Remove active from all tabs and panels
            tabs.forEach(function (t) { t.classList.remove('active'); });
            panels.forEach(function (p) { p.classList.remove('active'); });

            // Activate clicked tab
            this.classList.add('active');
            var panel = document.getElementById('panel-' + target);
            if (panel) {
                panel.classList.add('active');
            }

            // Toggle export button
            if (exportBtn) {
                exportBtn.style.display = exportTabs.indexOf(target) !== -1 ? 'flex' : 'none';
            }
        });
    });

    /* =============================================
       Area/Customers Table Sorting
       ============================================= */
    var acTable = document.querySelector('.as-ac-table');
    if (acTable) {
        var headers = acTable.querySelectorAll('thead th');

        headers.forEach(function (th, colIndex) {
            th.style.cursor = 'pointer';
            th.addEventListener('click', function () {
                sortTable(acTable, colIndex);
            });
        });
    }

    var sortDirections = {};

    function sortTable(table, colIndex) {
        var tbody = table.querySelector('tbody');
        var rows = Array.from(tbody.querySelectorAll('tr'));

        // Toggle sort direction
        if (!sortDirections[colIndex]) {
            sortDirections[colIndex] = 'asc';
        } else {
            sortDirections[colIndex] = sortDirections[colIndex] === 'asc' ? 'desc' : 'asc';
        }

        var direction = sortDirections[colIndex];

        rows.sort(function (a, b) {
            var aText = getCellText(a, colIndex);
            var bText = getCellText(b, colIndex);

            // Try numeric comparison
            var aNum = parseFloat(aText.replace(/[€\s,]/g, ''));
            var bNum = parseFloat(bText.replace(/[€\s,]/g, ''));

            if (!isNaN(aNum) && !isNaN(bNum)) {
                return direction === 'asc' ? aNum - bNum : bNum - aNum;
            }

            // String comparison
            return direction === 'asc'
                ? aText.localeCompare(bText)
                : bText.localeCompare(aText);
        });

        rows.forEach(function (row) {
            tbody.appendChild(row);
        });
    }

    function getCellText(row, colIndex) {
        var cell = row.cells[colIndex];
        if (!cell) return '';
        // For the OPENING column, get text from the badge
        var badge = cell.querySelector('.as-opening-badge');
        if (badge) return badge.textContent.trim();
        // For the ID column, get text from the link
        var link = cell.querySelector('.as-ac-id-link');
        if (link) return link.textContent.trim();
        return cell.textContent.trim();
    }

});
