<?php 
    include('../../../path.php');
    include_once(ROOT_PATH . '/app/database/dbconPro.php');
    include_once(ROOT_PATH . '/app/helpers/function.php');

    // FETCH CATEGORY
    if (isset($_POST['key']) && $_POST['key'] == 'getExistingData') {
        $i = 0;
        $sql = "";
        $sql .= "SELECT * FROM `category`";
        $start = trimSlash($_POST['start']);
        $limit = trimSlash($_POST['limit']);
        
        $sql .= ' LIMIT ' .$start. ', ' .$limit;
        $stmt = mysqli_query($conn, $sql);
        
        if($stmt->num_rows > 0 ) {
            $response = '';

            while ($row = mysqli_fetch_array($stmt)){  
                    $category_id = $row['category_id'];
                    $category_type = $row['category_type'];
                    $response .= '
                    <tr>
                        <td>'.++$i.'</td>
                        <td>'.$category_type.'</td>
                        <td>
                            <button type="button" id="getEdit" class="btn btn-warning font-title fw-bold text-uppercase"
                                data-bs-toggle="modal" data-bs-target="#editCategoryModal" data-id="'.$category_id.'">
                                <i class="fa-solid fa-edit"></i>
                                <span class="ms-1">Edit</span>
                            </button>
                        </td>
                    </tr>
                ';
            } exit($response);
        } else {
            exit('reachedMax');
        }
    }

    // ADD CATEGORY 
    if(isset($_POST['action']) && $_POST['action'] == 'AddCategory') {
        // dd($_POST);
        $category_type = trimSlash($_POST['category_type']);
        
        // get same patient
        $sql = "INSERT INTO `category` (category_type) VALUES ('$category_type')";

        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => '<li>New College Added!</li>']);
        }  
        
    }
    
    // EDIT CATEGORY
    if(isset($_REQUEST['editCategoryBtn'])){
        $id = $_REQUEST['editCategoryBtn'];
        
        $sql = "SELECT * FROM category WHERE category_id ='" .$id. "'";
        $stmt = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_array($stmt);

        while($row = mysqli_fetch_array($stmt)){
            $category_id = $row['category_id'];
            $category_type = $row['category_type'];
        }//end while
        
        // require this
        require(ROOT_PATH . '/app/includes/forms/manage/editCategoryForm.php');
    }//end if 

    // EDIT ACTION CATEGORY
    if(isset($_POST['action']) && $_POST['action'] == 'EditCategory') {
        $category_id = trimSlash($_POST['category_id']);
        $category_type = trimSlash($_POST['category_type']);

        $sql = "UPDATE category SET category_type = '$category_type'
            WHERE category_id = '" .$category_id. "';";
        // echo $sql;
        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => "<li>Category has been Updated!</li>"]);
        }
    }

?>
