
<?php
include('dbcon.php');
if ($_REQUEST) {
    $id = $_REQUEST['parent_id'];
    $query = "select * from sub_pic_dept where dept_id = " . $id;
    $results = mysql_query($query);
    ?>
    <select name="sub_category"  id="sub_category_id">
        <option value="none" selected="selected" >Select sub category</option>
        <?php
        while ($rows = mysql_fetch_assoc(@$results)) {
            ?>
            <option value="<?php echo $rows['id']; ?>"><?php echo $rows['name']; ?></option>
        <?php }
        ?>
    </select>	

    <?php
}
?>