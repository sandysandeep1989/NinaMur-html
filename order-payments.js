document.addEventListener('DOMContentLoaded', function () {

    // --- Filter option checkbox toggles (Order Type, Payment Method, Prod Status) ---
    document.querySelectorAll('.op-filter-option').forEach(function (option) {
        option.addEventListener('click', function () {
            var img = this.querySelector('img');
            if (img.src.includes('icon-checkbox-empty')) {
                img.src = 'images/icon-checkbox-checked.svg';
            } else {
                img.src = 'images/icon-checkbox-empty.svg';
            }
        });
    });

    // --- Filter bar toggle checkboxes (Order Without Agent, Programmed SEPA Only) ---
    document.querySelectorAll('.op-filter-toggle').forEach(function (toggle) {
        toggle.addEventListener('click', function () {
            var img = this.querySelector('img');
            if (img.src.includes('icon-checkbox-empty')) {
                img.src = 'images/icon-checkbox-checked.svg';
            } else {
                img.src = 'images/icon-checkbox-empty.svg';
            }
        });
    });

    // --- Table checkbox icon toggles (SEPA Programmed, Order Selection) ---
    document.querySelectorAll('.op-checkbox-icon').forEach(function (icon) {
        icon.addEventListener('click', function () {
            if (this.src.includes('icon-checkbox-empty')) {
                this.src = 'images/icon-checkbox-checked.svg';
            } else {
                this.src = 'images/icon-checkbox-empty.svg';
            }
        });
    });

    // --- Drop File → File Upload ---
    document.querySelectorAll('.op-dropfile').forEach(function (el) {
        var fileInput = document.createElement('input');
        fileInput.type = 'file';
        fileInput.accept = '.pdf,.jpg,.jpeg,.png,.doc,.docx';
        fileInput.className = 'op-dropfile-input';
        el.appendChild(fileInput);
        el.addEventListener('click', function (e) {
            if (e.target !== fileInput) {
                fileInput.click();
            }
        });
        fileInput.addEventListener('change', function () {
            if (fileInput.files.length > 0) {
                el.childNodes[0].textContent = fileInput.files[0].name;
                el.style.color = '#000';
                el.style.fontWeight = '500';
            }
        });
    });

    // --- Clear Filter ---
    var clearBtn = document.getElementById('opClearFilter');
    if (clearBtn) {
        clearBtn.addEventListener('click', function () {
            // Reset all filter selects
            document.querySelectorAll('.op-filter-select').forEach(function (sel) {
                sel.selectedIndex = 0;
            });
            // Reset all filter option checkboxes
            document.querySelectorAll('.op-filter-option img, .op-filter-toggle img').forEach(function (img) {
                img.src = 'images/icon-checkbox-empty.svg';
            });
        });
    }

    // --- Order Selection Dropdown ---
    var selTrigger = document.getElementById('opOrderSelTrigger');
    var selDropdown = document.getElementById('opOrderSelDropdown');
    if (selTrigger && selDropdown) {
        selTrigger.addEventListener('click', function (e) {
            e.stopPropagation();
            selDropdown.classList.toggle('op-open');
        });
        document.addEventListener('click', function (e) {
            if (!selDropdown.contains(e.target) && e.target !== selTrigger) {
                selDropdown.classList.remove('op-open');
            }
        });
        var orderCheckboxes = document.querySelectorAll('.op-checkbox-icon[alt="Select"]');
        var selAll = document.getElementById('opSelAll');
        var deselAll = document.getElementById('opDeselAll');
        var selVisible = document.getElementById('opSelVisible');
        if (selAll) {
            selAll.addEventListener('click', function () {
                orderCheckboxes.forEach(function (cb) {
                    cb.src = 'images/icon-checkbox-checked.svg';
                });
                selDropdown.classList.remove('op-open');
            });
        }
        if (deselAll) {
            deselAll.addEventListener('click', function () {
                orderCheckboxes.forEach(function (cb) {
                    cb.src = 'images/icon-checkbox-empty.svg';
                });
                selDropdown.classList.remove('op-open');
            });
        }
        if (selVisible) {
            selVisible.addEventListener('click', function () {
                orderCheckboxes.forEach(function (cb) {
                    var row = cb.closest('tr');
                    if (row && row.offsetParent !== null) {
                        cb.src = 'images/icon-checkbox-checked.svg';
                    }
                });
                selDropdown.classList.remove('op-open');
            });
        }
    }

});
