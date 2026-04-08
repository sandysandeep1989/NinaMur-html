<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Overview</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./finance-overview.css">
</head>

<body>

    <!-- Main Content -->
    <main id="main-content">

        <?php include 'header.php'; ?>

        <section class="fo-container">

            <!-- Title -->
            <h1 class="fo-title">Finance Overview</h1>

            <!-- Filter Row -->
            <div class="fo-filter-row">
                <div class="fo-filter-left">
                    <div class="fo-filter-group">
                        <label class="fo-filter-label">Filter By Status</label>
                        <div class="fo-filter-select-wrap">
                            <select class="fo-filter-select">
                                <option>Show All</option>
                            </select>
                            <img class="fo-filter-chevron" src="images/icon-chevron.svg" width="12" height="12" alt="chevron">
                        </div>
                    </div>
                    <button class="fo-clear-filter">Clear Filter</button>
                </div>
                <div class="fo-action-buttons">
                    <button class="fo-action-btn" title="Add">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.6 15.2C7.92727 15.2 8.18182 14.9455 8.18182 14.6182V8.18182H14.6909C15.0182 8.18182 15.2727 7.92727 15.2727 7.6C15.2727 7.27273 15.0182 7.01818 14.6909 7.01818H8.21818V0.581818C8.21818 0.290909 7.96364 0 7.63636 0C7.30909 0 7.05455 0.254546 7.05455 0.581818V7.01818H0.581818C0.254546 7.01818 0 7.27273 0 7.6C0 7.92727 0.254546 8.18182 0.581818 8.18182H7.01818V14.6182C7.05455 14.9455 7.30909 15.2 7.6 15.2Z" fill="white"/>
                        </svg>
                    </button>
                    <button class="fo-action-btn" title="Edit">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.3843 0.354935C10.3967 0.354942 10.4102 0.355037 10.4243 0.356888L10.4233 0.357864C10.4674 0.362932 10.8152 0.408095 11.0571 0.649857L13.5132 3.10689C13.6961 3.29004 13.7675 3.53314 13.7935 3.65962L13.8071 3.74068V3.74165C13.8084 3.75414 13.8091 3.7672 13.8091 3.77974V14.4672C13.809 15.177 13.2317 15.7541 12.522 15.7543H3.49658C2.78663 15.7543 2.20958 15.1772 2.20947 14.4672V1.64204C2.20947 0.932028 2.78657 0.354935 3.49658 0.354935H10.3843ZM3.49658 1.02974C3.15899 1.02974 2.88428 1.30445 2.88428 1.64204V14.4672C2.88438 14.8047 3.15905 15.0795 3.49658 15.0795H12.522C12.8593 15.0793 13.1342 14.8046 13.1343 14.4672V4.11665H11.3345C10.6245 4.11665 10.0464 3.53956 10.0464 2.82954V1.02974H3.49658ZM10.7212 2.82954C10.7212 3.16714 10.9969 3.44185 11.3345 3.44185H12.894L10.7212 1.269V2.82954Z" fill="white" stroke="white" stroke-width="0.2"/>
                        </svg>
                    </button>
                    <button class="fo-action-btn" title="Export">
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.668811 0.0818182L6.81427 6.22727V3.64546C6.81427 3.42727 6.99608 3.24545 7.21427 3.24545C7.43245 3.24545 7.61427 3.42727 7.61427 3.64546V7.20909C7.61427 7.42727 7.43245 7.60909 7.21427 7.60909H3.65063C3.43245 7.60909 3.25063 7.42727 3.25063 7.20909C3.25063 6.99091 3.43245 6.80909 3.65063 6.80909H6.23245L0.0869966 0.663637C0.0142693 0.590909 -0.0220988 0.481818 0.0142648 0.372727C0.0142648 0.263636 0.0869954 0.154545 0.159723 0.0818182C0.305177 -0.0272727 0.523357 -0.0272727 0.668811 0.0818182Z" fill="white"/>
                            <path d="M15.0323 14.5911C15.0323 14.8093 14.8504 14.9911 14.6323 14.9911H1.50498C1.2868 14.9911 1.10498 14.8093 1.10498 14.5911V6.11839C1.10498 5.90021 1.2868 5.71839 1.50498 5.71839C1.72316 5.71839 1.90498 5.90021 1.90498 6.11839V14.1911H14.2323V1.86384H6.15953C5.94135 1.86384 5.75953 1.68203 5.75953 1.46384C5.75953 1.24566 5.94135 1.06384 6.15953 1.06384H14.5959C14.8141 1.06384 14.9959 1.24566 14.9959 1.46384V14.5911H15.0323Z" fill="white"/>
                        </svg>
                    </button>
                    <button class="fo-action-btn" title="Import">
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.07262 7.52736L14.2181 1.38191V3.96373C14.2181 4.18191 14.3999 4.36373 14.6181 4.36373C14.8363 4.36373 15.0181 4.18191 15.0181 3.96373V0.400092C15.0181 0.18191 14.8363 9.15527e-05 14.6181 9.15527e-05H11.0544C10.8363 9.15527e-05 10.6544 0.18191 10.6544 0.400092C10.6544 0.618274 10.8363 0.800092 11.0544 0.800092H13.6362L7.4908 6.94555C7.41807 7.01827 7.38171 7.12736 7.41808 7.23646C7.41808 7.34555 7.4908 7.45464 7.56353 7.52736C7.70898 7.63646 7.92716 7.63646 8.07262 7.52736Z" fill="white"/>
                            <path d="M0 14.5821C0 14.8002 0.18182 14.9821 0.400002 14.9821H13.5273C13.7455 14.9821 13.9273 14.8002 13.9273 14.5821V6.10933C13.9273 5.89114 13.7455 5.70932 13.5273 5.70932C13.3091 5.70932 13.1273 5.89114 13.1273 6.10933V14.1821H0.800004V1.85478H8.87274C9.09092 1.85478 9.27273 1.67296 9.27273 1.45478C9.27273 1.2366 9.09092 1.05478 8.87274 1.05478H0.436368C0.218186 1.05478 0.0363659 1.2366 0.0363659 1.45478V14.5821H0Z" fill="white"/>
                        </svg>
                    </button>
                    <button class="fo-action-btn" title="Download">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.1091 2.36364C12 1.92727 11.7818 1.52727 11.4182 1.23636C11.0545 0.945454 10.6182 0.8 10.1818 0.8H9.41818C8.98182 0.8 8.54545 0.945454 8.18182 1.23636C7.81818 1.52727 7.6 1.92727 7.49091 2.36364H12.1091ZM0.400002 2.36364H6.72727C6.8 1.78182 7.05455 1.23636 7.49091 0.8C7.96364 0.290909 8.69091 0 9.41818 0H10.2182C10.9455 0 11.6364 0.290909 12.1455 0.8C12.5818 1.23636 12.8364 1.78182 12.9091 2.36364H18.8364C19.0545 2.36364 19.2364 2.54545 19.2364 2.76364C19.2364 2.98182 19.0545 3.16364 18.8364 3.16364H12.5455H7.05454H0.400002C0.18182 3.16364 0 2.98182 0 2.76364C0 2.54545 0.18182 2.36364 0.400002 2.36364Z" fill="white"/>
                            <path d="M2.28987 3.92741C2.50805 3.89105 2.68988 4.0365 2.72624 4.25469L4.32624 16.8001C4.39896 17.4547 4.72624 18.0729 5.23533 18.5092C5.74442 18.9456 6.3626 19.2001 7.05351 19.2001H12.5444C13.199 19.2001 13.8535 18.9456 14.3626 18.5092C14.8717 18.0729 15.199 17.4547 15.2717 16.8001L16.8717 4.25469C16.9081 4.0365 17.0899 3.89105 17.3081 3.92741C17.5262 3.96378 17.6717 4.1456 17.6353 4.36378L16.0353 16.9092C15.9262 17.7456 15.5262 18.5456 14.8717 19.0911C14.2171 19.6729 13.4171 19.9638 12.5444 19.9638H7.05351C6.18078 19.9638 5.38078 19.6365 4.72624 19.0911C4.07169 18.5092 3.67169 17.7456 3.5626 16.9092L1.9626 4.36378C1.92624 4.1456 2.07169 3.96378 2.28987 3.92741Z" fill="white"/>
                            <path d="M9.41833 15.6V7.45457L7.70923 9.16366C7.56378 9.30911 7.30923 9.30911 7.16378 9.16366C7.01832 9.0182 7.01832 8.76366 7.16378 8.6182L9.52741 6.25457C9.67287 6.10911 9.92741 6.10911 10.0729 6.25457L12.4365 8.6182C12.582 8.76366 12.582 9.0182 12.4365 9.16366C12.2911 9.30911 12.0365 9.30911 11.8911 9.16366L10.182 7.45457V15.6C10.182 15.7091 10.1092 15.7818 10.0365 15.8546C9.96379 15.9273 9.85469 15.9637 9.7456 15.9637C9.60014 15.9637 9.45469 15.8182 9.41833 15.6Z" fill="white"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Summary Cards Section -->
            <div class="fo-cards-section">

                <!-- Category Tabs -->
                <div class="fo-category-tabs">
                    <div class="fo-tab-spacer"></div>
                    <div class="fo-tab">TREASURY <span class="fo-tab-note">(CURRENT)</span></div>
                    <div class="fo-tab fo-tab--wide">EXPENSES <span class="fo-tab-note">(PENDING)</span></div>
                    <div class="fo-tab fo-tab--wide">INCOMES <span class="fo-tab-note">(ON PROGRESS)</span></div>
                    <div class="fo-tab fo-tab--flex">WAREHOUSE <span class="fo-tab-note">(AT THE MOMENT)</span></div>
                </div>

                <!-- Cards Row -->
                <div class="fo-cards-row">

                    <!-- Card 1: Rep No/Date -->
                    <div class="fo-card">
                        <h3 class="fo-card-title">Rep No /Date</h3>
                        <div class="fo-card-body">
                            <div class="fo-card-inputs">
                                <div class="fo-input-wrap">
                                    <input type="text" class="fo-input" value="50">
                                </div>
                                <div class="fo-input-wrap">
                                    <input type="text" class="fo-input" value="2026-03-27 05:00:15">
                                </div>
                            </div>
                            <button class="fo-calculate-btn">Calculate</button>
                        </div>
                    </div>

                    <!-- Card 2: Treasury Overview -->
                    <div class="fo-card">
                        <h3 class="fo-card-title">Treasury Overview</h3>
                        <div class="fo-card-body fo-card-body--stretch">
                            <div class="fo-card-lines">
                                <div class="fo-card-line">
                                    <span>Subtotal</span>
                                    <span>0 €</span>
                                </div>
                                <div class="fo-card-line">
                                    <span>Cash</span>
                                    <span>100 €</span>
                                </div>
                            </div>
                            <div class="fo-card-total">
                                <span class="fo-card-total-label">Total</span>
                                <span>100 €</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Variable Expenses -->
                    <div class="fo-card">
                        <h3 class="fo-card-title">Variable Expenses</h3>
                        <div class="fo-card-body fo-card-body--stretch">
                            <div class="fo-card-lines">
                                <div class="fo-card-line">
                                    <span class="fo-highlight fo-highlight--orange"><a href="#">Requests (To be Paid)</a></span>
                                    <span><a href="#">0 €</a></span>
                                </div>
                                <div class="fo-card-line">
                                    <span class="fo-highlight fo-highlight--peach"><a href="#">Others (To be Paid)</a></span>
                                    <span><a href="#">100 €</a></span>
                                </div>
                                <div class="fo-card-line">
                                    <span>Credit Notes*</span>
                                    <span>100 €</span>
                                </div>
                                <div class="fo-card-line">
                                    <span>Agent Commission</span>
                                    <span><a href="#">100 €</a></span>
                                </div>
                            </div>
                            <div class="fo-card-total">
                                <span class="fo-card-total-label">Subtotal</span>
                                <span>100 €</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Fixed Expenses -->
                    <div class="fo-card">
                        <h3 class="fo-card-title">Fixed Expenses</h3>
                        <div class="fo-card-body fo-card-body--stretch">
                            <div class="fo-card-lines">
                                <div class="fo-card-line">
                                    <span class="fo-highlight fo-highlight--cyan"><a href="#">Salaries (12 mths)</a></span>
                                    <span>0 €</span>
                                </div>
                                <div class="fo-card-line">
                                    <span class="fo-highlight fo-highlight--lightcyan"><a href="#">Others (12 mths)</a></span>
                                    <span>100 €</span>
                                </div>
                            </div>
                            <div class="fo-card-total">
                                <span class="fo-card-total-label">Subtotal (12 mths)</span>
                                <span>100 €</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5: Confirmed Incomes -->
                    <div class="fo-card">
                        <h3 class="fo-card-title">Confirmed Incomes</h3>
                        <div class="fo-card-body fo-card-body--stretch">
                            <div class="fo-card-lines">
                                <div class="fo-card-line">
                                    <span class="fo-highlight fo-highlight--purple"><a href="#">SEPA</a></span>
                                    <span><a href="#">0 €</a></span>
                                </div>
                                <div class="fo-card-line">
                                    <span class="fo-highlight fo-highlight--lavender"><a href="#">2nd Paym. Missing</a></span>
                                    <span><a href="#">100 €</a></span>
                                </div>
                            </div>
                            <div class="fo-card-total">
                                <span class="fo-card-total-label">Subtotal</span>
                                <span>100 €</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6: Predicted Incomes -->
                    <div class="fo-card">
                        <h3 class="fo-card-title">Predicted Incomes</h3>
                        <div class="fo-card-body fo-card-body--stretch">
                            <div class="fo-card-lines">
                                <div class="fo-card-line">
                                    <span class="fo-highlight fo-highlight--yellow"><a href="#">Produce in Advance</a></span>
                                    <span><a href="#">0 €</a></span>
                                </div>
                                <div class="fo-card-line">
                                    <span>Deposit Wholesale</span>
                                    <span>-</span>
                                </div>
                                <div class="fo-card-line">
                                    <span>Deposit production value</span>
                                    <span>-</span>
                                </div>
                                <div class="fo-card-line">
                                    <span>Stand By</span>
                                    <span>-</span>
                                </div>
                            </div>
                            <div class="fo-card-total">
                                <span class="fo-card-total-label">Subtotal</span>
                                <span>100 €</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 7: EL, SC, CM, Eyewear -->
                    <div class="fo-card">
                        <h3 class="fo-card-title">EL, SC, CM, Eyewear</h3>
                        <div class="fo-card-body fo-card-body--stretch fo-card-body--end">
                            <button class="fo-calculate-btn">Calculate</button>
                        </div>
                    </div>

                </div>

                <!-- 12 Months Timeline -->
                <div class="fo-timeline-header">
                    <h2 class="fo-timeline-title">12 Months Timeline</h2>
                </div>

                <!-- Timeline Table -->
                <div class="fo-timeline-table-wrap">
                    <table class="fo-timeline-table">
                        <colgroup>
                            <col class="fo-col-label">
                            <col><col><col><col><col><col><col><col><col><col><col><col>
                        </colgroup>
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>1 MONTH</th>
                                <th>2 MONTHS</th>
                                <th>3 MONTHS</th>
                                <th>4 MONTHS</th>
                                <th>5 MONTHS</th>
                                <th>6 MONTHS</th>
                                <th>7 MONTHS</th>
                                <th>8 MONTHS</th>
                                <th>9 MONTHS</th>
                                <th>10 MONTHS</th>
                                <th>11 MONTHS</th>
                                <th>12 MONTHS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- EXPENSES header row -->
                            <tr class="fo-row-section">
                                <td class="fo-cell-label"><strong>EXPENSES</strong></td>
                                <td><strong>2450€</strong></td>
                                <td><strong>3500€</strong></td>
                                <td><strong>1950€</strong></td>
                                <td><strong>3100€</strong></td>
                                <td><strong>2890€</strong></td>
                                <td><strong>2670€</strong></td>
                                <td><strong>3200€</strong></td>
                                <td><strong>2340€</strong></td>
                                <td><strong>1820€</strong></td>
                                <td><strong>2980€</strong></td>
                                <td><strong>1780€</strong></td>
                                <td><strong>2100€</strong></td>
                            </tr>
                            <tr class="fo-row-orange">
                                <td class="fo-cell-label fo-cell-indent"><em>REQUESTS</em></td>
                                <td>2570€</td>
                                <td>3610€</td>
                                <td>2070€</td>
                                <td>3210€</td>
                                <td>2900€</td>
                                <td>2780€</td>
                                <td>3310€</td>
                                <td>2450€</td>
                                <td>1930€</td>
                                <td>3090€</td>
                                <td>1890€</td>
                                <td>2210€</td>
                            </tr>
                            <tr class="fo-row-lightorange">
                                <td class="fo-cell-label fo-cell-indent"><em>OTHER VARIABLES</em></td>
                                <td>2450€</td>
                                <td>3610€</td>
                                <td>2070€</td>
                                <td>3210€</td>
                                <td>2900€</td>
                                <td>2670€</td>
                                <td>3310€</td>
                                <td>2450€</td>
                                <td>1930€</td>
                                <td>3050€</td>
                                <td>1890€</td>
                                <td>2210€</td>
                            </tr>
                            <tr class="fo-row-cyan">
                                <td class="fo-cell-label fo-cell-indent"><em>SALARIES</em></td>
                                <td>2450€</td>
                                <td>3610€</td>
                                <td>2070€</td>
                                <td>3210€</td>
                                <td>2900€</td>
                                <td>2670€</td>
                                <td>3200€</td>
                                <td>2450€</td>
                                <td>1930€</td>
                                <td>2980€</td>
                                <td>1780€</td>
                                <td>2100€</td>
                            </tr>
                            <tr class="fo-row-lightcyan">
                                <td class="fo-cell-label fo-cell-indent"><em>OTHERS(FIXED)</em></td>
                                <td>3450€</td>
                                <td>3610€</td>
                                <td>2070€</td>
                                <td>3210€</td>
                                <td>2900€</td>
                                <td>2780€</td>
                                <td>3200€</td>
                                <td>2450€</td>
                                <td>1930€</td>
                                <td>2980€</td>
                                <td>1780€</td>
                                <td>2100€</td>
                            </tr>
                            <tr class="fo-row-plain">
                                <td class="fo-cell-label fo-cell-indent">AGENTS COMMISSIONS</td>
                                <td>2450€</td>
                                <td>3500€</td>
                                <td>1950€</td>
                                <td>3100€</td>
                                <td>2900€</td>
                                <td>2780€</td>
                                <td>3310€</td>
                                <td>2450€</td>
                                <td>1930€</td>
                                <td>3090€</td>
                                <td>1780€</td>
                                <td>2100€</td>
                            </tr>
                            <!-- INCOMES header row -->
                            <tr class="fo-row-section">
                                <td class="fo-cell-label"><strong>INCOMES</strong></td>
                                <td><strong>2450€</strong></td>
                                <td><strong>3500€</strong></td>
                                <td><strong>1950€</strong></td>
                                <td><strong>3100€</strong></td>
                                <td><strong>2900€</strong></td>
                                <td><strong>2780€</strong></td>
                                <td><strong>3310€</strong></td>
                                <td><strong>2450€</strong></td>
                                <td><strong>1930€</strong></td>
                                <td><strong>3090€</strong></td>
                                <td><strong>1780€</strong></td>
                                <td><strong>2100€</strong></td>
                            </tr>
                            <tr class="fo-row-purple">
                                <td class="fo-cell-label fo-cell-indent"><em>SEPA</em></td>
                                <td>2450€</td>
                                <td>3500€</td>
                                <td>1950€</td>
                                <td>3100€</td>
                                <td>2890€</td>
                                <td>2670€</td>
                                <td>3200€</td>
                                <td>2340€</td>
                                <td>1820€</td>
                                <td>2980€</td>
                                <td>1780€</td>
                                <td>2100€</td>
                            </tr>
                            <tr class="fo-row-lavender">
                                <td class="fo-cell-label fo-cell-indent"><em>2ND PAYMENT MISSING</em></td>
                                <td>2450€</td>
                                <td>3610€</td>
                                <td>2070€</td>
                                <td>3210€</td>
                                <td>2900€</td>
                                <td>2780€</td>
                                <td>3310€</td>
                                <td>2450€</td>
                                <td>1930€</td>
                                <td>3090€</td>
                                <td>1780€</td>
                                <td>2100€</td>
                            </tr>
                            <tr class="fo-row-yellow">
                                <td class="fo-cell-label fo-cell-indent"><em>PRODUCED IN ADVANCE</em></td>
                                <td>2450€</td>
                                <td>3500€</td>
                                <td>1950€</td>
                                <td>3100€</td>
                                <td>2900€</td>
                                <td>2780€</td>
                                <td>3310€</td>
                                <td>2450€</td>
                                <td>1930€</td>
                                <td>3090€</td>
                                <td>1780€</td>
                                <td>2100€</td>
                            </tr>
                            <!-- BALANCE row -->
                            <tr class="fo-row-section">
                                <td class="fo-cell-label"><strong>BALANCE</strong></td>
                                <td><strong>2450€</strong></td>
                                <td><strong>3500€</strong></td>
                                <td><strong>1950€</strong></td>
                                <td><strong>3100€</strong></td>
                                <td><strong>2890€</strong></td>
                                <td><strong>2670€</strong></td>
                                <td><strong>3200€</strong></td>
                                <td><strong>2340€</strong></td>
                                <td><strong>1820€</strong></td>
                                <td><strong>2980€</strong></td>
                                <td><strong>1780€</strong></td>
                                <td><strong>2100€</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </section>

        <?php include 'footer.php'; ?>

    </main>

    <script src="./script.js"></script>
    <script src="./indexx.js"></script>
    <script src="./finance-overview.js"></script>

</body>

</html>
