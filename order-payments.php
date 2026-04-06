<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Payments</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./order-payments.css">
</head>

<body>

    <!-- Main Content -->
    <main id="main-content">

        <?php include 'header.php'; ?>

        <section class="op-container">

            <!-- Title Row -->
            <div class="op-title-row">
                <h1 class="op-title">Order Payments</h1>
                <span class="op-results">Results: 37</span>
            </div>

            <!-- Filter Cards Row: Order Type + Payment Method -->
            <div class="op-filter-cards-row">
                <!-- Order Type Card -->
                <div class="op-filter-card">
                    <p class="op-filter-card-title">Order Type</p>
                    <div class="op-filter-card-options">
                        <label class="op-filter-option" data-filter="order-type" data-value="standard">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Standard Order</span>
                        </label>
                        <label class="op-filter-option" data-filter="order-type" data-value="incident">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Incident</span>
                        </label>
                        <label class="op-filter-option" data-filter="order-type" data-value="replacement">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Replacement Order</span>
                        </label>
                        <label class="op-filter-option" data-filter="order-type" data-value="credit-note">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Credit Note</span>
                        </label>
                        <label class="op-filter-option" data-filter="order-type" data-value="internal">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Internal Order</span>
                        </label>
                        <label class="op-filter-option" data-filter="order-type" data-value="deposit">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Deposit</span>
                        </label>
                    </div>
                </div>

                <!-- Payment Method Card -->
                <div class="op-filter-card">
                    <p class="op-filter-card-title">Payment Method</p>
                    <div class="op-filter-card-options">
                        <label class="op-filter-option" data-filter="payment-method" data-value="bank-transfer">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Bank Transfer</span>
                        </label>
                        <label class="op-filter-option" data-filter="payment-method" data-value="direct-cc">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Direct CC</span>
                        </label>
                        <label class="op-filter-option" data-filter="payment-method" data-value="sepa">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Sepa</span>
                        </label>
                        <label class="op-filter-option" data-filter="payment-method" data-value="cash">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Cash</span>
                        </label>
                        <label class="op-filter-option" data-filter="payment-method" data-value="credit-card">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Credit Card</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Prod Status Card (full width) -->
            <div class="op-filter-cards-row">
                <div class="op-filter-card op-filter-card--prodstatus">
                    <p class="op-filter-card-title">Prod Status</p>
                    <div class="op-filter-card-options">
                        <label class="op-filter-option" data-filter="prod-status" data-value="to-review">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>To Review</span>
                        </label>
                        <label class="op-filter-option" data-filter="prod-status" data-value="reviewed">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Reviewed</span>
                        </label>
                        <label class="op-filter-option" data-filter="prod-status" data-value="stand-by">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Stand-By</span>
                        </label>
                        <label class="op-filter-option" data-filter="prod-status" data-value="modified">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Modified</span>
                        </label>
                        <label class="op-filter-option" data-filter="prod-status" data-value="approved">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Approved</span>
                        </label>
                        <label class="op-filter-option" data-filter="prod-status" data-value="confirmed">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Confirmed</span>
                        </label>
                        <label class="op-filter-option" data-filter="prod-status" data-value="cutting">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Cutting</span>
                        </label>
                        <label class="op-filter-option" data-filter="prod-status" data-value="pre-assembly">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Pre-assembly</span>
                        </label>
                        <label class="op-filter-option" data-filter="prod-status" data-value="assembly">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Assembly</span>
                        </label>
                        <label class="op-filter-option" data-filter="prod-status" data-value="lenses">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Lenses</span>
                        </label>
                        <label class="op-filter-option" data-filter="prod-status" data-value="ready">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Ready</span>
                        </label>
                        <label class="op-filter-option" data-filter="prod-status" data-value="partly-shipped">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Partly Shipped</span>
                        </label>
                        <label class="op-filter-option" data-filter="prod-status" data-value="boxed">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Boxed</span>
                        </label>
                        <label class="op-filter-option" data-filter="prod-status" data-value="shipped">
                            <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                            <span>Shipped</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Filter Bar (dropdowns + toggles + buttons) -->
            <div class="op-filter-bar">
                <div class="op-filter-group">
                    <label class="op-filter-label">Payment Frequency</label>
                    <select class="op-filter-select" id="opFilterFrequency">
                        <option value="">Show All</option>
                        <option value="single">Single</option>
                        <option value="split">Split</option>
                    </select>
                </div>

                <div class="op-filter-group">
                    <label class="op-filter-label">Order Agent</label>
                    <select class="op-filter-select" id="opFilterAgent">
                        <option value="">Show All</option>
                        <option value="agent1">Agent 1</option>
                        <option value="agent2">Agent 2</option>
                    </select>
                </div>

                <div class="op-filter-group">
                    <label class="op-filter-label">Source</label>
                    <select class="op-filter-select" id="opFilterSource">
                        <option value="">Show All</option>
                        <option value="fair">Fair</option>
                        <option value="web">Web</option>
                    </select>
                </div>

                <div class="op-filter-group">
                    <label class="op-filter-label">Country</label>
                    <select class="op-filter-select" id="opFilterCountry">
                        <option value="">Show All</option>
                        <option value="es">Spain</option>
                        <option value="pt">Portugal</option>
                    </select>
                </div>

                <label class="op-filter-toggle" id="opToggleNoAgent">
                    <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                    <span>Order Without Agent</span>
                </label>

                <label class="op-filter-toggle" id="opToggleSEPA">
                    <img src="images/icon-checkbox-empty.svg" alt="Toggle">
                    <span>Programmed SEPA Only</span>
                </label>

                <button class="op-clear-filter" id="opClearFilter">Clear Filter</button>
                <button class="op-apply-filter" id="opApplyFilter">Apply Filters</button>

                <!-- Action Buttons -->
                <div class="op-action-buttons">
                    <button class="op-action-btn op-action-btn--primary" title="Add New">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.6 15.2C7.92727 15.2 8.18182 14.9455 8.18182 14.6182V8.18182H14.6909C15.0182 8.18182 15.2727 7.92727 15.2727 7.6C15.2727 7.27273 15.0182 7.01818 14.6909 7.01818H8.21818V0.581818C8.21818 0.290909 7.96364 0 7.63636 0C7.30909 0 7.05455 0.254546 7.05455 0.581818V7.01818H0.581818C0.254546 7.01818 0 7.27273 0 7.6C0 7.92727 0.254546 8.18182 0.581818 8.18182H7.01818V14.6182C7.05455 14.9455 7.30909 15.2 7.6 15.2Z" fill="white"/>
                        </svg>
                    </button>
                    <button class="op-action-btn op-action-btn--primary" title="Edit">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.3843 0.354935C10.3967 0.354942 10.4102 0.355037 10.4243 0.356888L10.4233 0.357864C10.4674 0.362932 10.8152 0.408095 11.0571 0.649857L13.5132 3.10689C13.6961 3.29004 13.7675 3.53314 13.7935 3.65962L13.8071 3.74068V3.74165C13.8084 3.75414 13.8091 3.7672 13.8091 3.77974V14.4672C13.809 15.177 13.2317 15.7541 12.522 15.7543H3.49658C2.78663 15.7543 2.20958 15.1772 2.20947 14.4672V1.64204C2.20947 0.932028 2.78657 0.354935 3.49658 0.354935H10.3843ZM3.49658 1.02974C3.15899 1.02974 2.88428 1.30445 2.88428 1.64204V14.4672C2.88438 14.8047 3.15905 15.0795 3.49658 15.0795H12.522C12.8593 15.0793 13.1342 14.8046 13.1343 14.4672V4.11665H11.3345C10.6245 4.11665 10.0464 3.53956 10.0464 2.82954V1.02974H3.49658ZM10.7212 2.82954C10.7212 3.16714 10.9969 3.44185 11.3345 3.44185H12.894L10.7212 1.269V2.82954Z" fill="white" stroke="white" stroke-width="0.2"/>
                        </svg>
                    </button>
                    <button class="op-action-btn op-action-btn--primary" title="Document">
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.668811 0.0818182L6.81427 6.22727V3.64546C6.81427 3.42727 6.99608 3.24545 7.21427 3.24545C7.43245 3.24545 7.61427 3.42727 7.61427 3.64546V7.20909C7.61427 7.42727 7.43245 7.60909 7.21427 7.60909H3.65063C3.43245 7.60909 3.25063 7.42727 3.25063 7.20909C3.25063 6.99091 3.43245 6.80909 3.65063 6.80909H6.23245L0.0869966 0.663637C0.0142693 0.590909 -0.0220988 0.481818 0.0142648 0.372727C0.0142648 0.263636 0.0869954 0.154545 0.159723 0.0818182C0.305177 -0.0272727 0.523357 -0.0272727 0.668811 0.0818182Z" fill="white"/>
                            <path d="M15.0323 14.5911C15.0323 14.8093 14.8504 14.9911 14.6323 14.9911H1.50498C1.2868 14.9911 1.10498 14.8093 1.10498 14.5911V6.11839C1.10498 5.90021 1.2868 5.71839 1.50498 5.71839C1.72316 5.71839 1.90498 5.90021 1.90498 6.11839V14.1911H14.2323V1.86384H6.15953C5.94135 1.86384 5.75953 1.68203 5.75953 1.46384C5.75953 1.24566 5.94135 1.06384 6.15953 1.06384H14.5959C14.8141 1.06384 14.9959 1.24566 14.9959 1.46384V14.5911H15.0323Z" fill="white"/>
                        </svg>
                    </button>
                    <button class="op-action-btn op-action-btn--primary" title="Delete">
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.07262 7.52736L14.2181 1.38191V3.96373C14.2181 4.18191 14.3999 4.36373 14.6181 4.36373C14.8363 4.36373 15.0181 4.18191 15.0181 3.96373V0.400092C15.0181 0.18191 14.8363 9.15527e-05 14.6181 9.15527e-05H11.0544C10.8363 9.15527e-05 10.6544 0.18191 10.6544 0.400092C10.6544 0.618274 10.8363 0.800092 11.0544 0.800092H13.6362L7.4908 6.94555C7.41807 7.01827 7.38171 7.12736 7.41808 7.23646C7.41808 7.34555 7.4908 7.45464 7.56353 7.52736C7.70898 7.63646 7.92716 7.63646 8.07262 7.52736Z" fill="white"/>
                            <path d="M0 14.5821C0 14.8002 0.18182 14.9821 0.400002 14.9821H13.5273C13.7455 14.9821 13.9273 14.8002 13.9273 14.5821V6.10933C13.9273 5.89114 13.7455 5.70932 13.5273 5.70932C13.3091 5.70932 13.1273 5.89114 13.1273 6.10933V14.1821H0.800004V1.85478H8.87274C9.09092 1.85478 9.27273 1.67296 9.27273 1.45478C9.27273 1.2366 9.09092 1.05478 8.87274 1.05478H0.436368C0.218186 1.05478 0.0363659 1.2366 0.0363659 1.45478V14.5821H0Z" fill="white"/>
                        </svg>
                    </button>
                    <button class="op-action-btn op-action-btn--primary" title="Export">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.1091 2.36364C12 1.92727 11.7818 1.52727 11.4182 1.23636C11.0545 0.945454 10.6182 0.8 10.1818 0.8H9.41818C8.98182 0.8 8.54545 0.945454 8.18182 1.23636C7.81818 1.52727 7.6 1.92727 7.49091 2.36364H12.1091ZM0.400002 2.36364H6.72727C6.8 1.78182 7.05455 1.23636 7.49091 0.8C7.96364 0.290909 8.69091 0 9.41818 0H10.2182C10.9455 0 11.6364 0.290909 12.1455 0.8C12.5818 1.23636 12.8364 1.78182 12.9091 2.36364H18.8364C19.0545 2.36364 19.2364 2.54545 19.2364 2.76364C19.2364 2.98182 19.0545 3.16364 18.8364 3.16364H12.5455H7.05454H0.400002C0.18182 3.16364 0 2.98182 0 2.76364C0 2.54545 0.18182 2.36364 0.400002 2.36364Z" fill="white"/>
                            <path d="M2.29085 3.92741C2.50903 3.89105 2.69085 4.0365 2.72722 4.25469L4.32721 16.8001C4.39994 17.4547 4.72721 18.0729 5.2363 18.5092C5.74539 18.9456 6.36358 19.2001 7.05449 19.2001H12.5454C13.1999 19.2001 13.8545 18.9456 14.3636 18.5092C14.8727 18.0729 15.1999 17.4547 15.2727 16.8001L16.8727 4.25469C16.909 4.0365 17.0909 3.89105 17.309 3.92741C17.5272 3.96378 17.6727 4.1456 17.6363 4.36378L16.0363 16.9092C15.9272 17.7456 15.5272 18.5456 14.8727 19.0911C14.2181 19.6729 13.4181 19.9638 12.5454 19.9638H7.05449C6.18176 19.9638 5.38176 19.6365 4.72722 19.0911C4.07267 18.5092 3.67267 17.7456 3.56357 16.9092L1.96358 4.36378C1.92721 4.1456 2.07267 3.96378 2.29085 3.92741Z" fill="white"/>
                            <path d="M9.41784 15.6V7.45457L7.70874 9.16366C7.56329 9.30911 7.30874 9.30911 7.16329 9.16366C7.01784 9.0182 7.01784 8.76366 7.16329 8.6182L9.52693 6.25457C9.67238 6.10911 9.92693 6.10911 10.0724 6.25457L12.436 8.6182C12.5815 8.76366 12.5815 9.0182 12.436 9.16366C12.2906 9.30911 12.036 9.30911 11.8906 9.16366L10.1815 7.45457V15.6C10.1815 15.7091 10.1088 15.7818 10.036 15.8546C9.9633 15.9273 9.8542 15.9637 9.74511 15.9637C9.59966 15.9637 9.4542 15.8182 9.41784 15.6Z" fill="white"/>
                        </svg>
                    </button>
                </div>

                <p class="op-filter-note">Filter: Ask 2nd Payment (8 Days or less from max. shipping date or Ready/Boxed)</p>
            </div>

            <!-- Orders Payments Table -->
            <div class="op-table-wrapper">
                <table class="op-table">

                    <colgroup>
                        <col class="op-col-id">
                        <col class="op-col-customer">
                        <col class="op-col-status">
                        <col class="op-col-invoice">
                        <col class="op-col-orderdate">
                        <col class="op-col-lastpr">
                        <col class="op-col-ordernotes">
                        <col class="op-col-custnotes">
                        <col class="op-col-paymethod">
                        <col class="op-col-paypercent">
                        <col class="op-col-total">
                        <col class="op-col-pending">
                        <col class="op-col-est1st">
                        <col class="op-col-1stconf">
                        <col class="op-col-1stsub">
                        <col class="op-col-1stsepa">
                        <col class="op-col-est2nd">
                        <col class="op-col-2ndconf">
                        <col class="op-col-2ndsub">
                        <col class="op-col-2ndsepa">
                        <col class="op-col-totpend">
                        <col class="op-col-totpendsel">
                        <col class="op-col-ordersel">
                    </colgroup>

                    <thead>
                        <tr>
                            <th class="op-th-sortable">
                                <img class="op-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                ID
                            </th>
                            <th class="op-th-sortable">
                                <img class="op-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                Customer
                            </th>
                            <th>Production Status</th>
                            <th class="op-th-rotated op-th-center">
                                <span class="op-th-rotated-text">Invoice</span>
                            </th>
                            <th class="op-th-multiline op-th-center">Order Date /<br>Max Shipping</th>
                            <th class="op-th-sortable">
                                <img class="op-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                Last PR
                            </th>
                            <th class="op-th-rotated">
                                <span class="op-th-rotated-text">Order Notes</span>
                            </th>
                            <th class="op-th-rotated">
                                <span class="op-th-rotated-text">Customers Notes</span>
                            </th>
                            <th class="op-th-sortable">
                                <img class="op-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                Payment Method
                            </th>
                            <th class="op-th-rotated op-th-center">
                                <span class="op-th-rotated-text">Payments%</span>
                            </th>
                            <th class="op-th-sortable op-th-center">
                                <img class="op-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                Total
                            </th>
                            <th class="op-th-rotated op-th-sortable op-th-center">
                                <span class="op-th-rotated-text">
                                    <img class="op-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort" style="transform:rotate(90deg)">
                                    Pending
                                </span>
                            </th>
                            <th class="op-th-multiline op-th-center">Est. 1st<br>Payment</th>
                            <th class="op-th-multiline op-th-center">1st Payment<br>Confirmed</th>
                            <th class="op-th-sortable op-th-multiline op-th-center">
                                <img class="op-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                1st Payment<br>Subtotal
                            </th>
                            <th class="op-th-rotated op-th-center">
                                <span class="op-th-rotated-text">1st SEPA Programmed</span>
                            </th>
                            <th class="op-th-multiline op-th-center">Est. 2nd<br>Payment</th>
                            <th class="op-th-multiline op-th-center">2nd Payment<br>Confirmed</th>
                            <th class="op-th-sortable op-th-multiline op-th-center">
                                <img class="op-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                2nd Payment<br>Subtotal
                            </th>
                            <th class="op-th-rotated op-th-center">
                                <span class="op-th-rotated-text">2nd SEPA Programmed</span>
                            </th>
                            <th class="op-th-sortable op-th-multiline op-th-center">
                                <img class="op-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                Total Pending<br>Value
                            </th>
                            <th class="op-th-sortable op-th-multiline op-th-center">
                                <img class="op-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                Total Pending<br>Value (sel)
                            </th>
                            <th class="op-th-rotated op-th-center" style="position:relative;">
                                <span class="op-th-rotated-text op-order-selection-trigger" id="opOrderSelTrigger" style="text-decoration:underline;cursor:pointer;">Order Selection</span>
                                <!-- Order Selection Dropdown -->
                                <div class="op-order-sel-dropdown" id="opOrderSelDropdown">
                                    <div class="op-order-sel-header">Order Selection</div>
                                    <div class="op-order-sel-options">
                                        <label class="op-order-sel-option" id="opSelAll">
                                            <span class="op-order-sel-checkbox"></span>
                                            <span>Select All</span>
                                        </label>
                                        <label class="op-order-sel-option" id="opDeselAll">
                                            <span class="op-order-sel-checkbox"></span>
                                            <span>Deselect All</span>
                                        </label>
                                        <label class="op-order-sel-option" id="opSelVisible">
                                            <span class="op-order-sel-checkbox"></span>
                                            <span>Select Visible</span>
                                        </label>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <td><a class="op-id-link" href="#">OI1245</a></td>
                            <td class="op-td-customer--orange">
                                <span class="op-customer-cell">Centro Óptico</span>
                            </td>
                            <td class="op-td-status--boxed">
                                <select class="op-status-select">
                                    <option selected>BOXED</option>
                                    <option>READY</option>
                                    <option>SHIPPED</option>
                                </select>
                            </td>
                            <td class="op-td-center">30</td>
                            <td>
                                <div class="op-date-cell">
                                    <span class="op-date-bold">Thu, 2024/08</span>
                                    <span class="op-date-italic">2024-08-26</span>
                                </div>
                            </td>
                            <td>2024-08-20</td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Notes">
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="op-td-center">50/50</td>
                            <td class="op-td-center">-6.60€</td>
                            <td class="op-td-center">0.00€</td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>20/08/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--red">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">-6.60€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="SEPA">
                            </td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>26/08/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--red">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">-6.60€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="SEPA">
                            </td>
                            <td class="op-td-center">84.79€</td>
                            <td class="op-td-center">0.00€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="Select">
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr>
                            <td><a class="op-id-link" href="#">OI1246</a></td>
                            <td class="op-td-customer--blue">
                                <span class="op-customer-cell">Óptica Espejo de Luz</span>
                            </td>
                            <td class="op-td-status--assembly">
                                <select class="op-status-select">
                                    <option selected>ASSEMBLY</option>
                                    <option>READY</option>
                                    <option>SHIPPED</option>
                                </select>
                            </td>
                            <td class="op-td-center">12</td>
                            <td>
                                <div class="op-date-cell">
                                    <span class="op-date-bold">Thu, 2024/08</span>
                                    <span class="op-date-italic op-date-italic--red">2024-08-26</span>
                                </div>
                            </td>
                            <td>2024-07-18</td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-warning-grey.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Notes">
                                </div>
                            </td>
                            <td>Bank Transfer</td>
                            <td class="op-td-center">100</td>
                            <td class="op-td-center">62.50€</td>
                            <td class="op-td-center">62.50€</td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>15/07/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--green">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">62.50€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-checked.svg" alt="SEPA">
                            </td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>DD/MM/YYYY</option>
                                </select>
                            </td>
                            <td class="op-confirmed--red">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">0.00€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="SEPA">
                            </td>
                            <td class="op-td-center">0.00€</td>
                            <td class="op-td-center">0.00€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="Select">
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr>
                            <td><a class="op-id-link" href="#">OI1247</a></td>
                            <td class="op-td-customer--orange">
                                <span class="op-customer-cell">Óptica Mirada Perfa...</span>
                            </td>
                            <td class="op-td-status--ready">
                                <select class="op-status-select">
                                    <option selected>READY</option>
                                    <option>BOXED</option>
                                    <option>SHIPPED</option>
                                </select>
                            </td>
                            <td class="op-td-center">8</td>
                            <td>
                                <div class="op-date-cell">
                                    <span class="op-date-bold">Thu, 2024/08</span>
                                    <span class="op-date-italic op-date-italic--green">2024-08-26</span>
                                </div>
                            </td>
                            <td>2024-06-12</td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Notes">
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="op-td-center">50/50</td>
                            <td class="op-td-center">34.00€</td>
                            <td class="op-td-center">17.00€</td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>10/06/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--green">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">17.00€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-checked.svg" alt="SEPA">
                            </td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>18/06/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--green">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">17.00€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-checked.svg" alt="SEPA">
                            </td>
                            <td class="op-td-center">0.00€</td>
                            <td class="op-td-center">0.00€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-checked.svg" alt="Select">
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr>
                            <td><a class="op-id-link" href="#">OI1248</a></td>
                            <td class="op-td-customer--orange">
                                <span class="op-customer-cell">Visión Clara Óptica</span>
                            </td>
                            <td class="op-td-status--preassembly">
                                <select class="op-status-select">
                                    <option selected>PRE-ASSEMBLY</option>
                                    <option>ASSEMBLY</option>
                                    <option>READY</option>
                                </select>
                            </td>
                            <td class="op-td-center">5</td>
                            <td>
                                <div class="op-date-cell">
                                    <span class="op-date-bold">Thu, 2024/08</span>
                                    <span class="op-date-italic op-date-italic--red">2024-08-26</span>
                                </div>
                            </td>
                            <td>2024-09-05</td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-warning-grey.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-customer-notes-outline.svg" width="16" height="16" alt="Notes">
                                </div>
                            </td>
                            <td>Direct CC</td>
                            <td class="op-td-center">30/70</td>
                            <td class="op-td-center">89.50€</td>
                            <td class="op-td-center">62.35€</td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>02/09/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--green">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">26.15€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="SEPA">
                            </td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>10/09/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--red">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">62.35€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="SEPA">
                            </td>
                            <td class="op-td-center">62.35€</td>
                            <td class="op-td-center">0.00€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="Select">
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr>
                            <td><a class="op-id-link" href="#">OI1249</a></td>
                            <td class="op-td-customer--blue">
                                <span class="op-customer-cell">Óptica Sur</span>
                            </td>
                            <td class="op-td-status--preassembly">
                                <select class="op-status-select">
                                    <option selected>PRE-ASSEMBLY</option>
                                    <option>ASSEMBLY</option>
                                    <option>READY</option>
                                </select>
                            </td>
                            <td class="op-td-center">18</td>
                            <td>
                                <div class="op-date-cell">
                                    <span class="op-date-bold">Thu, 2024/08</span>
                                    <span class="op-date-italic op-date-italic--green">2024-08-26</span>
                                </div>
                            </td>
                            <td>2024-07-30</td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-customer-notes-outline.svg" width="16" height="16" alt="Notes">
                                </div>
                            </td>
                            <td>Cash</td>
                            <td class="op-td-center">100</td>
                            <td class="op-td-center">45.60€</td>
                            <td class="op-td-center">0.00€</td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>28/07/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--green">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">45.60€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="SEPA">
                            </td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>DD/MM/YYYY</option>
                                </select>
                            </td>
                            <td class="op-confirmed--red">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">0.00€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="SEPA">
                            </td>
                            <td class="op-td-center">0.00€</td>
                            <td class="op-td-center">0.00€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-checked.svg" alt="Select">
                            </td>
                        </tr>

                        <!-- Row 6 -->
                        <tr>
                            <td><a class="op-id-link" href="#">OI1250</a></td>
                            <td class="op-td-customer--orange">
                                <span class="op-customer-cell">Gafas del Norte</span>
                            </td>
                            <td class="op-td-status--boxed">
                                <select class="op-status-select">
                                    <option selected>BOXED</option>
                                    <option>READY</option>
                                    <option>SHIPPED</option>
                                </select>
                            </td>
                            <td class="op-td-center">3</td>
                            <td>
                                <div class="op-date-cell">
                                    <span class="op-date-bold">Thu, 2024/08</span>
                                    <span class="op-date-italic op-date-italic--red">2024-08-26</span>
                                </div>
                            </td>
                            <td>2024-08-08</td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-warning-grey.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Notes">
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="op-td-center">50/50</td>
                            <td class="op-td-center">21.00€</td>
                            <td class="op-td-center">10.50€</td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>05/08/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--green">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">10.50€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-checked.svg" alt="SEPA">
                            </td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>12/08/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--red">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">10.50€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="SEPA">
                            </td>
                            <td class="op-td-center">10.50€</td>
                            <td class="op-td-center">10.50€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-checked.svg" alt="Select">
                            </td>
                        </tr>

                        <!-- Row 7 -->
                        <tr>
                            <td><a class="op-id-link" href="#">OI1251</a></td>
                            <td class="op-td-customer--blue">
                                <span class="op-customer-cell">Óptica Mediterránea</span>
                            </td>
                            <td class="op-td-status--preassembly">
                                <select class="op-status-select">
                                    <option selected>PRE-ASSEMBLY</option>
                                    <option>ASSEMBLY</option>
                                    <option>READY</option>
                                </select>
                            </td>
                            <td class="op-td-center">15</td>
                            <td>
                                <div class="op-date-cell">
                                    <span class="op-date-bold">Thu, 2024/08</span>
                                    <span class="op-date-italic op-date-italic--green">2024-08-26</span>
                                </div>
                            </td>
                            <td>2024-08-20</td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Notes">
                                </div>
                            </td>
                            <td>Credit Card</td>
                            <td class="op-td-center">50/50</td>
                            <td class="op-td-center">57.80€</td>
                            <td class="op-td-center">28.90€</td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>18/08/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--green">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">28.90€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="SEPA">
                            </td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>25/08/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--red">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">28.90€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="SEPA">
                            </td>
                            <td class="op-td-center">28.90€</td>
                            <td class="op-td-center">0.00€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="Select">
                            </td>
                        </tr>

                        <!-- Row 8 -->
                        <tr>
                            <td><a class="op-id-link" href="#">OI1252</a></td>
                            <td class="op-td-customer--orange">
                                <span class="op-customer-cell">Óptica Luz Natural</span>
                            </td>
                            <td class="op-td-status--preassembly">
                                <select class="op-status-select">
                                    <option selected>PRE-ASSEMBLY</option>
                                    <option>ASSEMBLY</option>
                                    <option>READY</option>
                                </select>
                            </td>
                            <td class="op-td-center">22</td>
                            <td>
                                <div class="op-date-cell">
                                    <span class="op-date-bold">Thu, 2024/08</span>
                                    <span class="op-date-italic op-date-italic--red">2024-08-26</span>
                                </div>
                            </td>
                            <td>2024-07-28</td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-warning-grey.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-customer-notes-outline.svg" width="16" height="16" alt="Notes">
                                </div>
                            </td>
                            <td>Bank Transfer</td>
                            <td class="op-td-center">30/70</td>
                            <td class="op-td-center">72.00€</td>
                            <td class="op-td-center">50.40€</td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>25/07/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--green">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">21.60€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-checked.svg" alt="SEPA">
                            </td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>02/08/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--red">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">50.40€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="SEPA">
                            </td>
                            <td class="op-td-center">50.40€</td>
                            <td class="op-td-center">50.40€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="Select">
                            </td>
                        </tr>

                        <!-- Row 9 -->
                        <tr>
                            <td><a class="op-id-link" href="#">OI1253</a></td>
                            <td class="op-td-customer--blue">
                                <span class="op-customer-cell">Óptica Horizonte</span>
                            </td>
                            <td class="op-td-status--assembly">
                                <select class="op-status-select">
                                    <option selected>ASSEMBLY</option>
                                    <option>READY</option>
                                    <option>SHIPPED</option>
                                </select>
                            </td>
                            <td class="op-td-center">9</td>
                            <td>
                                <div class="op-date-cell">
                                    <span class="op-date-bold">Thu, 2024/08</span>
                                    <span class="op-date-italic op-date-italic--green">2024-08-26</span>
                                </div>
                            </td>
                            <td>2024-09-14</td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-customer-notes-outline.svg" width="16" height="16" alt="Notes">
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="op-td-center">50/50</td>
                            <td class="op-td-center">18.00€</td>
                            <td class="op-td-center">18.00€</td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>DD/MM/YYYY</option>
                                </select>
                            </td>
                            <td class="op-confirmed--red">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">90.00€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="SEPA">
                            </td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>DD/MM/YYYY</option>
                                </select>
                            </td>
                            <td class="op-confirmed--red">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">90.00€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="SEPA">
                            </td>
                            <td class="op-td-center">18.00€</td>
                            <td class="op-td-center">0.00€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="Select">
                            </td>
                        </tr>

                        <!-- Row 10 -->
                        <tr>
                            <td><a class="op-id-link" href="#">OI1254</a></td>
                            <td class="op-td-customer--orange">
                                <span class="op-customer-cell">Multi Ópticas Centro</span>
                            </td>
                            <td class="op-td-status--assembly">
                                <select class="op-status-select">
                                    <option selected>ASSEMBLY</option>
                                    <option>READY</option>
                                    <option>SHIPPED</option>
                                </select>
                            </td>
                            <td class="op-td-center">42</td>
                            <td>
                                <div class="op-date-cell">
                                    <span class="op-date-bold">Thu, 2024/08</span>
                                    <span class="op-date-italic op-date-italic--red">2024-08-26</span>
                                </div>
                            </td>
                            <td>2024-08-03</td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Notes">
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="op-td-center">50/50</td>
                            <td class="op-td-center">12.35€</td>
                            <td class="op-td-center">61.75€</td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>01/08/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--green">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">61.75€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-checked.svg" alt="SEPA">
                            </td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>15/08/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--red">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">61.75€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="SEPA">
                            </td>
                            <td class="op-td-center">61.75€</td>
                            <td class="op-td-center">61.75€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-checked.svg" alt="Select">
                            </td>
                        </tr>

                        <!-- Row 11 -->
                        <tr>
                            <td><a class="op-id-link" href="#">OI1255</a></td>
                            <td class="op-td-customer--blue">
                                <span class="op-customer-cell">Óptica Prisma</span>
                            </td>
                            <td class="op-td-status--preassembly">
                                <select class="op-status-select">
                                    <option selected>PRE-ASSEMBLY</option>
                                    <option>ASSEMBLY</option>
                                    <option>READY</option>
                                </select>
                            </td>
                            <td class="op-td-center">7</td>
                            <td>
                                <div class="op-date-cell">
                                    <span class="op-date-bold">Thu, 2024/08</span>
                                    <span class="op-date-italic op-date-italic--red">2024-08-26</span>
                                </div>
                            </td>
                            <td>2024-08-24</td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-warning-grey.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-customer-notes-outline.svg" width="16" height="16" alt="Notes">
                                </div>
                            </td>
                            <td>Bank Transfer</td>
                            <td class="op-td-center">100</td>
                            <td class="op-td-center">23.40€</td>
                            <td class="op-td-center">23.40€</td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>DD/MM/YYYY</option>
                                </select>
                            </td>
                            <td class="op-confirmed--red">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">23.40€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="SEPA">
                            </td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>DD/MM/YYYY</option>
                                </select>
                            </td>
                            <td class="op-confirmed--red">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">0.00€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="SEPA">
                            </td>
                            <td class="op-td-center">23.40€</td>
                            <td class="op-td-center">0.00€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-empty.svg" alt="Select">
                            </td>
                        </tr>

                        <!-- Row 12 -->
                        <tr>
                            <td><a class="op-id-link" href="#">OI1256</a></td>
                            <td class="op-td-customer--orange">
                                <span class="op-customer-cell">Centro Visual Elite</span>
                            </td>
                            <td class="op-td-status--boxed">
                                <select class="op-status-select">
                                    <option selected>BOXED</option>
                                    <option>READY</option>
                                    <option>SHIPPED</option>
                                </select>
                            </td>
                            <td class="op-td-center">14</td>
                            <td>
                                <div class="op-date-cell">
                                    <span class="op-date-bold">Thu, 2024/08</span>
                                    <span class="op-date-italic op-date-italic--green">2024-08-26</span>
                                </div>
                            </td>
                            <td>2024-07-10</td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="op-td-center">
                                <div class="op-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Notes">
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="op-td-center">50/50</td>
                            <td class="op-td-center">68.90€</td>
                            <td class="op-td-center">34.45€</td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>08/07/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--green">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">34.45€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-checked.svg" alt="SEPA">
                            </td>
                            <td>
                                <select class="op-date-select">
                                    <option selected>16/07/2024</option>
                                </select>
                            </td>
                            <td class="op-confirmed--green">
                                <span class="op-dropfile">Drop File</span>
                            </td>
                            <td class="op-td-center">34.45€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-checked.svg" alt="SEPA">
                            </td>
                            <td class="op-td-center">0.00€</td>
                            <td class="op-td-center">0.00€</td>
                            <td class="op-td-center">
                                <img class="op-checkbox-icon" src="images/icon-checkbox-checked.svg" alt="Select">
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>

        </section>

        <?php include 'footer.php'; ?>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UzzYDKKEvFRE0Hfg6epjTR+RFi0IY+"
        crossorigin="anonymous"></script>
    <script src="./order-payments.js"></script>

</body>

</html>
