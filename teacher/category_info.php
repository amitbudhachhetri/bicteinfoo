<?php

include "header.php";

?>



<!-- Hide this upload div for the users who are not teachers i.e. Students in our case -->
<div class="add-btn">
            <a href="upload_category.php" class="add-teacher-btn">Add Category <i class="fa fa-plus"
                    aria-hidden="true"></i>
            </a>
        </div>

<!-- Hide Part end -->

        <div class="table-my">


            <table>
                <thead>
                    <tr>
                        <th>Category Name</th>

                        <!-- Show this part for teacher only> -->
                        <th>Edit</th>
                        <th>Delete</th>
                        <!-- End  -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="presentaions.php"> Presentation </a></td>
                        
                        <!-- Hide this for students i.e. non teacher users -->
                        <td><a href="edit_category.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a></td>
                        <td><a href="#"><i class="fa fa-trash" aria-hidden="true"></i>
                        </a></td>

                        <!-- Hide end -->
                    </tr>

                    <tr>
                        <td><a href="notes.php">Notes</a></td>

                       <!-- Hide this for students i.e. non teacher users -->

                        <td><a href="edit_category.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a></td>
                        <td><a href="#"><i class="fa fa-trash" aria-hidden="true"></i>
                        </a></td>
                        <!-- Hide end -->
                    </tr>


                </tbody>
            </table>

        </div>
    </section>


</body>

</html>