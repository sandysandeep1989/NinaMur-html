/* =============================================
   Sales Agent Page Scripts (sa- prefix)
   ============================================= */

document.addEventListener('DOMContentLoaded', function () {

    // --- Column sorting ---
    const table = document.querySelector('.sa-table');
    if (!table) return;

    const headers = table.querySelectorAll('.sa-th-sortable');
    let currentSort = { col: null, asc: true };

    headers.forEach(function (th, colIndex) {
        th.addEventListener('click', function () {
            const tbody = table.querySelector('tbody');
            const rows = Array.from(tbody.querySelectorAll('tr'));

            // Determine actual column index from th position in thead
            const thIndex = Array.from(th.parentNode.children).indexOf(th);

            // Toggle direction
            if (currentSort.col === thIndex) {
                currentSort.asc = !currentSort.asc;
            } else {
                currentSort.col = thIndex;
                currentSort.asc = true;
            }

            rows.sort(function (a, b) {
                const cellA = a.children[thIndex];
                const cellB = b.children[thIndex];
                if (!cellA || !cellB) return 0;

                const textA = (cellA.textContent || '').trim().toLowerCase();
                const textB = (cellB.textContent || '').trim().toLowerCase();

                // Numeric comparison for percentage columns
                const numA = parseFloat(textA);
                const numB = parseFloat(textB);
                if (!isNaN(numA) && !isNaN(numB)) {
                    return currentSort.asc ? numA - numB : numB - numA;
                }

                // String comparison
                if (textA < textB) return currentSort.asc ? -1 : 1;
                if (textA > textB) return currentSort.asc ? 1 : -1;
                return 0;
            });

            // Re-append sorted rows
            rows.forEach(function (row) {
                tbody.appendChild(row);
            });

            // Update sort icon visual states
            headers.forEach(function (h) {
                var icon = h.querySelector('.sa-sort-icon');
                if (icon) icon.style.opacity = '0.5';
            });
            var activeIcon = th.querySelector('.sa-sort-icon');
            if (activeIcon) activeIcon.style.opacity = '1';
        });
    });

});
