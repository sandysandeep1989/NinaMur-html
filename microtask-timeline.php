<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Macrotasks Timeline</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./microtask-timeline.css">
</head>

<body>

    <!-- Main Content -->
    <main id="main-content">

        <?php include 'header.php'; ?>

        <section class="mt-container">

            <!-- Title Row -->
            <div class="mt-title-row">
                <h1 class="mt-title">Company Macrotasks Timeline</h1>
                <span class="mt-results">Results: 37</span>
            </div>

            <!-- Filter Bar -->
            <div class="mt-filter-bar">
                <div class="mt-filter-left">
                    <div class="mt-filter-group">
                        <label class="mt-filter-label">Filter By Department</label>
                        <select class="mt-filter-select" id="mtFilterByDepartment">
                            <option value="">Select Department</option>
                            <option value="digital">Sistemas Digitales</option>
                            <option value="production">Production</option>
                            <option value="logistics">Logistics</option>
                        </select>
                    </div>

                    <div class="mt-filter-group">
                        <label class="mt-filter-label">Filter By Person</label>
                        <select class="mt-filter-select" id="mtFilterByPerson">
                            <option value="">Select Person</option>
                            <option value="person1">Person 1</option>
                            <option value="person2">Person 2</option>
                        </select>
                    </div>

                    <button class="mt-clear-filter" id="mtClearFilter">Clear Filter</button>
                </div>

                <div class="mt-nav-buttons">
                    <button class="mt-nav-btn mt-nav-btn--active" id="mtBtnMacrotasks">Macrotasks</button>
                    <button class="mt-nav-btn" id="mtBtnProjects">Projects</button>
                    <button class="mt-nav-btn" id="mtBtnProjectTimeline">Project Timeline</button>
                </div>
            </div>

            <!-- Year Navigation -->
            <div class="mt-year-nav">
                <button class="mt-year-nav-btn" id="mtYearPrev">&#8249;</button>
                <span class="mt-year-label" id="mtYearLabel"><?php echo date('Y'); ?></span>
                <button class="mt-year-nav-btn" id="mtYearNext">&#8250;</button>
            </div>

            <!-- Unified Calendar + Data Table -->
            <div class="mt-table-wrapper">

                <?php
                // Dynamic calendar generation based on year
                $year = (int)date('Y');

                // Week color definitions (holiday/special weeks)
                $weekColors = array(6=>'blue', 9=>'red', 11=>'red', 12=>'red', 19=>'red', 20=>'red', 28=>'red', 29=>'red', 30=>'red');

                // Calculate total ISO weeks for this year
                $totalWeeks = (int)(new DateTime("$year-12-28"))->format('W');

                // Generate ISO week data dynamically
                $weeks = [];
                for ($w = 1; $w <= $totalWeeks; $w++) {
                    $monday = new DateTime();
                    $monday->setISODate($year, $w, 1); // Monday
                    $sunday = clone $monday;
                    $sunday->modify('+6 days');
                    $thursday = clone $monday;
                    $thursday->modify('+3 days');
                    $weeks[$w] = [
                        'start' => $monday->format('d'),
                        'end'   => $sunday->format('d'),
                        'month' => (int)$thursday->format('n'),
                        'monthName' => $thursday->format('F'),
                    ];
                }

                // Calculate month colspans for header row
                $monthSpans = [];
                $currentMonth = null;
                foreach ($weeks as $wk) {
                    if ($currentMonth !== $wk['month']) {
                        $monthSpans[] = ['name' => $wk['monthName'], 'colspan' => 1];
                        $currentMonth = $wk['month'];
                    } else {
                        $monthSpans[count($monthSpans) - 1]['colspan']++;
                    }
                }

                // Data rows (sample data - replace with DB)
                $dataRows = array(
                    array('project'=>'SISTEMAS DIGITALES','color'=>'yellow','chatIcon'=>true,'mtId'=>'MT0001','name'=>'WEB - SEGURIDAD','fillWeeks'=>array(23=>27),'fColor'=>'orange'),
                    array('project'=>'SISTEMAS DIGITALES','color'=>'yellow','chatIcon'=>true,'mtId'=>'MT0001','name'=>'WEB - VELOCIDAD','fillWeeks'=>array(23=>27),'fColor'=>'orange'),
                    array('project'=>'SISTEMAS DIGITALES','color'=>'yellow','chatIcon'=>true,'mtId'=>'MT0001','name'=>'WEB - SEGURIDAD','fillWeeks'=>array(),'fColor'=>''),
                    array('project'=>'SISTEMAS DIGITALES','color'=>'yellow','chatIcon'=>true,'mtId'=>'MT0001','name'=>'SUBV 01 - INSCRIPCION','fillWeeks'=>array(38=>42),'fColor'=>'cyan'),
                    array('project'=>'SISTEMAS DIGITALES','color'=>'yellow','chatIcon'=>true,'mtId'=>'MT0001','name'=>'WEB - SEGURIDAD','fillWeeks'=>array(24=>28),'fColor'=>'cyan'),
                    array('project'=>'SISTEMAS DIGITALES','color'=>'blue','chatIcon'=>true,'mtId'=>'MT0001','name'=>'WEB - SEGURIDAD','fillWeeks'=>array(),'fColor'=>''),
                    array('project'=>'SISTEMAS DIGITALES','color'=>'purple','chatIcon'=>true,'mtId'=>'MT0001','name'=>'WEB - SEGURIDAD','fillWeeks'=>array(16=>20),'fColor'=>'purple'),
                    array('project'=>'SISTEMAS DIGITALES','color'=>'red','chatIcon'=>true,'mtId'=>'MT0001','name'=>'WEB - SEGURIDAD','fillWeeks'=>array(24=>30),'fColor'=>'red'),
                    array('project'=>'SISTEMAS DIGITALES','color'=>'yellow','chatIcon'=>true,'mtId'=>'MT0001','name'=>'WEB - SEGURIDAD','fillWeeks'=>array(49=>52),'fColor'=>'cyan-light'),
                );
                ?>

                <table class="mt-table">

                    <colgroup>
                        <col class="mt-col-color">
                        <col class="mt-col-project">
                        <col class="mt-col-chat">
                        <col class="mt-col-editmt">
                        <col class="mt-col-name">
                        <col class="mt-col-cal-label">
                        <?php for ($w = 1; $w <= $totalWeeks; $w++): ?>
                        <col class="mt-col-week">
                        <?php endfor; ?>
                    </colgroup>

                    <thead>
                        <!-- Row 1: Month Header + Column Headers (rowspan=4) -->
                        <tr class="mt-cal-month-row">
                            <th rowspan="4" class="mt-col-header-cell mt-th-sortable">
                               </th>
                            <th rowspan="4" class="mt-col-header-cell mt-th-sortable">
                                <img class="mt-sort-icon" src="images/icon-sort.svg" width="14" height="14" alt="Sort">
                                PROJECT
                            </th>
                            <th rowspan="4" class="mt-col-header-cell mt-th-rotated"><span class="mt-th-rotated-text">CHAT</span></th>
                            <th rowspan="4" class="mt-col-header-cell">
                                Edit Mt.
                            </th>
                            <th rowspan="4" class="mt-col-header-cell mt-th-sortable">
                                <img class="mt-sort-icon" src="images/icon-sort.svg" width="14" height="14" alt="Sort">
                                NAME
                            </th>
                            <th class="mt-cal-spacer"></th>
                            <?php foreach ($monthSpans as $ms): ?>
                            <th colspan="<?php echo $ms['colspan']; ?>" class="mt-cal-month"><?php echo $ms['name']; ?></th>
                            <?php endforeach; ?>
                        </tr>

                        <!-- Row 2: WEEK -->
                        <tr class="mt-cal-row">
                            <th class="mt-cal-label">WEEK</th>
                            <?php for ($w = 1; $w <= $totalWeeks; $w++):
                                $color = isset($weekColors[$w]) ? ' mt-cal-cell--'.$weekColors[$w] : '';
                            ?>
                            <td class="mt-cal-cell<?php echo $color; ?>"><?php echo $w; ?></td>
                            <?php endfor; ?>
                        </tr>

                        <!-- Row 3: STARTING DATE -->
                        <tr class="mt-cal-row">
                            <th class="mt-cal-label">STARTING DATE</th>
                            <?php for ($w = 1; $w <= $totalWeeks; $w++):
                                $color = isset($weekColors[$w]) ? ' mt-cal-cell--'.$weekColors[$w] : '';
                            ?>
                            <td class="mt-cal-cell<?php echo $color; ?>"><?php echo $weeks[$w]['start']; ?></td>
                            <?php endfor; ?>
                        </tr>

                        <!-- Row 4: ENDING DATE -->
                        <tr class="mt-cal-row">
                            <th class="mt-cal-label">ENDING DATE</th>
                            <?php for ($w = 1; $w <= $totalWeeks; $w++):
                                $color = isset($weekColors[$w]) ? ' mt-cal-cell--'.$weekColors[$w] : '';
                            ?>
                            <td class="mt-cal-cell<?php echo $color; ?>"><?php echo $weeks[$w]['end']; ?></td>
                            <?php endfor; ?>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($dataRows as $row):
                            $colorClass = $row['color'] ? 'mt-row-color--'.$row['color'] : '';
                        ?>
                        <tr>
                            <td>
                                <div class="mt-color-indicator <?php echo $colorClass; ?>"></div>
                            </td>
                            <td>
                                <div class="mt-project-cell">
                                    <span><?php echo htmlspecialchars($row['project']); ?></span>
                                </div>
                            </td>
                            <td class="mt-td-center">
                                <?php if ($row['chatIcon']): ?>
                                <div class="mt-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Chat">
                                </div>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="mt-editmt-cell">
                                    <a class="mt-editmt-link" href="#"><?php echo htmlspecialchars($row['mtId']); ?></a>
                                </div>
                            </td>
                            <td>
                                <div class="mt-name-cell">
                                    <span><?php echo htmlspecialchars($row['name']); ?></span>
                                </div>
                            </td>
                            <td class="mt-td-cal-spacer"></td>
                            <?php for ($w = 1; $w <= $totalWeeks; $w++):
                                $fillClass = '';
                                if (!empty($row['fillWeeks']) && $row['fColor']) {
                                    foreach ($row['fillWeeks'] as $start => $end) {
                                        if ($w >= $start && $w <= $end) {
                                            $fillClass = ' mt-week-td--'.$row['fColor'];
                                            break;
                                        }
                                    }
                                }
                            ?>
                            <td class="mt-week-td<?php echo $fillClass; ?>"></td>
                            <?php endfor; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

            </div>

        </section>

    </main>

    <?php include 'footer.php'; ?>

    <script src="./microtask-timeline.js"></script>
    <script src="./indexx.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UzzYDKKEvFRE54RoxggMmuDTJdilnOe"
        crossorigin="anonymous"></script>

</body>

</html>