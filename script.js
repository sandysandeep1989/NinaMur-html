document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const monthTable = document.querySelector('.month-table');
    const monthCells = document.querySelectorAll('.month-table td .no');
    const yearDisplay = document.querySelector('.year-table td:nth-child(2)');
    const prevYearBtn = document.querySelector('.year-arrow:first-child');
    const nextYearBtn = document.querySelector('.year-arrow:last-child');
    const monthDialog = document.getElementById('monthDialog');
    const monthOptions = document.querySelectorAll('.month-option');
    const cancelMonthBtn = document.getElementById('cancelMonth');
    const confirmMonthBtn = document.getElementById('confirmMonth');

    let currentYear = 2025;
    let selectedMonth = 8; // Default to August (08)

    // Set initial active month
    function setActiveMonth(month) {
        monthCells.forEach(cell => {
            cell.classList.remove('active');
            if (parseInt(cell.textContent) === month) {
                cell.classList.add('active');
            }
        });
    }

    // Update year display
    function updateYearDisplay() {
        yearDisplay.textContent = currentYear;
    }

    // Show month selection dialog
    function showMonthDialog() {
        // Select current month in dialog
        monthOptions.forEach(option => {
            option.classList.remove('selected');
            if (parseInt(option.dataset.month) === selectedMonth) {
                option.classList.add('selected');
            }
        });
        monthDialog.style.display = 'flex';
    }

    // Event Listeners
    // Month cell click
    monthCells.forEach(cell => {
        cell.addEventListener('click', function() {
            selectedMonth = parseInt(this.textContent);
            setActiveMonth(selectedMonth);
            // Here you can add logic to update the main content based on selected month
        });
    });

    // Year navigation
    prevYearBtn.addEventListener('click', function() {
        currentYear--;
        updateYearDisplay();
        // Here you can add logic to update the content for the previous year
    });

    nextYearBtn.addEventListener('click', function() {
        currentYear++;
        updateYearDisplay();
        // Here you can add logic to update the content for the next year
    });

    // Month selection dialog
    monthOptions.forEach(option => {
        option.addEventListener('click', function() {
            monthOptions.forEach(opt => opt.classList.remove('selected'));
            this.classList.add('selected');
            selectedMonth = parseInt(this.dataset.month);
        });
    });

    cancelMonthBtn.addEventListener('click', function() {
        monthDialog.style.display = 'none';
    });

    confirmMonthBtn.addEventListener('click', function() {
        monthDialog.style.display = 'none';
        setActiveMonth(selectedMonth);
        // Here you can add logic to update the content based on the selected month
    });

    // Close dialog when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target === monthDialog) {
            monthDialog.style.display = 'none';
        }
    });

    // Initialize
    setActiveMonth(selectedMonth);
    updateYearDisplay();
});



// Dialog functionality


