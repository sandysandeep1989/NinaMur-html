<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sync Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./sync-panel.css">
</head>

<body>

    <!-- Main Content -->
    <main id="main-content">

        <?php include 'header.php'; ?>

        <!-- node-id: 4:240 -->
        <section class="sp-container">

            <!-- Back Link + Title: node-id: 4:242 -->
            <a href="#" class="top-link sp-back-link">
                <span><img src="./images/back-arrow.svg" alt="arrow"></span> Back To Previous Page
            </a>
            <h2>Sync Panel</h2>

            <!-- ============ GENERAL INFO SECTION ============ -->
            <!-- node-id: 4:1481 -->
            <div class="sp-card">
                <!-- Section Header: node-id: 4:1482 -->
                <div class="sp-section-header">
                    <h3>General Info</h3>
                </div>

                <!-- Row 1: node-id: 4:1486 -->
                <div class="sp-form-row">
                    <!-- node-id: 4:1858 -->
                    <div class="sp-form-group">
                        <label>Base URL</label>
                        <div class="sp-input-wrap">
                            <input type="text" value="https://woocommerce-1256078-451293:" >
                        </div>
                    </div>
                    <!-- node-id: 4:1842 -->
                    <div class="sp-form-group">
                        <label>WC Consumer Key</label>
                        <div class="sp-input-wrap">
                            <input type="password" placeholder="Enter Old Password">
                        </div>
                    </div>
                    <!-- node-id: 4:1850 -->
                    <div class="sp-form-group">
                        <label>WC Secret Key</label>
                        <div class="sp-input-wrap">
                            <input type="password" placeholder=" ">
                        </div>
                    </div>
                    <!-- node-id: 4:1834 -->
                    <div class="sp-form-group">
                        <label>FTP Host</label>
                        <div class="sp-input-wrap">
                            <input type="text" value="18.101.145.197" readonly>
                        </div>
                    </div>
                </div>

                <!-- Row 2: node-id: 4:1866 -->
                <div class="sp-form-row">
                    <!-- node-id: 4:1867 -->
                    <div class="sp-form-group">
                        <label>FTP Images Path</label>
                        <div class="sp-input-wrap">
                            <input type="text" value="public_html/wp-content/uploads/images/">
                        </div>
                    </div>
                    <!-- node-id: 4:1870 -->
                    <div class="sp-form-group">
                        <label>FTP User name</label>
                        <div class="sp-input-wrap">
                            <input type="text" value="ninamur_staging" readonly>
                        </div>
                    </div>
                    <!-- node-id: 4:1873 -->
                    <div class="sp-form-group">
                        <label>FTP Password</label>
                        <div class="sp-input-wrap">
                            <input type="password" placeholder="Enter Old Password">
                        </div>
                    </div>
                    <!-- node-id: 4:1876 -->
                    <div class="sp-form-group">
                        <label>URL Path Images</label>
                        <div class="sp-input-wrap">
                            <input type="password" placeholder="Enter Old Password">
                        </div>
                    </div>
                </div>

                <!-- Row 3: Timeout + Buttons: node-id: 4:1896 -->
                <div class="sp-form-row sp-form-row-bottom">
                    <!-- node-id: 4:1897 -->
                    <div class="sp-form-group sp-form-group-fixed">
                        <label>Timeout Check Changes</label>
                        <div class="sp-input-wrap">
                            <input type="text" value="60">
                        </div>
                    </div>
                    <!-- node-id: 5:1575 -->
                    <button class="sp-btn-primary">Check status orders</button>
                    <!-- node-id: 5:1578 -->
                    <button class="sp-btn-primary">Check changes WP</button>
                </div>
            </div>

            <!-- ============ PRODUCTS & COMPONENTS SECTION ============ -->
            <!-- node-id: 5:1258 -->
            <div class="sp-card">
                <!-- Section Header: node-id: 5:1571 -->
                <div class="sp-section-header">
                    <h3>Products &amp; Components</h3>
                </div>

                <!-- Row 1: 4 cards: node-id: 5:1651 -->
                <div class="sp-sync-row">
                    <!-- Card: Customers — node-id: 5:1871 -->
                    <div class="sp-sync-card">
                        <div class="sp-sync-card-header">
                            <span class="sp-sync-card-title">Customers</span>
                            <button class="sp-btn-sync">Sync</button>
                        </div>
                        <div class="sp-sync-card-batch">
                            <span class="sp-batch-label">Batch Limit:</span>
                            <input type="text" class="sp-batch-input" value="50">
                        </div>
                        <button class="sp-btn-reset">Reset all customers WP flag</button>
                    </div>

                    <!-- Card: Shapes — node-id: 5:1725 -->
                    <div class="sp-sync-card">
                        <div class="sp-sync-card-header">
                            <span class="sp-sync-card-title">Shapes</span>
                            <button class="sp-btn-sync">Sync</button>
                        </div>
                        <div class="sp-sync-card-batch">
                            <span class="sp-batch-label">Batch Limit:</span>
                            <input type="text" class="sp-batch-input" value="50">
                        </div>
                        <button class="sp-btn-reset">Reset all shapes WP flag</button>
                    </div>

                    <!-- Card: Finishes — node-id: 5:1701 -->
                    <div class="sp-sync-card">
                        <div class="sp-sync-card-header">
                            <span class="sp-sync-card-title">Finishes</span>
                            <button class="sp-btn-sync">Sync</button>
                        </div>
                        <div class="sp-sync-card-batch">
                            <span class="sp-batch-label">Batch Limit:</span>
                            <input type="text" class="sp-batch-input" value="50">
                        </div>
                        <button class="sp-btn-reset">Reset all finishes WP flag</button>
                    </div>

                    <!-- Card: Frame Extra Elements — node-id: 5:1749 -->
                    <div class="sp-sync-card">
                        <div class="sp-sync-card-header">
                            <span class="sp-sync-card-title">Frame Extra Elements</span>
                            <button class="sp-btn-sync">Sync</button>
                        </div>
                        <div class="sp-sync-card-batch">
                            <span class="sp-batch-label">Batch Limit:</span>
                            <input type="text" class="sp-batch-input" value="50">
                        </div>
                        <button class="sp-btn-reset">Reset all extras WP flag</button>
                    </div>
                </div>

                <!-- Row 2: 4 cards: node-id: 5:1939 -->
                <div class="sp-sync-row">
                    <!-- Card: Temples — node-id: 5:1940 -->
                    <div class="sp-sync-card">
                        <div class="sp-sync-card-header">
                            <span class="sp-sync-card-title">Temples</span>
                            <button class="sp-btn-sync">Sync</button>
                        </div>
                        <div class="sp-sync-card-batch">
                            <span class="sp-batch-label">Batch Limit:</span>
                            <input type="text" class="sp-batch-input" value="50">
                        </div>
                        <button class="sp-btn-reset">Reset all temples WP flag</button>
                    </div>

                    <!-- Card: FPCs — node-id: 5:1941 -->
                    <div class="sp-sync-card">
                        <div class="sp-sync-card-header">
                            <span class="sp-sync-card-title">FPCs</span>
                            <button class="sp-btn-sync">Sync</button>
                        </div>
                        <div class="sp-sync-card-batch">
                            <span class="sp-batch-label">Batch Limit:</span>
                            <input type="text" class="sp-batch-input" value="50">
                        </div>
                        <button class="sp-btn-reset">Reset all FPCs WP flag</button>
                    </div>

                    <!-- Card: Temple Extra Elements + Temple Tips + Lenses — node-id: 5:2073 -->
                    <div class="sp-sync-card sp-sync-card-multi">
                        <div class="sp-sync-card-header">
                            <span class="sp-sync-card-title">Temple Extra Elements</span>
                            <button class="sp-btn-sync">Sync</button>
                        </div>
                        <div class="sp-sync-card-header">
                            <span class="sp-sync-card-title">Temple Tips</span>
                            <button class="sp-btn-sync">Sync</button>
                        </div>
                        <div class="sp-sync-card-header">
                            <span class="sp-sync-card-title">Lenses</span>
                            <button class="sp-btn-sync">Sync</button>
                        </div>
                    </div>

                    <!-- Card: Nosepads — node-id: 5:2134 -->
                    <div class="sp-sync-card">
                        <div class="sp-sync-card-header">
                            <span class="sp-sync-card-title">Nosepads</span>
                            <button class="sp-btn-sync">Sync</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============ CUSTOMERS & ORDERS SECTION ============ -->
            <!-- node-id: 5:2219 -->
            <div class="sp-card">
                <!-- Section Header: node-id: 5:2220 -->
                <div class="sp-section-header">
                    <h3>Customers &amp; Orders</h3>
                </div>

                <!-- Row: 3 cards: node-id: 5:2223 -->
                <div class="sp-sync-row sp-sync-row-orders">
                    <!-- Card: Customers — node-id: 5:2224 -->
                    <div class="sp-sync-card sp-sync-card-wide">
                        <div class="sp-sync-card-header">
                            <span class="sp-sync-card-title">Customers</span>
                            <button class="sp-btn-sync sp-btn-sync-wide">Sync</button>
                        </div>
                        <div class="sp-sync-card-batch">
                            <span class="sp-batch-label">Batch Limit:</span>
                            <input type="text" class="sp-batch-input" value="50">
                        </div>
                        <button class="sp-btn-reset">Reset all customers WP flag</button>
                    </div>

                    <!-- Card: Agents + Fully Paid Orders + Pending Orders — node-id: 5:2575 -->
                    <div class="sp-sync-card sp-sync-card-multi sp-sync-card-wide">
                        <div class="sp-sync-card-header">
                            <span class="sp-sync-card-title">Agents</span>
                            <button class="sp-btn-sync">Sync</button>
                        </div>
                        <div class="sp-sync-card-header">
                            <span class="sp-sync-card-title">Fully Paid Orders</span>
                            <button class="sp-btn-sync">Sync</button>
                        </div>
                        <div class="sp-sync-card-header">
                            <span class="sp-sync-card-title">Pending Orders</span>
                            <button class="sp-btn-sync">Sync</button>
                        </div>
                    </div>

                    <!-- Card: WP Customers + Pending Incidents + Order Web Keys — node-id: 5:2496 -->
                    <div class="sp-sync-card sp-sync-card-multi sp-sync-card-wide">
                        <div class="sp-sync-card-header">
                            <span class="sp-sync-card-title">WP Customers</span>
                            <button class="sp-btn-sync">Sync</button>
                        </div>
                        <div class="sp-sync-card-header">
                            <span class="sp-sync-card-title">Pending Incidents</span>
                            <button class="sp-btn-sync">Sync</button>
                        </div>
                        <div class="sp-sync-card-header">
                            <span class="sp-sync-card-title">Order Web Keys</span>
                            <button class="sp-btn-sync">Sync</button>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="./indexx.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
