document.addEventListener('DOMContentLoaded', function () {

    // ===== Size Range Tab Switching =====
    const sizeTabs = document.querySelectorAll('.ss-size-tab');
    sizeTabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            sizeTabs.forEach(function (t) { t.classList.remove('active'); });
            tab.classList.add('active');
        });
    });

    // ===== Inventory Tab Switching =====
    const invTabs = document.querySelectorAll('.ss-inv-tab');
    const messDrawer = document.getElementById('ss-tab-mess-drawer');
    const viewAll = document.getElementById('ss-tab-view-all');

    invTabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            invTabs.forEach(function (t) { t.classList.remove('active'); });
            tab.classList.add('active');

            var tabId = tab.getAttribute('data-inv-tab');
            if (tabId === 'mess-drawer') {
                messDrawer.style.display = '';
                viewAll.style.display = 'none';
            } else if (tabId === 'view-all') {
                messDrawer.style.display = 'none';
                viewAll.style.display = '';
            }
        });
    });

    // ===== Popup Open / Close =====
    var popupBaggage = document.getElementById('popup-baggage');
    var popupTrays = document.getElementById('popup-trays');
    var btnBaggage = document.getElementById('btn-manage-baggage');
    var btnTrays = document.getElementById('btn-manage-trays');

    if (btnBaggage && popupBaggage) {
        btnBaggage.addEventListener('click', function () {
            popupBaggage.classList.add('active');
        });
    }

    if (btnTrays && popupTrays) {
        btnTrays.addEventListener('click', function () {
            popupTrays.classList.add('active');
        });
    }

    // Close buttons
    document.querySelectorAll('[data-popup-close]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var overlay = btn.closest('.ss-popup-overlay');
            if (overlay) {
                overlay.classList.remove('active');
                // Close any open dropdown menus
                document.querySelectorAll('.ss-color-dropdown-menu, .ss-generic-dropdown-menu').forEach(function (m) {
                    m.classList.remove('active');
                });
            }
        });
    });

    // Close on overlay background click
    document.querySelectorAll('.ss-popup-overlay').forEach(function (overlay) {
        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) {
                overlay.classList.remove('active');
                document.querySelectorAll('.ss-color-dropdown-menu, .ss-generic-dropdown-menu').forEach(function (m) {
                    m.classList.remove('active');
                });
            }
        });
    });

    // ===== Color Dropdown for Manage Trays =====
    var colorMenu = document.getElementById('color-dropdown-menu');
    var activeColorSelect = null;

    // ===== Generic Dropdown (Capacity + Item) =====
    var capacityMenu = document.getElementById('capacity-dropdown-menu');
    var itemMenu = document.getElementById('item-dropdown-menu');
    var activeGenericSelect = null;
    var activeGenericMenu = null;

    document.addEventListener('click', function (e) {
        var colorSelect = e.target.closest('.ss-popup-color-select');
        var capacitySelect = e.target.closest('.ss-popup-capacity-select');
        var itemSelect = e.target.closest('.ss-popup-item-select');

        // Capacity dropdown
        if (capacitySelect && capacityMenu) {
            e.stopPropagation();
            // Close other menus
            if (colorMenu) colorMenu.classList.remove('active');
            if (itemMenu) itemMenu.classList.remove('active');

            activeGenericSelect = capacitySelect;
            activeGenericMenu = capacityMenu;

            var rect = capacitySelect.getBoundingClientRect();
            var popupCard = capacitySelect.closest('.ss-popup-card');
            var cardRect = popupCard.getBoundingClientRect();

            capacityMenu.style.top = (rect.bottom - cardRect.top + 4) + 'px';
            capacityMenu.style.left = (rect.left - cardRect.left) + 'px';
            capacityMenu.classList.toggle('active');
            return;
        }

        // Item dropdown
        if (itemSelect && itemMenu) {
            e.stopPropagation();
            if (colorMenu) colorMenu.classList.remove('active');
            if (capacityMenu) capacityMenu.classList.remove('active');

            activeGenericSelect = itemSelect;
            activeGenericMenu = itemMenu;

            var rect = itemSelect.getBoundingClientRect();
            var popupCard = itemSelect.closest('.ss-popup-card');
            var cardRect = popupCard.getBoundingClientRect();

            itemMenu.style.top = (rect.bottom - cardRect.top + 4) + 'px';
            itemMenu.style.left = (rect.left - cardRect.left) + 'px';
            itemMenu.classList.toggle('active');
            return;
        }

        // Color dropdown
        if (colorSelect && colorMenu) {
            e.stopPropagation();
            if (capacityMenu) capacityMenu.classList.remove('active');
            if (itemMenu) itemMenu.classList.remove('active');
            activeColorSelect = colorSelect;

            var rect = colorSelect.getBoundingClientRect();
            var popupCard = colorSelect.closest('.ss-popup-card');
            var cardRect = popupCard.getBoundingClientRect();

            colorMenu.style.top = (rect.bottom - cardRect.top + 4) + 'px';
            colorMenu.style.left = (rect.left - cardRect.left) + 'px';
            colorMenu.classList.toggle('active');
            return;
        }

        // Click outside — close all menus
        if (!e.target.closest('.ss-color-dropdown-menu') && !e.target.closest('.ss-generic-dropdown-menu')) {
            if (colorMenu) colorMenu.classList.remove('active');
            if (capacityMenu) capacityMenu.classList.remove('active');
            if (itemMenu) itemMenu.classList.remove('active');
        }
    });

    // Generic option selection (Capacity + Item)
    document.querySelectorAll('.ss-generic-dropdown-menu').forEach(function (menu) {
        menu.querySelectorAll('.ss-generic-option').forEach(function (opt) {
            opt.addEventListener('click', function () {
                if (!activeGenericSelect) return;
                var txt = activeGenericSelect.querySelector('.ss-popup-dropdown-text');
                if (txt) {
                    txt.textContent = opt.textContent;
                    txt.classList.remove('ss-popup-italic');
                }
                menu.classList.remove('active');
                activeGenericSelect = null;
                activeGenericMenu = null;
            });
        });
    });

    // Color option selection
    if (colorMenu) {
        colorMenu.querySelectorAll('.ss-color-option').forEach(function (opt) {
            opt.addEventListener('click', function () {
                if (!activeColorSelect) return;

                var value = opt.getAttribute('data-value');
                var bg = opt.getAttribute('data-bg');
                var textColor = opt.getAttribute('data-text');

                // Remove old color classes
                activeColorSelect.classList.remove('ss-color-green', 'ss-color-brown', 'ss-color-blue');

                // Add new color class
                if (value === 'green') activeColorSelect.classList.add('ss-color-green');
                if (value === 'brown') activeColorSelect.classList.add('ss-color-brown');
                if (value === 'blue') activeColorSelect.classList.add('ss-color-blue');

                // Update text
                var txt = activeColorSelect.querySelector('.ss-popup-dropdown-text');
                if (txt) {
                    txt.textContent = opt.textContent.toUpperCase();
                    txt.classList.remove('ss-popup-italic');
                }

                activeColorSelect.setAttribute('data-color', value);
                colorMenu.classList.remove('active');
                activeColorSelect = null;
            });
        });
    }

});
