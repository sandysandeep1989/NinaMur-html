<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Stats</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./agent-stats.css">
</head>

<body>

    <!-- Main Content -->
    <main id="main-content">

        <?php include 'header.php'; ?>

        <section class="as-container">

            <!-- Back Link -->
            <a href="sales-agent.php" class="as-back-link">
                <svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.146447 3.64645C-0.0488155 3.84171 -0.0488155 4.15829 0.146447 4.35355L3.32843 7.53553C3.52369 7.7308 3.84027 7.7308 4.03553 7.53553C4.2308 7.34027 4.2308 7.02369 4.03553 6.82843L1.20711 4L4.03553 1.17157C4.2308 0.976311 4.2308 0.659728 4.03553 0.464466C3.84027 0.269204 3.52369 0.269204 3.32843 0.464466L0.146447 3.64645ZM10 3.5L0.5 3.5V4.5L10 4.5V3.5Z" fill="black"/>
                </svg>
                Back To Previous Page
            </a>

            <!-- Agent Name -->
            <h1 class="as-agent-name">JON CLAUDE DUCOTTE</h1>

            <!-- Card -->
            <div class="as-card">

                <!-- Tab Bar -->
                <div class="as-tab-bar">
                    <div class="as-tabs">
                        <button class="as-tab active" data-tab="selling-point">Selling Point</button>
                        <button class="as-tab" data-tab="orders-made">Orders Made</button>
                        <button class="as-tab" data-tab="frames-sold">Frames Sold</button>
                        <button class="as-tab" data-tab="eyewear-value">Eyewear Value</button>
                        <button class="as-tab" data-tab="area-customers">Area / Customers</button>
                        <button class="as-tab" data-tab="stats-overview">Stats Overview</button>
                    </div>
                    <!-- XLSX Export (visible on Area/Customers & Stats Overview) -->
                    <button class="as-export-btn" id="as-export-btn" style="display:none;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 12L3 7h3.5V1h3V7H13L8 12z" fill="white"/>
                            <path d="M1 14h14v1H1v-1z" fill="white"/>
                        </svg>
                        XLSX EXPORT CUSTOMERS
                    </button>
                </div>

                <!-- ========================================= -->
                <!-- TAB 1: SELLING POINT                      -->
                <!-- ========================================= -->
                <div class="as-tab-panel active" id="panel-selling-point">
                    <?php
                    $spMonths = ['JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER'];
                    // [value, change] per year: 2024, 2025, 2026
                    $spData = [
                        ['JANUARY',   [3,'+4'], [3,'+4'], [3,'+2']],
                        ['FEBRUARY',  [3,'+4'], [3,'+4'], [3,'+2']],
                        ['MARCH',     [3,'+4'], [3,'+4'], [3,'+2']],
                        ['APRIL',     [3,'+4'], [3,'-2'], [3,'+2']],
                        ['MAY',       [3,'-2'], [3,'+4'], [5,'-2']],
                        ['JUNE',      [3,'-2'], [5,'-2'], [15,'+2']],
                        ['JULY',      [3,'+4'], [10,'+2'],[3,'-2']],
                        ['AUGUST',    [3,'-2'], [15,'+2'],[3,'-2']],
                        ['SEPTEMBER', [3,'+2'], [3,'+2'], [10,'-2']],
                        ['OCTOBER',   [3,'+2'], [3,'+4'], [10,'+2']],
                        ['NOVEMBER',  [3,'+4'], [3,'+4'], [3,'+2']],
                        ['DECEMBER',  [3,'+4'], [3,'+4'], [3,'+2']],
                    ];
                    // Growth %: 2024, 2025, 2026
                    $spGrowth = [
                        ['200%','200%','200%'],
                        ['200%','0%','200%'],
                        ['200%','0%','200%'],
                        ['200%','200%','200%'],
                        ['200%','200%','-100%'],
                        ['0%','200%','-100%'],
                        ['0%','0%','-100%'],
                        ['0%','0%','-100%'],
                        ['200%','-100%','200%'],
                        ['200%','200%','200%'],
                        ['200%','200%','200%'],
                        ['200%','200%','200%'],
                    ];
                    ?>
                    <div class="as-grid-wrapper">
                        <!-- Left: SELLING POINT -->
                        <div class="as-grid-section">
                            <div class="as-grid-title">SELLING POINT</div>
                            <div class="as-year-row">
                                <div class="as-year-cell">2024</div>
                                <div class="as-year-cell">2025</div>
                                <div class="as-year-cell">2026</div>
                            </div>
                            <div class="as-rows-container">
                                <?php foreach ($spData as $row): ?>
                                <div class="as-month-row">
                                    <div class="as-month-label"><?php echo $row[0]; ?></div>
                                    <div class="as-month-data">
                                        <?php for ($y = 1; $y <= 3; $y++): ?>
                                        <div class="as-data-group">
                                            <div class="as-data-cell"><?php echo $row[$y][0]; ?></div>
                                            <div class="as-data-cell as-data-cell--bold <?php echo (strpos($row[$y][1], '+') !== false) ? 'as-data-cell--green' : 'as-data-cell--red'; ?>"><?php echo $row[$y][1]; ?></div>
                                        </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- Right: SELLING POINT GROWTH -->
                        <div class="as-grid-section">
                            <div class="as-grid-title as-grid-title--no-margin">SELLING POINT GROWTH</div>
                            <div class="as-year-row" style="margin-left:0;">
                                <div class="as-year-cell">2024</div>
                                <div class="as-year-cell">2025</div>
                                <div class="as-year-cell">2026</div>
                            </div>
                            <div class="as-rows-container">
                                <?php foreach ($spGrowth as $gRow): ?>
                                <div class="as-month-row">
                                    <div class="as-month-data">
                                        <?php foreach ($gRow as $pct): ?>
                                        <div class="as-data-cell <?php echo (strpos($pct, '-') !== false) ? 'as-data-cell--red' : ((intval($pct) > 0) ? 'as-data-cell--green' : ''); ?>"><?php echo $pct; ?></div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========================================= -->
                <!-- TAB 2: ORDERS MADE                        -->
                <!-- ========================================= -->
                <div class="as-tab-panel" id="panel-orders-made">
                    <?php
                    // ORDERS MADE: 2024 TOTAL, 2025 TOTAL, 2026 TOTAL, 2026 BY AGENT
                    $omData = [
                        ['JANUARY',    1,  2,  4,  5],
                        ['FEBRUARY',   3,  4,  6,  7],
                        ['MARCH',      5,  6,  8,  9],
                        ['APRIL',      7,  8, 10, 11],
                        ['MAY',        9, 10, 12, 13],
                        ['JUNE',      11, 12, 14, 15],
                        ['JULY',      13, 14, 16, 17],
                        ['AUGUST',    15, 16, 18, 19],
                        ['SEPTEMBER', 17, 18, 20, 21],
                        ['OCTOBER',   19, 20, 22, 23],
                        ['NOVEMBER',  21, 22, 24, 25],
                        ['DECEMBER',  29, 28, 27, 26],
                    ];
                    // ORDERS MADE %: 2024 TOTAL%, 2025 TOTAL%, 2026 TOTAL%, 2026 AGENT%
                    $omGrowth = [
                        ['200%',  '200%',  '200%',  '200%'],
                        ['200%',  '200%',  '200%',  '200%'],
                        ['200%',  '200%',  '200%',  '200%'],
                        ['200%',  '-100%', '200%',  '200%'],
                        ['-100%', '200%',  '-100%', '-100%'],
                        ['-100%', '-100%', '-100%', '200%'],
                        ['200%',  '200%',  '-100%', '200%'],
                        ['-100%', '200%',  '-100%', '-100%'],
                        ['200%',  '200%',  '200%',  '200%'],
                        ['200%',  '200%',  '200%',  '200%'],
                        ['200%',  '200%',  '200%',  '200%'],
                        ['200%',  '200%',  '200%',  '200%'],
                    ];
                    ?>
                    <div class="as-grid-wrapper">
                        <!-- Left: ORDERS MADE -->
                        <div class="as-grid-section">
                            <div class="as-grid-title">ORDERS MADE</div>
                            <!-- Year Headers -->
                            <div class="as-year-row">
                                <div class="as-year-cell">2024</div>
                                <div class="as-year-cell">2025</div>
                                <div class="as-year-cell" style="flex:2;">2026</div>
                            </div>
                            <!-- Sub-headers -->
                            <div class="as-subheader-row">
                                <div class="as-subheader-group">
                                    <div class="as-subheader-cell">TOTAL</div>
                                </div>
                                <div class="as-subheader-group">
                                    <div class="as-subheader-cell">TOTAL</div>
                                </div>
                                <div class="as-subheader-group" style="flex:2;">
                                    <div class="as-subheader-cell">TOTAL</div>
                                    <div class="as-subheader-cell">BY AGENT</div>
                                </div>
                            </div>
                            <div class="as-rows-container">
                                <?php foreach ($omData as $row): ?>
                                <div class="as-month-row">
                                    <div class="as-month-label"><?php echo $row[0]; ?></div>
                                    <div class="as-month-data">
                                        <div class="as-data-group">
                                            <div class="as-data-cell"><?php echo $row[1]; ?></div>
                                        </div>
                                        <div class="as-data-group">
                                            <div class="as-data-cell"><?php echo $row[2]; ?></div>
                                        </div>
                                        <div class="as-data-group" style="flex:2;">
                                            <div class="as-data-cell"><?php echo $row[3]; ?></div>
                                            <div class="as-data-cell"><?php echo $row[4]; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- Right: ORDERS MADE % -->
                        <div class="as-grid-section">
                            <div class="as-grid-title as-grid-title--no-margin">ORDERS MADE %</div>
                            <div class="as-year-row" style="margin-left:0;">
                                <div class="as-year-cell">2024</div>
                                <div class="as-year-cell">2025</div>
                                <div class="as-year-cell" style="flex:2;">2026</div>
                            </div>
                            <div class="as-subheader-row" style="margin-left:0;">
                                <div class="as-subheader-group">
                                    <div class="as-subheader-cell">TOTAL%</div>
                                </div>
                                <div class="as-subheader-group">
                                    <div class="as-subheader-cell">TOTAL%</div>
                                </div>
                                <div class="as-subheader-group" style="flex:2;">
                                    <div class="as-subheader-cell">TOTAL%</div>
                                    <div class="as-subheader-cell">AGENT%</div>
                                </div>
                            </div>
                            <div class="as-rows-container">
                                <?php foreach ($omGrowth as $gRow): ?>
                                <div class="as-month-row">
                                    <div class="as-month-data">
                                        <?php foreach ($gRow as $pct): ?>
                                        <div class="as-data-cell <?php echo (strpos($pct, '-') !== false) ? 'as-data-cell--red' : ((intval($pct) > 0) ? 'as-data-cell--green' : ''); ?>"><?php echo $pct; ?></div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========================================= -->
                <!-- TAB 3: FRAMES SOLD                        -->
                <!-- ========================================= -->
                <div class="as-tab-panel" id="panel-frames-sold">
                    <?php
                    // FRAMES SOLD: 2024 TOTAL/AG, 2025 TOTAL/AG, 2026 TOTAL/AG  (sequential 4-75)
                    $fsData = [
                        ['JANUARY',    4,  5,  6,  7,  8,  9],
                        ['FEBRUARY',  10, 11, 12, 13, 14, 15],
                        ['MARCH',     16, 17, 18, 19, 20, 21],
                        ['APRIL',     22, 23, 24, 25, 26, 27],
                        ['MAY',       28, 29, 30, 31, 32, 33],
                        ['JUNE',      34, 35, 36, 37, 38, 39],
                        ['JULY',      40, 41, 42, 43, 44, 45],
                        ['AUGUST',    46, 47, 48, 49, 50, 51],
                        ['SEPTEMBER', 52, 53, 54, 55, 56, 57],
                        ['OCTOBER',   58, 59, 60, 61, 62, 63],
                        ['NOVEMBER',  64, 65, 66, 67, 68, 69],
                        ['DECEMBER',  70, 71, 72, 73, 74, 75],
                    ];
                    // FRAMES SOLD GROWTH: 2024, 2025, 2026
                    $fsGrowth = [
                        ['200%','200%','200%'],
                        ['200%','0%','200%'],
                        ['200%','0%','200%'],
                        ['200%','200%','200%'],
                        ['200%','200%','-100%'],
                        ['0%','200%','-100%'],
                        ['0%','0%','-100%'],
                        ['0%','0%','-100%'],
                        ['200%','-100%','200%'],
                        ['200%','200%','200%'],
                        ['200%','200%','200%'],
                        ['200%','200%','200%'],
                    ];
                    ?>
                    <div class="as-grid-wrapper">
                        <!-- Left: FRAMES SOLD -->
                        <div class="as-grid-section">
                            <div class="as-grid-title">FRAMES SOLD</div>
                            <div class="as-year-row">
                                <div class="as-year-cell" style="flex:2;">2024</div>
                                <div class="as-year-cell" style="flex:2;">2025</div>
                                <div class="as-year-cell" style="flex:2;">2026</div>
                            </div>
                            <div class="as-subheader-row">
                                <div class="as-subheader-group">
                                    <div class="as-subheader-cell">TOTAL</div>
                                    <div class="as-subheader-cell">TOTAL AG.</div>
                                </div>
                                <div class="as-subheader-group">
                                    <div class="as-subheader-cell">TOTAL</div>
                                    <div class="as-subheader-cell">TOTAL AG.</div>
                                </div>
                                <div class="as-subheader-group">
                                    <div class="as-subheader-cell">TOTAL</div>
                                    <div class="as-subheader-cell">TOTAL AG.</div>
                                </div>
                            </div>
                            <div class="as-rows-container">
                                <?php foreach ($fsData as $row): ?>
                                <div class="as-month-row">
                                    <div class="as-month-label"><?php echo $row[0]; ?></div>
                                    <div class="as-month-data">
                                        <div class="as-data-group">
                                            <div class="as-data-cell"><?php echo $row[1]; ?></div>
                                            <div class="as-data-cell"><?php echo $row[2]; ?></div>
                                        </div>
                                        <div class="as-data-group">
                                            <div class="as-data-cell"><?php echo $row[3]; ?></div>
                                            <div class="as-data-cell"><?php echo $row[4]; ?></div>
                                        </div>
                                        <div class="as-data-group">
                                            <div class="as-data-cell"><?php echo $row[5]; ?></div>
                                            <div class="as-data-cell"><?php echo $row[6]; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- Right: FRAMES SOLD GROWTH -->
                        <div class="as-grid-section">
                            <div class="as-grid-title as-grid-title--no-margin">FRAMES SOLD GROWTH</div>
                            <div class="as-year-row" style="margin-left:0;">
                                <div class="as-year-cell">2024</div>
                                <div class="as-year-cell">2025</div>
                                <div class="as-year-cell">2026</div>
                            </div>
                            <div class="as-rows-container" style="margin-top:58px;">
                                <?php foreach ($fsGrowth as $gRow): ?>
                                <div class="as-month-row">
                                    <div class="as-month-data">
                                        <?php foreach ($gRow as $pct): ?>
                                        <div class="as-data-cell <?php echo (strpos($pct, '-') !== false) ? 'as-data-cell--red' : ((intval($pct) > 0) ? 'as-data-cell--green' : ''); ?>"><?php echo $pct; ?></div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========================================= -->
                <!-- TAB 4: EYEWEAR VALUE                      -->
                <!-- ========================================= -->
                <div class="as-tab-panel" id="panel-eyewear-value">
                    <?php
                    // FRAMES SOLD (€ values): 2024, 2025, 2026
                    $evData = [
                        ['JANUARY',   '€17.24','€18','€18'],
                        ['FEBRUARY',  '€17.24','€18','€18'],
                        ['MARCH',     '€17.24','€18','€18'],
                        ['APRIL',     '€17.24','€18','€18'],
                        ['MAY',       '€17.24','€18','€18'],
                        ['JUNE',      '€17.24','€18','€18'],
                        ['JULY',      '€17.24','€18','€18'],
                        ['AUGUST',    '€17.24','€18','€18'],
                        ['SEPTEMBER', '€17.24','€18','€18'],
                        ['OCTOBER',   '€17.24','€18','€18'],
                        ['NOVEMBER',  '€17.24','€18','€18'],
                        ['DECEMBER',  '€17.24','€18','€18'],
                    ];
                    // Growth %: 2024, 2025, 2026
                    $evGrowth = [
                        ['200%','200%','200%'],
                        ['200%','0%','200%'],
                        ['200%','0%','200%'],
                        ['200%','200%','200%'],
                        ['200%','200%','-100%'],
                        ['0%','200%','-100%'],
                        ['0%','0%','-100%'],
                        ['0%','0%','-100%'],
                        ['200%','-100%','200%'],
                        ['200%','200%','200%'],
                        ['200%','200%','200%'],
                        ['200%','200%','200%'],
                    ];
                    ?>
                    <div class="as-grid-wrapper">
                        <!-- Left: FRAMES SOLD (€) -->
                        <div class="as-grid-section">
                            <div class="as-grid-title">FRAMES SOLD</div>
                            <div class="as-year-row">
                                <div class="as-year-cell">2024</div>
                                <div class="as-year-cell">2025</div>
                                <div class="as-year-cell">2026</div>
                            </div>
                            <div class="as-rows-container">
                                <?php foreach ($evData as $row): ?>
                                <div class="as-month-row">
                                    <div class="as-month-label"><?php echo $row[0]; ?></div>
                                    <div class="as-month-data">
                                        <div class="as-data-cell"><?php echo $row[1]; ?></div>
                                        <div class="as-data-cell"><?php echo $row[2]; ?></div>
                                        <div class="as-data-cell"><?php echo $row[3]; ?></div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- Right: GROWTH % -->
                        <div class="as-grid-section">
                            <div class="as-grid-title as-grid-title--no-margin">FRAMES SOLD</div>
                            <div class="as-year-row" style="margin-left:0;">
                                <div class="as-year-cell">2024</div>
                                <div class="as-year-cell">2025</div>
                                <div class="as-year-cell">2026</div>
                            </div>
                            <div class="as-rows-container">
                                <?php foreach ($evGrowth as $gRow): ?>
                                <div class="as-month-row">
                                    <div class="as-month-data">
                                        <?php foreach ($gRow as $pct): ?>
                                        <div class="as-data-cell <?php echo (strpos($pct, '-') !== false) ? 'as-data-cell--red' : ((intval($pct) > 0) ? 'as-data-cell--green' : ''); ?>"><?php echo $pct; ?></div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========================================= -->
                <!-- TAB 5: AREA / CUSTOMERS                   -->
                <!-- ========================================= -->
                <div class="as-tab-panel" id="panel-area-customers">
                    <?php
                    $acRows = [
                        ['cat'=>'before-all',   'label'=>'Before Agent Start - All',    'id'=>'C0018','name'=>"L'ATELIER A BINOCLES",'orders'=>2, 'frames'=>18,'spent'=>'1 877.00€','since'=>'25/02/18','time'=>'6.07 yrs','status'=>'NOT CONTINUING',  'freq'=>'Light User', 'months'=>'23 mths','fsl'=>0],
                        ['cat'=>'before-all',   'label'=>'Before Agent Start - All',    'id'=>'C0020','name'=>'LUNETTES PLUS',       'orders'=>1, 'frames'=>12,'spent'=>'1 350.00€','since'=>'25/02/18','time'=>'5.25 yrs','status'=>'NOT CONTINUING',  'freq'=>'Medium User','months'=>'20 mths','fsl'=>1],
                        ['cat'=>'before-all',   'label'=>'Before Agent Start - All',    'id'=>'C0019','name'=>'VISION AIDE',          'orders'=>3, 'frames'=>25,'spent'=>'2 295.50€','since'=>'25/02/18','time'=>'4.50 yrs','status'=>'CONTINUING',      'freq'=>'Heavy User', 'months'=>'15 mths','fsl'=>3],
                        ['cat'=>'before-all',   'label'=>'Before Agent Start - All',    'id'=>'C0022','name'=>'CLARITY VISION',       'orders'=>5, 'frames'=>16,'spent'=>'2 450.75€','since'=>'25/02/18','time'=>'3.75 yrs','status'=>'FROZEN',          'freq'=>'Heavy User', 'months'=>'8 mths', 'fsl'=>5],
                        ['cat'=>'before-all',   'label'=>'Before Agent Start - All',    'id'=>'C0021','name'=>'OPTIQUE ELITE',        'orders'=>4, 'frames'=>30,'spent'=>'1 890.00€','since'=>'25/02/18','time'=>'2.00 yrs','status'=>'FROZEN',          'freq'=>'Light User', 'months'=>'10 mths','fsl'=>2],
                        ['cat'=>'after-fair',   'label'=>'After Agent Start - Fair',    'id'=>'C0023','name'=>'FOCUS OPTICS',         'orders'=>6, 'frames'=>22,'spent'=>'1 780.90€','since'=>'25/02/18','time'=>'6.00 yrs','status'=>'POSSIBLE CLIENT', 'freq'=>'Medium User','months'=>'14 mths','fsl'=>4],
                        ['cat'=>'after-fair',   'label'=>'After Agent Start - Fair',    'id'=>'C0019','name'=>'UNA VISTA MÁXIMA',     'orders'=>4, 'frames'=>22,'spent'=>'2 150.00€','since'=>'25/02/18','time'=>'5.38 yrs','status'=>'ACTIVE',          'freq'=>'Heavy User', 'months'=>'5 mths', 'fsl'=>6],
                        ['cat'=>'after-fair',   'label'=>'After Agent Start - Fair',    'id'=>'C0020','name'=>'ESPEJOS Y LENTES',     'orders'=>3, 'frames'=>15,'spent'=>'1 500.00€','since'=>'25/02/18','time'=>'7.25 yrs','status'=>'NOT CONTINUING',  'freq'=>'Medium User','months'=>'18 mths','fsl'=>2],
                        ['cat'=>'agent-quick',  'label'=>'Made by Agent - Quick Order', 'id'=>'C0022','name'=>'ENFOQUE NÍTIDO',       'orders'=>5, 'frames'=>20,'spent'=>'1 750.00€','since'=>'25/02/18','time'=>'6.50 yrs','status'=>'FROZEN',          'freq'=>'Heavy User', 'months'=>'36 mths','fsl'=>3],
                        ['cat'=>'agent-quick',  'label'=>'Made by Agent - Quick Order', 'id'=>'C0023','name'=>'LENTES DEL MUNDO',     'orders'=>7, 'frames'=>28,'spent'=>'2 450.75€','since'=>'25/02/18','time'=>'3.90 yrs','status'=>'CONTINUING',      'freq'=>'Medium User','months'=>'12 mths','fsl'=>1],
                        ['cat'=>'agent-quick',  'label'=>'Made by Agent - Quick Order', 'id'=>'C0024','name'=>'LENTES Y MÁS',         'orders'=>8, 'frames'=>35,'spent'=>'3 100.20€','since'=>'25/02/18','time'=>'2.75 yrs','status'=>'NOT CONTINUING',  'freq'=>'Light User', 'months'=>'15 mths','fsl'=>2],
                        ['cat'=>'agent-quick',  'label'=>'Made by Agent - Quick Order', 'id'=>'C0025','name'=>'MUNDOS ÓPTICOS',       'orders'=>9, 'frames'=>40,'spent'=>'2 600.00€','since'=>'25/02/18','time'=>'8.10 yrs','status'=>'CONTINUING',      'freq'=>'Heavy User', 'months'=>'29 mths','fsl'=>0],
                        ['cat'=>'after-others', 'label'=>'After Agent Start - Others',  'id'=>'C0026','name'=>'LA MIRADA CLARA',      'orders'=>10,'frames'=>50,'spent'=>'2 950.50€','since'=>'25/02/18','time'=>'1.50 yrs','status'=>'NOT CONTINUING',  'freq'=>'Medium User','months'=>'20 mths','fsl'=>1],
                        ['cat'=>'after-others', 'label'=>'After Agent Start - Others',  'id'=>'C0027','name'=>'LENTES Y REFLEJOS',    'orders'=>11,'frames'=>45,'spent'=>'3 250.00€','since'=>'25/02/18','time'=>'0.75 yrs','status'=>'CONTINUING',      'freq'=>'Light User', 'months'=>'8 mths', 'fsl'=>3],
                        ['cat'=>'after-others', 'label'=>'After Agent Start - Others',  'id'=>'C0021','name'=>'VISTA CLARA',           'orders'=>6, 'frames'=>30,'spent'=>'2 300.99€','since'=>'25/02/18','time'=>'4.12 yrs','status'=>'NOT CONTINUING',  'freq'=>'Light User', 'months'=>'24 mths','fsl'=>0],
                    ];
                    $catClassMap = [
                        'before-all'   => 'as-opening--before-all',
                        'after-fair'   => 'as-opening--after-fair',
                        'agent-quick'  => 'as-opening--agent-quick',
                        'after-others' => 'as-opening--after-others',
                    ];
                    ?>
                    <div class="as-ac-wrapper">
                        <table class="as-ac-table">
                            <thead>
                                <tr>
                                    <th>
                                        OPENING
                                    </th>
                                    <th>
                                        <span class="as-sort-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.73 6.22L5.33 4.44L6.93 6.22M5.33 4.44V11.56" stroke="black" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.07 9.78L10.67 11.56L12.27 9.78M10.67 11.56V4.44" stroke="black" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </span>
                                        ID
                                    </th>
                                    <th>
                                        <span class="as-sort-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.73 6.22L5.33 4.44L6.93 6.22M5.33 4.44V11.56" stroke="black" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.07 9.78L10.67 11.56L12.27 9.78M10.67 11.56V4.44" stroke="black" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </span>
                                        CUSTOMER NAME
                                    </th>
                                    <th class="as-th-center">
                                        <span class="as-sort-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.73 6.22L5.33 4.44L6.93 6.22M5.33 4.44V11.56" stroke="black" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.07 9.78L10.67 11.56L12.27 9.78M10.67 11.56V4.44" stroke="black" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </span>
                                        ORDERS Nº
                                    </th>
                                    <th class="as-th-center">
                                        <span class="as-sort-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.73 6.22L5.33 4.44L6.93 6.22M5.33 4.44V11.56" stroke="black" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.07 9.78L10.67 11.56L12.27 9.78M10.67 11.56V4.44" stroke="black" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </span>
                                        TOTAL FRAMES SOLD
                                    </th>
                                    <th class="as-th-center">
                                        <span class="as-sort-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.73 6.22L5.33 4.44L6.93 6.22M5.33 4.44V11.56" stroke="black" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.07 9.78L10.67 11.56L12.27 9.78M10.67 11.56V4.44" stroke="black" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </span>
                                        TOTAL SPENT
                                    </th>
                                    <th class="as-th-center">
                                        <span class="as-sort-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.73 6.22L5.33 4.44L6.93 6.22M5.33 4.44V11.56" stroke="black" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.07 9.78L10.67 11.56L12.27 9.78M10.67 11.56V4.44" stroke="black" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </span>
                                        SINCE
                                    </th>
                                    <th class="as-th-center">
                                        <span class="as-sort-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.73 6.22L5.33 4.44L6.93 6.22M5.33 4.44V11.56" stroke="black" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.07 9.78L10.67 11.56L12.27 9.78M10.67 11.56V4.44" stroke="black" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </span>
                                        TIME AS CLIENT
                                    </th>
                                    <th class="as-th-center">
                                        <span class="as-sort-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.73 6.22L5.33 4.44L6.93 6.22M5.33 4.44V11.56" stroke="black" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.07 9.78L10.67 11.56L12.27 9.78M10.67 11.56V4.44" stroke="black" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </span>
                                        STATUS
                                    </th>
                                    <th class="as-th-center">
                                        <span class="as-sort-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.73 6.22L5.33 4.44L6.93 6.22M5.33 4.44V11.56" stroke="black" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.07 9.78L10.67 11.56L12.27 9.78M10.67 11.56V4.44" stroke="black" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </span>
                                        FREQUENCY
                                    </th>
                                    <th class="as-th-center">
                                        <span class="as-sort-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.73 6.22L5.33 4.44L6.93 6.22M5.33 4.44V11.56" stroke="black" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.07 9.78L10.67 11.56L12.27 9.78M10.67 11.56V4.44" stroke="black" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </span>
                                        MONTHS FROM LAST ORDER
                                    </th>
                                    <th class="as-th-center">
                                        <span class="as-sort-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.73 6.22L5.33 4.44L6.93 6.22M5.33 4.44V11.56" stroke="black" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.07 9.78L10.67 11.56L12.27 9.78M10.67 11.56V4.44" stroke="black" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </span>
                                        FRAMES SOLD LAST YEAR
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($acRows as $r): ?>
                                <tr>
                                    <td>
                                        <div class="as-opening-badge <?php echo $catClassMap[$r['cat']]; ?>">
                                            <?php echo htmlspecialchars($r['label']); ?>
                                        </div>
                                    </td>
                                    <td><a class="as-ac-id-link" href="#"><?php echo htmlspecialchars($r['id']); ?></a></td>
                                    <td><?php echo htmlspecialchars($r['name']); ?></td>
                                    <td class="as-td-center"><?php echo $r['orders']; ?></td>
                                    <td class="as-td-center"><?php echo $r['frames']; ?></td>
                                    <td class="as-td-center"><?php echo htmlspecialchars($r['spent']); ?></td>
                                    <td class="as-td-center"><?php echo htmlspecialchars($r['since']); ?></td>
                                    <td class="as-td-center"><?php echo htmlspecialchars($r['time']); ?></td>
                                    <td class="as-td-center"><?php echo htmlspecialchars($r['status']); ?></td>
                                    <td class="as-td-center"><?php echo htmlspecialchars($r['freq']); ?></td>
                                    <td class="as-td-center"><?php echo htmlspecialchars($r['months']); ?></td>
                                    <td class="as-td-center"><?php echo $r['fsl']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Legend -->
                    <div class="as-legend">
                        <div class="as-legend-section">
                            <p><strong>*Status:</strong></p>
                            <p>Possible Client - No orders made yet.</p>
                            <p>Active - Last order made in the last 6 months.</p>
                            <p>Continuing - Last order made between 6 and 14 months.</p>
                            <p>Not Continuing - Last order made between 14 and 24 months.</p>
                            <p>Frozen - No orders for more than 24 months.</p>
                        </div>
                        <div class="as-legend-section">
                            <p><strong>*Frequency:</strong></p>
                            <p>Light User - Less than 10 frames bought last year.</p>
                            <p>Medium User - 10 to 30 frames bought last year.</p>
                            <p>High User - More than 30 frames bought last year.</p>
                        </div>
                    </div>
                </div>

                <!-- ========================================= -->
                <!-- TAB 6: STATS OVERVIEW                     -->
                <!-- ========================================= -->
                <div class="as-tab-panel" id="panel-stats-overview">
                    <?php
                    // Stats overview: [label, 2024_n, 2025_n, 2025_pct, 2026_n, 2026_pct, 2025_pct_color, 2026_pct_color]
                    // Colors per cell from Figma: 'as-data-cell--green', 'as-data-cell--red', or '' (black/default)
                    $soMain = [
                        ['Nº CLIENTS',            '€17.24','€18','200%',  '€18','100%',   'as-data-cell--green','as-data-cell--red'],
                        ['Nº TOTAL ORDERS',       '€17.24','€18','1000%', '€18','-2000%', 'as-data-cell--green','as-data-cell--red'],
                        ['Nº UNTS EYEWEAR',       '€17.24','€18','200%',  '€18','-2000%', 'as-data-cell--green','as-data-cell--red'],
                        ['€ EYEWEAR',             '€17.24','€18','1200%', '€18','100%',   'as-data-cell--green',''],
                        ['CURRENT AVG € / SALE',  '€17.24','€18','200%',  '€18','-2000%', 'as-data-cell--green','as-data-cell--red'],
                        ['FREQUENCY',             '€17.24','€18','200%',  '€18','100%',   'as-data-cell--green','as-data-cell--red'],
                    ];
                    $soType = [
                        ['Nº STANDARDS',   '€17.24','€18','200%',  '€18','100%',   'as-data-cell--green','as-data-cell--red'],
                        ['Nº UNTS',        '€17.24','€18','1000%', '€18','-2000%', 'as-data-cell--green','as-data-cell--red'],
                        ['€ EYEWEAR',      '€17.24','€18','200%',  '€18','-2000%', 'as-data-cell--green','as-data-cell--red'],
                        ['Nº REPLACEMENTS','€17.24','€18','1200%', '€18','100%',   'as-data-cell--green',''],
                        ['Nº UNTS',        '€17.24','€18','1200%', '€18','100%',   'as-data-cell--green',''],
                        ['€ EYEWEAR',      '€17.24','€18','1200%', '€18','100%',   'as-data-cell--green',''],
                    ];
                    $soSource = [
                        ['Nº TOTAL ORDERS',       '€17.24','€18','200%',  '€18','100%',   'as-data-cell--green','as-data-cell--red'],
                        ['Nº UNITS',              '€17.24','€18','1000%', '€18','-2000%', 'as-data-cell--green','as-data-cell--red'],
                        ['€ EYEWEAR',             '€17.24','€18','200%',  '€18','-2000%', 'as-data-cell--green','as-data-cell--red'],
                        ['Nº ORDERS ECOMMERCE',   '€17.24','€18','1200%', '€18','100%',   'as-data-cell--green',''],
                        ['Nº UNTS',               '€17.24','€18','1200%', '€18','100%',   'as-data-cell--green',''],
                        ['€ EYEWEAR',             '€17.24','€18','1200%', '€18','100%',   'as-data-cell--green',''],
                        ['Nº ORDERS DIRECT SALE', '€17.24','€18','1200%', '€18','100%',   'as-data-cell--green',''],
                        ['Nº UNTS',               '€17.24','€18','1200%', '€18','100%',   'as-data-cell--green',''],
                        ['€ EYEWEAR',             '€17.24','€18','1200%', '€18','100%',   'as-data-cell--green',''],
                    ];
                    ?>
                    <div class="as-grid-wrapper" style="flex-direction:column; gap:0;">
                        <div class="as-grid-section" style="width:100%;">
                            <!-- Year headers -->
                            <div class="as-year-row as-year-row--wide" style="margin-left:332px;">
                                <div class="as-year-cell">2024</div>
                                <div class="as-year-cell" style="flex:2;">2025</div>
                                <div class="as-year-cell" style="flex:2;">2026</div>
                            </div>
                            <!-- Sub-headers -->
                            <div class="as-subheader-row as-subheader-row--wide" style="margin-left:332px;">
                                <div class="as-subheader-group">
                                    <div class="as-subheader-cell">Nº</div>
                                </div>
                                <div class="as-subheader-group" style="flex:2;">
                                    <div class="as-subheader-cell">Nº</div>
                                    <div class="as-subheader-cell">%</div>
                                </div>
                                <div class="as-subheader-group" style="flex:2;">
                                    <div class="as-subheader-cell">Nº</div>
                                    <div class="as-subheader-cell">Nº</div>
                                </div>
                            </div>

                            <!-- Main Rows -->
                            <div class="as-rows-container">
                                <?php foreach ($soMain as $row): ?>
                                <div class="as-month-row">
                                    <div class="as-month-label as-month-label--wide"><?php echo htmlspecialchars($row[0]); ?></div>
                                    <div class="as-month-data">
                                        <div class="as-data-group">
                                            <div class="as-data-cell"><?php echo $row[1]; ?></div>
                                        </div>
                                        <div class="as-data-group" style="flex:2;">
                                            <div class="as-data-cell"><?php echo $row[2]; ?></div>
                                            <div class="as-data-cell <?php echo $row[6]; ?>"><?php echo $row[3]; ?></div>
                                        </div>
                                        <div class="as-data-group" style="flex:2;">
                                            <div class="as-data-cell"><?php echo $row[4]; ?></div>
                                            <div class="as-data-cell <?php echo $row[7]; ?>"><?php echo $row[5]; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- TYPE Divider -->
                            <div class="as-section-divider">
                                <span class="as-section-divider-text">TYPE</span>
                            </div>

                            <!-- TYPE Rows -->
                            <div class="as-rows-container">
                                <?php foreach ($soType as $row): ?>
                                <div class="as-month-row">
                                    <div class="as-month-label as-month-label--wide"><?php echo htmlspecialchars($row[0]); ?></div>
                                    <div class="as-month-data">
                                        <div class="as-data-group">
                                            <div class="as-data-cell"><?php echo $row[1]; ?></div>
                                        </div>
                                        <div class="as-data-group" style="flex:2;">
                                            <div class="as-data-cell"><?php echo $row[2]; ?></div>
                                            <div class="as-data-cell <?php echo $row[6]; ?>"><?php echo $row[3]; ?></div>
                                        </div>
                                        <div class="as-data-group" style="flex:2;">
                                            <div class="as-data-cell"><?php echo $row[4]; ?></div>
                                            <div class="as-data-cell <?php echo $row[7]; ?>"><?php echo $row[5]; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- SOURCE Divider -->
                            <div class="as-section-divider">
                                <span class="as-section-divider-text">SOURCE</span>
                            </div>

                            <!-- SOURCE Rows -->
                            <div class="as-rows-container">
                                <?php foreach ($soSource as $row): ?>
                                <div class="as-month-row">
                                    <div class="as-month-label as-month-label--wide"><?php echo htmlspecialchars($row[0]); ?></div>
                                    <div class="as-month-data">
                                        <div class="as-data-group">
                                            <div class="as-data-cell"><?php echo $row[1]; ?></div>
                                        </div>
                                        <div class="as-data-group" style="flex:2;">
                                            <div class="as-data-cell"><?php echo $row[2]; ?></div>
                                            <div class="as-data-cell <?php echo $row[6]; ?>"><?php echo $row[3]; ?></div>
                                        </div>
                                        <div class="as-data-group" style="flex:2;">
                                            <div class="as-data-cell"><?php echo $row[4]; ?></div>
                                            <div class="as-data-cell <?php echo $row[7]; ?>"><?php echo $row[5]; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- .as-card -->

        </section>

    </main>

    <?php include 'footer.php'; ?>

    <script src="./agent-stats.js"></script>
    <script src="./indexx.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UzzYDKKEvKRhCUjQXI6KeyCAkAFcbn"
        crossorigin="anonymous"></script>

</body>

</html>
