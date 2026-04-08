document.addEventListener('DOMContentLoaded', function () {

    var overlay = document.getElementById('popOverlay');
    var modals = {
        addProject: document.getElementById('popAddProject'),
        addMicrotask: document.getElementById('popAddMicrotask'),
        newCalendar: document.getElementById('popNewCalendar'),
        newEvent: document.getElementById('popNewEvent')
    };

    // --- Open popup ---
    var triggerBtns = document.querySelectorAll('[data-popup]');
    triggerBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var popupKey = btn.getAttribute('data-popup');
            openPopup(popupKey);
        });
    });

    function openPopup(key) {
        // Hide all modals first
        Object.values(modals).forEach(function (m) {
            m.classList.remove('is-active');
        });

        if (modals[key]) {
            overlay.classList.add('is-visible');
            modals[key].classList.add('is-active');
        }
    }

    function closeAllPopups() {
        overlay.classList.remove('is-visible');
        Object.values(modals).forEach(function (m) {
            m.classList.remove('is-active');
        });
    }

    // --- Close buttons (X and Cancel) ---
    var closeBtns = document.querySelectorAll('[data-close-popup]');
    closeBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            closeAllPopups();
        });
    });

    // --- Close on backdrop click ---
    overlay.addEventListener('click', function (e) {
        if (e.target === overlay) {
            closeAllPopups();
        }
    });

    // --- Close on Escape key ---
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeAllPopups();
        }
    });

    // --- Color picker clear buttons ---
    var clearBtns = document.querySelectorAll('.pop-color-clear');
    clearBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var group = btn.closest('.pop-color-row');
            var picker = group.querySelector('.pop-color-picker');
            if (picker) {
                picker.value = '#ea3636';
            }
        });
    });

    // --- Expose openPopup globally so other pages can trigger popups ---
    window.openPopup = openPopup;
    window.closeAllPopups = closeAllPopups;

    // --- Task Meeting dropdown (no overlay) ---
    var taskMeetingBtn = document.getElementById('taskMeetingBtn');
    var taskMeetingCard = document.getElementById('popTaskMeeting');
    var taskMeetingClose = document.getElementById('taskMeetingClose');
    var taskMeetingCloseBtn = document.getElementById('taskMeetingCloseBtn');

    function toggleTaskMeeting() {
        taskMeetingCard.classList.toggle('is-open');
    }

    function closeTaskMeeting() {
        taskMeetingCard.classList.remove('is-open');
    }

    if (taskMeetingBtn) {
        taskMeetingBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            toggleTaskMeeting();
        });
    }
    if (taskMeetingClose) {
        taskMeetingClose.addEventListener('click', closeTaskMeeting);
    }
    if (taskMeetingCloseBtn) {
        taskMeetingCloseBtn.addEventListener('click', closeTaskMeeting);
    }
    if (taskMeetingCard) {
        taskMeetingCard.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    }

    // Close task meeting dropdown on outside click
    document.addEventListener('click', function () {
        closeTaskMeeting();
    });

});
