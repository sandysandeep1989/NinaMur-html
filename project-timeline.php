<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Project Timeline</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./project-timeline.css">
</head>

<body>

    <!-- Main Content -->
    <main id="main-content">

        <?php include 'header.php'; ?>

        <section class="pt-container">

            <!-- Title Row -->
            <div class="pt-title-row">
                <h1 class="pt-title">Company Project Timeline</h1>
                <span class="pt-results">Results: 37</span>
            </div>

            <!-- Navigation Bar (no filters on this page) -->
            <div class="pt-nav-bar">
                <div class="pt-nav-buttons">
                    <button class="pt-nav-btn" id="ptBtnMacrotasks">Macrotasks</button>
                    <button class="pt-nav-btn" id="ptBtnProjects">Projects</button>
                    <button class="pt-nav-btn" id="ptBtnMacrotasksTimeline">Macrotasks Timeline</button>
                </div>
            </div>

            <!-- Year Navigation -->
            <div class="pt-year-nav">
                <button class="pt-year-nav-btn" id="ptYearPrev">&#8249;</button>
                <span class="pt-year-label" id="ptYearLabel"><?php echo date('Y'); ?></span>
                <button class="pt-year-nav-btn" id="ptYearNext">&#8250;</button>
            </div>

            <!-- Unified Calendar + Data Table -->
            <div class="pt-table-wrapper">

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
                    array('project'=>'P0001 SISTEMAS DIGITALES','color'=>'yellow','fillWeeks'=>array(4=>12),'fColor'=>'orange'),
                    array('project'=>'P0002 SISTEMAS AVANZADOS','color'=>'blue','fillWeeks'=>array(10=>18),'fColor'=>'cyan'),
                    array('project'=>'P0003 SERVICIOS DIGITALES','color'=>'purple','fillWeeks'=>array(15=>25),'fColor'=>'green'),
                    array('project'=>'P0004 INNOVACIONES DIGITALES','color'=>'red','fillWeeks'=>array(20=>30),'fColor'=>'magenta'),
                    array('project'=>'P0005 DESARROLLO DIGITAL','color'=>'yellow','fillWeeks'=>array(26=>34),'fColor'=>'teal'),
                    array('project'=>'P0006 PLATAFORMAS DIGITALES','color'=>'blue','fillWeeks'=>array(30=>38),'fColor'=>'gold'),
                    array('project'=>'P0007 TECNOLOGIA DIGITAL','color'=>'yellow','fillWeeks'=>array(35=>42),'fColor'=>'yellow'),
                    array('project'=>'P0008 SOLUCIONES DIGITALES','color'=>'purple','fillWeeks'=>array(40=>48),'fColor'=>'green'),
                    array('project'=>'P0009 ESTRATEGIAS DIGITALES','color'=>'yellow','fillWeeks'=>array(45=>52),'fColor'=>'orange'),
                );
                ?>

                <table class="pt-table">

                    <colgroup>
                        <col class="pt-col-color">
                        <col class="pt-col-project">
                        <col class="pt-col-cal-label">
                        <?php for ($w = 1; $w <= $totalWeeks; $w++): ?>
                        <col class="pt-col-week">
                        <?php endfor; ?>
                    </colgroup>

                    <thead>
                        <!-- Row 1: Month Header + Column Headers (rowspan=4) -->
                        <tr class="pt-cal-month-row">
                            <th rowspan="4" class="pt-col-header-cell pt-th-sortable">
                               </th>
                            <th rowspan="4" class="pt-col-header-cell pt-th-sortable">
                                <img class="pt-sort-icon" src="images/icon-sort.svg" width="14" height="14" alt="Sort">
                                PROJECT
                            </th>
                            <th class="pt-cal-spacer"></th>
                            <?php foreach ($monthSpans as $ms): ?>
                            <th colspan="<?php echo $ms['colspan']; ?>" class="pt-cal-month"><?php echo $ms['name']; ?></th>
                            <?php endforeach; ?>
                        </tr>

                        <!-- Row 2: WEEK -->
                        <tr class="pt-cal-row">
                            <th class="pt-cal-label">WEEK</th>
                            <?php for ($w = 1; $w <= $totalWeeks; $w++):
                                $color = isset($weekColors[$w]) ? ' pt-cal-cell--'.$weekColors[$w] : '';
                            ?>
                            <td class="pt-cal-cell<?php echo $color; ?>"><?php echo $w; ?></td>
                            <?php endfor; ?>
                        </tr>

                        <!-- Row 3: STARTING DATE -->
                        <tr class="pt-cal-row">
                            <th class="pt-cal-label">STARTING DATE</th>
                            <?php for ($w = 1; $w <= $totalWeeks; $w++):
                                $color = isset($weekColors[$w]) ? ' pt-cal-cell--'.$weekColors[$w] : '';
                            ?>
                            <td class="pt-cal-cell<?php echo $color; ?>"><?php echo $weeks[$w]['start']; ?></td>
                            <?php endfor; ?>
                        </tr>

                        <!-- Row 4: ENDING DATE -->
                        <tr class="pt-cal-row">
                            <th class="pt-cal-label">ENDING DATE</th>
                            <?php for ($w = 1; $w <= $totalWeeks; $w++):
                                $color = isset($weekColors[$w]) ? ' pt-cal-cell--'.$weekColors[$w] : '';
                            ?>
                            <td class="pt-cal-cell<?php echo $color; ?>"><?php echo $weeks[$w]['end']; ?></td>
                            <?php endfor; ?>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($dataRows as $row):
                            $colorClass = $row['color'] ? 'pt-row-color--'.$row['color'] : '';
                        ?>
                        <tr>
                            <td>
                                <div class="pt-color-indicator <?php echo $colorClass; ?>"></div>
                            </td>
                            <td>
                                <div class="pt-project-cell">
                                    <span><?php echo htmlspecialchars($row['project']); ?></span>
                                </div>
                            </td>
                            <td class="pt-td-cal-spacer"></td>
                            <?php for ($w = 1; $w <= $totalWeeks; $w++):
                                $fillClass = '';
                                if (!empty($row['fillWeeks']) && $row['fColor']) {
                                    foreach ($row['fillWeeks'] as $start => $end) {
                                        if ($w >= $start && $w <= $end) {
                                            $fillClass = ' pt-week-td--'.$row['fColor'];
                                            break;
                                        }
                                    }
                                }
                            ?>
                            <td class="pt-week-td<?php echo $fillClass; ?>"></td>
                            <?php endfor; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

            </div>

        </section>

    </main>

    <?php include 'footer.php'; ?>

    <script src="./project-timeline.js"></script>
    <script src="./indexx.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UzzYDKKEvFRE54RoxggMmuDTJdilnOe"
        crossorigin="anonymous"></script>

</body>

</html>