document.addEventListener('DOMContentLoaded', function() {
    // Get dialog elements
    const addButton = document.querySelector('.add');
    const dialogContainer = document.getElementById('addItemDialog');
    const cancelButton = document.getElementById('cancelBtn');
    const addItemButton = document.getElementById('addBtn');
    const searchField = document.querySelector('.search-field');
    const itemsContainer = document.querySelector('.items-container');
    const itemOptions = document.querySelectorAll('.item-option');
    const dialogCloseIcon = document.querySelector('.dialog-header img');
    
    // Show dialog when add button is clicked
    if (addButton) {
        addButton.addEventListener('click', function(e) {
            e.preventDefault();
            dialogContainer.style.display = 'flex';
        });
    }

    // Hide dialog when cancel button is clicked
    if (cancelButton) {
        cancelButton.addEventListener('click', function() {
            dialogContainer.style.display = 'none';
        });
    }

  

    // Hide dialog when clicking the cross icon in the header
    if (dialogCloseIcon) {
        dialogCloseIcon.addEventListener('click', function () {
            dialogContainer.style.display = 'none';
        });
    }

    // Handle item selection
    itemOptions.forEach(option => {
        option.addEventListener('click', function() {
            // Remove active class from all options
            itemOptions.forEach(opt => opt.classList.remove('active'));
            // Add active class to clicked option
            this.classList.add('active');

            // Put selected item text into the search input
            if (searchField) {
                searchField.value = this.textContent.trim();
            }

            // Hide the list after selection
            if (itemsContainer) {
                itemsContainer.style.display = 'none';
            }
        });
    });

    // Handle search functionality
    if (searchField) {
        searchField.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            itemOptions.forEach(option => {
                const text = option.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    option.style.display = 'block';
                } else {
                    option.style.display = 'none';
                }
            });
        });
    }

    // Handle add item button click - clone a new main table with its bottom text
    if (addItemButton) {
        addItemButton.addEventListener('click', function() {
            const selectedItem = document.querySelector('.item-option.active');
            if (!selectedItem) {
                alert('Please select an item first');
                return;
            }

            // Find wrapper and the last .main-table inside it
            const wrapper = document.querySelector('.wrapper');
            if (wrapper) {
                const tables = wrapper.querySelectorAll('.main-table');
                if (tables.length > 0) {
                    const lastTable = tables[tables.length - 1];
                    const clone = lastTable.cloneNode(true); // deep clone

                    // Cleanly update title text with selected item label
                    const titleCell = clone.querySelector('.item-title td:nth-child(2)');
                    if (titleCell) {
                        // Set the plain text before any inner links
                        const baseText = selectedItem.textContent.trim() + ' – ';
                        // If there is at least one text node, update it, otherwise prepend one
                        if (titleCell.firstChild && titleCell.firstChild.nodeType === Node.TEXT_NODE) {
                            titleCell.firstChild.nodeValue = baseText;
                        } else {
                            titleCell.insertBefore(document.createTextNode(baseText), titleCell.firstChild || null);
                        }
                    }

                    // Also clone the bottom-text that belongs to the last table, if present
                    let lastBottom = lastTable.nextElementSibling;
                    if (lastBottom && lastBottom.classList.contains('bottom-text')) {
                        const bottomClone = lastBottom.cloneNode(true);
                        // Insert cloned table and its bottom-text *after* the original bottom-text
                        const afterBottom = lastBottom.nextSibling;
                        if (afterBottom) {
                            wrapper.insertBefore(clone, afterBottom);
                            wrapper.insertBefore(bottomClone, clone.nextSibling);
                        } else {
                            wrapper.appendChild(clone);
                            wrapper.appendChild(bottomClone);
                        }
                    } else {
                        // Fallback: insert after the last bottom-text in the wrapper, or at the end
                        const globalBottom = wrapper.querySelector('.bottom-text:last-of-type');
                        if (globalBottom) {
                            const bottomClone = globalBottom.cloneNode(true);
                            const afterGlobal = globalBottom.nextSibling;
                            if (afterGlobal) {
                                wrapper.insertBefore(clone, afterGlobal);
                                wrapper.insertBefore(bottomClone, clone.nextSibling);
                            } else {
                                wrapper.appendChild(clone);
                                wrapper.appendChild(bottomClone);
                            }
                        } else {
                            wrapper.appendChild(clone);
                        }
                    }
                }
            }

            // Close the dialog
            dialogContainer.style.display = 'none';
        });
    }

    // Handle delete icon click - remove table and its bottom text
    const wrapper = document.querySelector('.wrapper');
    if (wrapper) {
        wrapper.addEventListener('click', function (e) {
            const deleteIcon = e.target.closest('img[alt="delete"]');
            if (!deleteIcon) return;

            const table = deleteIcon.closest('.main-table');
            if (!table) return;

            // Find bottom-text immediately after this table (if any)
            const nextEl = table.nextElementSibling;
            if (nextEl && nextEl.classList.contains('bottom-text')) {
                nextEl.remove();
            }

            table.remove();
        });
    }
});