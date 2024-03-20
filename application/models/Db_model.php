<?php

/* -------ASHAN RATHSARA---------
 * 
 * Database model
 */

class db_model extends CI_Model
{
    /*
     * Insert data
     */

    private $blogs = 'blogs';   // blogs table

    function check_email_exist($Email)
    {
        $this->db->where('Email', $Email);
        $query = $this->db->get('tbl_users');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function check_phone_exist($Phone_No)
    {
        $this->db->where('Phone_No', $Phone_No);
        $query = $this->db->get('tbl_users');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //Ajax Code--------------------------
    function is_email_available($email)
    {
        $this->db->where('Email', $email);
        $query = $this->db->get("tbl_users");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //Ajax Code--------------------------
    function is_phone_available($phone)
    {
        $this->db->where('Phone_No', $phone);
        $query = $this->db->get("tbl_users");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getfilteredData($strSQL)
    {

        $query = $this->db->query($strSQL);
        return $query->result();
    }

    public function get_adcount()
    {
        return $this->db->count_all("tbl_ads");
    }

    function get_blogs($limit, $offset)
    {

        if ($offset > 0) {
            $offset = ($offset - 1) * $limit;
        }

        //        var_dump($offset);die;
//        $result['rows'] = $this->db->get($this->blogs, $limit, $offset);

        $result['rows'] = $this->db->query('SELECT 
    *
FROM
    tbl_ads
        INNER JOIN
    `tbl_ad_category` ON `tbl_ads`.`Ad_Cat_ID` = `tbl_ad_category`.`Ad_Cat_ID`
        INNER JOIN
    `tbl_users` ON `tbl_users`.`U_ID` = `tbl_ads`.`U_ID`
        INNER JOIN
    `tbl_districts` ON `tbl_districts`.`DST_ID` = `tbl_ads`.`DST_ID`
        INNER JOIN
    `tbl_city` ON `tbl_city`.`CTY_ID` = `tbl_ads`.`CTY_ID`
        INNER JOIN
    `tbl_ad_sub_category` ON `tbl_ad_sub_category`.`Ad_sub_Cat_ID` = `tbl_ads`.`Ad_sub_Cat_ID`  where tbl_ads.Is_approve=1 order by tbl_ads.AD_ID DESC LIMIT ' . $limit . ' OFFSET ' . $offset . '  ');

        //        var_dump($result['rows']);die;

        $result['num_rows'] = $this->db->count_all_results($this->blogs);

        //           var_dump($result);die;

        return $result;
    }


    function get_user_ads($limit, $User)
    {

        //        if ($offset > 0) {
//            $offset = ($offset - 1) * $limit;
//        }

        //        var_dump($offset);die;
//        $result['rows'] = $this->db->get($this->blogs, $limit, $offset);

        $result['rows'] = $this->db->query('SELECT 
    *
FROM
    tbl_ads
        INNER JOIN
    `tbl_ad_category` ON `tbl_ads`.`Ad_Cat_ID` = `tbl_ad_category`.`Ad_Cat_ID`
        INNER JOIN
    `tbl_users` ON `tbl_users`.`U_ID` = `tbl_ads`.`U_ID`
        INNER JOIN
    `tbl_districts` ON `tbl_districts`.`DST_ID` = `tbl_ads`.`DST_ID`
        INNER JOIN
    `tbl_city` ON `tbl_city`.`CTY_ID` = `tbl_ads`.`CTY_ID`
        INNER JOIN
    `tbl_ad_sub_category` ON `tbl_ad_sub_category`.`Ad_sub_Cat_ID` = `tbl_ads`.`Ad_sub_Cat_ID` where tbl_ads.U_ID =' . $User . '  order by tbl_ads.AD_ID DESC ');

        //        var_dump($result['rows']);die;

        $result['num_rows'] = $this->db->count_all_results($this->blogs);

        //           var_dump($result);die;

        return $result;
    }

    function get_filter($limit, $offset, $cat, $dist, $key)
    {

        if ($offset > 0) {
            $offset = ($offset - 1) * $limit;
        }
        //        where tbl_ads.Ad_Cat_ID ='.$cat.' and tbl_ads.DST_ID='.$dist.'    

        $filter = '';

        if (($cat)) {
            if ($filter == null) {
                $filter = " where tbl_ads.Ad_Cat_ID = $cat and tbl_ads.Is_approve=1";
            } else {
                $filter .= " and tbl_ads.Ad_Cat_ID = $cat and tbl_ads.Is_approve=1";
            }
        }
        if (($dist)) {
            if ($filter == null) {
                $filter = " where tbl_ads.DST_ID = $dist and tbl_ads.Is_approve=1";
            } else {
                $filter .= " and tbl_ads.DST_ID = $dist  and tbl_ads.Is_approve=1";
            }
        }
        if (($key)) {
            if ($filter == null) {
                $filter = " where LOWER(tbl_ads.Ad_Title) like LOWER ('%$key%') and  tbl_ads.Is_approve=1 ";
            } else {
                $filter .= " and LOWER(tbl_ads.Ad_Title) like LOWER ('%$key%') and tbl_ads.Is_approve=1";
            }
        }

        if ($filter == null) {
            $filter = " where  tbl_ads.Is_approve=1";
        }

        //        var_dump($filter);die;

        //        var_dump($offset);die;
//        $result['rows'] = $this->db->get($this->blogs, $limit, $offset);

        $result['rows'] = $this->db->query("SELECT 
    *
FROM
    tbl_ads
        INNER JOIN
    `tbl_ad_category` ON `tbl_ads`.`Ad_Cat_ID` = `tbl_ad_category`.`Ad_Cat_ID`
        INNER JOIN
    `tbl_users` ON `tbl_users`.`U_ID` = `tbl_ads`.`U_ID`
        INNER JOIN
    `tbl_districts` ON `tbl_districts`.`DST_ID` = `tbl_ads`.`DST_ID`
        INNER JOIN
    `tbl_city` ON `tbl_city`.`CTY_ID` = `tbl_ads`.`CTY_ID`
        INNER JOIN
    `tbl_ad_sub_category` ON `tbl_ad_sub_category`.`Ad_sub_Cat_ID` = `tbl_ads`.`Ad_sub_Cat_ID`
{$filter}
order by tbl_ads.AD_ID DESC LIMIT $limit OFFSET $offset  ");

        //        var_dump($result['rows']);die;

        $result['num_rows'] = $this->db->count_all_results($this->blogs);

        //           var_dump($result);die;

        return $result;
    }

    function get_filterCat($limit, $offset, $cat)
    {

        if ($offset > 0) {
            $offset = ($offset - 1) * $limit;
        }
        //        where tbl_ads.Ad_Cat_ID ='.$cat.' and tbl_ads.DST_ID='.$dist.'    

        $filter = '';

        if (($cat)) {
            if ($filter == null) {
                $filter = " where tbl_ads.Ad_Cat_ID = $cat and tbl_ads.Is_approve=1 ";
            } else {
                $filter .= " and tbl_ads.Ad_Cat_ID = $cat and tbl_ads.Is_approve=1";
            }
        }


        //        var_dump($offset);die;
//        $result['rows'] = $this->db->get($this->blogs, $limit, $offset);

        $result['rows'] = $this->db->query("SELECT 
    *
FROM
    tbl_ads
        INNER JOIN
    `tbl_ad_category` ON `tbl_ads`.`Ad_Cat_ID` = `tbl_ad_category`.`Ad_Cat_ID`
        INNER JOIN
    `tbl_users` ON `tbl_users`.`U_ID` = `tbl_ads`.`U_ID`
        INNER JOIN
    `tbl_districts` ON `tbl_districts`.`DST_ID` = `tbl_ads`.`DST_ID`
        INNER JOIN
    `tbl_city` ON `tbl_city`.`CTY_ID` = `tbl_ads`.`CTY_ID`
        INNER JOIN
    `tbl_ad_sub_category` ON `tbl_ad_sub_category`.`Ad_sub_Cat_ID` = `tbl_ads`.`Ad_sub_Cat_ID`
{$filter}
order by tbl_ads.AD_ID DESC LIMIT $limit OFFSET $offset  ");

        //        var_dump($result['rows']);die;

        $result['num_rows'] = $this->db->count_all_results($this->blogs);

        //           var_dump($result);die;

        return $result;
    }

    public function insertData($table, $data)
    {

        try {
            $this->db->trans_start();
            $result = $this->db->insert($table, $data);
            $this->db->trans_complete();
            return $result;
        } catch (Exception $e) {

            $error = $e->getMessage();
            return $error;
        }
    }

    /*
     * Update Data
     */

    public function updateData($tableName, $dataArray, $whereArray)
    {

        $this->db->where($whereArray);
        $result = $this->db->update($tableName, $dataArray);
        return $result;
    }

    /*
     * Get Data
     */

    public function getData($fieldset, $tableName)
    {

        $this->db->select($fieldset)->from($tableName);
        $query = $this->db->get();
        return $query->result();
    }

    /*
     * Get Data Advance
     */

    function getData2($tablename = '', $columns_arr = array(), $where_arr = array(), $limit = 0, $offset = 0, $orderby = array())
    {
        $limit = ($limit == 0) ? Null : $limit;

        if (!empty($columns_arr)) {
            $this->db->select(implode(',', $columns_arr), FALSE);
        }

        if ($tablename == '') {
            return array();
        } else {
            $this->db->from($tablename);

            if (!empty($where_arr)) {
                $this->db->where($where_arr);
            }

            if ($limit > 0 and $offset > 0) {
                $this->db->limit($limit, $offset);
            } elseif ($limit > 0 and $offset == 0) {
                $this->db->limit($limit);
            }

            if (count($orderby) > 0) {
                $orderbyString = '';

                foreach ($orderby as $orderclause) {

                    $orderbyString .= $orderclause["field"] . ' ' . $orderclause["order"] . ', ';
                }
                if (strlen($orderbyString) > 2) {
                    $orderbyString = substr($orderbyString, 0, strlen($orderbyString) - 2);
                }
                $this->db->order_by($orderbyString);
            }

            $query = $this->db->get();


            return $query->result();
        }
    }

    /*
     * Get Number of Rows
     */

    public function get_num_rows($strSQL)
    {

        $query = $this->db->query($strSQL);
        return $query->num_rows();
    }

    public function UpdatefilteredData($strSQL)
    {

        $this->db->query($strSQL);
        //        return $query->result();
    }

    /*
     * Get SQL Quary Filter Data
     */

    //    public function getfilteredData($strSQL) {
//
//        $query = $this->db->query($strSQL);
//        return $query->result();
//    }

    /*
     * Get SQL Quary Delete
     */

    public function getfilteredDelete($strSQL)
    {

        $query = $this->db->query($strSQL);
    }

    /*
     * Delete By
     */

    public function delete_by_id($id, $where, $table)
    {

        $this->db->where($where, $id);
        $this->db->delete($table);
    }

    public function setWhere($whereArray)
    {

        $this->db->where($whereArray);
    }

    public function get_dropdown()
    {

        $query = "select EmpNo,Emp_Full_Name from tbl_empmaster where status =1";
        $city_info = $this->db->query($query);
        return $city_info;
    }

    public function get_dropdown_dep()
    {

        $query = "select Dep_ID,Dep_Name from tbl_departments";
        $city_info = $this->db->query($query);
        return $city_info;
    }

    public function get_dropdown_des()
    {

        $query = "select Des_ID,Desig_Name from tbl_designations";
        $city_info = $this->db->query($query);
        return $city_info;
    }

    public function get_dropdown_group()
    {

        $query = "select Grp_ID,EmpGroupName from tbl_emp_group";
        $city_info = $this->db->query($query);
        return $city_info;
    }

    public function get_dropdown_comp()
    {

        $query = "select Cmp_ID,Company_Name from tbl_companyprofile";
        $city_info = $this->db->query($query);
        return $city_info;
    }



    function get_auto_emp_name($q)
    {
        $this->db->select('*');
        $this->db->like('Customer_name', $q);
        $query = $this->db->get('tbl_customers');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $new_row['label'] = htmlentities(stripslashes($row['Customer_name']));
                $new_row['value'] = htmlentities(stripslashes($row['Cus_ID']));
                $row_set[] = $new_row; //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }

    function get_auto_cus_name($q)
    {
        $this->db->select('*');
        $this->db->like('Customer_name', $q);
        $query = $this->db->get('tbl_customers');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $new_row['label'] = htmlentities(stripslashes($row['Customer_name']));
                $new_row['aa'] = htmlentities(stripslashes($row['Customer_name']));
                $new_row['value'] = htmlentities(stripslashes($row['Cus_ID']));
                $row_set[] = $new_row; //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }

    function get_auto_task($q)
    {
        $this->db->select('*');
        $this->db->like('T_Name', $q);
        $query = $this->db->get('tbl_tasks');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $new_row['label'] = htmlentities(stripslashes($row['T_Name']));
                $new_row['value'] = htmlentities(stripslashes($row['T_Name']));
                $row_set[] = $new_row; //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }

    function get_auto_tech($q)
    {
        $this->db->select('*');
        $this->db->like('Technician_Name', $q);
        $query = $this->db->get('tbl_technicians');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $new_row['label'] = htmlentities(stripslashes($row['Technician_Name']));
                $new_row['value'] = htmlentities(stripslashes($row['TCH_ID']));
                $row_set[] = $new_row; //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }

    function get_auto_job($q)
    {
        $this->db->select('*');
        $this->db->like('Job_No', $q);
        $query = $this->db->get('tbl_job');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $new_row['label'] = htmlentities(stripslashes($row['Job_No']));
                $new_row['value'] = htmlentities(stripslashes($row['Job_No']));
                $row_set[] = $new_row; //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }

    function get_auto_item($q)
    {
        $this->db->select('*');
        $this->db->like('ITM_Name', $q);
        $query = $this->db->get('tbl_items');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $new_row['label'] = htmlentities(stripslashes($row['ITM_Name']));
                $new_row['value'] = htmlentities(stripslashes($row['IT_ID']));
                $row_set[] = $new_row; //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }

    function get_auto_sup($q)
    {
        $this->db->select('*');
        $this->db->like('Supplier_name', $q);
        $query = $this->db->get('tbl_suppliers');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $new_row['label'] = htmlentities(stripslashes($row['Supplier_name']));
                $new_row['value'] = htmlentities(stripslashes($row['Sup_ID']));
                $row_set[] = $new_row; //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }

    function get_auto_emp_no($q)
    {
        $this->db->select('*');
        $this->db->like('EmpNo', $q);
        $query = $this->db->get('tbl_empmaster');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $new_row['label'] = htmlentities(stripslashes($row['EmpNo']));
                $new_row['value'] = htmlentities(stripslashes($row['EmpNo']));
                $row_set[] = $new_row; //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }

    function get_auto_products($q, $B_Code)
    {

        $this->db->select('*');
        $this->db->from('tbl_stock_details');
        $this->db->join('tbl_inventory', 'tbl_inventory.P_ID = tbl_stock_details.P_ID', 'INNER');
        $this->db->where('tbl_stock_details.B_Code', $B_Code);
        //        $this->db->where('tbl_stock_details.B_Qty', ">0);
        $this->db->like('tbl_inventory.P_Name', $q);


        $query = $this->db->get();

        //        var_dump($query);die;

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {


                $new_row['label'] = htmlentities(stripslashes($row['P_Name']));
                $new_row['value'] = htmlentities(stripslashes($row['P_ID']));
                $row_set[] = $new_row; //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }

    //    test
    function get_auto_customers($q)
    {

        $this->db->select('*');
        $this->db->from('`tbl_invoice`');
        $this->db->join('tbl_customers', '`tbl_invoice`.`Cus_ID` = `tbl_customers`.`Cus_ID`', 'INNER');
        $this->db->join('`tbl_payments`', '`tbl_invoice`.`INV_ID` = `tbl_payments`.`INV_No`', 'INNER');
        $this->db->where('`Is_Full_Payed`', '0');
        $this->db->where('`tbl_customers`.`Cus_ID`', '00042');
        //        $this->db->where('tbl_stock_details.B_Qty', ">0);
//        $this->db->like('tbl_inventory.P_Name', $q);


        $query = $this->db->get();

        //        var_dump($query);die;

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {


                $new_row['label'] = htmlentities(stripslashes($row['Customer_name']));
                $new_row['value'] = htmlentities(stripslashes($row['Cus_ID']));
                $row_set[] = $new_row; //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }

    function get_auto_products_inv($q, $B_Code, $inv)
    {

        var_dump($inv);
        die;

        $this->db->select('*');
        $this->db->from('tbl_invoice');
        $this->db->join('tbl_invoice_details', 'tbl_invoice_details.INV_ID = tbl_invoice.INV_ID', 'INNER');
        $this->db->join('tbl_inventory', 'tbl_inventory.P_ID = tbl_invoice_details.P_ID', 'INNER');
        //        $this->db->where('tbl_invoice.B_Code', $B_Code);
//        $this->db->where('tbl_invoice.INV_ID', $inv);

        $array = array('tbl_invoice.B_Code' => $B_Code, 'tbl_invoice.INV_ID' => $inv);
        $this->db->where($array);

        $this->db->like('tbl_inventory.P_Name', $q);


        $query = $this->db->get();


        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {


                $new_row['label'] = htmlentities(stripslashes($row['P_Name']));
                $new_row['value'] = htmlentities(stripslashes($row['P_ID']));
                $row_set[] = $new_row; //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }

    function get_auto_invoice($q, $B_Code)
    {
        $this->db->select('INV_ID');
        $this->db->like('INV_ID', $q);
        $this->db->where('B_Code', $B_Code);
        $query = $this->db->get('tbl_invoice');

        //        var_dump($query);die;

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $new_row['label'] = htmlentities(stripslashes($row['INV_ID']));
                $new_row['value'] = htmlentities(stripslashes($row['INV_ID']));
                $row_set[] = $new_row; //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }

    function get_auto_comm($q)
    {
        $this->db->select('*');
        $this->db->like('Coms_name', $q);
        $this->db->where('Is_approve', 1);
        $query = $this->db->get('tbl_commis_cus');

        //        var_dump($query);die;

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $new_row['label'] = htmlentities(stripslashes($row['Coms_name']));
                $new_row['value'] = htmlentities(stripslashes($row['Coms_Cus_ID']));
                $row_set[] = $new_row; //build an array
            }
            echo json_encode($row_set); //format the array into json data
        }
    }

    public function get_emp_info()
    {
        $name = $this->input->post("txt_customer_id");
        $query = "select * from tbl_customers where Cus_ID ='$name' ";
        $info = $this->db->query($query);
        return $info;
    }

    public function get_bank_info()
    {
        $cmb_bank_id = $this->input->post("cmb_bank");
        $query = "select distinct Acc_no from tbl_accounts where id ='$cmb_bank_id' ";
        $bank_info = $this->db->query($query);
        return $bank_info;
    }

    public function get_chqno_info()
    {
        $cmb_acc_id = $this->input->post("cmb_acc_no");
        $query = "select distinct lc_no from tbl_cheque_no where id ='$cmb_acc_id' ";
        $bank_info = $this->db->query($query);
        return $bank_info;
    }

    public function verification($fieldset, $tableName, $where = '')
    {
        /*
         * Get Date time
         */
        date_default_timezone_set('Asia/Colombo');
        $date = date('Y-M-d   h:i:s a', time());

        $username = $where['Email'];
        $password = $where['Password'];

        /*
         * Select Table Data
         */
        $this->db->select($fieldset)->from($tableName)->where($where);
        $data = $this->db->get();



        if ($data->num_rows() > 0) {
            foreach ($data->result() as $row) {

                /*
                 * Set data to Session
                 */
                //                $data = $this->getfilteredData("select * from tbl_empmaster
//                Where username='$username' and password='$password' and Is_allow_login=1");


                $query = ("SELECT 
    tbl_users.U_ID,
    tbl_users.Users_Name,
    tbl_users.Email,


    tbl_user_permissions.Dashboard,
    tbl_user_permissions.Master_1,
    tbl_user_permissions.Master_2,
    tbl_user_permissions.Master_3,
    tbl_user_permissions.Master_4,
    tbl_user_permissions.Master_5
FROM
    tbl_user_permissions AS tbl_user_permissions
        INNER JOIN
    tbl_users ON tbl_user_permissions.user_p_id = tbl_users.user_p_id
                                    
                                    where Email='$username' and password='$password' and is_allow_login=1
                                ");

                $data = $this->getfilteredData($query);

                //                var_dump($data);die;

                $this->session->set_userdata('login_user', $data);

                return "success";
            }
        } else {
            return "invalid";
        }
    }

    public function delete_user($user_id) {
        $this->db->where('U_ID', $user_id);
        $this->db->delete('tbl_users');
    }
    
    public function getUser($user_id) {
        $this->db->where('U_ID', $user_id);
        $query = $this->db->get('tbl_users');
        return $query->row_array();
    }

    public function updateUser($user_id, $data) {
        $this->db->where('U_ID', $user_id);
        $this->db->update('tbl_users', $data);
        return $this->db->affected_rows() > 0 ? true : false;
    }
}
