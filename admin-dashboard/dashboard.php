<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php
    include ("assets/php/head.php");
    ?>
    <title>Dashboard</title>
</head>

<!--main-->
<body class="">
    <div class="wrapper ">
<!--        sidebar-->
        <?php
            include ("assets/php/sidebar.php") ;
        ?>
<!--main panel-->
        <div class="main-panel">
<!--            navbar-->
            <?php
            include ("assets/php/navbar.php") ;
            ?>

            <!-- content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">فهرست کاربران </h4>
                                    <p class="card-category"> گزارش تمامی کاربران</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <!-- fiest tabel -->
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    ID
                                                </th>
                                                <th>
                                                    نام
                                                </th>
                                                <th>
                                                    نام خانوادگی
                                                </th>
                                                <th>
                                                    گزارش
                                                </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        علی
                                                    </td>
                                                    <td>
                                                        داسمه
                                                    </td>
                                                    <td>
                                                        <a href="assessment.html" class="text-light"><button class="btn btn-info">ارزیابی</button></a>
                                                        <a href="train.html" class="text-light"><button class="btn btn-warning">تمرین</button></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            include "assets/php/script.php";
            ?>
            <script>
                function myFunction() {
                    var element = document.getElementById("side1");
                    element.classList.add("active");
                }
                myFunction()
            </script>

</body>

</html>