<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Listing</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./orders-listing.css">
</head>

<body>

    <!-- Main Content -->
    <main id="main-content">

        <?php include 'header.php'; ?>

        <section class="ol-container">

            <!-- Title Row -->
            <div class="ol-title-row">
                <h1 class="ol-title">Orders</h1>
                <span class="ol-results">Results: 37</span>
            </div>

            <!-- Filter Bar -->
            <div class="ol-filter-bar">
                <div class="ol-filter-group">
                    <label class="ol-filter-label">Filter By Type</label>
                    <select class="ol-filter-select" id="filterByType">
                        <option value="">Show All</option>
                        <option value="retail">Retail</option>
                        <option value="wholesale">Wholesale</option>
                    </select>
                </div>

                <div class="ol-filter-group">
                    <label class="ol-filter-label">Filter By Status</label>
                    <select class="ol-filter-select" id="filterByStatus">
                        <option value="">Show All</option>
                        <option value="ready">Ready</option>
                        <option value="shipped">Shipped</option>
                    </select>
                </div>

                <button class="ol-clear-filter" id="clearFilter">Clear Filter</button>

                <!-- Action Buttons -->
                <div class="ol-action-buttons">
                    <button class="ol-action-btn ol-action-btn--green" title="Add New">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 3v12M3 9h12" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
                    </button>
                    <button class="ol-action-btn ol-action-btn--blue" title="Document">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M4 2h5.5L13 5.5V14H4V2z" stroke="#fff" stroke-width="1.5" stroke-linejoin="round"/><path d="M9 2v4h4" stroke="#fff" stroke-width="1.5" stroke-linejoin="round"/></svg>
                    </button>
                    <button class="ol-action-btn ol-action-btn--red" title="Delete">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 4h10M5 4V3a1 1 0 011-1h2a1 1 0 011 1v1M6 7v3M8 7v3M3 4l.5 8a1 1 0 001 1h5a1 1 0 001-1L11 4" stroke="#fff" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                    <button class="ol-action-btn ol-action-btn--sky" title="Edit">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M10.5 1.5l2 2-8 8H2.5v-2l8-8z" stroke="#fff" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                    <button class="ol-action-btn ol-action-btn--amber" title="Export">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M7 2v7M4 6l3 3 3-3M2 11h10" stroke="#fff" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                </div>
            </div>

            <!-- Orders Table -->
            <div class="ol-table-wrapper">
                <table class="ol-table">

                    <colgroup>
                        <col class="ol-col-id">
                        <col class="ol-col-customer">
                        <col class="ol-col-status">
                        <col class="ol-col-frames">
                        <col class="ol-col-date">
                        <col class="ol-col-notes">
                        <col class="ol-col-cnotes">
                        <col class="ol-col-maxship">
                        <col class="ol-col-payment">
                        <col class="ol-col-percent">
                        <col class="ol-col-proforma">
                        <col class="ol-col-1stpay">
                        <col class="ol-col-2ndclaim">
                        <col class="ol-col-2ndconf">
                        <col class="ol-col-cancelled">
                        <col class="ol-col-frozen">
                        <col class="ol-col-invoice">
                        <col class="ol-col-tracking">
                        <col class="ol-col-seller">
                        <col class="ol-col-source">
                        <col class="ol-col-items">
                        <col class="ol-col-actions">
                    </colgroup>

                    <thead>
                        <tr>
                            <th class="ol-th-sortable">
                                <svg class="ol-sort-icon" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M5 4l-2 3h4L5 4z" fill="#000"/><path d="M11 12l2-3H9l2 3z" fill="#000"/><path d="M5 7v5M11 9V4" stroke="#000" stroke-width="1.2"/></svg>
                                ID
                            </th>
                            <th class="ol-th-sortable">
                                <svg class="ol-sort-icon" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M5 4l-2 3h4L5 4z" fill="#000"/><path d="M11 12l2-3H9l2 3z" fill="#000"/><path d="M5 7v5M11 9V4" stroke="#000" stroke-width="1.2"/></svg>
                                Customer
                            </th>
                            <th>Production Status</th>
                            <th class="ol-th-rotated ol-th-sortable">
                                <span class="ol-th-rotated-text">
                                    <svg class="ol-sort-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" style="transform:rotate(90deg)"><path d="M5 4l-2 3h4L5 4z" fill="#000"/><path d="M11 12l2-3H9l2 3z" fill="#000"/><path d="M5 7v5M11 9V4" stroke="#000" stroke-width="1.2"/></svg>
                                    No. of Frames
                                </span>
                            </th>
                            <th class="ol-th-sortable">
                                <svg class="ol-sort-icon" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M5 4l-2 3h4L5 4z" fill="#000"/><path d="M11 12l2-3H9l2 3z" fill="#000"/><path d="M5 7v5M11 9V4" stroke="#000" stroke-width="1.2"/></svg>
                                Order Date
                            </th>
                            <th class="ol-th-rotated">
                                <span class="ol-th-rotated-text">Order Notes</span>
                            </th>
                            <th class="ol-th-rotated">
                                <span class="ol-th-rotated-text">Customers Notes</span>
                            </th>
                            <th class="ol-th-center">Max.Shp/Est. Del</th>
                            <th class="ol-th-sortable">
                                <svg class="ol-sort-icon" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M5 4l-2 3h4L5 4z" fill="#000"/><path d="M11 12l2-3H9l2 3z" fill="#000"/><path d="M5 7v5M11 9V4" stroke="#000" stroke-width="1.2"/></svg>
                                Payment Method
                            </th>
                            <th class="ol-th-center">Payments%</th>
                            <th class="ol-th-rotated">
                                <span class="ol-th-rotated-text">@Proforma Sent</span>
                            </th>
                            <th class="ol-th-rotated">
                                <span class="ol-th-rotated-text">1st Payment Confirmed</span>
                            </th>
                            <th class="ol-th-rotated">
                                <span class="ol-th-rotated-text">2nd Payment Claimed</span>
                            </th>
                            <th class="ol-th-rotated">
                                <span class="ol-th-rotated-text">2nd Payment Confirmed</span>
                            </th>
                            <th class="ol-th-rotated">
                                <span class="ol-th-rotated-text">Order Cancelled</span>
                            </th>
                            <th class="ol-th-rotated">
                                <span class="ol-th-rotated-text">Order Frozen</span>
                            </th>
                            <th class="ol-th-sortable">
                                <svg class="ol-sort-icon" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M5 4l-2 3h4L5 4z" fill="#000"/><path d="M11 12l2-3H9l2 3z" fill="#000"/><path d="M5 7v5M11 9V4" stroke="#000" stroke-width="1.2"/></svg>
                                Invoice
                            </th>
                            <th class="ol-th-center">Tracking Nº</th>
                            <th>Seller/Agent</th>
                            <th>Source</th>
                            <th class="ol-th-rotated">
                                <span class="ol-th-rotated-text">Order Items</span>
                            </th>
                            <th class="ol-actions-header" id="actionsHeader">
                                Actions
                                <!-- Delete All Popover -->
                                <div class="ol-popover" id="actionsPopover">
                                    <button class="ol-popover-item" id="deleteAllBtn">
                                        <svg class="ol-popover-check" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8.5l3 3 7-7" stroke="#020617" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        Delete All
                                    </button>
                                </div>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <td><a class="ol-id-link" href="#">OI1245</a></td>
                            <td>
                                <div class="ol-customer-cell">
                                    <span>Centro Óptico</span>
                                    <svg class="ol-customer-info-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="8" stroke="#3B82F6" stroke-width="1.2"/><path d="M9 8v4M9 6h.01" stroke="#3B82F6" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td>
                                <select class="ol-status-select">
                                    <option selected>READY</option>
                                    <option>SHIPPED</option>
                                    <option>PENDING</option>
                                </select>
                            </td>
                            <td class="ol-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1.5L1.5 14h13L8 1.5z" stroke="#E5A100" stroke-width="1.2" stroke-linejoin="round"/><path d="M8 6v3M8 11h.01" stroke="#E5A100" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" stroke="#666" stroke-width="1"/><path d="M6 6.5a2 2 0 114 0c0 1-1.5 1.3-1.5 2.5M8.25 11.5a.25.25 0 11-.5 0 .25.25 0 01.5 0z" stroke="#666" stroke-width="1" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-maxship-cell">
                                    <span class="ol-maxship-green">2024-09-20</span>
                                    <span class="ol-maxship-bold">2024-08-26</span>
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="ol-td-center">50/50</td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td>30</td>
                            <td><a class="ol-tracking-link" href="#">1ZTE3533637</a></td>
                            <td>
                                <div class="ol-seller-cell">
                                    <select class="ol-mini-select"><option>David Burman</option></select>
                                    <select class="ol-mini-select"><option>Select Agent</option></select>
                                </div>
                            </td>
                            <td>
                                <select class="ol-source-select"><option>FAIR</option><option>WEB</option></select>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><line x1="4" y1="6" x2="16" y2="6" stroke="#000" stroke-width="1.2"/><line x1="4" y1="10" x2="16" y2="10" stroke="#000" stroke-width="1.2"/><line x1="4" y1="14" x2="16" y2="14" stroke="#000" stroke-width="1.2"/></svg>
                                </div>
                            </td>
                            <td>
                                <div class="ol-row-actions">
                                    <button class="ol-row-action-btn ol-row-action-btn--delete" title="Delete">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M1.5 3h7M3.5 3V2.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75V3M4.25 5v2M5.75 5v2M2 3l.4 5.5a.75.75 0 00.75.7h3.7a.75.75 0 00.75-.7L8 3" stroke="#FF4949" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                    <button class="ol-row-action-btn ol-row-action-btn--copy" title="Copy">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><rect x="3" y="3" width="5.5" height="5.5" rx="0.75" stroke="#9F65F1" stroke-width="0.8"/><path d="M7 3V2.25A.75.75 0 006.25 1.5H2.25a.75.75 0 00-.75.75v4a.75.75 0 00.75.75H3" stroke="#9F65F1" stroke-width="0.8"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 (highlighted - yellow background) -->
                        <tr class="ol-row-highlight">
                            <td><a class="ol-id-link" href="#">OI1245</a></td>
                            <td>
                                <div class="ol-customer-cell">
                                    <span>Óptica Espejo de Luz</span>
                                    <svg class="ol-customer-info-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="8" stroke="#3B82F6" stroke-width="1.2"/><path d="M9 8v4M9 6h.01" stroke="#3B82F6" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td>
                                <select class="ol-status-select">
                                    <option selected>READY</option>
                                    <option>SHIPPED</option>
                                    <option>PENDING</option>
                                </select>
                            </td>
                            <td class="ol-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1.5L1.5 14h13L8 1.5z" stroke="#E5A100" stroke-width="1.2" stroke-linejoin="round"/><path d="M8 6v3M8 11h.01" stroke="#E5A100" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" fill="#E74C3C"/><path d="M5.5 8h5" stroke="#fff" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-maxship-cell">
                                    <span class="ol-maxship-red">2024-08-20</span>
                                    <span class="ol-maxship-bold">2024-08-26</span>
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="ol-td-center">50/50</td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--blue"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td>30</td>
                            <td><a class="ol-tracking-link" href="#">1ZTE3533637</a></td>
                            <td>
                                <div class="ol-seller-cell">
                                    <select class="ol-mini-select"><option>David Burman</option></select>
                                    <select class="ol-mini-select"><option>Select Agent</option></select>
                                </div>
                            </td>
                            <td>
                                <select class="ol-source-select"><option>FAIR</option><option>WEB</option></select>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><line x1="4" y1="6" x2="16" y2="6" stroke="#000" stroke-width="1.2"/><line x1="4" y1="10" x2="16" y2="10" stroke="#000" stroke-width="1.2"/><line x1="4" y1="14" x2="16" y2="14" stroke="#000" stroke-width="1.2"/></svg>
                                </div>
                            </td>
                            <td>
                                <div class="ol-row-actions">
                                    <button class="ol-row-action-btn ol-row-action-btn--delete" title="Delete">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M1.5 3h7M3.5 3V2.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75V3M4.25 5v2M5.75 5v2M2 3l.4 5.5a.75.75 0 00.75.7h3.7a.75.75 0 00.75-.7L8 3" stroke="#FF4949" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                    <button class="ol-row-action-btn ol-row-action-btn--copy" title="Copy">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><rect x="3" y="3" width="5.5" height="5.5" rx="0.75" stroke="#9F65F1" stroke-width="0.8"/><path d="M7 3V2.25A.75.75 0 006.25 1.5H2.25a.75.75 0 00-.75.75v4a.75.75 0 00.75.75H3" stroke="#9F65F1" stroke-width="0.8"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr>
                            <td><a class="ol-id-link" href="#">OI1245</a></td>
                            <td>
                                <div class="ol-customer-cell">
                                    <span>Óptica Mirada Perfa...</span>
                                    <svg class="ol-customer-info-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="8" stroke="#3B82F6" stroke-width="1.2"/><path d="M9 8v4M9 6h.01" stroke="#3B82F6" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td>
                                <select class="ol-status-select">
                                    <option>READY</option>
                                    <option selected>SHIPPED</option>
                                    <option>PENDING</option>
                                </select>
                            </td>
                            <td class="ol-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1.5L1.5 14h13L8 1.5z" stroke="#E5A100" stroke-width="1.2" stroke-linejoin="round"/><path d="M8 6v3M8 11h.01" stroke="#E5A100" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" stroke="#666" stroke-width="1"/><path d="M6 6.5a2 2 0 114 0c0 1-1.5 1.3-1.5 2.5M8.25 11.5a.25.25 0 11-.5 0 .25.25 0 01.5 0z" stroke="#666" stroke-width="1" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-maxship-cell">
                                    <span class="ol-maxship-green">2024-09-20</span>
                                    <span class="ol-maxship-bold">2024-11-05</span>
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="ol-td-center">50/50</td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td>30</td>
                            <td><a class="ol-tracking-link" href="#">1ZTE3533637</a></td>
                            <td>
                                <div class="ol-seller-cell">
                                    <select class="ol-mini-select"><option>David Burman</option></select>
                                    <select class="ol-mini-select"><option>Select Agent</option></select>
                                </div>
                            </td>
                            <td>
                                <select class="ol-source-select"><option>FAIR</option><option>WEB</option></select>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><line x1="4" y1="6" x2="16" y2="6" stroke="#000" stroke-width="1.2"/><line x1="4" y1="10" x2="16" y2="10" stroke="#000" stroke-width="1.2"/><line x1="4" y1="14" x2="16" y2="14" stroke="#000" stroke-width="1.2"/></svg>
                                </div>
                            </td>
                            <td>
                                <div class="ol-row-actions">
                                    <button class="ol-row-action-btn ol-row-action-btn--delete" title="Delete">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M1.5 3h7M3.5 3V2.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75V3M4.25 5v2M5.75 5v2M2 3l.4 5.5a.75.75 0 00.75.7h3.7a.75.75 0 00.75-.7L8 3" stroke="#FF4949" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                    <button class="ol-row-action-btn ol-row-action-btn--copy" title="Copy">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><rect x="3" y="3" width="5.5" height="5.5" rx="0.75" stroke="#9F65F1" stroke-width="0.8"/><path d="M7 3V2.25A.75.75 0 006.25 1.5H2.25a.75.75 0 00-.75.75v4a.75.75 0 00.75.75H3" stroke="#9F65F1" stroke-width="0.8"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr>
                            <td><a class="ol-id-link" href="#">OI1245</a></td>
                            <td>
                                <div class="ol-customer-cell">
                                    <span>Centro Óptico</span>
                                    <svg class="ol-customer-info-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="8" stroke="#3B82F6" stroke-width="1.2"/><path d="M9 8v4M9 6h.01" stroke="#3B82F6" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td>
                                <select class="ol-status-select">
                                    <option selected>READY</option>
                                    <option>SHIPPED</option>
                                    <option>PENDING</option>
                                </select>
                            </td>
                            <td class="ol-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1.5L1.5 14h13L8 1.5z" stroke="#E5A100" stroke-width="1.2" stroke-linejoin="round"/><path d="M8 6v3M8 11h.01" stroke="#E5A100" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" stroke="#666" stroke-width="1"/><path d="M6 6.5a2 2 0 114 0c0 1-1.5 1.3-1.5 2.5M8.25 11.5a.25.25 0 11-.5 0 .25.25 0 01.5 0z" stroke="#666" stroke-width="1" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-maxship-cell">
                                    <span class="ol-maxship-green">2024-08-20</span>
                                    <span class="ol-maxship-bold">2024-08-26</span>
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="ol-td-center">50/50</td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td>30</td>
                            <td><a class="ol-tracking-link" href="#">1ZTE3533637</a></td>
                            <td>
                                <div class="ol-seller-cell">
                                    <select class="ol-mini-select"><option>David Burman</option></select>
                                    <select class="ol-mini-select"><option>Select Agent</option></select>
                                </div>
                            </td>
                            <td>
                                <select class="ol-source-select"><option>FAIR</option><option>WEB</option></select>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><line x1="4" y1="6" x2="16" y2="6" stroke="#000" stroke-width="1.2"/><line x1="4" y1="10" x2="16" y2="10" stroke="#000" stroke-width="1.2"/><line x1="4" y1="14" x2="16" y2="14" stroke="#000" stroke-width="1.2"/></svg>
                                </div>
                            </td>
                            <td>
                                <div class="ol-row-actions">
                                    <button class="ol-row-action-btn ol-row-action-btn--delete" title="Delete">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M1.5 3h7M3.5 3V2.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75V3M4.25 5v2M5.75 5v2M2 3l.4 5.5a.75.75 0 00.75.7h3.7a.75.75 0 00.75-.7L8 3" stroke="#FF4949" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                    <button class="ol-row-action-btn ol-row-action-btn--copy" title="Copy">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><rect x="3" y="3" width="5.5" height="5.5" rx="0.75" stroke="#9F65F1" stroke-width="0.8"/><path d="M7 3V2.25A.75.75 0 006.25 1.5H2.25a.75.75 0 00-.75.75v4a.75.75 0 00.75.75H3" stroke="#9F65F1" stroke-width="0.8"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr>
                            <td><a class="ol-id-link" href="#">OI1245</a></td>
                            <td>
                                <div class="ol-customer-cell">
                                    <span>Centro Óptico</span>
                                    <svg class="ol-customer-info-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="8" stroke="#3B82F6" stroke-width="1.2"/><path d="M9 8v4M9 6h.01" stroke="#3B82F6" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td>
                                <select class="ol-status-select">
                                    <option selected>READY</option>
                                    <option>SHIPPED</option>
                                    <option>PENDING</option>
                                </select>
                            </td>
                            <td class="ol-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1.5L1.5 14h13L8 1.5z" stroke="#E5A100" stroke-width="1.2" stroke-linejoin="round"/><path d="M8 6v3M8 11h.01" stroke="#E5A100" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" stroke="#666" stroke-width="1"/><path d="M6 6.5a2 2 0 114 0c0 1-1.5 1.3-1.5 2.5M8.25 11.5a.25.25 0 11-.5 0 .25.25 0 01.5 0z" stroke="#666" stroke-width="1" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-maxship-cell">
                                    <span class="ol-maxship-green">2024-08-20</span>
                                    <span class="ol-maxship-bold">2024-12-25</span>
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="ol-td-center">50/50</td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td>30</td>
                            <td><a class="ol-tracking-link" href="#">1ZTE3533637</a></td>
                            <td>
                                <div class="ol-seller-cell">
                                    <select class="ol-mini-select"><option>David Burman</option></select>
                                    <select class="ol-mini-select"><option>Select Agent</option></select>
                                </div>
                            </td>
                            <td>
                                <select class="ol-source-select"><option>FAIR</option><option>WEB</option></select>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><line x1="4" y1="6" x2="16" y2="6" stroke="#000" stroke-width="1.2"/><line x1="4" y1="10" x2="16" y2="10" stroke="#000" stroke-width="1.2"/><line x1="4" y1="14" x2="16" y2="14" stroke="#000" stroke-width="1.2"/></svg>
                                </div>
                            </td>
                            <td>
                                <div class="ol-row-actions">
                                    <button class="ol-row-action-btn ol-row-action-btn--delete" title="Delete">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M1.5 3h7M3.5 3V2.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75V3M4.25 5v2M5.75 5v2M2 3l.4 5.5a.75.75 0 00.75.7h3.7a.75.75 0 00.75-.7L8 3" stroke="#FF4949" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                    <button class="ol-row-action-btn ol-row-action-btn--copy" title="Copy">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><rect x="3" y="3" width="5.5" height="5.5" rx="0.75" stroke="#9F65F1" stroke-width="0.8"/><path d="M7 3V2.25A.75.75 0 006.25 1.5H2.25a.75.75 0 00-.75.75v4a.75.75 0 00.75.75H3" stroke="#9F65F1" stroke-width="0.8"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 6 -->
                        <tr>
                            <td><a class="ol-id-link" href="#">OI1245</a></td>
                            <td>
                                <div class="ol-customer-cell">
                                    <span>Óptica Vista Ideal</span>
                                    <svg class="ol-customer-info-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="8" stroke="#3B82F6" stroke-width="1.2"/><path d="M9 8v4M9 6h.01" stroke="#3B82F6" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td>
                                <select class="ol-status-select">
                                    <option>READY</option>
                                    <option selected>SHIPPED</option>
                                    <option>PENDING</option>
                                </select>
                            </td>
                            <td class="ol-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1.5L1.5 14h13L8 1.5z" stroke="#E5A100" stroke-width="1.2" stroke-linejoin="round"/><path d="M8 6v3M8 11h.01" stroke="#E5A100" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" fill="#E74C3C"/><path d="M5.5 8h5" stroke="#fff" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-maxship-cell">
                                    <span class="ol-maxship-red">2024-12-01</span>
                                    <span class="ol-maxship-bold">2024-08-26</span>
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="ol-td-center">50/50</td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td>30</td>
                            <td><a class="ol-tracking-link" href="#">1ZTE3533637</a></td>
                            <td>
                                <div class="ol-seller-cell">
                                    <select class="ol-mini-select"><option>David Burman</option></select>
                                    <select class="ol-mini-select"><option>Select Agent</option></select>
                                </div>
                            </td>
                            <td>
                                <select class="ol-source-select"><option>FAIR</option><option>WEB</option></select>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><line x1="4" y1="6" x2="16" y2="6" stroke="#000" stroke-width="1.2"/><line x1="4" y1="10" x2="16" y2="10" stroke="#000" stroke-width="1.2"/><line x1="4" y1="14" x2="16" y2="14" stroke="#000" stroke-width="1.2"/></svg>
                                </div>
                            </td>
                            <td>
                                <div class="ol-row-actions">
                                    <button class="ol-row-action-btn ol-row-action-btn--delete" title="Delete">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M1.5 3h7M3.5 3V2.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75V3M4.25 5v2M5.75 5v2M2 3l.4 5.5a.75.75 0 00.75.7h3.7a.75.75 0 00.75-.7L8 3" stroke="#FF4949" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                    <button class="ol-row-action-btn ol-row-action-btn--copy" title="Copy">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><rect x="3" y="3" width="5.5" height="5.5" rx="0.75" stroke="#9F65F1" stroke-width="0.8"/><path d="M7 3V2.25A.75.75 0 006.25 1.5H2.25a.75.75 0 00-.75.75v4a.75.75 0 00.75.75H3" stroke="#9F65F1" stroke-width="0.8"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 7 -->
                        <tr>
                            <td><a class="ol-id-link" href="#">OI1245</a></td>
                            <td>
                                <div class="ol-customer-cell">
                                    <span>Óptica Luz Brillante</span>
                                    <svg class="ol-customer-info-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="8" stroke="#3B82F6" stroke-width="1.2"/><path d="M9 8v4M9 6h.01" stroke="#3B82F6" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td>
                                <select class="ol-status-select">
                                    <option selected>READY</option>
                                    <option>SHIPPED</option>
                                    <option>PENDING</option>
                                </select>
                            </td>
                            <td class="ol-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1.5L1.5 14h13L8 1.5z" stroke="#E5A100" stroke-width="1.2" stroke-linejoin="round"/><path d="M8 6v3M8 11h.01" stroke="#E5A100" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" fill="#E74C3C"/><path d="M5.5 8h5" stroke="#fff" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-maxship-cell">
                                    <span class="ol-maxship-red">2024-11-22</span>
                                    <span class="ol-maxship-bold">2024-10-01</span>
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="ol-td-center">50/50</td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td>30</td>
                            <td><a class="ol-tracking-link" href="#">1ZTE3533637</a></td>
                            <td>
                                <div class="ol-seller-cell">
                                    <select class="ol-mini-select"><option>David Burman</option></select>
                                    <select class="ol-mini-select"><option>Select Agent</option></select>
                                </div>
                            </td>
                            <td>
                                <select class="ol-source-select"><option>FAIR</option><option>WEB</option></select>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><line x1="4" y1="6" x2="16" y2="6" stroke="#000" stroke-width="1.2"/><line x1="4" y1="10" x2="16" y2="10" stroke="#000" stroke-width="1.2"/><line x1="4" y1="14" x2="16" y2="14" stroke="#000" stroke-width="1.2"/></svg>
                                </div>
                            </td>
                            <td>
                                <div class="ol-row-actions">
                                    <button class="ol-row-action-btn ol-row-action-btn--delete" title="Delete">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M1.5 3h7M3.5 3V2.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75V3M4.25 5v2M5.75 5v2M2 3l.4 5.5a.75.75 0 00.75.7h3.7a.75.75 0 00.75-.7L8 3" stroke="#FF4949" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                    <button class="ol-row-action-btn ol-row-action-btn--copy" title="Copy">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><rect x="3" y="3" width="5.5" height="5.5" rx="0.75" stroke="#9F65F1" stroke-width="0.8"/><path d="M7 3V2.25A.75.75 0 006.25 1.5H2.25a.75.75 0 00-.75.75v4a.75.75 0 00.75.75H3" stroke="#9F65F1" stroke-width="0.8"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 8 -->
                        <tr>
                            <td><a class="ol-id-link" href="#">OI1245</a></td>
                            <td>
                                <div class="ol-customer-cell">
                                    <span>Óptica Enfoque Nítido</span>
                                    <svg class="ol-customer-info-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="8" stroke="#3B82F6" stroke-width="1.2"/><path d="M9 8v4M9 6h.01" stroke="#3B82F6" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td>
                                <select class="ol-status-select">
                                    <option>READY</option>
                                    <option selected>SHIPPED</option>
                                    <option>PENDING</option>
                                </select>
                            </td>
                            <td class="ol-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1.5L1.5 14h13L8 1.5z" stroke="#E5A100" stroke-width="1.2" stroke-linejoin="round"/><path d="M8 6v3M8 11h.01" stroke="#E5A100" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" fill="#E74C3C"/><path d="M5.5 8h5" stroke="#fff" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-maxship-cell">
                                    <span class="ol-maxship-green">2024-08-20</span>
                                    <span class="ol-maxship-bold">2024-08-26</span>
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="ol-td-center">50/50</td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td>30</td>
                            <td><a class="ol-tracking-link" href="#">1ZTE3533637</a></td>
                            <td>
                                <div class="ol-seller-cell">
                                    <select class="ol-mini-select"><option>David Burman</option></select>
                                    <select class="ol-mini-select"><option>Select Agent</option></select>
                                </div>
                            </td>
                            <td>
                                <select class="ol-source-select"><option>FAIR</option><option>WEB</option></select>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><line x1="4" y1="6" x2="16" y2="6" stroke="#000" stroke-width="1.2"/><line x1="4" y1="10" x2="16" y2="10" stroke="#000" stroke-width="1.2"/><line x1="4" y1="14" x2="16" y2="14" stroke="#000" stroke-width="1.2"/></svg>
                                </div>
                            </td>
                            <td>
                                <div class="ol-row-actions">
                                    <button class="ol-row-action-btn ol-row-action-btn--delete" title="Delete">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M1.5 3h7M3.5 3V2.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75V3M4.25 5v2M5.75 5v2M2 3l.4 5.5a.75.75 0 00.75.7h3.7a.75.75 0 00.75-.7L8 3" stroke="#FF4949" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                    <button class="ol-row-action-btn ol-row-action-btn--copy" title="Copy">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><rect x="3" y="3" width="5.5" height="5.5" rx="0.75" stroke="#9F65F1" stroke-width="0.8"/><path d="M7 3V2.25A.75.75 0 006.25 1.5H2.25a.75.75 0 00-.75.75v4a.75.75 0 00.75.75H3" stroke="#9F65F1" stroke-width="0.8"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 9 -->
                        <tr>
                            <td><a class="ol-id-link" href="#">OI1245</a></td>
                            <td>
                                <div class="ol-customer-cell">
                                    <span>Óptica Visión Clara</span>
                                    <svg class="ol-customer-info-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="8" stroke="#3B82F6" stroke-width="1.2"/><path d="M9 8v4M9 6h.01" stroke="#3B82F6" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td>
                                <select class="ol-status-select">
                                    <option>READY</option>
                                    <option selected>SHIPPED</option>
                                    <option>PENDING</option>
                                </select>
                            </td>
                            <td class="ol-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1.5L1.5 14h13L8 1.5z" stroke="#E5A100" stroke-width="1.2" stroke-linejoin="round"/><path d="M8 6v3M8 11h.01" stroke="#E5A100" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" fill="#E74C3C"/><path d="M5.5 8h5" stroke="#fff" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-maxship-cell">
                                    <span class="ol-maxship-red">2024-10-12</span>
                                    <span class="ol-maxship-bold">2024-09-10</span>
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="ol-td-center">50/50</td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td>30</td>
                            <td><a class="ol-tracking-link" href="#">1ZTE3533637</a></td>
                            <td>
                                <div class="ol-seller-cell">
                                    <select class="ol-mini-select"><option>David Burman</option></select>
                                    <select class="ol-mini-select"><option>Select Agent</option></select>
                                </div>
                            </td>
                            <td>
                                <select class="ol-source-select"><option>FAIR</option><option>WEB</option></select>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><line x1="4" y1="6" x2="16" y2="6" stroke="#000" stroke-width="1.2"/><line x1="4" y1="10" x2="16" y2="10" stroke="#000" stroke-width="1.2"/><line x1="4" y1="14" x2="16" y2="14" stroke="#000" stroke-width="1.2"/></svg>
                                </div>
                            </td>
                            <td>
                                <div class="ol-row-actions">
                                    <button class="ol-row-action-btn ol-row-action-btn--delete" title="Delete">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M1.5 3h7M3.5 3V2.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75V3M4.25 5v2M5.75 5v2M2 3l.4 5.5a.75.75 0 00.75.7h3.7a.75.75 0 00.75-.7L8 3" stroke="#FF4949" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                    <button class="ol-row-action-btn ol-row-action-btn--copy" title="Copy">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><rect x="3" y="3" width="5.5" height="5.5" rx="0.75" stroke="#9F65F1" stroke-width="0.8"/><path d="M7 3V2.25A.75.75 0 006.25 1.5H2.25a.75.75 0 00-.75.75v4a.75.75 0 00.75.75H3" stroke="#9F65F1" stroke-width="0.8"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 10 -->
                        <tr>
                            <td><a class="ol-id-link" href="#">OI1245</a></td>
                            <td>
                                <div class="ol-customer-cell">
                                    <span>Óptica Ojos Radiantes</span>
                                    <svg class="ol-customer-info-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="8" stroke="#3B82F6" stroke-width="1.2"/><path d="M9 8v4M9 6h.01" stroke="#3B82F6" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td>
                                <select class="ol-status-select">
                                    <option selected>READY</option>
                                    <option>SHIPPED</option>
                                    <option>PENDING</option>
                                </select>
                            </td>
                            <td class="ol-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1.5L1.5 14h13L8 1.5z" stroke="#E5A100" stroke-width="1.2" stroke-linejoin="round"/><path d="M8 6v3M8 11h.01" stroke="#E5A100" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" fill="#E74C3C"/><path d="M5.5 8h5" stroke="#fff" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-maxship-cell">
                                    <span class="ol-maxship-green">2024-09-20</span>
                                    <span class="ol-maxship-bold">2024-08-26</span>
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="ol-td-center">50/50</td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td>30</td>
                            <td><a class="ol-tracking-link" href="#">1ZTE3533637</a></td>
                            <td>
                                <div class="ol-seller-cell">
                                    <select class="ol-mini-select"><option>David Burman</option></select>
                                    <select class="ol-mini-select"><option>Select Agent</option></select>
                                </div>
                            </td>
                            <td>
                                <select class="ol-source-select"><option>FAIR</option><option>WEB</option></select>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><line x1="4" y1="6" x2="16" y2="6" stroke="#000" stroke-width="1.2"/><line x1="4" y1="10" x2="16" y2="10" stroke="#000" stroke-width="1.2"/><line x1="4" y1="14" x2="16" y2="14" stroke="#000" stroke-width="1.2"/></svg>
                                </div>
                            </td>
                            <td>
                                <div class="ol-row-actions">
                                    <button class="ol-row-action-btn ol-row-action-btn--delete" title="Delete">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M1.5 3h7M3.5 3V2.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75V3M4.25 5v2M5.75 5v2M2 3l.4 5.5a.75.75 0 00.75.7h3.7a.75.75 0 00.75-.7L8 3" stroke="#FF4949" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                    <button class="ol-row-action-btn ol-row-action-btn--copy" title="Copy">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><rect x="3" y="3" width="5.5" height="5.5" rx="0.75" stroke="#9F65F1" stroke-width="0.8"/><path d="M7 3V2.25A.75.75 0 006.25 1.5H2.25a.75.75 0 00-.75.75v4a.75.75 0 00.75.75H3" stroke="#9F65F1" stroke-width="0.8"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 11 -->
                        <tr>
                            <td><a class="ol-id-link" href="#">OI1245</a></td>
                            <td>
                                <div class="ol-customer-cell">
                                    <span>Centro Óptico</span>
                                    <svg class="ol-customer-info-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="8" stroke="#3B82F6" stroke-width="1.2"/><path d="M9 8v4M9 6h.01" stroke="#3B82F6" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td>
                                <select class="ol-status-select">
                                    <option>READY</option>
                                    <option selected>SHIPPED</option>
                                    <option>PENDING</option>
                                </select>
                            </td>
                            <td class="ol-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1.5L1.5 14h13L8 1.5z" stroke="#E5A100" stroke-width="1.2" stroke-linejoin="round"/><path d="M8 6v3M8 11h.01" stroke="#E5A100" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" fill="#E74C3C"/><path d="M5.5 8h5" stroke="#fff" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-maxship-cell">
                                    <span class="ol-maxship-red">2024-09-03</span>
                                    <span class="ol-maxship-bold">2024-08-26</span>
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="ol-td-center">50/50</td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td>30</td>
                            <td><a class="ol-tracking-link" href="#">1ZTE3533637</a></td>
                            <td>
                                <div class="ol-seller-cell">
                                    <select class="ol-mini-select"><option>David Burman</option></select>
                                    <select class="ol-mini-select"><option>Select Agent</option></select>
                                </div>
                            </td>
                            <td>
                                <select class="ol-source-select"><option>FAIR</option><option>WEB</option></select>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><line x1="4" y1="6" x2="16" y2="6" stroke="#000" stroke-width="1.2"/><line x1="4" y1="10" x2="16" y2="10" stroke="#000" stroke-width="1.2"/><line x1="4" y1="14" x2="16" y2="14" stroke="#000" stroke-width="1.2"/></svg>
                                </div>
                            </td>
                            <td>
                                <div class="ol-row-actions">
                                    <button class="ol-row-action-btn ol-row-action-btn--delete" title="Delete">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M1.5 3h7M3.5 3V2.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75V3M4.25 5v2M5.75 5v2M2 3l.4 5.5a.75.75 0 00.75.7h3.7a.75.75 0 00.75-.7L8 3" stroke="#FF4949" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                    <button class="ol-row-action-btn ol-row-action-btn--copy" title="Copy">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><rect x="3" y="3" width="5.5" height="5.5" rx="0.75" stroke="#9F65F1" stroke-width="0.8"/><path d="M7 3V2.25A.75.75 0 006.25 1.5H2.25a.75.75 0 00-.75.75v4a.75.75 0 00.75.75H3" stroke="#9F65F1" stroke-width="0.8"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 12 -->
                        <tr>
                            <td><a class="ol-id-link" href="#">OI1245</a></td>
                            <td>
                                <div class="ol-customer-cell">
                                    <span>Centro Óptico</span>
                                    <svg class="ol-customer-info-icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="8" stroke="#3B82F6" stroke-width="1.2"/><path d="M9 8v4M9 6h.01" stroke="#3B82F6" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td>
                                <select class="ol-status-select">
                                    <option selected>READY</option>
                                    <option>SHIPPED</option>
                                    <option>PENDING</option>
                                </select>
                            </td>
                            <td class="ol-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 1.5L1.5 14h13L8 1.5z" stroke="#E5A100" stroke-width="1.2" stroke-linejoin="round"/><path d="M8 6v3M8 11h.01" stroke="#E5A100" stroke-width="1.2" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6.5" stroke="#666" stroke-width="1"/><path d="M6 6.5a2 2 0 114 0c0 1-1.5 1.3-1.5 2.5M8.25 11.5a.25.25 0 11-.5 0 .25.25 0 01.5 0z" stroke="#666" stroke-width="1" stroke-linecap="round"/></svg>
                                </div>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-maxship-cell">
                                    <span class="ol-maxship-green">2025-01-15</span>
                                    <span class="ol-maxship-bold">2024-08-26</span>
                                </div>
                            </td>
                            <td>SEPA</td>
                            <td class="ol-td-center">50/50</td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--empty"></div></td>
                            <td class="ol-td-center"><div class="ol-check-cell ol-check-cell--green"></div></td>
                            <td>30</td>
                            <td><a class="ol-tracking-link" href="#">1ZTE3533637</a></td>
                            <td>
                                <div class="ol-seller-cell">
                                    <select class="ol-mini-select"><option>David Burman</option></select>
                                    <select class="ol-mini-select"><option>Select Agent</option></select>
                                </div>
                            </td>
                            <td>
                                <select class="ol-source-select"><option>FAIR</option><option>WEB</option></select>
                            </td>
                            <td class="ol-td-center">
                                <div class="ol-icon-cell">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><line x1="4" y1="6" x2="16" y2="6" stroke="#000" stroke-width="1.2"/><line x1="4" y1="10" x2="16" y2="10" stroke="#000" stroke-width="1.2"/><line x1="4" y1="14" x2="16" y2="14" stroke="#000" stroke-width="1.2"/></svg>
                                </div>
                            </td>
                            <td>
                                <div class="ol-row-actions">
                                    <button class="ol-row-action-btn ol-row-action-btn--delete" title="Delete">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><path d="M1.5 3h7M3.5 3V2.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75V3M4.25 5v2M5.75 5v2M2 3l.4 5.5a.75.75 0 00.75.7h3.7a.75.75 0 00.75-.7L8 3" stroke="#FF4949" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>
                                    <button class="ol-row-action-btn ol-row-action-btn--copy" title="Copy">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><rect x="3" y="3" width="5.5" height="5.5" rx="0.75" stroke="#9F65F1" stroke-width="0.8"/><path d="M7 3V2.25A.75.75 0 006.25 1.5H2.25a.75.75 0 00-.75.75v4a.75.75 0 00.75.75H3" stroke="#9F65F1" stroke-width="0.8"/></svg>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UzzYDKKEvR07Gy2jnCO/MC3j0/fFE7"
        crossorigin="anonymous"></script>
    <script src="./indexx.js"></script>
    <script src="./orders-listing.js"></script>

</body>

</html>
