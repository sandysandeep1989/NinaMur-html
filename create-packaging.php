<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Packing List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./create-packaging.css">
</head>

<body>

    <!-- Main Content -->
    <main id="main-content">

        <?php include 'header.php'; ?>

        <section class="cp-container">

            <!-- Title Row -->
            <div class="cp-title-row">
                <h1 class="cp-title">Create Packing List</h1>
                <span class="cp-results">Results: 37</span>
            </div>

            <!-- Filter & Action Bar -->
            <div class="cp-filter-bar">
                <div class="cp-filter-group">
                    <label class="cp-filter-label">Filter By Country</label>
                    <select class="cp-filter-select" id="filterByCountry">
                        <option value="">Enter Country Name</option>
                        <option value="spain">Spain</option>
                        <option value="portugal">Portugal</option>
                        <option value="italy">Italy</option>
                        <option value="france">France</option>
                    </select>
                </div>

                <!-- Action Buttons -->
                <div class="cp-action-buttons">
                    <button class="cp-action-btn cp-action-btn--primary" title="Add New">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.6 15.2C7.92727 15.2 8.18182 14.9455 8.18182 14.6182V8.18182H14.6909C15.0182 8.18182 15.2727 7.92727 15.2727 7.6C15.2727 7.27273 15.0182 7.01818 14.6909 7.01818H8.21818V0.581818C8.21818 0.290909 7.96364 0 7.63636 0C7.30909 0 7.05455 0.254546 7.05455 0.581818V7.01818H0.581818C0.254546 7.01818 0 7.27273 0 7.6C0 7.92727 0.254546 8.18182 0.581818 8.18182H7.01818V14.6182C7.05455 14.9455 7.30909 15.2 7.6 15.2Z" fill="white" />
                        </svg>
                    </button>
                    <button class="cp-action-btn cp-action-btn--primary" title="Document">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.3843 0.354935C10.3967 0.354942 10.4102 0.355037 10.4243 0.356888L10.4233 0.357864C10.4674 0.362932 10.8152 0.408095 11.0571 0.649857L13.5132 3.10689C13.6961 3.29004 13.7675 3.53314 13.7935 3.65962L13.8071 3.74068V3.74165C13.8084 3.75414 13.8091 3.7672 13.8091 3.77974V14.4672C13.809 15.177 13.2317 15.7541 12.522 15.7543H3.49658C2.78663 15.7543 2.20958 15.1772 2.20947 14.4672V1.64204C2.20947 0.932028 2.78657 0.354935 3.49658 0.354935H10.3843ZM3.49658 1.02974C3.15899 1.02974 2.88428 1.30445 2.88428 1.64204V14.4672C2.88438 14.8047 3.15905 15.0795 3.49658 15.0795H12.522C12.8593 15.0793 13.1342 14.8046 13.1343 14.4672V4.11665H11.3345C10.6245 4.11665 10.0464 3.53956 10.0464 2.82954V1.02974H3.49658ZM10.7212 2.82954C10.7212 3.16714 10.9969 3.44185 11.3345 3.44185H12.894L10.7212 1.269V2.82954Z" fill="white" stroke="white" stroke-width="0.2" />
                        </svg>
                    </button>
                    <button class="cp-action-btn cp-action-btn--primary" title="Export">
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.668811 0.0818182L6.81427 6.22727V3.64546C6.81427 3.42727 6.99608 3.24545 7.21427 3.24545C7.43245 3.24545 7.61427 3.42727 7.61427 3.64546V7.20909C7.61427 7.42727 7.43245 7.60909 7.21427 7.60909H3.65063C3.43245 7.60909 3.25063 7.42727 3.25063 7.20909C3.25063 6.99091 3.43245 6.80909 3.65063 6.80909H6.23245L0.0869966 0.663637C0.0142693 0.590909 -0.0220988 0.481818 0.0142648 0.372727C0.0142648 0.263636 0.0869954 0.154545 0.159723 0.0818182C0.305177 -0.0272727 0.523357 -0.0272727 0.668811 0.0818182Z" fill="white" />
                            <path d="M15.0323 14.5911C15.0323 14.8093 14.8504 14.9911 14.6323 14.9911H1.50498C1.2868 14.9911 1.10498 14.8093 1.10498 14.5911V6.11839C1.10498 5.90021 1.2868 5.71839 1.50498 5.71839C1.72316 5.71839 1.90498 5.90021 1.90498 6.11839V14.1911H14.2323V1.86384H6.15953C5.94135 1.86384 5.75953 1.68203 5.75953 1.46384C5.75953 1.24566 5.94135 1.06384 6.15953 1.06384H14.5959C14.8141 1.06384 14.9959 1.24566 14.9959 1.46384V14.5911H15.0323Z" fill="white" />
                        </svg>
                    </button>
                    <button class="cp-action-btn cp-action-btn--primary" title="Resize">
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.07262 7.52736L14.2181 1.38191V3.96373C14.2181 4.18191 14.3999 4.36373 14.6181 4.36373C14.8363 4.36373 15.0181 4.18191 15.0181 3.96373V0.400092C15.0181 0.18191 14.8363 9.15527e-05 14.6181 9.15527e-05H11.0544C10.8363 9.15527e-05 10.6544 0.18191 10.6544 0.400092C10.6544 0.618274 10.8363 0.800092 11.0544 0.800092H13.6362L7.4908 6.94555C7.41807 7.01827 7.38171 7.12736 7.41808 7.23646C7.41808 7.34555 7.4908 7.45464 7.56353 7.52736C7.70898 7.63646 7.92716 7.63646 8.07262 7.52736Z" fill="white" />
                            <path d="M0 14.5821C0 14.8002 0.18182 14.9821 0.400002 14.9821H13.5273C13.7455 14.9821 13.9273 14.8002 13.9273 14.5821V6.10933C13.9273 5.89114 13.7455 5.70932 13.5273 5.70932C13.3091 5.70932 13.1273 5.89114 13.1273 6.10933V14.1821H0.800004V1.85478H8.87274C9.09092 1.85478 9.27273 1.67296 9.27273 1.45478C9.27273 1.2366 9.09092 1.05478 8.87274 1.05478H0.436368C0.218186 1.05478 0.0363659 1.2366 0.0363659 1.45478V14.5821H0Z" fill="white" />
                        </svg>
                    </button>
                    <button class="cp-action-btn cp-action-btn--primary" title="Delete">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.1091 2.36364C12 1.92727 11.7818 1.52727 11.4182 1.23636C11.0545 0.945454 10.6182 0.8 10.1818 0.8H9.41818C8.98182 0.8 8.54545 0.945454 8.18182 1.23636C7.81818 1.52727 7.6 1.92727 7.49091 2.36364H12.1091ZM0.400002 2.36364H6.72727C6.8 1.78182 7.05455 1.23636 7.49091 0.8C7.96364 0.290909 8.69091 0 9.41818 0H10.2182C10.9455 0 11.6364 0.290909 12.1455 0.8C12.5818 1.23636 12.8364 1.78182 12.9091 2.36364H18.8364C19.0545 2.36364 19.2364 2.54545 19.2364 2.76364C19.2364 2.98182 19.0545 3.16364 18.8364 3.16364H12.5455H7.05454H0.400002C0.18182 3.16364 0 2.98182 0 2.76364C0 2.54545 0.18182 2.36364 0.400002 2.36364Z" fill="white" />
                            <path d="M2.29085 3.92741C2.50903 3.89105 2.69085 4.0365 2.72722 4.25469L4.32721 16.8001C4.39994 17.4547 4.72721 18.0729 5.2363 18.5092C5.74539 18.9456 6.36358 19.2001 7.05449 19.2001H12.5454C13.1999 19.2001 13.8545 18.9456 14.3636 18.5092C14.8727 18.0729 15.1999 17.4547 15.2727 16.8001L16.8727 4.25469C16.909 4.0365 17.0909 3.89105 17.309 3.92741C17.5272 3.96378 17.6727 4.1456 17.6363 4.36378L16.0363 16.9092C15.9272 17.7456 15.5272 18.5456 14.8727 19.0911C14.2181 19.6729 13.4181 19.9638 12.5454 19.9638H7.05449C6.18176 19.9638 5.38176 19.6365 4.72722 19.0911C4.07267 18.5092 3.67267 17.7456 3.56357 16.9092L1.96358 4.36378C1.92721 4.1456 2.07267 3.96378 2.29085 3.92741Z" fill="white" />
                            <path d="M9.41784 15.6V7.45457L7.70874 9.16366C7.56329 9.30911 7.30874 9.30911 7.16329 9.16366C7.01784 9.0182 7.01784 8.76366 7.16329 8.6182L9.52693 6.25457C9.67238 6.10911 9.92693 6.10911 10.0724 6.25457L12.436 8.6182C12.5815 8.76366 12.5815 9.0182 12.436 9.16366C12.2906 9.30911 12.036 9.30911 11.8906 9.16366L10.1815 7.45457V15.6C10.1815 15.7091 10.1088 15.7818 10.036 15.8546C9.9633 15.9273 9.8542 15.9637 9.74511 15.9637C9.59966 15.9637 9.4542 15.8182 9.41784 15.6Z" fill="white" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Table -->
            <div class="cp-table-wrapper">
                <table class="cp-table">

                    <colgroup>
                        <col class="cp-col-id">
                        <col class="cp-col-customer">
                        <col class="cp-col-frames">
                        <col class="cp-col-date">
                        <col class="cp-col-notes">
                        <col class="cp-col-cnotes">
                        <col class="cp-col-maxship">
                        <col class="cp-col-prodstatus">
                        <col class="cp-col-p1">
                        <col class="cp-col-p2">
                        <col class="cp-col-seller">
                        <col class="cp-col-source">
                        <col class="cp-col-select">
                        <col class="cp-col-actions">
                    </colgroup>

                    <thead>
                        <tr>
                            <th class="cp-th-sortable">
                                <img class="cp-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                ID
                            </th>
                            <th class="cp-th-sortable">
                                <img class="cp-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                Customer
                            </th>
                            <th class="cp-th-sortable cp-th-center">
                                <img class="cp-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                No. of Frames
                            </th>
                            <th class="cp-th-sortable">
                                <img class="cp-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                Order Date
                            </th>
                            <th class="cp-th-center">Order Notes</th>
                            <th class="cp-th-center">Customers Notes</th>
                            <th class="cp-th-center">Max.Shp/<br>Est. Shipping</th>
                            <th>Production Status</th>
                            <th class="cp-th-center">P1 Confirmed</th>
                            <th class="cp-th-center">P2 Confirmed</th>
                            <th>Seller/Agent</th>
                            <th>Source</th>
                            <th class="cp-th-center cp-th-clickable" id="selectItemsHeader">Select Items<br>for Packaging</th>
                            <th class="cp-th-center" id="actionsHeader">
                                Actions
                                <!-- Delete All Popover -->
                                <div class="cp-popover" id="actionsPopover">
                                    <button class="cp-popover-item" id="deleteAllBtn">
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
                        <!-- Row 1 -->
                        <tr>
                            <td><a class="cp-id-link" href="#">OI1245</a></td>
                            <td class="cp-td-customer--orange">
                                <div class="cp-customer-cell">
                                    <img class="cp-customer-info-icon" src="images/icon-info.svg" width="12" height="12" alt="Info">
                                    <span>CENTRO ÓPTICO</span>
                                </div>
                            </td>
                            <td class="cp-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-maxship-cell">
                                    <span class="cp-maxship-green">Fri, 27th of June</span>
                                    <span class="cp-maxship-date">27-09-2024</span>
                                </div>
                            </td>
                            <td class="cp-status--boxed">
                                <div class="cp-status-cell">
                                    <select class="cp-status-select">
                                        <option selected>BOXED</option>
                                        <option>PRE-ASSEMBLY</option>
                                        <option>ASSEMBLY</option>
                                        <option>PARTLY SHIPPED</option>
                                        <option>READY</option>
                                    </select>
                                </div>
                            </td>
                            <td class="cp-td-p1--red"></td>
                            <td class="cp-td-p2--green"></td>
                            <td>
                                <div class="cp-seller-cell">
                                    <select class="cp-mini-select">
                                        <option>David Burman</option>
                                    </select>
                                    <select class="cp-mini-select cp-mini-select--agent">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <select class="cp-source-select">
                                    <option>FAIR</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell cp-icon-cell--clickable">
                                    <img src="images/icon-menu.svg" width="14" height="13" alt="Select">
                                </div>
                            </td>
                            <td>
                                <div class="cp-row-actions">
                                    <button class="cp-row-action-btn cp-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="cp-row-action-btn cp-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr>
                            <td><a class="cp-id-link" href="#">OI1245</a></td>
                            <td class="cp-td-customer--orange">
                                <div class="cp-customer-cell">
                                    <img class="cp-customer-info-icon" src="images/icon-info.svg" width="12" height="12" alt="Info">
                                    <span>CENTRO ÓPTICO</span>
                                </div>
                            </td>
                            <td class="cp-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-maxship-cell">
                                    <span class="cp-maxship-date-plain">Fri, 27th of June</span>
                                    <span class="cp-maxship-date">27-09-2024</span>
                                </div>
                            </td>
                            <td class=" cp-status--preassembly">
                                <div class="cp-status-cell">
                                    <select class="cp-status-select">
                                        <option>BOXED</option>
                                        <option selected>PRE-ASSEMBLY</option>
                                        <option>ASSEMBLY</option>
                                        <option>PARTLY SHIPPED</option>
                                        <option>READY</option>
                                    </select>
                                </div>
                            </td>
                            <td class="cp-td-p1--green"></td>
                            <td class="cp-td-p2--green"></td>
                            <td>
                                <div class="cp-seller-cell">
                                    <select class="cp-mini-select">
                                        <option>David Burman</option>
                                    </select>
                                    <select class="cp-mini-select cp-mini-select--agent">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <select class="cp-source-select">
                                    <option>FAIR</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell cp-icon-cell--clickable">
                                    <img src="images/icon-menu.svg" width="14" height="13" alt="Select">
                                </div>
                            </td>
                            <td>
                                <div class="cp-row-actions">
                                    <button class="cp-row-action-btn cp-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="cp-row-action-btn cp-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr>
                            <td><a class="cp-id-link" href="#">OI1245</a></td>
                            <td class="cp-td-customer--cyan">
                                <div class="cp-customer-cell">
                                    <img class="cp-customer-info-icon" src="images/icon-info.svg" width="12" height="12" alt="Info">
                                    <span>CENTRO ÓPTICO</span>
                                </div>
                            </td>
                            <td class="cp-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-warning-grey.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-maxship-cell">
                                    <span class="cp-maxship-date-plain">27-09-2024</span>
                                </div>
                            </td>
                            <td class=" cp-status--assembly">
                                <div class="cp-status-cell">
                                    <select class="cp-status-select">
                                        <option>BOXED</option>
                                        <option>PRE-ASSEMBLY</option>
                                        <option selected>ASSEMBLY</option>
                                        <option>PARTLY SHIPPED</option>
                                        <option>READY</option>
                                    </select>
                                </div>
                            </td>
                            <td class="cp-td-p1--green"></td>
                            <td class="cp-td-p2--green"></td>
                            <td>
                                <div class="cp-seller-cell">
                                    <select class="cp-mini-select">
                                        <option>David Burman</option>
                                    </select>
                                    <select class="cp-mini-select cp-mini-select--agent">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <select class="cp-source-select">
                                    <option>FAIR</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell cp-icon-cell--clickable">
                                    <img src="images/icon-menu.svg" width="14" height="13" alt="Select">
                                </div>
                            </td>
                            <td>
                                <div class="cp-row-actions">
                                    <button class="cp-row-action-btn cp-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="cp-row-action-btn cp-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr>
                            <td><a class="cp-id-link" href="#">OI1245</a></td>
                            <td class="cp-td-customer--orange">
                                <div class="cp-customer-cell">
                                    <img class="cp-customer-info-icon" src="images/icon-info.svg" width="12" height="12" alt="Info">
                                    <span>CENTRO ÓPTICO</span>
                                </div>
                            </td>
                            <td class="cp-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-maxship-cell">
                                    <span class="cp-maxship-red">Fri, 27th of June</span>
                                    <span class="cp-maxship-date">27-09-2024</span>
                                </div>
                            </td>
                            <td class=" cp-status--partlyshipped">
                                <div class="cp-status-cell">
                                    <select class="cp-status-select">
                                        <option>BOXED</option>
                                        <option>PRE-ASSEMBLY</option>
                                        <option>ASSEMBLY</option>
                                        <option selected>PARTLY SHIPPED</option>
                                        <option>READY</option>
                                    </select>
                                </div>
                            </td>
                            <td class="cp-td-p1--red"></td>
                            <td class="cp-td-p2--red"></td>
                            <td>
                                <div class="cp-seller-cell">
                                    <select class="cp-mini-select">
                                        <option>David Burman</option>
                                    </select>
                                    <select class="cp-mini-select cp-mini-select--agent">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <select class="cp-source-select">
                                    <option>FAIR</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell cp-icon-cell--clickable">
                                    <img src="images/icon-menu.svg" width="14" height="13" alt="Select">
                                </div>
                            </td>
                            <td>
                                <div class="cp-row-actions">
                                    <button class="cp-row-action-btn cp-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="cp-row-action-btn cp-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr>
                            <td><a class="cp-id-link" href="#">OI1245</a></td>
                            <td class="cp-td-customer--orange">
                                <div class="cp-customer-cell">
                                    <img class="cp-customer-info-icon" src="images/icon-info.svg" width="12" height="12" alt="Info">
                                    <span>CENTRO ÓPTICO</span>
                                </div>
                            </td>
                            <td class="cp-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-maxship-cell">
                                    <span class="cp-maxship-date-plain">27-09-2024</span>
                                </div>
                            </td>
                            <td class=" cp-status--partlyshipped">
                                <div class="cp-status-cell">
                                    <select class="cp-status-select">
                                        <option>BOXED</option>
                                        <option>PRE-ASSEMBLY</option>
                                        <option>ASSEMBLY</option>
                                        <option selected>PARTLY SHIPPED</option>
                                        <option>READY</option>
                                    </select>
                                </div>
                            </td>
                            <td class="cp-td-p1--green"></td>
                            <td class="cp-td-p2--green"></td>
                            <td>
                                <div class="cp-seller-cell">
                                    <select class="cp-mini-select">
                                        <option>David Burman</option>
                                    </select>
                                    <select class="cp-mini-select cp-mini-select--agent">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <select class="cp-source-select">
                                    <option>FAIR</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell cp-icon-cell--clickable">
                                    <img src="images/icon-menu.svg" width="14" height="13" alt="Select">
                                </div>
                            </td>
                            <td>
                                <div class="cp-row-actions">
                                    <button class="cp-row-action-btn cp-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="cp-row-action-btn cp-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 6 -->
                        <tr>
                            <td><a class="cp-id-link" href="#">OI1245</a></td>
                            <td class="cp-td-customer--orange">
                                <div class="cp-customer-cell">
                                    <img class="cp-customer-info-icon" src="images/icon-info.svg" width="12" height="12" alt="Info">
                                    <span>CENTRO ÓPTICO</span>
                                </div>
                            </td>
                            <td class="cp-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-maxship-cell">
                                    <span class="cp-maxship-red">Fri, 27th of June</span>
                                    <span class="cp-maxship-date">27-09-2024</span>
                                </div>
                            </td>
                            <td class=" cp-status--partlyshipped">
                                <div class="cp-status-cell">
                                    <select class="cp-status-select">
                                        <option>BOXED</option>
                                        <option>PRE-ASSEMBLY</option>
                                        <option>ASSEMBLY</option>
                                        <option selected>PARTLY SHIPPED</option>
                                        <option>READY</option>
                                    </select>
                                </div>
                            </td>
                            <td class="cp-td-p1--green"></td>
                            <td class="cp-td-p2--green"></td>
                            <td>
                                <div class="cp-seller-cell">
                                    <select class="cp-mini-select">
                                        <option>David Burman</option>
                                    </select>
                                    <select class="cp-mini-select cp-mini-select--agent">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <select class="cp-source-select">
                                    <option>FAIR</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell cp-icon-cell--clickable">
                                    <img src="images/icon-menu.svg" width="14" height="13" alt="Select">
                                </div>
                            </td>
                            <td>
                                <div class="cp-row-actions">
                                    <button class="cp-row-action-btn cp-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="cp-row-action-btn cp-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 7 -->
                        <tr>
                            <td><a class="cp-id-link" href="#">OI1245</a></td>
                            <td class="cp-td-customer--orange">
                                <div class="cp-customer-cell">
                                    <img class="cp-customer-info-icon" src="images/icon-info.svg" width="12" height="12" alt="Info">
                                    <span>CENTRO ÓPTICO</span>
                                </div>
                            </td>
                            <td class="cp-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-maxship-cell">
                                    <span class="cp-maxship-green">Fri, 27th of June</span>
                                    <span class="cp-maxship-date">27-09-2024</span>
                                </div>
                            </td>
                            <td class=" cp-status--ready">
                                <div class="cp-status-cell">
                                    <select class="cp-status-select">
                                        <option>BOXED</option>
                                        <option>PRE-ASSEMBLY</option>
                                        <option>ASSEMBLY</option>
                                        <option>PARTLY SHIPPED</option>
                                        <option selected>READY</option>
                                    </select>
                                </div>
                            </td>
                            <td class="cp-td-p1--green"></td>
                            <td class="cp-td-p2--green"></td>
                            <td>
                                <div class="cp-seller-cell">
                                    <select class="cp-mini-select">
                                        <option>David Burman</option>
                                    </select>
                                    <select class="cp-mini-select cp-mini-select--agent">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <select class="cp-source-select">
                                    <option>FAIR</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell cp-icon-cell--clickable">
                                    <img src="images/icon-menu.svg" width="14" height="13" alt="Select">
                                </div>
                            </td>
                            <td>
                                <div class="cp-row-actions">
                                    <button class="cp-row-action-btn cp-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="cp-row-action-btn cp-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 8 -->
                        <tr>
                            <td><a class="cp-id-link" href="#">OI1245</a></td>
                            <td class="cp-td-customer--orange">
                                <div class="cp-customer-cell">
                                    <img class="cp-customer-info-icon" src="images/icon-info.svg" width="12" height="12" alt="Info">
                                    <span>CENTRO ÓPTICO</span>
                                </div>
                            </td>
                            <td class="cp-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-maxship-cell">
                                    <span class="cp-maxship-green">Fri, 27th of June</span>
                                    <span class="cp-maxship-date">27-09-2024</span>
                                </div>
                            </td>
                            <td class=" cp-status--ready">
                                <div class="cp-status-cell">
                                    <select class="cp-status-select">
                                        <option>BOXED</option>
                                        <option>PRE-ASSEMBLY</option>
                                        <option>ASSEMBLY</option>
                                        <option>PARTLY SHIPPED</option>
                                        <option selected>READY</option>
                                    </select>
                                </div>
                            </td>
                            <td class="cp-td-p1--green"></td>
                            <td class="cp-td-p2--green"></td>
                            <td>
                                <div class="cp-seller-cell">
                                    <select class="cp-mini-select">
                                        <option>David Burman</option>
                                    </select>
                                    <select class="cp-mini-select cp-mini-select--agent">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <select class="cp-source-select">
                                    <option>FAIR</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell cp-icon-cell--clickable">
                                    <img src="images/icon-menu.svg" width="14" height="13" alt="Select">
                                </div>
                            </td>
                            <td>
                                <div class="cp-row-actions">
                                    <button class="cp-row-action-btn cp-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="cp-row-action-btn cp-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 9 -->
                        <tr>
                            <td><a class="cp-id-link" href="#">OI1245</a></td>
                            <td class="cp-td-customer--orange">
                                <div class="cp-customer-cell">
                                    <img class="cp-customer-info-icon" src="images/icon-info.svg" width="12" height="12" alt="Info">
                                    <span>CENTRO ÓPTICO</span>
                                </div>
                            </td>
                            <td class="cp-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-maxship-cell">
                                    <span class="cp-maxship-green">Fri, 27th of June</span>
                                    <span class="cp-maxship-date">27-09-2024</span>
                                </div>
                            </td>
                            <td class=" cp-status--ready">
                                <div class="cp-status-cell">
                                    <select class="cp-status-select">
                                        <option>BOXED</option>
                                        <option>PRE-ASSEMBLY</option>
                                        <option>ASSEMBLY</option>
                                        <option>PARTLY SHIPPED</option>
                                        <option selected>READY</option>
                                    </select>
                                </div>
                            </td>
                            <td class="cp-td-p1--green"></td>
                            <td class="cp-td-p2--green"></td>
                            <td>
                                <div class="cp-seller-cell">
                                    <select class="cp-mini-select">
                                        <option>David Burman</option>
                                    </select>
                                    <select class="cp-mini-select cp-mini-select--agent">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <select class="cp-source-select">
                                    <option>FAIR</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell cp-icon-cell--clickable">
                                    <img src="images/icon-menu.svg" width="14" height="13" alt="Select">
                                </div>
                            </td>
                            <td>
                                <div class="cp-row-actions">
                                    <button class="cp-row-action-btn cp-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="cp-row-action-btn cp-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 10 -->
                        <tr>
                            <td><a class="cp-id-link" href="#">OI1245</a></td>
                            <td class="cp-td-customer--orange">
                                <div class="cp-customer-cell">
                                    <img class="cp-customer-info-icon" src="images/icon-info.svg" width="12" height="12" alt="Info">
                                    <span>CENTRO ÓPTICO</span>
                                </div>
                            </td>
                            <td class="cp-td-center">21</td>
                            <td>2024-08-20</td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-warning.svg" width="16" height="16" alt="Warning">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell">
                                    <img src="images/icon-customer-notes.svg" width="16" height="16" alt="Customer Notes">
                                </div>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-maxship-cell">
                                    <span class="cp-maxship-green">Fri, 27th of June</span>
                                    <span class="cp-maxship-date">27-09-2024</span>
                                </div>
                            </td>
                            <td class=" cp-status--ready">
                                <div class="cp-status-cell">
                                    <select class="cp-status-select">
                                        <option>BOXED</option>
                                        <option>PRE-ASSEMBLY</option>
                                        <option>ASSEMBLY</option>
                                        <option>PARTLY SHIPPED</option>
                                        <option selected>READY</option>
                                    </select>
                                </div>
                            </td>
                            <td class="cp-td-p1--green"></td>
                            <td class="cp-td-p2--green"></td>
                            <td>
                                <div class="cp-seller-cell">
                                    <select class="cp-mini-select">
                                        <option>David Burman</option>
                                    </select>
                                    <select class="cp-mini-select cp-mini-select--agent">
                                        <option>Select Agent</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <select class="cp-source-select">
                                    <option>FAIR</option>
                                    <option>WEB</option>
                                </select>
                            </td>
                            <td class="cp-td-center">
                                <div class="cp-icon-cell cp-icon-cell--clickable">
                                    <img src="images/icon-menu.svg" width="14" height="13" alt="Select">
                                </div>
                            </td>
                            <td>
                                <div class="cp-row-actions">
                                    <button class="cp-row-action-btn cp-row-action-btn--delete" title="Delete">
                                        <img src="images/icon-trash.svg" width="10" height="10" alt="Delete">
                                    </button>
                                    <button class="cp-row-action-btn cp-row-action-btn--copy" title="Copy">
                                        <img src="images/icon-copy.svg" width="10" height="10" alt="Copy">
                                    </button>
                                </div>
                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>

        </section>

        <!-- ORDER ITEMS Modal Overlay -->
        <div class="cp-overlay" id="orderItemsOverlay">
            <div class="cp-modal cp-modal--wide">
                <!-- Header -->
                <div class="cp-modal-header">
                    <h2 class="cp-modal-title">ORDER ITEMS (013104)</h2>
                    <button class="cp-modal-close" id="orderItemsClose">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L11 11M11 1L1 11" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </button>
                </div>

                <!-- Table -->
                <div class="cp-modal-table-wrap">
                    <table class="cp-modal-table">
                        <thead>
                            <tr>
                                <th>
                                    <img class="cp-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                    ID
                                </th>
                                <th>
                                    <img class="cp-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                    Product Name
                                </th>
                                <th>
                                    <img class="cp-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                    QTY
                                </th>
                                <th>Preview</th>
                                <th><u>Packaging</u></th>
                                <th>Extra Info</th>
                                <th>
                                    <img class="cp-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                    Laser Engrav.
                                </th>
                                <th>
                                    <img class="cp-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                    Label Name
                                </th>
                                <th>Calibre</th>
                                <th>
                                    <img class="cp-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                    Shipped
                                </th>
                                <th><u>Select</u></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PI0201</td>
                                <td class="cp-modal-product">DARIO DARK GREEN w/<br>TITANIUM Nosepad</td>
                                <td class="cp-modal-center">2</td>
                                <td><img class="cp-modal-preview" src="images/preview-glasses.png" alt="Preview"></td>
                                <td>
                                    <select class="cp-modal-pack-select">
                                        <option>Full Pack</option>
                                        <option>Half Pack</option>
                                    </select>
                                </td>
                                <td class="cp-modal-center">
                                    <img src="images/icon-info.svg" width="16" height="16" alt="Info">
                                </td>
                                <td class="cp-modal-center">
                                    <img src="images/icon-info.svg" width="16" height="16" alt="Info">
                                </td>
                                <td class="cp-modal-center">
                                    <img src="images/icon-info.svg" width="16" height="16" alt="Info">
                                </td>
                                <td class="cp-modal-center">-</td>
                                <td class="cp-modal-center">
                                    <img src="images/icon-folder.svg" width="18" height="18" alt="Shipped">
                                </td>
                                <td class="cp-modal-center">
                                    <input type="checkbox" class="cp-modal-checkbox" checked>
                                </td>
                            </tr>
                            <tr>
                                <td>PI0201</td>
                                <td class="cp-modal-product">DARIO DARK GREEN w/<br>TITANIUM Nosepad</td>
                                <td class="cp-modal-center">2</td>
                                <td><img class="cp-modal-preview" src="images/preview-glasses.png" alt="Preview"></td>
                                <td>
                                    <select class="cp-modal-pack-select">
                                        <option>Full Pack</option>
                                        <option>Half Pack</option>
                                    </select>
                                </td>
                                <td class="cp-modal-center">
                                    <img src="images/icon-info.svg" width="16" height="16" alt="Info">
                                </td>
                                <td class="cp-modal-center">
                                    <img src="images/icon-info.svg" width="16" height="16" alt="Info">
                                </td>
                                <td class="cp-modal-center">
                                    <img src="images/icon-info.svg" width="16" height="16" alt="Info">
                                </td>
                                <td class="cp-modal-center">-</td>
                                <td class="cp-modal-center">
                                    <img src="images/icon-folder.svg" width="18" height="18" alt="Shipped">
                                </td>
                                <td class="cp-modal-center">
                                    <input type="checkbox" class="cp-modal-checkbox" checked>
                                </td>
                            </tr>
                            <tr>
                                <td>PI0201</td>
                                <td class="cp-modal-product">DARIO DARK GREEN w/<br>TITANIUM Nosepad</td>
                                <td class="cp-modal-center">2</td>
                                <td><img class="cp-modal-preview" src="images/preview-glasses.png" alt="Preview"></td>
                                <td>
                                    <select class="cp-modal-pack-select">
                                        <option>Full Pack</option>
                                        <option>Half Pack</option>
                                    </select>
                                </td>
                                <td class="cp-modal-center">
                                    <img src="images/icon-info.svg" width="16" height="16" alt="Info">
                                </td>
                                <td class="cp-modal-center">
                                    <img src="images/icon-info.svg" width="16" height="16" alt="Info">
                                </td>
                                <td class="cp-modal-center">
                                    <img src="images/icon-info.svg" width="16" height="16" alt="Info">
                                </td>
                                <td class="cp-modal-center">-</td>
                                <td class="cp-modal-center">
                                    <img src="images/icon-folder.svg" width="18" height="18" alt="Shipped">
                                </td>
                                <td class="cp-modal-center">
                                    <input type="checkbox" class="cp-modal-checkbox" checked>
                                </td>
                            </tr>
                            <tr>
                                <td>PI0201</td>
                                <td class="cp-modal-product">DARIO DARK GREEN w/<br>TITANIUM Nosepad</td>
                                <td class="cp-modal-center">2</td>
                                <td><img class="cp-modal-preview" src="images/preview-glasses.png" alt="Preview"></td>
                                <td>
                                    <select class="cp-modal-pack-select">
                                        <option>Full Pack</option>
                                        <option>Half Pack</option>
                                    </select>
                                </td>
                                <td class="cp-modal-center">
                                    <img src="images/icon-info.svg" width="16" height="16" alt="Info">
                                </td>
                                <td class="cp-modal-center">
                                    <img src="images/icon-info.svg" width="16" height="16" alt="Info">
                                </td>
                                <td class="cp-modal-center">
                                    <img src="images/icon-info.svg" width="16" height="16" alt="Info">
                                </td>
                                <td class="cp-modal-center">-</td>
                                <td class="cp-modal-center">
                                    <img src="images/icon-folder.svg" width="18" height="18" alt="Shipped">
                                </td>
                                <td class="cp-modal-center">
                                    <input type="checkbox" class="cp-modal-checkbox" checked>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- SELECTED ITEMS Modal Overlay -->
        <div class="cp-overlay" id="selectedItemsOverlay">
            <div class="cp-modal">
                <!-- Header -->
                <div class="cp-modal-header">
                    <h2 class="cp-modal-title"><em>Selected Items</em></h2>
                    <button class="cp-modal-close" id="selectedItemsClose">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L11 11M11 1L1 11" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </button>
                </div>

                <!-- Table -->
                <div class="cp-modal-table-wrap">
                    <table class="cp-modal-table">
                        <thead>
                            <tr>
                                <th>
                                    <img class="cp-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                    Order ID
                                </th>
                                <th>
                                    <img class="cp-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                    Customer
                                </th>
                                <th>
                                    <img class="cp-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                    Product ID
                                </th>
                                <th>Product Name</th>
                                <th>
                                    <img class="cp-sort-icon" src="images/icon-sort.svg" width="16" height="16" alt="Sort">
                                    QTY
                                </th>
                                <th>Calibre</th>
                                <th><u>Select</u></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a class="cp-modal-id-link" href="#">OI0201</a></td>
                                <td>CENTRO ÓPTICO</td>
                                <td class="cp-modal-center">PI0201</td>
                                <td class="cp-modal-product">DARIO DARK GREEN w/<br>TITANIUM Nosepad</td>
                                <td class="cp-modal-center">12</td>
                                <td class="cp-modal-center">-</td>
                                <td class="cp-modal-center">
                                    <input type="checkbox" class="cp-modal-checkbox" checked>
                                </td>
                            </tr>
                            <tr>
                                <td><a class="cp-modal-id-link" href="#">OI0201</a></td>
                                <td>CENTRO ÓPTICO</td>
                                <td class="cp-modal-center">PI0201</td>
                                <td class="cp-modal-product">DARIO DARK GREEN w/<br>TITANIUM Nosepad</td>
                                <td class="cp-modal-center">12</td>
                                <td class="cp-modal-center">-</td>
                                <td class="cp-modal-center">
                                    <input type="checkbox" class="cp-modal-checkbox" checked>
                                </td>
                            </tr>
                            <tr>
                                <td><a class="cp-modal-id-link" href="#">OI0201</a></td>
                                <td>CENTRO ÓPTICO</td>
                                <td class="cp-modal-center">PI0201</td>
                                <td class="cp-modal-product">DARIO DARK GREEN w/<br>TITANIUM Nosepad</td>
                                <td class="cp-modal-center">12</td>
                                <td class="cp-modal-center">-</td>
                                <td class="cp-modal-center">
                                    <input type="checkbox" class="cp-modal-checkbox" checked>
                                </td>
                            </tr>
                            <tr>
                                <td><a class="cp-modal-id-link" href="#">OI0201</a></td>
                                <td>CENTRO ÓPTICO</td>
                                <td class="cp-modal-center">PI0201</td>
                                <td class="cp-modal-product">DARIO DARK GREEN w/<br>TITANIUM Nosepad</td>
                                <td class="cp-modal-center">12</td>
                                <td class="cp-modal-center">-</td>
                                <td class="cp-modal-center">
                                    <input type="checkbox" class="cp-modal-checkbox" checked>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Confirm Button -->
                <div class="cp-modal-footer">
                    <button class="cp-confirm-btn" id="confirmPackingBtn">CONFIRM PACKING LIST SELECTION</button>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UzzYDKKEvR07Gy2jnCO/MC3j0/fFE7"
        crossorigin="anonymous"></script>
    <script src="./indexx.js"></script>
    <script src="./create-packaging.js"></script>

</body>

</html>
