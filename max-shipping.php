<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Est. Shipping Calendar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./max-shipping.css">
</head>

<body>

    <!-- Main Content -->
    <main id="main-content">

        <?php include 'header.php'; ?>

        <section class="ms-container">

            <!-- Title Row -->
            <div class="ms-title-row">
                <h1 class="ms-title">Est. Shipping Calendar</h1>
                <span class="ms-results">Results: 37</span>
            </div>

            <!-- Filter Bar -->
            <div class="ms-filter-bar">
                <div class="ms-filter-group">
                    <label class="ms-filter-label">Filter Status</label>
                    <select class="ms-filter-select" id="msFilterByStatus">
                        <option value="">On Progress Production</option>
                        <option value="ready">Ready</option>
                        <option value="shipped">Shipped</option>
                    </select>
                </div>

                <button class="ms-clear-filter" id="msClearFilter">Clear Filter</button>

                <button class="ms-holiday-btn" id="msHolidayCalendar">Holiday Calendar</button>
            </div>

            <!-- Year Navigation -->
            <div class="ms-year-nav">
                <button class="ms-year-nav-btn" id="msYearPrev">&#8249;</button>
                <span class="ms-year-label" id="msYearLabel"><?php echo date('Y'); ?></span>
                <button class="ms-year-nav-btn" id="msYearNext">&#8250;</button>
            </div>

            <!-- Unified Calendar + Data Table -->
            <div class="ms-table-wrapper">

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

                // To Do values (sample data - replace with DB)
                $todoValues = array_fill(1, $totalWeeks, '-');
                $todoColors = array();
                foreach ([11, 12, 13] as $tw) {
                    if ($tw <= $totalWeeks) {
                        $todoValues[$tw] = '13';
                        $todoColors[$tw] = 'green';
                    }
                }

                // Shipped values (sample data - replace with DB)
                $shippedSample = array('57','83','29','74','12','91','46','36','45','22','77','32','48','19','90','61','73','56','0','9','26','42','39','87','14','64','14','16','42','49','50','51','37','14','64','14','27','49','50','60','51','37','1','6','1','0','0','0','0','0','0','0');
                $shippedValues = array_fill(1, $totalWeeks, '0');
                foreach ($shippedSample as $i => $v) {
                    if (($i + 1) <= $totalWeeks) $shippedValues[$i + 1] = $v;
                }

                // Data rows
                $dataRows = array(
                    array('id'=>'OI1245','customer'=>'CENTRO OPTICO','cColor'=>'yellow','estDate'=>'2024-11-05','estColor'=>'green','subDate'=>'2024-08-20','status'=>'BOXED','sClass'=>'boxed','pDate'=>'2024-11-05','pSub'=>'2024-08-20','units'=>'12 Units','fillWeeks'=>array(44),'fColor'=>'yellow'),
                    array('id'=>'OI1245','customer'=>'CENTRO OPTICO','cColor'=>'','estDate'=>'2024-11-05','estColor'=>'red','subDate'=>'2024-08-20','status'=>'PRE ASSEMBLY','sClass'=>'preassembly','pDate'=>'2024-11-05','pSub'=>'2024-08-20','units'=>'12 Units','fillWeeks'=>array(),'fColor'=>''),
                    array('id'=>'OI1245','customer'=>'CENTRO OPTICO','cColor'=>'','estDate'=>'2024-11-05','estColor'=>'','subDate'=>'2024-08-20','status'=>'BOXED','sClass'=>'boxed','pDate'=>'2024-11-05','pSub'=>'2024-08-20','units'=>'12 Units','fillWeeks'=>array(),'fColor'=>''),
                    array('id'=>'OI1245','customer'=>'CENTRO OPTICO','cColor'=>'','estDate'=>'2024-11-05','estColor'=>'','subDate'=>'2024-08-20','status'=>'BOXED','sClass'=>'boxed','pDate'=>'2024-11-05','pSub'=>'2024-08-20','units'=>'12 Units','fillWeeks'=>array(),'fColor'=>''),
                    array('id'=>'OI1245','customer'=>'CENTRO OPTICO','cColor'=>'green','estDate'=>'2024-11-05','estColor'=>'red','subDate'=>'2024-08-20','status'=>'PARTLY SHIPP..','sClass'=>'partly-shipped','pDate'=>'2024-11-05','pSub'=>'2024-08-20','units'=>'12 Units','fillWeeks'=>array(44),'fColor'=>'green'),
                    array('id'=>'OI1245','customer'=>'CENTRO OPTICO','cColor'=>'blue','estDate'=>'2024-11-05','estColor'=>'red','subDate'=>'2024-08-20','status'=>'PARTLY SHIPP..','sClass'=>'partly-shipped','pDate'=>'2024-11-05','pSub'=>'2024-08-20','units'=>'12 Units','fillWeeks'=>array(44),'fColor'=>'blue'),
                    array('id'=>'OI1245','customer'=>'CENTRO OPTICO','cColor'=>'red','estDate'=>'2024-11-05','estColor'=>'red','subDate'=>'2024-08-20','status'=>'PARTLY SHIPP..','sClass'=>'partly-shipped','pDate'=>'2024-11-05','pSub'=>'2024-08-20','units'=>'12 Units','fillWeeks'=>array(44),'fColor'=>'red'),
                    array('id'=>'OI1245','customer'=>'CENTRO OPTICO','cColor'=>'','estDate'=>'2024-11-05','estColor'=>'red','subDate'=>'2024-08-20','status'=>'BOXED','sClass'=>'boxed','pDate'=>'2024-11-05','pSub'=>'2024-08-20','units'=>'12 Units','fillWeeks'=>array(),'fColor'=>''),
                    array('id'=>'OI1245','customer'=>'CENTRO OPTICO','cColor'=>'yellow','estDate'=>'2024-11-05','estColor'=>'green','subDate'=>'2024-08-20','status'=>'BOXED','sClass'=>'boxed','pDate'=>'2024-11-05','pSub'=>'2024-08-20','units'=>'12 Units','fillWeeks'=>array(44),'fColor'=>'yellow'),
                    array('id'=>'OI1245','customer'=>'CENTRO OPTICO','cColor'=>'yellow','estDate'=>'2024-11-05','estColor'=>'green','subDate'=>'2024-08-20','status'=>'BOXED','sClass'=>'boxed','pDate'=>'2024-11-06','pSub'=>'2024-08-20','units'=>'12 Units','fillWeeks'=>array(44),'fColor'=>'yellow'),
                );
                ?>

                <table class="ms-table">

                    <colgroup>
                        <col class="ms-col-id">
                        <col class="ms-col-customer">
                        <col class="ms-col-estship">
                        <col class="ms-col-notes">
                        <col class="ms-col-cnotes">
                        <col class="ms-col-orderdate">
                        <col class="ms-col-units">
                        <col class="ms-col-cal-label">
                        <?php for ($w = 1; $w <= $totalWeeks; $w++): ?>
                        <col class="ms-col-week">
                        <?php endfor; ?>
                    </colgroup>

                    <thead>
                        <!-- Row 1: Month Header + Column Headers (rowspan=6) -->
                        <tr class="ms-cal-month-row">
                            <th rowspan="6" class="ms-col-header-cell ms-th-sortable">
                                <img class="ms-sort-icon" src="images/icon-sort.svg" width="14" height="14" alt="Sort">
                                ID
                            </th>
                            <th rowspan="6" class="ms-col-header-cell ms-th-sortable">
                                <img class="ms-sort-icon" src="images/icon-sort.svg" width="14" height="14" alt="Sort">
                                CUSTOMER
                            </th>
                            <th rowspan="6" class="ms-col-header-cell">
                                EST. SHIPPING
                                <span class="ms-th-subtitle">Max.Shp/Status</span>
                            </th>
                            <th rowspan="6" class="ms-col-header-cell ms-th-rotated"><span class="ms-th-rotated-text">Order Notes</span></th>
                            <th rowspan="6" class="ms-col-header-cell ms-th-rotated"><span class="ms-th-rotated-text">Customer Notes</span></th>
                            <th rowspan="6" class="ms-col-header-cell ms-th-rotated"><span class="ms-th-rotated-text">Order Date / <br> Production Date</span></th>
                            <th rowspan="6" class="ms-col-header-cell ms-th-rotated ms-th-sortable">
                                <span class="ms-th-rotated-text">
                                    <img class="ms-sort-icon" src="images/icon-sort.svg" width="14" height="14" alt="Sort">
                                    No of Frames
                                </span>
                            </th>
                            <th class="ms-cal-spacer"></th>
                            <?php foreach ($monthSpans as $ms): ?>
                            <th colspan="<?php echo $ms['colspan']; ?>" class="ms-cal-month"><?php echo $ms['name']; ?></th>
                            <?php endforeach; ?>
                        </tr>

                        <!-- Row 2: WEEK -->
                        <tr class="ms-cal-row">
                            <th class="ms-cal-label">WEEK</th>
                            <?php for ($w = 1; $w <= $totalWeeks; $w++):
                                $color = isset($weekColors[$w]) ? ' ms-cal-cell--'.$weekColors[$w] : '';
                            ?>
                            <td class="ms-cal-cell<?php echo $color; ?>"><?php echo $w; ?></td>
                            <?php endfor; ?>
                        </tr>

                        <!-- Row 3: STARTING DATE -->
                        <tr class="ms-cal-row">
                            <th class="ms-cal-label">STARTING DATE</th>
                            <?php for ($w = 1; $w <= $totalWeeks; $w++):
                                $color = isset($weekColors[$w]) ? ' ms-cal-cell--'.$weekColors[$w] : '';
                            ?>
                            <td class="ms-cal-cell<?php echo $color; ?>"><?php echo $weeks[$w]['start']; ?></td>
                            <?php endfor; ?>
                        </tr>

                        <!-- Row 4: ENDING DATE -->
                        <tr class="ms-cal-row">
                            <th class="ms-cal-label">ENDING DATE</th>
                            <?php for ($w = 1; $w <= $totalWeeks; $w++):
                                $color = isset($weekColors[$w]) ? ' ms-cal-cell--'.$weekColors[$w] : '';
                            ?>
                            <td class="ms-cal-cell<?php echo $color; ?>"><?php echo $weeks[$w]['end']; ?></td>
                            <?php endfor; ?>
                        </tr>

                        <!-- Row 5: TO DO (UNIT) -->
                        <tr class="ms-cal-row">
                            <th class="ms-cal-label">TO DO (UNIT)</th>
                            <?php for ($w = 1; $w <= $totalWeeks; $w++):
                                $color = '';
                                if (isset($todoColors[$w])) $color = ' ms-cal-cell--'.$todoColors[$w];
                                elseif (isset($weekColors[$w])) $color = ' ms-cal-cell--'.$weekColors[$w];
                            ?>
                            <td class="ms-cal-cell<?php echo $color; ?>"><?php echo $todoValues[$w]; ?></td>
                            <?php endfor; ?>
                        </tr>

                        <!-- Row 6: SHIPPED (UNIT) -->
                        <tr class="ms-cal-row">
                            <th class="ms-cal-label">SHIPPED (UNIT)</th>
                            <?php for ($w = 1; $w <= $totalWeeks; $w++):
                                $color = isset($weekColors[$w]) ? ' ms-cal-cell--'.$weekColors[$w] : '';
                            ?>
                            <td class="ms-cal-cell<?php echo $color; ?>"><?php echo $shippedValues[$w]; ?></td>
                            <?php endfor; ?>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($dataRows as $row):
                            $custClass = $row['cColor'] ? 'ms-td-customer--'.$row['cColor'] : '';
                            $estClass = $row['estColor'] ? ' ms-estship-date--'.$row['estColor'] : '';
                        ?>
                        <tr>
                            <td>
                                <div class="ms-id-cell">
                                    <a class="ms-id-link" href="#"><?php echo htmlspecialchars($row['id']); ?></a>
                                </div>
                            </td>
                            <td class="<?php echo $custClass; ?>">
                                <div class="ms-customer-cell">
                                    <span><?php echo htmlspecialchars($row['customer']); ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="ms-estship-cell">
                                    <span class="ms-estship-date<?php echo $estClass; ?>"><?php echo htmlspecialchars($row['estDate']); ?></span>
                                    <span class="ms-estship-sub"><?php echo htmlspecialchars($row['subDate']); ?></span>
                                    <?php if ($row['status']): ?>
                                    <select class="ms-status-select ms-status--<?php echo $row['sClass']; ?>">
                                        <option selected><?php echo htmlspecialchars($row['status']); ?></option>
                                    </select>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td class="ms-td-center">
                                <div class="ms-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="ms-td-center">
                                <div class="ms-icon-cell">
                                    <img src="images/icon-customer-notes-outline.svg" width="16" height="16" alt="Notes">
                                </div>
                            </td>
                            <td>
                                <div class="ms-production-cell">
                                    <span class="ms-production-date"><?php echo htmlspecialchars($row['pDate']); ?></span>
                                    <span class="ms-production-sub"><?php echo htmlspecialchars($row['pSub']); ?></span>
                                </div>
                            </td>
                            <td>
                                <span class="ms-units-cell"><?php echo htmlspecialchars($row['units']); ?></span>
                            </td>
                            <td class="ms-td-cal-spacer"></td>
                            <?php for ($w = 1; $w <= $totalWeeks; $w++):
                                $fillClass = '';
                                if (in_array($w, $row['fillWeeks']) && $row['fColor']) {
                                    $fillClass = ' ms-week-td--'.$row['fColor'];
                                }
                            ?>
                            <td class="ms-week-td<?php echo $fillClass; ?>"></td>
                            <?php endfor; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

            </div>

        </section>

    </main>

    <?php include 'footer.php'; ?>

    <script src="./max-shipping.js"></script>
    <script src="./indexx.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UzzYDKKEvFRE54RoxggMmuDTJdilnOe"
        crossorigin="anonymous"></script>

</body>

</html>