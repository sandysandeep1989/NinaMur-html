<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order &amp; Eyewear Analysis</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./sales-report.css">
</head>

<body>

    <!-- Main Content -->
    <main id="main-content">

        <?php include 'header.php'; ?>

        <section class="sr-container">

            <!-- Title Row -->
            <div class="sr-title-row">
                <h1 class="sr-title">Order &amp; Eyewear Analysis</h1>
                <span class="sr-results">Results: 37</span>
            </div>

            <!-- Button Row: New Search + Action Circles -->
            <div class="sr-btn-row">
                <div>
                    <button class="sr-new-search-btn">New Search</button>
                </div>
                <div class="sr-action-buttons">
                    <button class="sr-action-btn sr-action-btn--primary" title="Add New">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.6 15.2C7.92727 15.2 8.18182 14.9455 8.18182 14.6182V8.18182H14.6909C15.0182 8.18182 15.2727 7.92727 15.2727 7.6C15.2727 7.27273 15.0182 7.01818 14.6909 7.01818H8.21818V0.581818C8.21818 0.290909 7.96364 0 7.63636 0C7.30909 0 7.05455 0.254546 7.05455 0.581818V7.01818H0.581818C0.254546 7.01818 0 7.27273 0 7.6C0 7.92727 0.254546 8.18182 0.581818 8.18182H7.01818V14.6182C7.05455 14.9455 7.30909 15.2 7.6 15.2Z" fill="white"/>
                        </svg>
                    </button>
                    <button class="sr-action-btn sr-action-btn--primary" title="Edit">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.3843 0.354935C10.3967 0.354942 10.4102 0.355037 10.4243 0.356888L10.4233 0.357864C10.4674 0.362932 10.8152 0.408095 11.0571 0.649857L13.5132 3.10689C13.6961 3.29004 13.7675 3.53314 13.7935 3.65962L13.8071 3.74068V3.74165C13.8084 3.75414 13.8091 3.7672 13.8091 3.77974V14.4672C13.809 15.177 13.2317 15.7541 12.522 15.7543H3.49658C2.78663 15.7543 2.20958 15.1772 2.20947 14.4672V1.64204C2.20947 0.932028 2.78657 0.354935 3.49658 0.354935H10.3843ZM3.49658 1.02974C3.15899 1.02974 2.88428 1.30445 2.88428 1.64204V14.4672C2.88438 14.8047 3.15905 15.0795 3.49658 15.0795H12.522C12.8593 15.0793 13.1342 14.8046 13.1343 14.4672V4.11665H11.3345C10.6245 4.11665 10.0464 3.53956 10.0464 2.82954V1.02974H3.49658ZM10.7212 2.82954C10.7212 3.16714 10.9969 3.44185 11.3345 3.44185H12.894L10.7212 1.269V2.82954Z" fill="white" stroke="white" stroke-width="0.2"/>
                        </svg>
                    </button>
                    <button class="sr-action-btn sr-action-btn--primary" title="Document">
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.668811 0.0818182L6.81427 6.22727V3.64546C6.81427 3.42727 6.99608 3.24545 7.21427 3.24545C7.43245 3.24545 7.61427 3.42727 7.61427 3.64546V7.20909C7.61427 7.42727 7.43245 7.60909 7.21427 7.60909H3.65063C3.43245 7.60909 3.25063 7.42727 3.25063 7.20909C3.25063 6.99091 3.43245 6.80909 3.65063 6.80909H6.23245L0.0869966 0.663637C0.0142693 0.590909 -0.0220988 0.481818 0.0142648 0.372727C0.0142648 0.263636 0.0869954 0.154545 0.159723 0.0818182C0.305177 -0.0272727 0.523357 -0.0272727 0.668811 0.0818182Z" fill="white"/>
                            <path d="M15.0323 14.5911C15.0323 14.8093 14.8504 14.9911 14.6323 14.9911H1.50498C1.2868 14.9911 1.10498 14.8093 1.10498 14.5911V6.11839C1.10498 5.90021 1.2868 5.71839 1.50498 5.71839C1.72316 5.71839 1.90498 5.90021 1.90498 6.11839V14.1911H14.2323V1.86384H6.15953C5.94135 1.86384 5.75953 1.68203 5.75953 1.46384C5.75953 1.24566 5.94135 1.06384 6.15953 1.06384H14.5959C14.8141 1.06384 14.9959 1.24566 14.9959 1.46384V14.5911H15.0323Z" fill="white"/>
                        </svg>
                    </button>
                    <button class="sr-action-btn sr-action-btn--primary" title="Delete">
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.07262 7.52736L14.2181 1.38191V3.96373C14.2181 4.18191 14.3999 4.36373 14.6181 4.36373C14.8363 4.36373 15.0181 4.18191 15.0181 3.96373V0.400092C15.0181 0.18191 14.8363 9.15527e-05 14.6181 9.15527e-05H11.0544C10.8363 9.15527e-05 10.6544 0.18191 10.6544 0.400092C10.6544 0.618274 10.8363 0.800092 11.0544 0.800092H13.6362L7.4908 6.94555C7.41807 7.01827 7.38171 7.12736 7.41808 7.23646C7.41808 7.34555 7.4908 7.45464 7.56353 7.52736C7.70898 7.63646 7.92716 7.63646 8.07262 7.52736Z" fill="white"/>
                            <path d="M0 14.5821C0 14.8002 0.18182 14.9821 0.400002 14.9821H13.5273C13.7455 14.9821 13.9273 14.8002 13.9273 14.5821V6.10933C13.9273 5.89114 13.7455 5.70932 13.5273 5.70932C13.3091 5.70932 13.1273 5.89114 13.1273 6.10933V14.1821H0.800004V1.85478H8.87274C9.09092 1.85478 9.27273 1.67296 9.27273 1.45478C9.27273 1.2366 9.09092 1.05478 8.87274 1.05478H0.436368C0.218186 1.05478 0.0363659 1.2366 0.0363659 1.45478V14.5821H0Z" fill="white"/>
                        </svg>
                    </button>
                    <button class="sr-action-btn sr-action-btn--primary" title="Export">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.1091 2.36364C12 1.92727 11.7818 1.52727 11.4182 1.23636C11.0545 0.945454 10.6182 0.8 10.1818 0.8H9.41818C8.98182 0.8 8.54545 0.945454 8.18182 1.23636C7.81818 1.52727 7.6 1.92727 7.49091 2.36364H12.1091ZM0.400002 2.36364H6.72727C6.8 1.78182 7.05455 1.23636 7.49091 0.8C7.96364 0.290909 8.69091 0 9.41818 0H10.2182C10.9455 0 11.6364 0.290909 12.1455 0.8C12.5818 1.23636 12.8364 1.78182 12.9091 2.36364H18.8364C19.0545 2.36364 19.2364 2.54545 19.2364 2.76364C19.2364 2.98182 19.0545 3.16364 18.8364 3.16364H12.5455H7.05454H0.400002C0.18182 3.16364 0 2.98182 0 2.76364C0 2.54545 0.18182 2.36364 0.400002 2.36364Z" fill="white"/>
                            <path d="M2.29085 3.92741C2.50903 3.89105 2.69085 4.0365 2.72722 4.25469L4.32721 16.8001C4.39994 17.4547 4.72721 18.0729 5.2363 18.5092C5.74539 18.9456 6.36358 19.2001 7.05449 19.2001H12.5454C13.1999 19.2001 13.8545 18.9456 14.3636 18.5092C14.8727 18.0729 15.1999 17.4547 15.2727 16.8001L16.8727 4.25469C16.909 4.0365 17.0909 3.89105 17.309 3.92741C17.5272 3.96378 17.6727 4.1456 17.6363 4.36378L16.0363 16.9092C15.9272 17.7456 15.5272 18.5456 14.8727 19.0911C14.2181 19.6729 13.4181 19.9638 12.5454 19.9638H7.05449C6.18176 19.9638 5.38176 19.6365 4.72722 19.0911C4.07267 18.5092 3.67267 17.7456 3.56357 16.9092L1.96358 4.36378C1.92721 4.1456 2.07267 3.96378 2.29085 3.92741Z" fill="white"/>
                            <path d="M9.41784 15.6V7.45457L7.70874 9.16366C7.56329 9.30911 7.30874 9.30911 7.16329 9.16366C7.01784 9.0182 7.01784 8.76366 7.16329 8.6182L9.52693 6.25457C9.67238 6.10911 9.92693 6.10911 10.0724 6.25457L12.436 8.6182C12.5815 8.76366 12.5815 9.0182 12.436 9.16366C12.2906 9.30911 12.036 9.30911 11.8906 9.16366L10.1815 7.45457V15.6C10.1815 15.7091 10.1088 15.7818 10.036 15.8546C9.9633 15.9273 9.8542 15.9637 9.74511 15.9637C9.59966 15.9637 9.4542 15.8182 9.41784 15.6Z" fill="white"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Table -->
            <div class="sr-table-wrapper">
                <table class="sr-table">

                    <colgroup>
                        <col class="sr-col-history">
                        <col class="sr-col-reporttype">
                        <col class="sr-col-when">
                        <col class="sr-col-ordercat">
                        <col class="sr-col-who">
                        <col class="sr-col-category">
                        <col class="sr-col-rating">
                        <col class="sr-col-loyalty">
                        <col class="sr-col-were">
                        <col class="sr-col-source">
                        <col class="sr-col-eyewear">
                        <col class="sr-col-searchdesc">
                        <col class="sr-col-actions">
                        <col class="sr-col-reportgen">
                    </colgroup>

                    <thead>
                        <tr>
                            <th>
                                <span class="sr-th-inner">Search History</span>
                            </th>
                            <th>
                                <span class="sr-th-inner">
                                    <img class="sr-th-sort" src="images/icon-sort.svg" alt="Sort">
                                    Report Type
                                </span>
                            </th>
                            <th>
                                <span class="sr-th-inner">When</span>
                            </th>
                            <th>
                                <span class="sr-th-inner">
                                    <img class="sr-th-sort" src="images/icon-sort.svg" alt="Sort">
                                    Order Cat.
                                </span>
                            </th>
                            <th>
                                <span class="sr-th-inner">
                                    <img class="sr-th-sort" src="images/icon-sort.svg" alt="Sort">
                                    Who
                                </span>
                            </th>
                            <th>
                                <span class="sr-th-inner">
                                    <img class="sr-th-sort" src="images/icon-sort.svg" alt="Sort">
                                    Category
                                </span>
                            </th>
                            <th>
                                <span class="sr-th-inner sr-th-inner--center">
                                    <img class="sr-th-sort" src="images/icon-sort.svg" alt="Sort">
                                    Rating
                                </span>
                            </th>
                            <th>
                                <span class="sr-th-inner">
                                    <img class="sr-th-sort" src="images/icon-sort.svg" alt="Sort">
                                    Loyalty
                                </span>
                            </th>
                            <th>
                                <span class="sr-th-inner sr-th-inner--center">
                                    <img class="sr-th-sort" src="images/icon-sort.svg" alt="Sort">
                                    Were
                                </span>
                            </th>
                            <th>
                                <span class="sr-th-inner">
                                    <img class="sr-th-sort" src="images/icon-sort.svg" alt="Sort">
                                    Source/Seller
                                </span>
                            </th>
                            <th>
                                <span class="sr-th-inner">
                                    <img class="sr-th-sort" src="images/icon-sort.svg" alt="Sort">
                                    Eyewear Filter
                                </span>
                            </th>
                            <th>
                                <span class="sr-th-inner">
                                    <img class="sr-th-sort" src="images/icon-sort.svg" alt="Sort">
                                    Search Description
                                </span>
                            </th>
                            <th>
                                <span class="sr-th-inner sr-th-inner--center">Actions</span>
                            </th>
                            <th>
                                <span class="sr-th-inner sr-th-inner--center">
                                    <img class="sr-th-sort" src="images/icon-sort.svg" alt="Sort">
                                    Report Generation
                                </span>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <td>2024-01-18, 06:27:11</td>
                            <td>Eyewear</td>
                            <td>From 2024-01-23 To 2025-04-12</td>
                            <td class="sr-td-capitalize">standardOrder,incident,replacementOrder,creditNote,internalOrder,deposit</td>
                            <td>optic,distributor,internal,shop,finalClient</td>
                            <td>premium,luxury,trendy</td>
                            <td class="sr-td-center">2,3</td>
                            <td>high,medium</td>
                            <td class="sr-td-center">africa,<br>america</td>
                            <td>web,direct,fair / Antello Astero,Christian Fouqueraue,Daniel,Igor Volkhov,Irene,Jerry Knowles,Jill Harrington,Jon Claude Ducote,Lorena,Matteo Muraro,Mauro,Miguel,Richard,Romain,Web,Xavier</td>
                            <td>Optical,Sun,Hybrid/ Unisex,Female/ Aviator,Cat-eye,Geometric,Oval,Panthos,Rectangle,Round/ small,medium,large/ Basic,Special Edition,Limited Edition,Unique Piece</td>
                            <td>Text Search</td>
                            <td>
                                <div class="sr-row-actions">
                                    <button class="sr-row-action-btn sr-row-action-btn--delete" title="Delete">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.5 4V9C2.5 10.1046 3.39543 11 4.5 11H7.5C8.60457 11 9.5 10.1046 9.5 9V4M7 5.5V8.5M5 5.5L5 8.5M8 2.5L7.29687 1.4453C7.1114 1.1671 6.79917 1 6.46482 1H5.53518C5.20083 1 4.8886 1.1671 4.70313 1.4453L4 2.5M8 2.5H4M8 2.5H10.5M4 2.5H1.5" stroke="#FF4949" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="sr-row-action-btn sr-row-action-btn--folder" title="Archive">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_32_13068)">
                                                <path d="M9.66236 4.875V4.3125C9.66236 3.38052 8.93519 2.625 8.03817 2.625H6.36135C6.07238 2.625 5.78864 2.5449 5.5394 2.39296L4.45524 1.73204C4.20601 1.5801 3.92226 1.5 3.63329 1.5H2.62419C1.72718 1.5 1 2.25552 1 3.1875V8.8125C1 9.74448 1.72718 10.5 2.62419 10.5H7.35343C8.11412 10.5 8.81904 10.0853 9.21041 9.40762L10.844 6.57881C11.277 5.82897 10.7572 4.875 9.91553 4.875H9.66236ZM9.66236 4.875H5.11435C4.25853 4.875 3.48299 5.39865 3.13541 6.21119L1.5414 9.9375" stroke="#4C49FF" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_32_13068">
                                                    <rect width="12" height="12" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="sr-report-btns">
                                    <button class="sr-report-btn">Open PDF</button>
                                    <button class="sr-report-btn">Open XLSX</button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr>
                            <td>2024-01-18, 06:27:11</td>
                            <td>Eyewear</td>
                            <td>From 2024-01-23 To 2025-04-12</td>
                            <td class="sr-td-capitalize">standardOrder,incident,replacementOrder,creditNote,internalOrder,deposit</td>
                            <td>optic,distributor,internal,shop,finalClient</td>
                            <td>premium,luxury,trendy</td>
                            <td class="sr-td-center">2,3</td>
                            <td>high,medium</td>
                            <td class="sr-td-center">africa,<br>america</td>
                            <td>web,direct,fair / Antello Astero,Christian Fouqueraue,Daniel,Igor Volkhov,Irene,Jerry Knowles,Jill Harrington,Jon Claude Ducote,Lorena,Matteo Muraro,Mauro,Miguel,Richard,Romain,Web,Xavier</td>
                            <td>Optical,Sun,Hybrid/ Unisex,Female/ Aviator,Cat-eye,Geometric,Oval,Panthos,Rectangle,Round/ small,medium,large/ Basic,Special Edition,Limited Edition,Unique Piece</td>
                            <td>Text Search</td>
                            <td>
                                <div class="sr-row-actions">
                                    <button class="sr-row-action-btn sr-row-action-btn--delete" title="Delete">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.5 4V9C2.5 10.1046 3.39543 11 4.5 11H7.5C8.60457 11 9.5 10.1046 9.5 9V4M7 5.5V8.5M5 5.5L5 8.5M8 2.5L7.29687 1.4453C7.1114 1.1671 6.79917 1 6.46482 1H5.53518C5.20083 1 4.8886 1.1671 4.70313 1.4453L4 2.5M8 2.5H4M8 2.5H10.5M4 2.5H1.5" stroke="#FF4949" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="sr-row-action-btn sr-row-action-btn--folder" title="Archive">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_32_13068)">
                                                <path d="M9.66236 4.875V4.3125C9.66236 3.38052 8.93519 2.625 8.03817 2.625H6.36135C6.07238 2.625 5.78864 2.5449 5.5394 2.39296L4.45524 1.73204C4.20601 1.5801 3.92226 1.5 3.63329 1.5H2.62419C1.72718 1.5 1 2.25552 1 3.1875V8.8125C1 9.74448 1.72718 10.5 2.62419 10.5H7.35343C8.11412 10.5 8.81904 10.0853 9.21041 9.40762L10.844 6.57881C11.277 5.82897 10.7572 4.875 9.91553 4.875H9.66236ZM9.66236 4.875H5.11435C4.25853 4.875 3.48299 5.39865 3.13541 6.21119L1.5414 9.9375" stroke="#4C49FF" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_32_13068">
                                                    <rect width="12" height="12" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="sr-report-btns">
                                    <button class="sr-report-btn">Open PDF</button>
                                    <button class="sr-report-btn">Open XLSX</button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr>
                            <td>2024-01-18, 06:27:11</td>
                            <td>Eyewear</td>
                            <td>From 2024-01-23 To 2025-04-12</td>
                            <td class="sr-td-capitalize">standardOrder,incident,replacementOrder,creditNote,internalOrder,deposit</td>
                            <td>optic,distributor,internal,shop,finalClient</td>
                            <td>premium,luxury,trendy</td>
                            <td class="sr-td-center">2,3</td>
                            <td>high,medium</td>
                            <td class="sr-td-center">africa,<br>america</td>
                            <td>web,direct,fair / Antello Astero,Christian Fouqueraue,Daniel,Igor Volkhov,Irene,Jerry Knowles,Jill Harrington,Jon Claude Ducote,Lorena,Matteo Muraro,Mauro,Miguel,Richard,Romain,Web,Xavier</td>
                            <td>Optical,Sun,Hybrid/ Unisex,Female/ Aviator,Cat-eye,Geometric,Oval,Panthos,Rectangle,Round/ small,medium,large/ Basic,Special Edition,Limited Edition,Unique Piece</td>
                            <td>Text Search</td>
                            <td>
                                <div class="sr-row-actions">
                                    <button class="sr-row-action-btn sr-row-action-btn--delete" title="Delete">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.5 4V9C2.5 10.1046 3.39543 11 4.5 11H7.5C8.60457 11 9.5 10.1046 9.5 9V4M7 5.5V8.5M5 5.5L5 8.5M8 2.5L7.29687 1.4453C7.1114 1.1671 6.79917 1 6.46482 1H5.53518C5.20083 1 4.8886 1.1671 4.70313 1.4453L4 2.5M8 2.5H4M8 2.5H10.5M4 2.5H1.5" stroke="#FF4949" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="sr-row-action-btn sr-row-action-btn--folder" title="Archive">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_32_13068)">
                                                <path d="M9.66236 4.875V4.3125C9.66236 3.38052 8.93519 2.625 8.03817 2.625H6.36135C6.07238 2.625 5.78864 2.5449 5.5394 2.39296L4.45524 1.73204C4.20601 1.5801 3.92226 1.5 3.63329 1.5H2.62419C1.72718 1.5 1 2.25552 1 3.1875V8.8125C1 9.74448 1.72718 10.5 2.62419 10.5H7.35343C8.11412 10.5 8.81904 10.0853 9.21041 9.40762L10.844 6.57881C11.277 5.82897 10.7572 4.875 9.91553 4.875H9.66236ZM9.66236 4.875H5.11435C4.25853 4.875 3.48299 5.39865 3.13541 6.21119L1.5414 9.9375" stroke="#4C49FF" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_32_13068">
                                                    <rect width="12" height="12" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="sr-report-btns">
                                    <button class="sr-report-btn">Open PDF</button>
                                    <button class="sr-report-btn">Open XLSX</button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr>
                            <td>2024-01-18, 06:27:11</td>
                            <td>Eyewear</td>
                            <td>From 2024-01-23 To 2025-04-12</td>
                            <td class="sr-td-capitalize">standardOrder,incident,replacementOrder,creditNote,internalOrder,deposit</td>
                            <td>optic,distributor,internal,shop,finalClient</td>
                            <td>premium,luxury,trendy</td>
                            <td class="sr-td-center">2,3</td>
                            <td>high,medium</td>
                            <td class="sr-td-center">africa,<br>america</td>
                            <td>web,direct,fair / Antello Astero,Christian Fouqueraue,Daniel,Igor Volkhov,Irene,Jerry Knowles,Jill Harrington,Jon Claude Ducote,Lorena,Matteo Muraro,Mauro,Miguel,Richard,Romain,Web,Xavier</td>
                            <td>Optical,Sun,Hybrid/ Unisex,Female/ Aviator,Cat-eye,Geometric,Oval,Panthos,Rectangle,Round/ small,medium,large/ Basic,Special Edition,Limited Edition,Unique Piece</td>
                            <td>Text Search</td>
                            <td>
                                <div class="sr-row-actions">
                                    <button class="sr-row-action-btn sr-row-action-btn--delete" title="Delete">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.5 4V9C2.5 10.1046 3.39543 11 4.5 11H7.5C8.60457 11 9.5 10.1046 9.5 9V4M7 5.5V8.5M5 5.5L5 8.5M8 2.5L7.29687 1.4453C7.1114 1.1671 6.79917 1 6.46482 1H5.53518C5.20083 1 4.8886 1.1671 4.70313 1.4453L4 2.5M8 2.5H4M8 2.5H10.5M4 2.5H1.5" stroke="#FF4949" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="sr-row-action-btn sr-row-action-btn--folder" title="Archive">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_32_13068)">
                                                <path d="M9.66236 4.875V4.3125C9.66236 3.38052 8.93519 2.625 8.03817 2.625H6.36135C6.07238 2.625 5.78864 2.5449 5.5394 2.39296L4.45524 1.73204C4.20601 1.5801 3.92226 1.5 3.63329 1.5H2.62419C1.72718 1.5 1 2.25552 1 3.1875V8.8125C1 9.74448 1.72718 10.5 2.62419 10.5H7.35343C8.11412 10.5 8.81904 10.0853 9.21041 9.40762L10.844 6.57881C11.277 5.82897 10.7572 4.875 9.91553 4.875H9.66236ZM9.66236 4.875H5.11435C4.25853 4.875 3.48299 5.39865 3.13541 6.21119L1.5414 9.9375" stroke="#4C49FF" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_32_13068">
                                                    <rect width="12" height="12" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="sr-report-btns">
                                    <button class="sr-report-btn">Open PDF</button>
                                    <button class="sr-report-btn">Open XLSX</button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr>
                            <td>2024-01-18, 06:27:11</td>
                            <td>Eyewear</td>
                            <td>From 2024-01-23 To 2025-04-12</td>
                            <td class="sr-td-capitalize">standardOrder,incident,replacementOrder,creditNote,internalOrder,deposit</td>
                            <td>optic,distributor,internal,shop,finalClient</td>
                            <td>premium,luxury,trendy</td>
                            <td class="sr-td-center">2,3</td>
                            <td>high,medium</td>
                            <td class="sr-td-center">africa,<br>america</td>
                            <td>web,direct,fair / Antello Astero,Christian Fouqueraue,Daniel,Igor Volkhov,Irene,Jerry Knowles,Jill Harrington,Jon Claude Ducote,Lorena,Matteo Muraro,Mauro,Miguel,Richard,Romain,Web,Xavier</td>
                            <td>Optical,Sun,Hybrid/ Unisex,Female/ Aviator,Cat-eye,Geometric,Oval,Panthos,Rectangle,Round/ small,medium,large/ Basic,Special Edition,Limited Edition,Unique Piece</td>
                            <td>Text Search</td>
                            <td>
                                <div class="sr-row-actions">
                                    <button class="sr-row-action-btn sr-row-action-btn--delete" title="Delete">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.5 4V9C2.5 10.1046 3.39543 11 4.5 11H7.5C8.60457 11 9.5 10.1046 9.5 9V4M7 5.5V8.5M5 5.5L5 8.5M8 2.5L7.29687 1.4453C7.1114 1.1671 6.79917 1 6.46482 1H5.53518C5.20083 1 4.8886 1.1671 4.70313 1.4453L4 2.5M8 2.5H4M8 2.5H10.5M4 2.5H1.5" stroke="#FF4949" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="sr-row-action-btn sr-row-action-btn--folder" title="Archive">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_32_13068)">
                                                <path d="M9.66236 4.875V4.3125C9.66236 3.38052 8.93519 2.625 8.03817 2.625H6.36135C6.07238 2.625 5.78864 2.5449 5.5394 2.39296L4.45524 1.73204C4.20601 1.5801 3.92226 1.5 3.63329 1.5H2.62419C1.72718 1.5 1 2.25552 1 3.1875V8.8125C1 9.74448 1.72718 10.5 2.62419 10.5H7.35343C8.11412 10.5 8.81904 10.0853 9.21041 9.40762L10.844 6.57881C11.277 5.82897 10.7572 4.875 9.91553 4.875H9.66236ZM9.66236 4.875H5.11435C4.25853 4.875 3.48299 5.39865 3.13541 6.21119L1.5414 9.9375" stroke="#4C49FF" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_32_13068">
                                                    <rect width="12" height="12" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="sr-report-btns">
                                    <button class="sr-report-btn">Open PDF</button>
                                    <button class="sr-report-btn">Open XLSX</button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 6 -->
                        <tr>
                            <td>2024-01-18, 06:27:11</td>
                            <td>Eyewear</td>
                            <td>From 2024-01-23 To 2025-04-12</td>
                            <td class="sr-td-capitalize">standardOrder,incident,replacementOrder,creditNote,internalOrder,deposit</td>
                            <td>optic,distributor,internal,shop,finalClient</td>
                            <td>premium,luxury,trendy</td>
                            <td class="sr-td-center">2,3</td>
                            <td>high,medium</td>
                            <td class="sr-td-center">africa,<br>america</td>
                            <td>web,direct,fair / Antello Astero,Christian Fouqueraue,Daniel,Igor Volkhov,Irene,Jerry Knowles,Jill Harrington,Jon Claude Ducote,Lorena,Matteo Muraro,Mauro,Miguel,Richard,Romain,Web,Xavier</td>
                            <td>Optical,Sun,Hybrid/ Unisex,Female/ Aviator,Cat-eye,Geometric,Oval,Panthos,Rectangle,Round/ small,medium,large/ Basic,Special Edition,Limited Edition,Unique Piece</td>
                            <td>Text Search</td>
                            <td>
                                <div class="sr-row-actions">
                                    <button class="sr-row-action-btn sr-row-action-btn--delete" title="Delete">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.5 4V9C2.5 10.1046 3.39543 11 4.5 11H7.5C8.60457 11 9.5 10.1046 9.5 9V4M7 5.5V8.5M5 5.5L5 8.5M8 2.5L7.29687 1.4453C7.1114 1.1671 6.79917 1 6.46482 1H5.53518C5.20083 1 4.8886 1.1671 4.70313 1.4453L4 2.5M8 2.5H4M8 2.5H10.5M4 2.5H1.5" stroke="#FF4949" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="sr-row-action-btn sr-row-action-btn--folder" title="Archive">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_32_13068)">
                                                <path d="M9.66236 4.875V4.3125C9.66236 3.38052 8.93519 2.625 8.03817 2.625H6.36135C6.07238 2.625 5.78864 2.5449 5.5394 2.39296L4.45524 1.73204C4.20601 1.5801 3.92226 1.5 3.63329 1.5H2.62419C1.72718 1.5 1 2.25552 1 3.1875V8.8125C1 9.74448 1.72718 10.5 2.62419 10.5H7.35343C8.11412 10.5 8.81904 10.0853 9.21041 9.40762L10.844 6.57881C11.277 5.82897 10.7572 4.875 9.91553 4.875H9.66236ZM9.66236 4.875H5.11435C4.25853 4.875 3.48299 5.39865 3.13541 6.21119L1.5414 9.9375" stroke="#4C49FF" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_32_13068">
                                                    <rect width="12" height="12" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="sr-report-btns">
                                    <button class="sr-report-btn">Open PDF</button>
                                    <button class="sr-report-btn">Open XLSX</button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 7 -->
                        <tr>
                            <td>2024-01-18, 06:27:11</td>
                            <td>Eyewear</td>
                            <td>From 2024-01-23 To 2025-04-12</td>
                            <td class="sr-td-capitalize">standardOrder,incident,replacementOrder,creditNote,internalOrder,deposit</td>
                            <td>optic,distributor,internal,shop,finalClient</td>
                            <td>premium,luxury,trendy</td>
                            <td class="sr-td-center">2,3</td>
                            <td>high,medium</td>
                            <td class="sr-td-center">africa,<br>america</td>
                            <td>web,direct,fair / Antello Astero,Christian Fouqueraue,Daniel,Igor Volkhov,Irene,Jerry Knowles,Jill Harrington,Jon Claude Ducote,Lorena,Matteo Muraro,Mauro,Miguel,Richard,Romain,Web,Xavier</td>
                            <td>Optical,Sun,Hybrid/ Unisex,Female/ Aviator,Cat-eye,Geometric,Oval,Panthos,Rectangle,Round/ small,medium,large/ Basic,Special Edition,Limited Edition,Unique Piece</td>
                            <td>Text Search</td>
                            <td>
                                <div class="sr-row-actions">
                                    <button class="sr-row-action-btn sr-row-action-btn--delete" title="Delete">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.5 4V9C2.5 10.1046 3.39543 11 4.5 11H7.5C8.60457 11 9.5 10.1046 9.5 9V4M7 5.5V8.5M5 5.5L5 8.5M8 2.5L7.29687 1.4453C7.1114 1.1671 6.79917 1 6.46482 1H5.53518C5.20083 1 4.8886 1.1671 4.70313 1.4453L4 2.5M8 2.5H4M8 2.5H10.5M4 2.5H1.5" stroke="#FF4949" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <button class="sr-row-action-btn sr-row-action-btn--folder" title="Archive">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_32_13068)">
                                                <path d="M9.66236 4.875V4.3125C9.66236 3.38052 8.93519 2.625 8.03817 2.625H6.36135C6.07238 2.625 5.78864 2.5449 5.5394 2.39296L4.45524 1.73204C4.20601 1.5801 3.92226 1.5 3.63329 1.5H2.62419C1.72718 1.5 1 2.25552 1 3.1875V8.8125C1 9.74448 1.72718 10.5 2.62419 10.5H7.35343C8.11412 10.5 8.81904 10.0853 9.21041 9.40762L10.844 6.57881C11.277 5.82897 10.7572 4.875 9.91553 4.875H9.66236ZM9.66236 4.875H5.11435C4.25853 4.875 3.48299 5.39865 3.13541 6.21119L1.5414 9.9375" stroke="#4C49FF" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_32_13068">
                                                    <rect width="12" height="12" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="sr-report-btns">
                                    <button class="sr-report-btn">Open PDF</button>
                                    <button class="sr-report-btn">Open XLSX</button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </section>

        <!-- ===== Advanced Search & Filter Popup ===== -->
        <div class="sr-popup-overlay" id="srPopupOverlay">
            <div class="sr-popup">
                <!-- Header -->
                <div class="sr-popup-header">
                    <h2 class="sr-popup-title">Advanced Search &amp; Filter</h2>
                    <button class="sr-popup-close" id="srPopupClose">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L13 13M13 1L1 13" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </button>
                </div>

                <div class="sr-popup-body">
                    <!-- Row 1: When | Order Category | Who -->
                    <div class="sr-popup-row sr-popup-row--top">
                        <!-- WHEN -->
                        <div class="sr-popup-section sr-popup-section--when">
                            <div class="sr-popup-label">When</div>
                            <div class="sr-popup-toggle-group">
                                <button class="sr-popup-toggle sr-popup-toggle--active" data-toggle="daterange">Date Range</button>
                                <button class="sr-popup-toggle" data-toggle="specificfair">Specific Fair</button>
                            </div>
                            <!-- Date Range content -->
                            <div class="sr-popup-when-content" id="srWhenDaterange">
                                <div class="sr-popup-date-row">
                                    <div class="sr-popup-date-field">
                                        <label class="sr-popup-date-label">From</label>
                                        <input type="text" class="sr-popup-date-input" placeholder="dd/mm/yyyy">
                                    </div>
                                    <div class="sr-popup-date-field">
                                        <label class="sr-popup-date-label">Until</label>
                                        <input type="text" class="sr-popup-date-input" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>
                            <!-- Specific Fair content -->
                            <div class="sr-popup-when-content" id="srWhenSpecificfair" style="display:none;">
                                <div class="sr-popup-fair-field">
                                    <label class="sr-popup-date-label">Fair</label>
                                    <select class="sr-popup-select">
                                        <option value="" disabled selected>Select an option</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- ORDER CATEGORY -->
                        <div class="sr-popup-section sr-popup-section--ordercat">
                            <div class="sr-popup-label">Order Category</div>
                            <div class="sr-popup-checks-grid sr-popup-checks-grid--ordercat">
                                <label class="sr-popup-check"><input type="checkbox"><span class="sr-popup-checkmark"></span>Standard Order</label>
                                <label class="sr-popup-check"><input type="checkbox"><span class="sr-popup-checkmark"></span>Replacement Order</label>
                                <label class="sr-popup-check"><input type="checkbox"><span class="sr-popup-checkmark"></span>Internal Order</label>
                                <label class="sr-popup-check"><input type="checkbox"><span class="sr-popup-checkmark"></span>Incident</label>
                                <label class="sr-popup-check"><input type="checkbox"><span class="sr-popup-checkmark"></span>Credit Note</label>
                                <label class="sr-popup-check"><input type="checkbox"><span class="sr-popup-checkmark"></span>Deposit</label>
                                <label class="sr-popup-check"><input type="checkbox"><span class="sr-popup-checkmark"></span>Sample Set</label>
                            </div>
                        </div>

                        <!-- WHO -->
                        <div class="sr-popup-section sr-popup-section--who">
                            <div class="sr-popup-label">Who</div>
                            <div class="sr-popup-radio-group">
                                <label class="sr-popup-radio">
                                    <input type="radio" name="sr-who" value="specific">
                                    <span class="sr-popup-radio-dot"></span>
                                    Specific Customer
                                </label>
                                <label class="sr-popup-radio">
                                    <input type="radio" name="sr-who" value="multiple" checked>
                                    <span class="sr-popup-radio-dot"></span>
                                    Multiple Customers
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Type row -->
                    <div class="sr-popup-section sr-popup-section--type">
                        <div class="sr-popup-label">Type</div>
                        <div class="sr-popup-checks-row">
                            <label class="sr-popup-check"><input type="checkbox"><span class="sr-popup-checkmark"></span>Optic</label>
                            <label class="sr-popup-check"><input type="checkbox"><span class="sr-popup-checkmark"></span>Distributor</label>
                            <label class="sr-popup-check"><input type="checkbox"><span class="sr-popup-checkmark"></span>Internal</label>
                            <label class="sr-popup-check"><input type="checkbox"><span class="sr-popup-checkmark"></span>Shop</label>
                            <label class="sr-popup-check"><input type="checkbox"><span class="sr-popup-checkmark"></span>Final Client</label>
                            <label class="sr-popup-check"><input type="checkbox"><span class="sr-popup-checkmark"></span>Museum</label>
                            <label class="sr-popup-check"><input type="checkbox"><span class="sr-popup-checkmark"></span>Agent</label>
                        </div>
                    </div>

                    <!-- Row 2: Customer Category | Rating | Loyalty | Where -->
                    <div class="sr-popup-row sr-popup-row--mid">
                        <!-- CUSTOMER CATEGORY -->
                        <div class="sr-popup-section">
                            <div class="sr-popup-label">Customer Category</div>
                            <div class="sr-popup-checks-col">
                                <label class="sr-popup-check sr-popup-check--sm"><input type="checkbox"><span class="sr-popup-checkmark sr-popup-checkmark--sm"></span>Premium</label>
                                <label class="sr-popup-check sr-popup-check--sm"><input type="checkbox"><span class="sr-popup-checkmark sr-popup-checkmark--sm"></span>Luxury</label>
                                <label class="sr-popup-check sr-popup-check--sm"><input type="checkbox"><span class="sr-popup-checkmark sr-popup-checkmark--sm"></span>Trendy</label>
                                <label class="sr-popup-check sr-popup-check--sm"><input type="checkbox"><span class="sr-popup-checkmark sr-popup-checkmark--sm"></span>Potential</label>
                                <label class="sr-popup-check sr-popup-check--sm"><input type="checkbox"><span class="sr-popup-checkmark sr-popup-checkmark--sm"></span>Emergent</label>
                            </div>
                        </div>

                        <!-- RATING -->
                        <div class="sr-popup-section">
                            <div class="sr-popup-label">Rating</div>
                            <div class="sr-popup-checks-col">
                                <label class="sr-popup-check sr-popup-check--sm"><input type="checkbox"><span class="sr-popup-checkmark sr-popup-checkmark--sm"></span>0</label>
                                <label class="sr-popup-check sr-popup-check--sm"><input type="checkbox"><span class="sr-popup-checkmark sr-popup-checkmark--sm"></span>1</label>
                                <label class="sr-popup-check sr-popup-check--sm"><input type="checkbox"><span class="sr-popup-checkmark sr-popup-checkmark--sm"></span>2</label>
                                <label class="sr-popup-check sr-popup-check--sm"><input type="checkbox"><span class="sr-popup-checkmark sr-popup-checkmark--sm"></span>3</label>
                            </div>
                        </div>

                        <!-- LOYALTY -->
                        <div class="sr-popup-section">
                            <div class="sr-popup-label">Loyalty</div>
                            <div class="sr-popup-checks-col">
                                <label class="sr-popup-check sr-popup-check--sm"><input type="checkbox"><span class="sr-popup-checkmark sr-popup-checkmark--sm"></span>High</label>
                                <label class="sr-popup-check sr-popup-check--sm"><input type="checkbox"><span class="sr-popup-checkmark sr-popup-checkmark--sm"></span>Medium</label>
                                <label class="sr-popup-check sr-popup-check--sm"><input type="checkbox"><span class="sr-popup-checkmark sr-popup-checkmark--sm"></span>Low</label>
                            </div>
                        </div>

                        <!-- WHERE -->
                        <div class="sr-popup-section sr-popup-section--where">
                            <div class="sr-popup-label">Where</div>
                            <div class="sr-popup-checks-col">
                                <label class="sr-popup-check sr-popup-check--sm"><input type="checkbox" checked><span class="sr-popup-checkmark sr-popup-checkmark--sm"></span>Africa</label>
                                <label class="sr-popup-check sr-popup-check--sm"><input type="checkbox"><span class="sr-popup-checkmark sr-popup-checkmark--sm"></span>America</label>
                                <label class="sr-popup-check sr-popup-check--sm"><input type="checkbox"><span class="sr-popup-checkmark sr-popup-checkmark--sm"></span>Asia</label>
                                <label class="sr-popup-check sr-popup-check--sm"><input type="checkbox"><span class="sr-popup-checkmark sr-popup-checkmark--sm"></span>Europe</label>
                                <label class="sr-popup-check sr-popup-check--sm"><input type="checkbox"><span class="sr-popup-checkmark sr-popup-checkmark--sm"></span>Oceania</label>
                            </div>
                        </div>
                    </div>

                    <!-- Row 3: How | What -->
                    <div class="sr-popup-row sr-popup-row--bottom">
                        <!-- HOW -->
                        <div class="sr-popup-section">
                            <div class="sr-popup-label">How</div>
                            <div class="sr-popup-how-grid">
                                <div>
                                    <div class="sr-popup-sublabel">Source</div>
                                    <div class="sr-popup-checks-row">
                                        <label class="sr-popup-check"><input type="checkbox"><span class="sr-popup-checkmark"></span>Web</label>
                                        <label class="sr-popup-check"><input type="checkbox"><span class="sr-popup-checkmark"></span>Direct</label>
                                        <label class="sr-popup-check"><input type="checkbox"><span class="sr-popup-checkmark"></span>Fair</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="sr-popup-sublabel">Seller List</div>
                                    <select class="sr-popup-select">
                                        <option value="" disabled selected>Select Seller</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- WHAT -->
                        <div class="sr-popup-section">
                            <div class="sr-popup-label">What</div>
                            <div class="sr-popup-what-grid">
                                <div>
                                    <div class="sr-popup-sublabel">Report Type</div>
                                    <select class="sr-popup-select">
                                        <option value="" disabled selected>Select Report Type</option>
                                    </select>
                                </div>
                                <div>
                                    <div class="sr-popup-sublabel">Eyewear advanced filters</div>
                                    <select class="sr-popup-select">
                                        <option value="" disabled selected>Select Report Type</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Search Description -->
                    <div class="sr-popup-section">
                        <div class="sr-popup-label">Search Description</div>
                        <textarea class="sr-popup-textarea" placeholder="Select Search Description"></textarea>
                    </div>
                </div>

                <!-- Footer -->
                <div class="sr-popup-footer">
                    <button class="sr-popup-footer-btn sr-popup-footer-btn--outline" id="srPopupReset">Reset Filters</button>
                    <button class="sr-popup-footer-btn sr-popup-footer-btn--outline" id="srPopupSave">Save Search Criteria Only</button>
                    <button class="sr-popup-footer-btn sr-popup-footer-btn--primary" id="srPopupGenerate">Generate Report</button>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UzzYDKKEvKRhCbs5mWtB4rPIx6SgrA"
        crossorigin="anonymous"></script>
    <script src="./script.js"></script>
    <script src="./sales-report.js"></script>

</body>

</html>
