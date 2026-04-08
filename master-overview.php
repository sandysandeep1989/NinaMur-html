<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Overview</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./master-overview.css">
</head>

<body>

    <!-- Main Content -->
    <main id="main-content">

        <?php include 'header.php'; ?>

        <section class="mo-container">

            <!-- Title Row -->
            <div class="mo-title-row">
                <h1 class="mo-title">Master Overview</h1>
                <span class="mo-results">Results: 37</span>
            </div>

            <!-- Filter Bar -->
            <div class="mo-filter-bar">
                <div class="mo-filter-group">
                    <label class="mo-filter-label">Filter</label>
                    <select class="mo-filter-select" id="moFilterByStatus">
                        <option value="">On Progress (Prod.)</option>
                        <option value="ready">Ready</option>
                        <option value="shipped">Shipped</option>
                    </select>
                </div>

                <button class="mo-clear-filter" id="moClearFilter">Clear Filter</button>

                <!-- Frames Counter -->
                <button class="mo-frames-counter" id="moFramesCounter">Frames Counter</button>

                <!-- Action Buttons -->
                <div class="mo-action-buttons">
                    <button class="mo-action-btn mo-action-btn--primary" title="Add New">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.6 15.2C7.92727 15.2 8.18182 14.9455 8.18182 14.6182V8.18182H14.6909C15.0182 8.18182 15.2727 7.92727 15.2727 7.6C15.2727 7.27273 15.0182 7.01818 14.6909 7.01818H8.21818V0.581818C8.21818 0.290909 7.96364 0 7.63636 0C7.30909 0 7.05455 0.254546 7.05455 0.581818V7.01818H0.581818C0.254546 7.01818 0 7.27273 0 7.6C0 7.92727 0.254546 8.18182 0.581818 8.18182H7.01818V14.6182C7.05455 14.9455 7.30909 15.2 7.6 15.2Z" fill="white" />
                        </svg>
                    </button>
                    <button class="mo-action-btn mo-action-btn--primary" title="Edit">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.3843 0.354935C10.3967 0.354942 10.4102 0.355037 10.4243 0.356888L10.4233 0.357864C10.4674 0.362932 10.8152 0.408095 11.0571 0.649857L13.5132 3.10689C13.6961 3.29004 13.7675 3.53314 13.7935 3.65962L13.8071 3.74068V3.74165C13.8084 3.75414 13.8091 3.7672 13.8091 3.77974V14.4672C13.809 15.177 13.2317 15.7541 12.522 15.7543H3.49658C2.78663 15.7543 2.20958 15.1772 2.20947 14.4672V1.64204C2.20947 0.932028 2.78657 0.354935 3.49658 0.354935H10.3843ZM3.49658 1.02974C3.15899 1.02974 2.88428 1.30445 2.88428 1.64204V14.4672C2.88438 14.8047 3.15905 15.0795 3.49658 15.0795H12.522C12.8593 15.0793 13.1342 14.8046 13.1343 14.4672V4.11665H11.3345C10.6245 4.11665 10.0464 3.53956 10.0464 2.82954V1.02974H3.49658ZM10.7212 2.82954C10.7212 3.16714 10.9969 3.44185 11.3345 3.44185H12.894L10.7212 1.269V2.82954Z" fill="white" stroke="white" stroke-width="0.2" />
                        </svg>
                    </button>
                    <button class="mo-action-btn mo-action-btn--primary" title="Export">
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.668811 0.0818182L6.81427 6.22727V3.64546C6.81427 3.42727 6.99608 3.24545 7.21427 3.24545C7.43245 3.24545 7.61427 3.42727 7.61427 3.64546V7.20909C7.61427 7.42727 7.43245 7.60909 7.21427 7.60909H3.65063C3.43245 7.60909 3.25063 7.42727 3.25063 7.20909C3.25063 6.99091 3.43245 6.80909 3.65063 6.80909H6.23245L0.0869966 0.663637C0.0142693 0.590909 -0.0220988 0.481818 0.0142648 0.372727C0.0142648 0.263636 0.0869954 0.154545 0.159723 0.0818182C0.305177 -0.0272727 0.523357 -0.0272727 0.668811 0.0818182Z" fill="white" />
                            <path d="M15.0323 14.5911C15.0323 14.8093 14.8504 14.9911 14.6323 14.9911H1.50498C1.2868 14.9911 1.10498 14.8093 1.10498 14.5911V6.11839C1.10498 5.90021 1.2868 5.71839 1.50498 5.71839C1.72316 5.71839 1.90498 5.90021 1.90498 6.11839V14.1911H14.2323V1.86384H6.15953C5.94135 1.86384 5.75953 1.68203 5.75953 1.46384C5.75953 1.24566 5.94135 1.06384 6.15953 1.06384H14.5959C14.8141 1.06384 14.9959 1.24566 14.9959 1.46384V14.5911H15.0323Z" fill="white" />
                        </svg>
                    </button>
                    <button class="mo-action-btn mo-action-btn--primary" title="Resize">
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.07262 7.52736L14.2181 1.38191V3.96373C14.2181 4.18191 14.3999 4.36373 14.6181 4.36373C14.8363 4.36373 15.0181 4.18191 15.0181 3.96373V0.400092C15.0181 0.18191 14.8363 9.15527e-05 14.6181 9.15527e-05H11.0544C10.8363 9.15527e-05 10.6544 0.18191 10.6544 0.400092C10.6544 0.618274 10.8363 0.800092 11.0544 0.800092H13.6362L7.4908 6.94555C7.41807 7.01827 7.38171 7.12736 7.41808 7.23646C7.41808 7.34555 7.4908 7.45464 7.56353 7.52736C7.70898 7.63646 7.92716 7.63646 8.07262 7.52736Z" fill="white" />
                            <path d="M0 14.5821C0 14.8002 0.18182 14.9821 0.400002 14.9821H13.5273C13.7455 14.9821 13.9273 14.8002 13.9273 14.5821V6.10933C13.9273 5.89114 13.7455 5.70932 13.5273 5.70932C13.3091 5.70932 13.1273 5.89114 13.1273 6.10933V14.1821H0.800004V1.85478H8.87274C9.09092 1.85478 9.27273 1.67296 9.27273 1.45478C9.27273 1.2366 9.09092 1.05478 8.87274 1.05478H0.436368C0.218186 1.05478 0.0363659 1.2366 0.0363659 1.45478V14.5821H0Z" fill="white" />
                        </svg>
                    </button>
                    <button class="mo-action-btn mo-action-btn--primary" title="Upload">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.1091 2.36364C12 1.92727 11.7818 1.52727 11.4182 1.23636C11.0545 0.945454 10.6182 0.8 10.1818 0.8H9.41818C8.98182 0.8 8.54545 0.945454 8.18182 1.23636C7.81818 1.52727 7.6 1.92727 7.49091 2.36364H12.1091ZM0.400002 2.36364H6.72727C6.8 1.78182 7.05455 1.23636 7.49091 0.8C7.96364 0.290909 8.69091 0 9.41818 0H10.2182C10.9455 0 11.6364 0.290909 12.1455 0.8C12.5818 1.23636 12.8364 1.78182 12.9091 2.36364H18.8364C19.0545 2.36364 19.2364 2.54545 19.2364 2.76364C19.2364 2.98182 19.0545 3.16364 18.8364 3.16364H12.5455H7.05454H0.400002C0.18182 3.16364 0 2.98182 0 2.76364C0 2.54545 0.18182 2.36364 0.400002 2.36364Z" fill="white" />
                            <path d="M2.29085 3.92741C2.50903 3.89105 2.69085 4.0365 2.72722 4.25469L4.32721 16.8001C4.39994 17.4547 4.72721 18.0729 5.2363 18.5092C5.74539 18.9456 6.36358 19.2001 7.05449 19.2001H12.5454C13.1999 19.2001 13.8545 18.9456 14.3636 18.5092C14.8727 18.0729 15.1999 17.4547 15.2727 16.8001L16.8727 4.25469C16.909 4.0365 17.0909 3.89105 17.309 3.92741C17.5272 3.96378 17.6727 4.1456 17.6363 4.36378L16.0363 16.9092C15.9272 17.7456 15.5272 18.5456 14.8727 19.0911C14.2181 19.6729 13.4181 19.9638 12.5454 19.9638H7.05449C6.18176 19.9638 5.38176 19.6365 4.72722 19.0911C4.07267 18.5092 3.67267 17.7456 3.56357 16.9092L1.96358 4.36378C1.92721 4.1456 2.07267 3.96378 2.29085 3.92741Z" fill="white" />
                            <path d="M9.41784 15.6V7.45457L7.70874 9.16366C7.56329 9.30911 7.30874 9.30911 7.16329 9.16366C7.01784 9.0182 7.01784 8.76366 7.16329 8.6182L9.52693 6.25457C9.67238 6.10911 9.92693 6.10911 10.0724 6.25457L12.436 8.6182C12.5815 8.76366 12.5815 9.0182 12.436 9.16366C12.2906 9.30911 12.036 9.30911 11.8906 9.16366L10.1815 7.45457V15.6C10.1815 15.7091 10.1088 15.7818 10.036 15.8546C9.9633 15.9273 9.8542 15.9637 9.74511 15.9637C9.59966 15.9637 9.4542 15.8182 9.41784 15.6Z" fill="white" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Master Overview Table -->
            <div class="mo-table-wrapper">
                <table class="mo-table">

                    <colgroup>
                        <col class="mo-col-id">
                        <col class="mo-col-notes">
                        <col class="mo-col-estship">
                        <col class="mo-col-status">
                        <col class="mo-col-person">
                        <col class="mo-col-source">
                        <col class="mo-col-seller">
                        <col class="mo-col-customer">
                        <col class="mo-col-cnotes">
                        <col class="mo-col-items">
                        <col class="mo-col-units">
                        <col class="mo-col-assembly">
                        <col class="mo-col-frames">
                        <col class="mo-col-fcutting">
                        <col class="mo-col-prodid">
                        <col class="mo-col-engraving">
                        <col class="mo-col-payment">
                        <col class="mo-col-p1">
                        <col class="mo-col-p2claim">
                        <col class="mo-col-p2conf">
                        <col class="mo-col-delivery">
                        <col class="mo-col-tracking">
                        <col class="mo-col-vm">
                        <col class="mo-col-extras">
                        <col class="mo-col-actions">
                    </colgroup>

                    <thead>
                        <!-- Group Header Row -->
                        <tr class="mo-group-header-row">
                            <th colspan="8">
                                <div class="mo-group-header-cell">
                                    <span class="mo-group-header-text">ORDER INFO</span>
                                    <div class="mo-group-header-line">
                                        <span class="mo-diamond mo-diamond-left"></span>
                                        <span class="mo-diamond mo-diamond-right"></span>
                                    </div>
                                </div>
                            </th>
                            <th colspan="8">
                                <div class="mo-group-header-cell">
                                    <span class="mo-group-header-text">PRODUCTION</span>
                                    <div class="mo-group-header-line">
                                        <span class="mo-diamond mo-diamond-left"></span>
                                        <span class="mo-diamond mo-diamond-right"></span>
                                    </div>
                                </div>
                            </th>
                            <th colspan="4">
                                <div class="mo-group-header-cell">
                                    <span class="mo-group-header-text">PAYMENT</span>
                                    <div class="mo-group-header-line">
                                        <span class="mo-diamond mo-diamond-left"></span>
                                        <span class="mo-diamond mo-diamond-right"></span>
                                    </div>
                                </div>
                            </th>
                            <th colspan="2">
                                <div class="mo-group-header-cell">
                                    <span class="mo-group-header-text">DELIVERY</span>
                                    <div class="mo-group-header-line">
                                        <span class="mo-diamond mo-diamond-left"></span>
                                        <span class="mo-diamond mo-diamond-right"></span>
                                    </div>
                                </div>
                            </th>
                            <th colspan="3">
                                <div class="mo-group-header-cell">
                                    <span class="mo-group-header-text">VM / EXTRAS</span>
                                    <div class="mo-group-header-line">
                                        <span class="mo-diamond mo-diamond-left"></span>
                                        <span class="mo-diamond mo-diamond-right"></span>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <!-- Column Header Row -->
                        <tr class="mo-column-header-row">
                            <th class="mo-th-sortable">
                                <img class="mo-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                Id
                            </th>
                            <th class="mo-th-rotated mo-th-center">
                                <span class="mo-th-rotated-text">Order Notes</span>
                            </th>
                            <th>
                                EST. SHIPPING
                                <span class="mo-th-subtitle">Max.Shp/</span>
                            </th>
                            <th>Production Status</th>
                            <th>Person In Charge</th>
                            <th class="mo-th-rotated mo-th-center">
                                <span class="mo-th-rotated-text">Source</span>
                            </th>
                            <th>Seller/Agent</th>
                            <th class="mo-th-sortable">
                                <img class="mo-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                Customer
                            </th>
                            <th class="mo-th-rotated mo-th-center">
                                <span class="mo-th-rotated-text">Customers Notes</span>
                            </th>
                            <th class="mo-th-rotated mo-th-center">
                                <span class="mo-th-rotated-text">Order Items</span>
                            </th>
                            <th class="mo-th-rotated mo-th-center mo-th-sortable mo-th-underlined">
                                <span class="mo-th-rotated-text">
                                    <img class="mo-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort" style="transform:rotate(90deg)">
                                    No Of Units
                                </span>
                            </th>
                            <th class="mo-th-rotated mo-th-center mo-th-underlined">
                                <span class="mo-th-rotated-text">Assembly Guide</span>
                            </th>
                            <th class="mo-th-rotated mo-th-center">
                                <span class="mo-th-rotated-text">Frames Received</span>
                            </th>
                            <th class="mo-th-rotated mo-th-center mo-th-underlined">
                                <span class="mo-th-rotated-text">F.Cutting Selection</span>
                            </th>
                            <th>Production Req. ID</th>
                            <th class="mo-th-rotated mo-th-center mo-th-underlined">
                                <span class="mo-th-rotated-text">Engraving Selection</span>
                            </th>
                            <th class="mo-th-sortable">
                                <img class="mo-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                Payment Method
                            </th>
                            <th class="mo-th-rotated mo-th-center">
                                <span class="mo-th-rotated-text">P1 Confirmed</span>
                            </th>
                            <th class="mo-th-rotated mo-th-center">
                                <span class="mo-th-rotated-text">2nd Payment<br>Claimed</span>
                            </th>
                            <th class="mo-th-rotated mo-th-center">
                                <span class="mo-th-rotated-text">P2 Confirmed</span>
                            </th>
                            <th>
                                Delivery Details
                                <span class="mo-th-subtitle">Delivery date/type</span>
                            </th>
                            <th class="mo-th-center">Tracking Nº</th>
                            <th class="mo-th-rotated mo-th-center">
                                <span class="mo-th-rotated-text">Visual Merch</span>
                            </th>
                            <th class="mo-th-rotated mo-th-center">
                                <span class="mo-th-rotated-text">Extras</span>
                            </th>
                            <th class="mo-actions-header" id="moActionsHeader">
                                Actions
                                <div class="mo-popover" id="moActionsPopover">
                                    <button class="mo-popover-item" id="moDeleteAllBtn">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.3332 4L5.99984 11.3333L2.6665 8" stroke="#020617" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        Delete All
                                    </button>
                                </div>
                            </th>
                        </tr>
                    </thead>

                    <tbody>

                        <!-- Row 1: BOXED, red est.ship -->
                        <tr>
                            <td>
                                <div class="mo-id-cell">
                                    <a class="mo-id-link" href="#">OI1245</a>
                                    <span class="mo-id-date">2024-08-20</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td>
                                <div class="mo-estship-cell">
                                    <span class="mo-estship-date mo-estship-date--red">2024-11-08</span>
                                    <span class="mo-estship-sub">Fri, 27th of June</span>
                                </div>
                            </td>
                            <td class="mo-td-status--boxed">
                                <select class="mo-status-select mo-status--boxed">
                                    <option selected>BOXED</option>
                                    <option>PRE-ASSEMBLY</option>
                                    <option>ASSEMBLY</option>
                                    <option>PARTLY SHIPPED</option>
                                    <option>READY</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-mini-select">
                                    <option>DANIEL ANT..</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-source-select">
                                    <option selected>DIRECT</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td>
                                <div class="mo-seller-cell">
                                    <select class="mo-mini-select">
                                        <option>DAVID BURHAN</option>
                                    </select>
                                    <select class="mo-mini-select">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td class="mo-td-customer--yellow">
                                <div class="mo-customer-cell">
                                    <img class="mo-customer-info-icon" src="images/icon-info-circle.svg" width="16" height="16" alt="Info">
                                    <span>CENTRO OPTICO</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-customer-notes-outline.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Menu">
                                </div>
                            </td>
                            <td class="mo-td-center">12</td>
                            <td class="mo-td-center mo-td-red">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td class="mo-td-center">3/25</td>
                            <td class="mo-td-center">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>F_2029_28_12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-center"></td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-green">
                                <div class="mo-delivery-cell">
                                    <select class="mo-mini-select"><option>COURIER SERVICE</option></select>
                                    <select class="mo-mini-select"><option>delivery date</option></select>
                                    <select class="mo-mini-select"><option>delivery Type</option></select>
                                </div>
                            </td>
                            <td class="mo-td-center mo-td-red">
                                <a class="mo-tracking-link" href="#">12TE13336327</a>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="VM">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Extras">
                                </div>
                            </td>
                            <td>
                                <div class="mo-row-actions">
                                    <button class="mo-row-action-btn mo-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="mo-row-action-btn mo-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2: PRE-ASSEMBLY, red est.ship, WEB -->
                        <tr>
                            <td>
                                <div class="mo-id-cell">
                                    <a class="mo-id-link" href="#">OI1245</a>
                                    <span class="mo-id-date">2024-08-20</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td>
                                <div class="mo-estship-cell">
                                    <span class="mo-estship-date mo-estship-date--red">2024-11-08</span>
                                    <span class="mo-estship-sub">Fri, 27th of June</span>
                                </div>
                            </td>
                            <td class="mo-td-status--preassembly">
                                <select class="mo-status-select mo-status--preassembly">
                                    <option>BOXED</option>
                                    <option selected>PRE-ASSEMBLY</option>
                                    <option>ASSEMBLY</option>
                                    <option>PARTLY SHIPPED</option>
                                    <option>READY</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-mini-select">
                                    <option>DANIEL ANT..</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-source-select">
                                    <option>DIRECT</option>
                                    <option selected>WEB</option>
                                </select>
                            </td>
                            <td>
                                <div class="mo-seller-cell">
                                    <select class="mo-mini-select">
                                        <option>DAVID BURHAN</option>
                                    </select>
                                    <select class="mo-mini-select">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td class="mo-td-customer--yellow">
                                <div class="mo-customer-cell">
                                    <img class="mo-customer-info-icon" src="images/icon-info-circle.svg" width="16" height="16" alt="Info">
                                    <span>CENTRO OPTICO</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-customer-notes-outline.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Menu">
                                </div>
                            </td>
                            <td class="mo-td-center">12</td>
                            <td class="mo-td-center mo-td-red">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td class="mo-td-center">3/25</td>
                            <td class="mo-td-center">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>F_2029_28_12</td>
                            <td class="mo-td-center mo-td-red">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-center"></td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-green">
                                <div class="mo-delivery-cell">
                                    <select class="mo-mini-select"><option>COURIER SERVICE</option></select>
                                    <select class="mo-mini-select"><option>delivery date</option></select>
                                    <select class="mo-mini-select"><option>delivery Type</option></select>
                                </div>
                            </td>
                            <td class="mo-td-center mo-td-red">
                                <a class="mo-tracking-link" href="#">12TE13336327</a>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="VM">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Extras">
                                </div>
                            </td>
                            <td>
                                <div class="mo-row-actions">
                                    <button class="mo-row-action-btn mo-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="mo-row-action-btn mo-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3: PRE-ASSEMBLY, no est.ship bg -->
                        <tr>
                            <td>
                                <div class="mo-id-cell">
                                    <a class="mo-id-link" href="#">OI1245</a>
                                    <span class="mo-id-date">2024-08-20</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-warning-grey.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td>
                                <div class="mo-estship-cell">
                                    <span class="mo-estship-date mo-estship-date--none">2024-11-05</span>
                                    <span class="mo-estship-sub">Fri, 27th of June</span>
                                </div>
                            </td>
                            <td class="mo-td-status--preassembly">
                                <select class="mo-status-select mo-status--preassembly">
                                    <option>BOXED</option>
                                    <option selected>PRE-ASSEMBLY</option>
                                    <option>ASSEMBLY</option>
                                    <option>PARTLY SHIPPED</option>
                                    <option>READY</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-mini-select">
                                    <option>DANIEL ANT..</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-source-select">
                                    <option selected>DIRECT</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td>
                                <div class="mo-seller-cell">
                                    <select class="mo-mini-select">
                                        <option>DAVID BURHAN</option>
                                    </select>
                                    <select class="mo-mini-select">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td class="mo-td-customer--white">
                                <div class="mo-customer-cell">
                                    <span class="mo-vip-badge">VIP <img class="mo-customer-info-icon" src="images/icon-info-circle.svg" width="10" height="10" alt="Info"></span>
                                    <span>CENTRO OPTICO</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Menu">
                                </div>
                            </td>
                            <td class="mo-td-center">12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td class="mo-td-center">3/25</td>
                            <td class="mo-td-center">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>F_2029_28_12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-center"></td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-green">
                                <div class="mo-delivery-cell">
                                    <select class="mo-mini-select"><option>COURIER SERVICE</option></select>
                                    <select class="mo-mini-select"><option>delivery date</option></select>
                                    <select class="mo-mini-select"><option>delivery Type</option></select>
                                </div>
                            </td>
                            <td class="mo-td-center mo-td-red">
                                <a class="mo-tracking-link" href="#">12TE13336327</a>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="VM">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Extras">
                                </div>
                            </td>
                            <td>
                                <div class="mo-row-actions">
                                    <button class="mo-row-action-btn mo-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="mo-row-action-btn mo-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 4: PRE-ASSEMBLY, red est.ship -->
                        <tr>
                            <td>
                                <div class="mo-id-cell">
                                    <a class="mo-id-link" href="#">OI1245</a>
                                    <span class="mo-id-date">2024-08-20</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td>
                                <div class="mo-estship-cell">
                                    <span class="mo-estship-date mo-estship-date--red">2024-11-08</span>
                                    <span class="mo-estship-sub">Fri, 27th of June</span>
                                </div>
                            </td>
                            <td class="mo-td-status--preassembly">
                                <select class="mo-status-select mo-status--preassembly">
                                    <option>BOXED</option>
                                    <option selected>PRE-ASSEMBLY</option>
                                    <option>ASSEMBLY</option>
                                    <option>PARTLY SHIPPED</option>
                                    <option>READY</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-mini-select">
                                    <option>DANIEL ANT..</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-source-select">
                                    <option selected>DIRECT</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td>
                                <div class="mo-seller-cell">
                                    <select class="mo-mini-select">
                                        <option>DAVID BURHAN</option>
                                    </select>
                                    <select class="mo-mini-select">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td class="mo-td-customer--yellow">
                                <div class="mo-customer-cell">
                                    <img class="mo-customer-info-icon" src="images/icon-info-circle.svg" width="16" height="16" alt="Info">
                                    <span>CENTRO OPTICO</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Menu">
                                </div>
                            </td>
                            <td class="mo-td-center">12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td class="mo-td-center">3/25</td>
                            <td class="mo-td-center">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>F_2029_28_12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-center"></td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-green">
                                <div class="mo-delivery-cell">
                                    <select class="mo-mini-select"><option>COURIER SERVICE</option></select>
                                    <select class="mo-mini-select"><option>delivery date</option></select>
                                    <select class="mo-mini-select"><option>delivery Type</option></select>
                                </div>
                            </td>
                            <td class="mo-td-center mo-td-red">
                                <a class="mo-tracking-link" href="#">12TE13336327</a>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="VM">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Extras">
                                </div>
                            </td>
                            <td>
                                <div class="mo-row-actions">
                                    <button class="mo-row-action-btn mo-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="mo-row-action-btn mo-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 5: ASSEMBLY, red est.ship -->
                        <tr>
                            <td>
                                <div class="mo-id-cell">
                                    <a class="mo-id-link" href="#">OI1245</a>
                                    <span class="mo-id-date">2024-08-20</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td>
                                <div class="mo-estship-cell">
                                    <span class="mo-estship-date mo-estship-date--red">2024-11-08</span>
                                    <span class="mo-estship-sub">Fri, 27th of June</span>
                                </div>
                            </td>
                            <td class="mo-td-status--assembly">
                                <select class="mo-status-select mo-status--assembly">
                                    <option>BOXED</option>
                                    <option>PRE-ASSEMBLY</option>
                                    <option selected>ASSEMBLY</option>
                                    <option>PARTLY SHIPPED</option>
                                    <option>READY</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-mini-select">
                                    <option>DANIEL ANT..</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-source-select">
                                    <option selected>DIRECT</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td>
                                <div class="mo-seller-cell">
                                    <select class="mo-mini-select">
                                        <option>DAVID BURHAN</option>
                                    </select>
                                    <select class="mo-mini-select">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td class="mo-td-customer--white">
                                <div class="mo-customer-cell">
                                    <span class="mo-vip-badge">VIP <img class="mo-customer-info-icon" src="images/icon-info-circle.svg" width="10" height="10" alt="Info"></span>
                                    <span>CENTRO OPTICO</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Menu">
                                </div>
                            </td>
                            <td class="mo-td-center">12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td class="mo-td-center">3/25</td>
                            <td class="mo-td-center">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>F_2029_28_12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-center"></td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-green">
                                <div class="mo-delivery-cell">
                                    <select class="mo-mini-select"><option>COURIER SERVICE</option></select>
                                    <select class="mo-mini-select"><option>delivery date</option></select>
                                    <select class="mo-mini-select"><option>delivery Type</option></select>
                                </div>
                            </td>
                            <td class="mo-td-center mo-td-red">
                                <a class="mo-tracking-link" href="#">12TE13336327</a>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="VM">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Extras">
                                </div>
                            </td>
                            <td>
                                <div class="mo-row-actions">
                                    <button class="mo-row-action-btn mo-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="mo-row-action-btn mo-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 6: PARTLY SHIPPED, red est.ship, BANK TRANSFER -->
                        <tr>
                            <td>
                                <div class="mo-id-cell">
                                    <a class="mo-id-link" href="#">OI1245</a>
                                    <span class="mo-id-date">2024-08-20</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td>
                                <div class="mo-estship-cell">
                                    <span class="mo-estship-date mo-estship-date--red">2024-11-08</span>
                                    <span class="mo-estship-sub">Fri, 27th of June</span>
                                </div>
                            </td>
                            <td class="mo-td-status--partly-shipped">
                                <select class="mo-status-select mo-status--partly-shipped">
                                    <option>BOXED</option>
                                    <option>PRE-ASSEMBLY</option>
                                    <option>ASSEMBLY</option>
                                    <option selected>PARTLY SHIPPED</option>
                                    <option>READY</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-mini-select">
                                    <option>DANIEL ANT..</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-source-select">
                                    <option selected>DIRECT</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td>
                                <div class="mo-seller-cell">
                                    <select class="mo-mini-select">
                                        <option>DAVID BURHAN</option>
                                    </select>
                                    <select class="mo-mini-select">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td class="mo-td-customer--purple">
                                <div class="mo-customer-cell">
                                    <img class="mo-customer-info-icon" src="images/icon-info-circle.svg" width="16" height="16" alt="Info">
                                    <span>CENTRO OPTICO</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-customer-notes-outline.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Menu">
                                </div>
                            </td>
                            <td class="mo-td-center">12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td class="mo-td-center">3/25</td>
                            <td class="mo-td-center">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>F_2029_28_12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>BANK TRANSFER</td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-center"></td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-green">
                                <div class="mo-delivery-cell">
                                    <select class="mo-mini-select"><option>COURIER SERVICE</option></select>
                                    <select class="mo-mini-select"><option>delivery date</option></select>
                                    <select class="mo-mini-select"><option>delivery Type</option></select>
                                </div>
                            </td>
                            <td class="mo-td-center mo-td-red">
                                <a class="mo-tracking-link" href="#">12TE13336327</a>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="VM">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Extras">
                                </div>
                            </td>
                            <td>
                                <div class="mo-row-actions">
                                    <button class="mo-row-action-btn mo-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="mo-row-action-btn mo-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 7: READY, green est.ship -->
                        <tr>
                            <td>
                                <div class="mo-id-cell">
                                    <a class="mo-id-link" href="#">OI1245</a>
                                    <span class="mo-id-date">2024-08-20</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td>
                                <div class="mo-estship-cell">
                                    <span class="mo-estship-date mo-estship-date--green">2024-11-08</span>
                                    <span class="mo-estship-sub">Fri, 27th of June</span>
                                </div>
                            </td>
                            <td class="mo-td-status--ready">
                                <select class="mo-status-select mo-status--ready">
                                    <option>BOXED</option>
                                    <option>PRE-ASSEMBLY</option>
                                    <option>ASSEMBLY</option>
                                    <option>PARTLY SHIPPED</option>
                                    <option selected>READY</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-mini-select">
                                    <option>DANIEL ANT..</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-source-select">
                                    <option selected>DIRECT</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td>
                                <div class="mo-seller-cell">
                                    <select class="mo-mini-select">
                                        <option>DAVID BURHAN</option>
                                    </select>
                                    <select class="mo-mini-select">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td class="mo-td-customer--pink">
                                <div class="mo-customer-cell">
                                    <img class="mo-customer-info-icon" src="images/icon-info-circle.svg" width="16" height="16" alt="Info">
                                    <span>CENTRO OPTICO</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Menu">
                                </div>
                            </td>
                            <td class="mo-td-center">12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td class="mo-td-center">3/25</td>
                            <td class="mo-td-center">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>F_2029_28_12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-center"></td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-green">
                                <div class="mo-delivery-cell">
                                    <select class="mo-mini-select"><option>COURIER SERVICE</option></select>
                                    <select class="mo-mini-select"><option>delivery date</option></select>
                                    <select class="mo-mini-select"><option>delivery Type</option></select>
                                </div>
                            </td>
                            <td class="mo-td-center mo-td-red">
                                <a class="mo-tracking-link" href="#">12TE13336327</a>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="VM">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Extras">
                                </div>
                            </td>
                            <td>
                                <div class="mo-row-actions">
                                    <button class="mo-row-action-btn mo-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="mo-row-action-btn mo-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 8: ASSEMBLY, red est.ship -->
                        <tr>
                            <td>
                                <div class="mo-id-cell">
                                    <a class="mo-id-link" href="#">OI1245</a>
                                    <span class="mo-id-date">2024-08-20</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td>
                                <div class="mo-estship-cell">
                                    <span class="mo-estship-date mo-estship-date--red">2024-11-08</span>
                                    <span class="mo-estship-sub">Fri, 27th of June</span>
                                </div>
                            </td>
                            <td class="mo-td-status--assembly">
                                <select class="mo-status-select mo-status--assembly">
                                    <option>BOXED</option>
                                    <option>PRE-ASSEMBLY</option>
                                    <option selected>ASSEMBLY</option>
                                    <option>PARTLY SHIPPED</option>
                                    <option>READY</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-mini-select">
                                    <option>DANIEL ANT..</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-source-select">
                                    <option selected>DIRECT</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td>
                                <div class="mo-seller-cell">
                                    <select class="mo-mini-select">
                                        <option>DAVID BURHAN</option>
                                    </select>
                                    <select class="mo-mini-select">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td class="mo-td-customer--blue">
                                <div class="mo-customer-cell">
                                    <img class="mo-customer-info-icon" src="images/icon-info-circle.svg" width="16" height="16" alt="Info">
                                    <span>CENTRO OPTICO</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Menu">
                                </div>
                            </td>
                            <td class="mo-td-center">12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td class="mo-td-center">3/25</td>
                            <td class="mo-td-center">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>F_2029_28_12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-center"></td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-green">
                                <div class="mo-delivery-cell">
                                    <select class="mo-mini-select"><option>COURIER SERVICE</option></select>
                                    <select class="mo-mini-select"><option>delivery date</option></select>
                                    <select class="mo-mini-select"><option>delivery Type</option></select>
                                </div>
                            </td>
                            <td class="mo-td-center mo-td-red">
                                <a class="mo-tracking-link" href="#">12TE13336327</a>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="VM">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Extras">
                                </div>
                            </td>
                            <td>
                                <div class="mo-row-actions">
                                    <button class="mo-row-action-btn mo-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="mo-row-action-btn mo-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 9: BOXED, red est.ship -->
                        <tr>
                            <td>
                                <div class="mo-id-cell">
                                    <a class="mo-id-link" href="#">OI1245</a>
                                    <span class="mo-id-date">2024-08-20</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td>
                                <div class="mo-estship-cell">
                                    <span class="mo-estship-date mo-estship-date--red">2024-11-08</span>
                                    <span class="mo-estship-sub">Fri, 27th of June</span>
                                </div>
                            </td>
                            <td class="mo-td-status--boxed">
                                <select class="mo-status-select mo-status--boxed">
                                    <option selected>BOXED</option>
                                    <option>PRE-ASSEMBLY</option>
                                    <option>ASSEMBLY</option>
                                    <option>PARTLY SHIPPED</option>
                                    <option>READY</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-mini-select">
                                    <option>DANIEL ANT..</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-source-select">
                                    <option selected>DIRECT</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td>
                                <div class="mo-seller-cell">
                                    <select class="mo-mini-select">
                                        <option>DAVID BURHAN</option>
                                    </select>
                                    <select class="mo-mini-select">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td class="mo-td-customer--yellow">
                                <div class="mo-customer-cell">
                                    <img class="mo-customer-info-icon" src="images/icon-info-circle.svg" width="16" height="16" alt="Info">
                                    <span>CENTRO OPTICO</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Menu">
                                </div>
                            </td>
                            <td class="mo-td-center">12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td class="mo-td-center">3/25</td>
                            <td class="mo-td-center">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>F_2029_28_12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-center"></td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-green">
                                <div class="mo-delivery-cell">
                                    <select class="mo-mini-select"><option>COURIER SERVICE</option></select>
                                    <select class="mo-mini-select"><option>delivery date</option></select>
                                    <select class="mo-mini-select"><option>delivery Type</option></select>
                                </div>
                            </td>
                            <td class="mo-td-center mo-td-green">
                                <a class="mo-tracking-link" href="#">12TE13336327</a>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="VM">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Extras">
                                </div>
                            </td>
                            <td>
                                <div class="mo-row-actions">
                                    <button class="mo-row-action-btn mo-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="mo-row-action-btn mo-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 10: ASSEMBLY, green est.ship -->
                        <tr>
                            <td>
                                <div class="mo-id-cell">
                                    <a class="mo-id-link" href="#">OI1245</a>
                                    <span class="mo-id-date">2024-08-20</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td>
                                <div class="mo-estship-cell">
                                    <span class="mo-estship-date mo-estship-date--green">2024-11-08</span>
                                    <span class="mo-estship-sub">Fri, 27th of June</span>
                                </div>
                            </td>
                            <td class="mo-td-status--assembly">
                                <select class="mo-status-select mo-status--assembly">
                                    <option>BOXED</option>
                                    <option>PRE-ASSEMBLY</option>
                                    <option selected>ASSEMBLY</option>
                                    <option>PARTLY SHIPPED</option>
                                    <option>READY</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-mini-select">
                                    <option>DANIEL ANT..</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-source-select">
                                    <option selected>DIRECT</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td>
                                <div class="mo-seller-cell">
                                    <select class="mo-mini-select">
                                        <option>DAVID BURHAN</option>
                                    </select>
                                    <select class="mo-mini-select">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td class="mo-td-customer--yellow">
                                <div class="mo-customer-cell">
                                    <img class="mo-customer-info-icon" src="images/icon-info-circle.svg" width="16" height="16" alt="Info">
                                    <span>CENTRO OPTICO</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Menu">
                                </div>
                            </td>
                            <td class="mo-td-center">12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td class="mo-td-center">3/25</td>
                            <td class="mo-td-center">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>F_2029_28_12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-center"></td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-green">
                                <div class="mo-delivery-cell">
                                    <select class="mo-mini-select"><option>COURIER SERVICE</option></select>
                                    <select class="mo-mini-select"><option>delivery date</option></select>
                                    <select class="mo-mini-select"><option>delivery Type</option></select>
                                </div>
                            </td>
                            <td class="mo-td-center mo-td-red">
                                <a class="mo-tracking-link" href="#">12TE13336327</a>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="VM">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Extras">
                                </div>
                            </td>
                            <td>
                                <div class="mo-row-actions">
                                    <button class="mo-row-action-btn mo-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="mo-row-action-btn mo-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 11: BOXED, green est.ship -->
                        <tr>
                            <td>
                                <div class="mo-id-cell">
                                    <a class="mo-id-link" href="#">OI1245</a>
                                    <span class="mo-id-date">2024-08-20</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td>
                                <div class="mo-estship-cell">
                                    <span class="mo-estship-date mo-estship-date--green">2024-11-08</span>
                                    <span class="mo-estship-sub">Fri, 27th of June</span>
                                </div>
                            </td>
                            <td class="mo-td-status--boxed">
                                <select class="mo-status-select mo-status--boxed">
                                    <option selected>BOXED</option>
                                    <option>PRE-ASSEMBLY</option>
                                    <option>ASSEMBLY</option>
                                    <option>PARTLY SHIPPED</option>
                                    <option>READY</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-mini-select">
                                    <option>DANIEL ANT..</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-source-select">
                                    <option selected>DIRECT</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td>
                                <div class="mo-seller-cell">
                                    <select class="mo-mini-select">
                                        <option>DAVID BURHAN</option>
                                    </select>
                                    <select class="mo-mini-select">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td class="mo-td-customer--yellow">
                                <div class="mo-customer-cell">
                                    <img class="mo-customer-info-icon" src="images/icon-info-circle.svg" width="16" height="16" alt="Info">
                                    <span>CENTRO OPTICO</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Menu">
                                </div>
                            </td>
                            <td class="mo-td-center">12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td class="mo-td-center">3/25</td>
                            <td class="mo-td-center">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>F_2029_28_12</td>
                            <td class="mo-td-center mo-td-red">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-center"></td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-red">
                                <div class="mo-delivery-cell">
                                    <select class="mo-mini-select"><option>COURIER SERVICE</option></select>
                                    <select class="mo-mini-select"><option>delivery date</option></select>
                                    <select class="mo-mini-select"><option>delivery Type</option></select>
                                </div>
                            </td>
                            <td class="mo-td-center mo-td-green">
                                <a class="mo-tracking-link" href="#">12TE13336327</a>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="VM">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Extras">
                                </div>
                            </td>
                            <td>
                                <div class="mo-row-actions">
                                    <button class="mo-row-action-btn mo-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="mo-row-action-btn mo-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 12: READY, green est.ship -->
                        <tr>
                            <td>
                                <div class="mo-id-cell">
                                    <a class="mo-id-link" href="#">OI1245</a>
                                    <span class="mo-id-date">2024-08-20</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td>
                                <div class="mo-estship-cell">
                                    <span class="mo-estship-date mo-estship-date--green">2024-11-08</span>
                                    <span class="mo-estship-sub">Fri, 27th of June</span>
                                </div>
                            </td>
                            <td class="mo-td-status--ready">
                                <select class="mo-status-select mo-status--ready">
                                    <option>BOXED</option>
                                    <option>PRE-ASSEMBLY</option>
                                    <option>ASSEMBLY</option>
                                    <option>PARTLY SHIPPED</option>
                                    <option selected>READY</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-mini-select">
                                    <option>DANIEL ANT..</option>
                                </select>
                            </td>
                            <td>
                                <select class="mo-source-select">
                                    <option selected>DIRECT</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td>
                                <div class="mo-seller-cell">
                                    <select class="mo-mini-select">
                                        <option>DAVID BURHAN</option>
                                    </select>
                                    <select class="mo-mini-select">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td class="mo-td-customer--purple">
                                <div class="mo-customer-cell">
                                    <img class="mo-customer-info-icon" src="images/icon-info-circle.svg" width="16" height="16" alt="Info">
                                    <span>CENTRO OPTICO</span>
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Menu">
                                </div>
                            </td>
                            <td class="mo-td-center">12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td class="mo-td-center">3/25</td>
                            <td class="mo-td-center">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>F_2029_28_12</td>
                            <td class="mo-td-center mo-td-green">
                                <div class="mo-check-icon">
                                    <input type="checkbox" class="mo-checkbox">
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-center"></td>
                            <td class="mo-td-center">
                                <select class="mo-date-select"><option>DD/MM</option></select>
                            </td>
                            <td class="mo-td-green">
                                <div class="mo-delivery-cell">
                                    <select class="mo-mini-select"><option>COURIER SERVICE</option></select>
                                    <select class="mo-mini-select"><option>delivery date</option></select>
                                    <select class="mo-mini-select"><option>delivery Type</option></select>
                                </div>
                            </td>
                            <td class="mo-td-center mo-td-red">
                                <a class="mo-tracking-link" href="#">12TE13336327</a>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="VM">
                                </div>
                            </td>
                            <td class="mo-td-center">
                                <div class="mo-icon-cell">
                                    <img src="images/icon-menu.svg" width="20" height="20" alt="Extras">
                                </div>
                            </td>
                            <td>
                                <div class="mo-row-actions">
                                    <button class="mo-row-action-btn mo-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="mo-row-action-btn mo-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </section>

    </main>

    <?php include 'footer.php'; ?>

    <script src="./master-overview.js"></script>
    <script src="./indexx.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>
