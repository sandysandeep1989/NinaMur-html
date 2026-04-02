<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incidents & Warranties</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./style.css">


</head>

<body>

   
 
    <!-----------------This is Main section-------------------------->

<main id="main-content">
         
 <?php include 'header.php'; ?>
        <section class="container">
            <a href="#" class="top-link"><span><img src="./images/back-arrow.svg" alt="arrow"></span> Back to Previous
                Page</a>
            <h2>Supplies Consumption Forecast</h2>
            <div class="sub-title">
                <p >Timeline of Items Consumptions, Requests on Progress and Future Planning</p> 
                <span><img
                            src="./images/add.svg" alt="add" class="add">
                            <img src="./images/delete.svg"
                            alt="delete"></span>
            </div>

            <div class="wrapper">

                <!-- YEAR ROW ALIGN EXACTLY WITH TABLE WIDTH -->
                <table class="year-table">
                    <tr>
                        <td class="year-arrow"><img src="./images/left-arrow.svg" alt="left-arrow"></td>
                        <td style="width:37%">2025</td>
                        <td>2026</td>
                        <td class="year-arrow"><img src="./images/right-arrow.svg" alt="right-arrow"></td>
                    </tr>
                </table>

                <!-- MONTH HEADER EXACT ALIGNMENT WITH COLUMNS -->
                <table class="month-table">
                    <tr>
                        <td class="header-id">ID</td>
                        <td class="header-item">ITEM AND PROVIDER</td>


                        <td>
                            <div class="no active">08</div>
                        </td>
                        <td>
                            <div class="no">09</div>
                        </td>
                        <td>
                            <div class="no">10</div>
                        </td>
                        <td>
                            <div class="no">11</div>
                        </td>
                        <td>
                            <div class="no">12</div>
                        </td>
                        <td>
                            <div class="no">01</div>
                        </td>
                        <td>
                            <div class="no">02</div>
                        </td>
                        <td>
                            <div class="no">03</div>
                        </td>
                        <td>
                            <div class="no">04</div>
                        </td>
                        <td>
                            <div class="no">05</div>
                        </td>
                        <td>
                            <div class="no">06</div>
                        </td>
                        <td>
                            <div class="no">07</div>
                        </td>
                    </tr>
                </table>



                <!-- MAIN DATA TABLE EXACT MATCH -->
                <table class="main-table">

                    <tr class="item-title">
                        <td colspan="1" style="text-align:left; padding-left:35px "> <a href="#">EL1234</a> </td>
                        <td colspan="13" style="text-align: left">TEMPLE METAL GOLD 9MM 145MM – <a href="#">STRATO</a>
                        </td>
                        <td style="text-align: right; padding-right:10px"> <img src="./images/delete-icon.svg"
                                alt="delete"></td>
                    </tr>

                    <!-- ROW 1 ORANGE -->
                    <tr>
                        <th class="left-label row-orange" colspan="3">REQUEST PLANNING / DELIVERY <br>SIMULATION</th>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>
                            <div class="value-box row-orange"><img src="./images/box.svg" alt="box"> 1000 unts</div>
                        </td>
                        <td>+</td>
                        <td>+</td>
                    </tr>

                    <!-- ROW 2 GREEN -->
                    <tr>
                        <th class="left-label row-green" colspan="3">REQUESTS ON PROGRESS</th>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="value-box row-green">1000 unts</div>
                        </td>
                        <td></td>

                        <td></td>
                        <td></td>
                        <td>
                            <div class="value-box row-green">1000 unts</div>
                        </td>
                        <td></td>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <!-- ROW 3 RED -->
                    <tr>
                        <th class="left-label row-red" colspan="3" style="font-style:italic">ESTIMATED CONSUMPTION |<br>
                            GROWTH <a href="#">20%</a>*</th>
                        <td>
                            <div class="value-box row-red">-400 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-100 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-275 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-392 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-33 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-100 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-100 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-200 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-400 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-500 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-100 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-200 unts</div>
                        </td>
                    </tr>

                    <!-- ROW 4 BLUE -->
                    <tr>
                        <th class="left-label row-blue" colspan="3">ESTIMATED STOCK</th>
                        <td>
                            <div class="value-box row-blue">150 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-blue" style="color:#FD2828;font-weight:600;">50 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-blue">775 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-blue">333 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-blue">300 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-blue">200 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-blue">900 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-blue">700 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-blue">200 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-peach">1100 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-peach">800 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-peach">200 unts</div>
                        </td>
                    </tr>

                    <!-- ROW 5 YELLOW -->
                    <tr>
                        <th class="left-label row-yellow" colspan="3">PAYMENTS</th>
                        <td></td>

                        <td></td>
                        <td>
                            <div class="value-box row-green size">10/10/25<br><span style="font-weight:700">P2 - 50%
                                    (5530€)</span></div>
                        </td>
                        <td></td>
                        <td></td>


                        <td></td>
                        <td>
                            <div class="value-box row-pink size">10/10/25<br><span style="font-weight:700">P2 - 50%
                                    (5530€)</span></div>
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="value-box row-peach size">10/10/25<br><span style="font-weight:700">P2 - 50%
                                    (5530€)</span></div>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>

                </table>

                <div class="bottom-text">* compared to last year's consumption</div>


                <table class="main-table">

                    <tr class="item-title">
                        <td colspan="1" style="text-align:left; padding-left:35px"> <a href="#">EL1234</a> </td>
                        <td colspan="13" style="text-align: left">TEMPLE METAL GOLD 9MM 145MM – <a href="#">STRATO</a>
                        </td>
                        <td style="text-align: right; padding-right:10px"> <img src="./images/delete-icon.svg"
                                alt="delete"></td>
                    </tr>

                    <!-- ROW 1 ORANGE -->
                    <tr>
                        <th class="left-label row-orange" colspan="3">REQUEST PLANNING / DELIVERY <br>SIMULATION</th>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>+</td>
                        <td>
                            <div class="value-box row-orange"><img src="./images/box.svg" alt="box"> 1000 unts</div>
                        </td>
                        <td>+</td>
                        <td>+</td>
                    </tr>

                    <!-- ROW 2 GREEN -->
                    <tr>
                        <th class="left-label row-green" colspan="3">REQUESTS ON PROGRESS</th>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="value-box row-green">1000 unts</div>
                        </td>
                        <td></td>

                        <td></td>
                        <td></td>
                        <td>
                            <div class="value-box row-green">1000 unts</div>
                        </td>
                        <td></td>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <!-- ROW 3 RED -->
                    <tr>
                        <th class="left-label row-red" colspan="3" style="font-style:italic">ESTIMATED CONSUMPTION |<br>
                            GROWTH <a href="#">20%</a>*</th>
                        <td>
                            <div class="value-box row-red">-400 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-100 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-275 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-392 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-33 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-100 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-100 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-200 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-400 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-500 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-100 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-red">-200 unts</div>
                        </td>
                    </tr>

                    <!-- ROW 4 BLUE -->
                    <tr>
                        <th class="left-label row-blue" colspan="3">ESTIMATED STOCK</th>
                        <td>
                            <div class="value-box row-blue">150 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-blue" style="color:#FD2828;font-weight:600;">50 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-blue">775 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-blue">333 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-blue">300 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-blue">200 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-blue">900 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-blue">700 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-blue">200 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-peach">1100 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-peach">800 unts</div>
                        </td>
                        <td>
                            <div class="value-box row-peach">200 unts</div>
                        </td>
                    </tr>

                    <!-- ROW 5 YELLOW -->
                    <tr>
                        <th class="left-label row-yellow" colspan="3">PAYMENTS</th>
                        <td></td>

                        <td></td>
                        <td>
                            <div class="value-box row-green size">10/10/25<br><span style="font-weight:700">P2 - 50%
                                    (5530€)</span></div>
                        </td>
                        <td></td>
                        <td></td>


                        <td></td>
                        <td>
                            <div class="value-box row-pink size">10/10/25<br><span style="font-weight:700">P2 - 50%
                                    (5530€)</span></div>
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="value-box row-peach size">10/10/25<br><span style="font-weight:700">P2 - 50%
                                    (5530€)</span></div>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>

                </table>

                <div class="bottom-text">* compared to last year's consumption</div>
            </div>

            <!-- Add Item Dialog -->
<div id="addItemDialog" class="dialog-container">
    <div class="dialog-panel">
        <h3 class="dialog-header">Add New Supply Item  <img src="images/crosss.svg" alt="delete"></h3>
        <div class="search-wrapper">
            <label for="searchField">Select Items</label>
            <input type="text" id="searchField" placeholder="Type to search...">
        
        <div class="items-container">
            <div class="item-option">Item 1</div>
            <div class="item-option active">Item 2</div>
            <div class="item-option">Item 3</div>
            <div class="item-option">Item 4</div>
        </div>

        </div>
        <div class="dialog-footer">
            <button id="cancelBtn" class="action-btn btn-secondary">Cancel</button>
            <button id="addBtn" class="action-btn btn-primary">Add Item</button>
        </div>
    </div>
</div>
        </section>
    </main>


    <!---------------------Footer----------------------------------->
    <?php include 'footer.php'; ?>

    <script src="./script.js"></script>
    <script src="./indexx.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html