<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popups</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./popups.css">
</head>

<body>

    <!-- Main Content -->
    <main id="main-content">

        <?php include 'header.php'; ?>

        <section class="pop-container">

            <h1 class="pop-page-title">Popup Triggers</h1>

            <div class="pop-trigger-buttons">
                <button class="pop-trigger-btn" data-popup="addProject">Add Project</button>
                <button class="pop-trigger-btn" data-popup="addMicrotask">Add Microtask</button>
                <button class="pop-trigger-btn" data-popup="newCalendar">New Calendar</button>
                <button class="pop-trigger-btn" data-popup="newEvent">New Event</button>

                <!-- Task Meeting (inline dropdown, no overlay) -->
                <div class="pop-dropdown-wrap">
                    <button class="pop-trigger-btn" id="taskMeetingBtn">Task Meeting</button>
                    <div class="pop-dropdown-card" id="popTaskMeeting">
                        <div class="pop-dropdown-header">
                            <div class="pop-dropdown-title-row">
                                <span class="pop-dropdown-dot"></span>
                                <span class="pop-dropdown-name">Task Meeting 1</span>
                            </div>
                            <button class="pop-dropdown-close" id="taskMeetingClose">&times;</button>
                        </div>
                        <p class="pop-dropdown-sub">Team Holiday . 10 Mar 2026, 05:30</p>
                        <p class="pop-dropdown-desc">DESCRIPTION1</p>
                        <div class="pop-dropdown-actions">
                            <button class="pop-dropdown-btn pop-dropdown-btn--edit">Edit</button>
                            <button class="pop-dropdown-btn pop-dropdown-btn--close" id="taskMeetingCloseBtn">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>

    <!-- ========================================
         POPUP OVERLAY (shared backdrop)
         ======================================== -->
    <div class="pop-overlay" id="popOverlay">

        <!-- ============================
             1) ADD PROJECT POPUP
             ============================ -->
        <div class="pop-modal pop-modal--wide" id="popAddProject">
            <!-- Header -->
            <div class="pop-header">
                <h2 class="pop-title">Add Projects</h2>
                <button class="pop-close-btn" data-close-popup>&times;</button>
            </div>

            <!-- Body -->
            <div class="pop-body">
                <!-- Project Name -->
                <div class="pop-field">
                    <label class="pop-label">Project Name</label>
                    <input type="text" class="pop-input" placeholder="Enter Task Name">
                </div>

                <!-- Label Color -->
                <div class="pop-field">
                    <label class="pop-label">Label Color</label>
                    <div class="pop-color-row">
                        <div class="pop-color-picker-group">
                            <input type="color" class="pop-color-picker" value="#ea3636">
                            <span class="pop-color-hint">Override label color</span>
                        </div>
                        <button class="pop-color-clear">clear</button>
                    </div>
                </div>

                <!-- Description -->
                <div class="pop-field">
                    <label class="pop-label">Description</label>
                    <textarea class="pop-textarea" rows="5" placeholder="Optional description..."></textarea>
                </div>
            </div>

            <!-- Footer -->
            <div class="pop-footer">
                <button class="pop-btn pop-btn--cancel" data-close-popup>Cancel</button>
                <button class="pop-btn pop-btn--submit">Submit</button>
            </div>
        </div>

        <!-- ============================
             2) ADD MICROTASK POPUP
             ============================ -->
        <div class="pop-modal pop-modal--wide" id="popAddMicrotask">
            <!-- Header -->
            <div class="pop-header">
                <h2 class="pop-title">Add Macrotasks</h2>
                <button class="pop-close-btn" data-close-popup>&times;</button>
            </div>

            <!-- Body -->
            <div class="pop-body">
                <!-- Row: Project ID / Name + Task Name -->
                <div class="pop-row">
                    <div class="pop-field pop-field--half">
                        <label class="pop-label">Project ID / Name *</label>
                        <select class="pop-select">
                            <option value="">Select Project</option>
                        </select>
                    </div>
                    <div class="pop-field pop-field--half">
                        <label class="pop-label">Task Name *</label>
                        <input type="text" class="pop-input" placeholder="Enter Task Name">
                    </div>
                </div>

                <!-- Row: Starting Week + Duration -->
                <div class="pop-row">
                    <div class="pop-field pop-field--half">
                        <label class="pop-label">Starting Week *</label>
                        <input type="date" class="pop-input pop-input--date" placeholder="dd-mm-yyyy">
                    </div>
                    <div class="pop-field pop-field--half">
                        <label class="pop-label">Duration (in week) *</label>
                        <input type="number" class="pop-input" placeholder="">
                    </div>
                </div>

                <!-- Row: Departments + Team/People -->
                <div class="pop-row">
                    <div class="pop-field pop-field--half">
                        <label class="pop-label">Departments</label>
                        <select class="pop-select">
                            <option value="">Select Departments</option>
                            <option value="Design">Design</option>
                            <option value="Development">Development</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Sales">Sales</option>
                            <option value="Operations">Operations</option>
                            <option value="Finance">Finance</option>
                            <option value="HR">HR</option>
                        </select>
                    </div>
                    <div class="pop-field pop-field--half">
                        <label class="pop-label">Team/People*</label>
                        <select class="pop-select">
                            <option value="">— None —</option>
                            <option value="Person 1">Person 1</option>
                            <option value="Person 2">Person 2</option>
                            <option value="Person 3">Person 3</option>
                            <option value="Person 4">Person 4</option>
                            <option value="Person 5">Person 5</option>
                        </select>
                    </div>
                </div>

                <!-- Row: Dependencies + Related To-Do-Tasks -->
                <div class="pop-row">
                    <div class="pop-field pop-field--half">
                        <label class="pop-label">Dependencies</label>
                        <select class="pop-select">
                            <option value="">Select Dependencies</option>
                            <option value="Task 1">Task 1</option>
                            <option value="Task 2">Task 2</option>
                            <option value="Task 3">Task 3</option>
                            <option value="Task 4">Task 4</option>
                            <option value="Task 5">Task 5</option>
                        </select>
                    </div>
                    <div class="pop-field pop-field--half">
                        <label class="pop-label">Related To-Do-Tasks</label>
                        <select class="pop-select">
                            <option value="">— None —</option>
                            <option value="To-Do 1">To-Do 1</option>
                            <option value="To-Do 2">To-Do 2</option>
                            <option value="To-Do 3">To-Do 3</option>
                            <option value="To-Do 4">To-Do 4</option>
                            <option value="To-Do 5">To-Do 5</option>
                        </select>
                    </div>
                </div>

                <!-- Label Color -->
                <div class="pop-field">
                    <label class="pop-label">Label Color</label>
                    <div class="pop-color-row">
                        <div class="pop-color-picker-group">
                            <input type="color" class="pop-color-picker" value="#ea3636">
                            <span class="pop-color-hint">Override label color</span>
                        </div>
                        <button class="pop-color-clear">clear</button>
                    </div>
                </div>

                <!-- Task Description -->
                <div class="pop-field">
                    <label class="pop-label">Task Description</label>
                    <textarea class="pop-textarea" rows="5" placeholder="Optional description..."></textarea>
                </div>
            </div>

            <!-- Footer -->
            <div class="pop-footer">
                <button class="pop-btn pop-btn--cancel" data-close-popup>Cancel</button>
                <button class="pop-btn pop-btn--submit">Save Event</button>
            </div>
        </div>

        <!-- ============================
             3) NEW CALENDAR POPUP
             ============================ -->
        <div class="pop-modal pop-modal--narrow" id="popNewCalendar">
            <!-- Header -->
            <div class="pop-header">
                <h2 class="pop-title">New Calendar</h2>
                <button class="pop-close-btn" data-close-popup>&times;</button>
            </div>

            <!-- Body -->
            <div class="pop-body">
                <!-- Name -->
                <div class="pop-field">
                    <label class="pop-label">Name</label>
                    <input type="text" class="pop-input" placeholder="e.g. Team meeting">
                </div>

                <!-- Color -->
                <div class="pop-field">
                    <label class="pop-label">Color</label>
                    <div class="pop-color-row">
                        <div class="pop-color-picker-group">
                            <input type="color" class="pop-color-picker" value="#29824b">
                            <span class="pop-color-hint">#6366f1</span>
                        </div>
                        <button class="pop-color-clear">clear</button>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="pop-footer">
                <button class="pop-btn pop-btn--cancel" data-close-popup>Cancel</button>
                <button class="pop-btn pop-btn--submit">Save Event</button>
            </div>
        </div>

        <!-- ============================
             4) NEW EVENT POPUP
             ============================ -->
        <div class="pop-modal pop-modal--narrow" id="popNewEvent">
            <!-- Header -->
            <div class="pop-header">
                <h2 class="pop-title">New Event</h2>
                <button class="pop-close-btn" data-close-popup>&times;</button>
            </div>

            <!-- Body -->
            <div class="pop-body">
                <!-- Event Title -->
                <div class="pop-field">
                    <label class="pop-label">Event Title*</label>
                    <input type="text" class="pop-input" placeholder="e.g. Team meeting">
                </div>

                <!-- Row: Start + End -->
                <div class="pop-row">
                    <div class="pop-field pop-field--half">
                        <label class="pop-label">Start</label>
                        <input type="date" class="pop-input pop-input--date" placeholder="dd-mm-yyyy">
                    </div>
                    <div class="pop-field pop-field--half">
                        <label class="pop-label">End</label>
                        <input type="date" class="pop-input pop-input--date" placeholder="dd-mm-yyyy">
                    </div>
                </div>

                <!-- Row: Start Time + End Time -->
                <div class="pop-row">
                    <div class="pop-field pop-field--half">
                        <label class="pop-label">Start Time</label>
                        <input type="time" class="pop-input pop-input--time" placeholder="----">
                    </div>
                    <div class="pop-field pop-field--half">
                        <label class="pop-label">End Time</label>
                        <input type="time" class="pop-input pop-input--time" placeholder="----">
                    </div>
                </div>

                <!-- All Day Event Toggle -->
                <div class="pop-toggle-row">
                    <label class="pop-toggle">
                        <input type="checkbox" class="pop-toggle-input" id="popAllDayEvent">
                        <span class="pop-toggle-slider"></span>
                    </label>
                    <span class="pop-toggle-label">All Day Event</span>
                </div>

                <!-- Row: Event Type + Calendar / Label -->
                <div class="pop-row">
                    <div class="pop-field pop-field--half">
                        <label class="pop-label">Event Type</label>
                        <select class="pop-select">
                            <option value="general">General Event</option>
                        </select>
                    </div>
                    <div class="pop-field pop-field--half">
                        <label class="pop-label">Calendar / Label</label>
                        <select class="pop-select">
                            <option value="">— None —</option>
                        </select>
                    </div>
                </div>

                <!-- Description -->
                <div class="pop-field">
                    <label class="pop-label">Description</label>
                    <textarea class="pop-textarea pop-textarea--short" rows="3" placeholder="Optional description..."></textarea>
                </div>

                <!-- Assign to / Notify Users -->
                <div class="pop-field">
                    <label class="pop-label">Assign to / Notify Users</label>
                    <input type="text" class="pop-input" placeholder="Search users to notify...">
                </div>

                <!-- Custom Color (Optional) -->
                <div class="pop-field">
                    <label class="pop-label">Custom Color (Optional)</label>
                    <div class="pop-color-row">
                        <div class="pop-color-picker-group">
                            <input type="color" class="pop-color-picker" value="#ea3636">
                            <span class="pop-color-hint">Override label color</span>
                        </div>
                        <button class="pop-color-clear">clear</button>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="pop-footer">
                <button class="pop-btn pop-btn--cancel" data-close-popup>Cancel</button>
                <button class="pop-btn pop-btn--submit">Save Event</button>
            </div>
        </div>

    </div>
    <!-- END POPUP OVERLAY -->

    <?php include 'footer.php'; ?>

    <script src="./popups.js"></script>
    <script src="./indexx.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UzzYDKKEvFRE54RoxggMmuDTJdilnOe"
        crossorigin="anonymous"></script>

</body>

</html>
