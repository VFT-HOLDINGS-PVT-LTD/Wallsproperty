<?php
$currentUser = $this->session->userdata('login_user');
$Image = $currentUser[0]->Image;
$User_Name = $currentUser[0]->Display_Name;
?>

<div class="static-sidebar-wrapper sidebar-midnightblue">
    <div class="static-sidebar">
        <div class="sidebar">
            <div class="widget stay-on-collapse" id="widget-welcomebox" style="">
                <div class="widget-body welcome-box tabular">
                    <div class="tabular-row">
                        <div class="tabular-cell welcome-avatar">
                            <a href="#"><?php
                                if ($Image === '') {
                                    $img = 'Add_User.png';
                                } else {
                                    $img = $Image;
                                }
                                ?><img src="<?php echo base_url(); ?>assets/images/profiles/<?php echo $img; ?>" class="avatar"></a>
                        </div>
                        <div class="tabular-cell welcome-options">
                            <span class="welcome-text">Welcome</span>
                            <a href="#" class="name"><?php echo $User_Name; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget stay-on-collapse" id="widget-sidebar">
                <nav role="navigation" class="widget-body">
                    <ul class="acc-menu">
                        <li class="nav-separator">SYSTEM</li>
                        <?php if ($currentUser[0]->Dashboard == 1): ?>
                            <li><a href="<?php echo base_url(); ?>Dashboard/"><i class="fa fa-dashboard"></i><span>DASHBOARD</span></a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->master_data == 1): ?>
                            <li><a href="javascript:;"><i class="fa fa-columns"></i><span>MASTER DATA</span><span class="badge badge-primary"></span></a>
                            <?php endif; ?> 

                            <?php if ($currentUser[0]->master_data == 1): ?>
                                <ul class="acc-menu">
                                <?php endif; ?>


                                <?php if ($currentUser[0]->cus_type == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Master/Company/">COMPANY</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->product_type == 1): ?>
                                                                <!--<li><a href="<?php echo base_url(); ?>Master/Product_Types/">SUB CATEGORY</a></li>-->
                                <?php endif; ?>

                                <?php if ($currentUser[0]->product_type == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Master/Sub_Category/">SUB CATEGORY</a></li>
                                <?php endif; ?>    

                                <?php if ($currentUser[0]->customers == 1): ?>
                                                                <!--<li><a href="<?php echo base_url(); ?>Master/Customers/">CUSTOMERS</a></li>-->
                                <?php endif; ?>

                                <?php if ($currentUser[0]->suppliers == 1): ?>
                                                                <!--<li><a href="<?php echo base_url(); ?>Master/Suppliers/">SUPPLIERS</a></li>-->
                                <?php endif; ?>

                                <?php if ($currentUser[0]->Commissioners == 1): ?>
                                                                                                                                        <!--<li><a href="<?php echo base_url(); ?>Master/Commissioners/">COMMISSIONERS</a></li>-->
                                <?php endif; ?>

                                <?php if ($currentUser[0]->Commis_approve == 1): ?>
                                                                                                                                        <!--<li><a href="<?php echo base_url(); ?>Master/Commissioners/Approve_list/">COMMISSIONERS APPROVE</a></li>-->
                                <?php endif; ?>

                                <?php if ($currentUser[0]->technicians == 1): ?>
                                                                                                                                        <!--<li><a href="<?php echo base_url(); ?>Master/Technician/">TECHNICIANS</a></li>-->
                                <?php endif; ?>

                                <?php if ($currentUser[0]->tasks == 1): ?>
                                                                                                                                        <!--<li><a href="<?php echo base_url(); ?>Master/Tasks/">TASKS</a></li>-->
                                <?php endif; ?>

                                <?php if ($currentUser[0]->service_items == 1): ?>
                                                                                                    <!--                                    <li><a href="<?php echo base_url(); ?>Master/Items/">ITEMS</a></li>-->
                                <?php endif; ?>

                                <?php if ($currentUser[0]->display_test == 1): ?>
                                                                                                                                        <!--<li><a href="<?php echo base_url(); ?>Master/Display_text/">DISPLAY TEXT</a></li>-->
                                <?php endif; ?>

                                <?php if ($currentUser[0]->display_test == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Master/Banks/">BANKS</a></li>
                                <?php endif; ?>    

                                <?php if ($currentUser[0]->display_test == 1): ?>
                                                                <!--<li><a href="<?php echo base_url(); ?>Master/Cards/">CARD</a></li>-->
                                <?php endif; ?>     

                                <?php if ($currentUser[0]->display_test == 1): ?>
                                                                                                        <!--<li><a href="<?php echo base_url(); ?>Master/Rates/">RATES</a></li>-->
                                <?php endif; ?>     

                                <?php if ($currentUser[0]->display_test == 1): ?>
                                                                <!--<li><a href="<?php echo base_url(); ?>Master/Warranty/">WARRANTY</a></li>-->
                                <?php endif; ?>     




                                <?php if ($currentUser[0]->master_data == 1): ?>
                                </ul>
                            <?php endif; ?>

                        </li>


                        <?php if ($currentUser[0]->Inventory == 1): ?>
                            <li><a href="javascript:;"><i class="fa fa-dropbox"></i><span>CHEQUE</span></a>
                            <?php endif; ?>

                            <?php if ($currentUser[0]->Inventory == 1): ?>  
                                <ul class="acc-menu">
                                <?php endif; ?>

                                <?php if ($currentUser[0]->add_inventory == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Cheque/Received_Cheque">RECEIVE CHEQUE</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->add_services == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Cheque/Deposit_Cheque">DEPOSIT CHEQUE</a></li>
                                <?php endif; ?>


                                <?php if ($currentUser[0]->add_services == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Cheque/Return_Cheque">RETURN CHEQUE</a></li>
                                <?php endif; ?>    




                                <?php if ($currentUser[0]->add_services == 1): ?>
                                                                                                                                        <!--<li><a href="<?php echo base_url(); ?>Inventory/Other">OTHERS</a></li>-->
                                <?php endif; ?>    

                                <?php if ($currentUser[0]->view_inventory == 1): ?>
                                                                                                                                        <!--<li><a href="<?php echo base_url(); ?>Inventory/View_Inventory">VIEW ITEMS</a></li>-->
                                <?php endif; ?>  


                                <?php if ($currentUser[0]->view_inventory_items == 1): ?>
                                                                <!--<li><a href="<?php echo base_url(); ?>Inventory/View_Inventory/vw_inventory_items/2">VIEW GEM</a></li>-->
                                <?php endif; ?>     


                                <?php if ($currentUser[0]->view_inventory_items == 1): ?>
                                                                <!--<li><a href="<?php echo base_url(); ?>Inventory/View_Inventory/vw_inventory_items/1">VIEW DIAMOND & JEWELLERY</a></li>-->
                                <?php endif; ?>  



                                <?php if ($currentUser[0]->view_inventory == 1): ?>
                                                                                                                                        <!--<li><a href="<?php echo base_url(); ?>Inventory/View_Services">UPDATE SERVICES</a></li>-->
                                <?php endif; ?>     

                                <?php if ($currentUser[0]->view_inventory == 1): ?>
                                                                <!--<li><a href="<?php echo base_url(); ?>Inventory/Update_Inventory">UPDATE GEM</a></li>-->
                                <?php endif; ?>



                                <?php if ($currentUser[0]->view_inventory == 1): ?>
                                                                <!--<li><a href="<?php echo base_url(); ?>Inventory/Update_Inventory_Jw">UPDATE DIAMOND & JEWELLERY</a></li>-->
                                <?php endif; ?>    



                                <?php if ($currentUser[0]->view_inventory == 1): ?>
                                                                <!--<li><a href="<?php echo base_url(); ?>Inventory/Update_Inventory_Silver">UPDATE SILVER</a></li>-->
                                <?php endif; ?>     



                                <?php if ($currentUser[0]->view_inventory == 1): ?>
                                                                                                                                        <!--<li><a href="<?php echo base_url(); ?>Inventory/Update_Other">UPDATE OTHER</a></li>-->
                                <?php endif; ?>    

                                <?php if ($currentUser[0]->view_b_inventory == 1): ?>
                                                                <!--<li><a href="<?php echo base_url(); ?>Inventory/Branch_Inventory">BRANCH INVENTORY</a></li>-->
                                <?php endif; ?>



                                <?php if ($currentUser[0]->view_inventory == 1): ?>
                                                                <!--<li><a href="<?php echo base_url(); ?>Inventory/Update_Inventory_Images">UPDATE IMAGES</a></li>-->
                                <?php endif; ?>       


                                <?php if ($currentUser[0]->view_inventory == 1): ?>
                                                                <!--<li><a href="<?php echo base_url(); ?>Inventory/Update_Inventory_Certificates">UPDATE CERTIFICATE</a></li>-->
                                <?php endif; ?>           



                                <?php if ($currentUser[0]->Inventory == 1): ?>  
                                </ul>
                            <?php endif; ?>
                        </li>




                        <?php if ($currentUser[0]->stock == 1): ?>
                            <!--                            <li><a href="javascript:;"><i class="fa fa-building-o"></i><span>STOCK</span></a>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->stock == 1): ?>  
                                                            <ul class="acc-menu">
                        <?php endif; ?>

                        <?php if ($currentUser[0]->grn == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Stock_Grn/GRN">MAIN STOCK RECEIVE</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->stock_transfer == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Stock_Grn/Stock_T_Note/">GOODS TRANSFER</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->stock_receive == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Stock_Grn/Stock_T_Note/search_stock_transfer/">GOODS RECEIVE</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->stock_receive == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Stock_Grn/View_Stock_T_Note/search_stock_transfer/">VIEW GOODS RECEIVE</a></li>
                        <?php endif; ?>    

                        <?php if ($currentUser[0]->branch_transfer == 1): ?>
                                                                                                                                        <li><a href="<?php echo base_url(); ?>Stock_Grn/Stock_T_Branch/">BRANCH TRANSFER</a></li>
                        <?php endif; ?>    




                        <?php if ($currentUser[0]->branch_receive == 1): ?>
                                                                                                                                        <li><a href="<?php echo base_url(); ?>Stock_Grn/Stock_T_Branch/search_stock_transfer/">BRANCH RECEIVE</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->branch_receive == 1): ?>
                                                                                                    <li><a href="<?php echo base_url(); ?>Stock_Grn/View_Stock_T_Branch/search_stock_transfer/">VIEW BRANCH RECEIVE</a></li>
                        <?php endif; ?>    


                        <?php if ($currentUser[0]->stock == 1): ?>  
                                                            </ul>
                        <?php endif; ?>
                        </li>-->



                        <?php if ($currentUser[0]->invoice == 1): ?>
                            <!--                            <li><a href="javascript:;"><i class="fa fa-credit-card"></i><span>INVOICE</span></a>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->invoice == 1): ?>
                                                            <ul class="acc-menu">
                        <?php endif; ?>

                        <?php if ($currentUser[0]->add_invoice == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Invoice/Invoice">SALE INVOICE</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->service_invoice == 1): ?>
                                                                                                                                        <li><a href="<?php echo base_url(); ?>Invoice/Job_Invoice">SERVICE INVOICE</a></li>
                        <?php endif; ?>   

                        <?php if ($currentUser[0]->view_invoice_admin == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Invoice/View_Invoice_admin">VIEW INVOICES</a></li>
                        <?php endif; ?>    

                        <?php if ($currentUser[0]->view_invoice == 1): ?>
                                                                                                                                        <li><a href="<?php echo base_url(); ?>Invoice/View_Invoice">VIEW INVOICES</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->invoice == 1): ?>
                                                            </ul>
                        <?php endif; ?>
                        </li>-->


                        <?php if ($currentUser[0]->job == 1): ?>
                                                                                                                                <!--<li><a href="javascript:;"><i class="fa fa-newspaper-o"></i><span>JOB CARD</span></a>-->
                        <?php endif; ?>
                        <?php if ($currentUser[0]->job == 1): ?>
                            <!--<ul class="acc-menu">-->
                        <?php endif; ?>

                        <?php if ($currentUser[0]->job_card == 1): ?>
                                                                                                    <!--                                    <li><a href="<?php echo base_url(); ?>Job/New_Job">NEW JOB</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->job_part_issue == 1): ?>
                                                                                                                                        <li><a href="<?php echo base_url(); ?>Job/Job_Part_Issue">PART ISSUE</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->view_job == 1): ?>
                                                                                                                                        <li><a href="<?php echo base_url(); ?>Job/View_Job">VIEW JOBS</a></li>
                        <?php endif; ?>
                                
                        <?php if ($currentUser[0]->view_job == 1): ?>
                                                                                                                                        <li><a href="<?php echo base_url(); ?>Job/View_Complete">COMPLETE JOBS</a></li>
                        <?php endif; ?>    
                                    
                        <?php if ($currentUser[0]->view_job == 1): ?>
                                                                                                                                        <li><a href="<?php echo base_url(); ?>Job/View_Job/advance_job">ADVANCE SEARCH</a></li>
                        <?php endif; ?>    

                        <?php if ($currentUser[0]->job == 1): ?>  
                                                                                                                                    </ul>
                        <?php endif; ?>
                        </li>-->






                        <?php if ($currentUser[0]->job_transfer == 1): ?>
                                                                                                    <!--                            <li><a href="javascript:;"><i class="fa fa-paper-plane"></i><span>JOB TRANSFER</span></a>
                        <?php endif; ?>
                        <?php if ($currentUser[0]->job_transfer == 1): ?>
                                                                                                                                    <ul class="acc-menu">
                        <?php endif; ?>

                        <?php if ($currentUser[0]->transfer == 1): ?>
                                                                                                                                        <li><a href="<?php echo base_url(); ?>Job_Transfer/Job_Transfer">TRANSFER</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->receive == 1): ?>
                                                                                                                                        <li><a href="<?php echo base_url(); ?>Job_Transfer/Job_Transfer/view_transfer_job">JOB RECEIVE</a></li>
                        <?php endif; ?>



                        <?php if ($currentUser[0]->job_transfer == 1): ?>  
                                                                                                                                    </ul>
                        <?php endif; ?>
                        </li>-->








                        <?php if ($currentUser[0]->warranty_damage == 1): ?>
                            <!--                            <li><a href="javascript:;"><i class="fa fa-cube"></i><span>WARRANTY & DAMAGE</span></a>
                        <?php endif; ?>
                        <?php if ($currentUser[0]->warranty_damage == 1): ?>
                                                            <ul class="acc-menu">
                        <?php endif; ?>

                        <?php if ($currentUser[0]->damage == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Warranty_Damage/Damage">DAMAGE ITEMS</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->warranty == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Warranty_Damage/Warrenty">WARRANTY</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->other == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Job/View_Job">OTHER</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->warranty_damage == 1): ?>  
                                                            </ul>
                        <?php endif; ?>
                        </li>-->


                        <?php if ($currentUser[0]->purchasing == 1): ?>
                            <!--                            <li><a href="javascript:;"><i class="fa fa-money"></i><span>PURCHASING</span></a>
                        <?php endif; ?>
                        <?php if ($currentUser[0]->purchasing == 1): ?>
                                                            <ul class="acc-menu">
                        <?php endif; ?>

                        <?php if ($currentUser[0]->p_order == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Purchasing/Purchase_Order">PURCHASE ORDER</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->p_invoice_make == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Purchasing/Update_Purchase_Order">MAKE PURCHASE INVOICE</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->p_invoice == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Purchasing/Update_Purchase_Invoice">PAY PURCHASE INVOICE</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->p_invoice == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Purchasing/View_Purchase_Invoice">VIEW PURCHASE INVOICE</a></li>
                        <?php endif; ?>    

                        <?php if ($currentUser[0]->purchasing == 1): ?>   
                                                            </ul>
                        <?php endif; ?>  
                        </li>-->


                        <?php if ($currentUser[0]->Payments == 1): ?>
                            <!--                            <li><a href="javascript:;"><i class="fa fa-credit-card"></i><span>PAYMENTS</span></a>
                        <?php endif; ?>
                        <?php if ($currentUser[0]->Payments == 1): ?>
                                                            <ul class="acc-menu">
                        <?php endif; ?>

                        <?php if ($currentUser[0]->sup_pay == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Payments/General_payments">SUPPLIER PAYMENTS</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->cus_pay == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Payments/Customer_Payment">CUSTOMER PAYMENTS</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->cus_pay == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Payments/Payment_History">PAYMENT HISTORY</a></li>
                        <?php endif; ?>    



                        <?php if ($currentUser[0]->Payments == 1): ?>
                                                            </ul>
                        <?php endif; ?>
                        </li>-->


                        <?php if ($currentUser[0]->Commissions == 1): ?>
                                                                                                        <!--                            <li><a href="javascript:;"><i class="fa fa-cc"></i><span>COMMISSIONS</span></a>
                        <?php endif; ?>
                        <?php if ($currentUser[0]->Commissions == 1): ?>
                                                                                                                                        <ul class="acc-menu">
                        <?php endif; ?>

                        <?php if ($currentUser[0]->Approve_coms == 1): ?>
                                                                                                                                            <li><a href="<?php echo base_url(); ?>Commissions/Approve_Commissions">APPROVE COMMISSIONS</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->View_Coms == 1): ?>
                                                                                                                                            <li><a href="<?php echo base_url(); ?>Commissions/View_Commissions">VIEW COMMISSIONS</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->Commissions == 1): ?>
                                                                                                                                        </ul>-->
                        <?php endif; ?>
                        </li>



                        <?php if ($currentUser[0]->accounting == 1): ?>
                            <!--                            <li><a href="javascript:;"><i class="fa fa-tags"></i><span>ACCOUNTING</span></a>
                        <?php endif; ?>
                        <?php if ($currentUser[0]->accounting == 1): ?>
                                                            <ul class="acc-menu">
                        <?php endif; ?>

                        <?php if ($currentUser[0]->service_refund == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Accounts/Sale_Refund">SALE REFUND</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->service_refund == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Accounts/Service_Refund">SERVICE REFUND</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->accounting == 1): ?>
                                                            </ul>
                        <?php endif; ?>
                        </li>-->




                        <?php if ($currentUser[0]->Commissions == 1): ?>
                            <li><a href="javascript:;"><i class="fa fa-suitcase"></i><span>ADMINISTRATION</span></a>
                            <?php endif; ?>
                            <?php if ($currentUser[0]->Commissions == 1): ?>
                                <ul class="acc-menu">
                                <?php endif; ?>

                                <?php if ($currentUser[0]->Approve_coms == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Administration/Add_User/">ADD USER</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->Commissions == 1): ?>
                                </ul>
                            <?php endif; ?>
                        </li>





                        <?php if ($currentUser[0]->company == 1): ?>
                                                                                                    <!--                            <li><a href="javascript:;"><i class="fa fa-building-o"></i><span>COMPANY PROFILE</span></a>
                        <?php endif; ?>
                        <?php if ($currentUser[0]->company == 1): ?>
                                                                                                                                    <ul class="acc-menu">
                        <?php endif; ?>
                        <?php if ($currentUser[0]->company_profile == 1): ?>
                                                                                                                                        <li><a href="<?php echo base_url(); ?>Company_Profile/Company_Profile">COMPANY PROFILE</a></li>
                        <?php endif; ?>
                            </ul>-->
                        </li>


                        <?php if ($currentUser[0]->Reports == 1): ?>
                            <li class="nav-separator">REPORTS</li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->Stock_report == 1): ?>
                            <li><a href="javascript:;"><i class="fa fa-tags"></i><span>CHEQUE</span></a>
                            <?php endif; ?>
                            <?php if ($currentUser[0]->Stock_report == 1): ?>
                                <ul class="acc-menu">
                                <?php endif; ?>



                                <?php if ($currentUser[0]->current_stk_rpt == 1): ?>
                                    <li><a  href="<?php echo base_url(); ?>Reports/Stock/Current_Stock">RECEIVED CHEQUES</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->branch_stk_rpt == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Reports/Stock/Branch_Stock">RETURNED CHEQUES</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->branch_stk_rpt == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Reports/Stock/Low_Stock/low_stock_report">PENDING CHEQUES</a></li>
                                <?php endif; ?>    

                                <?php if ($currentUser[0]->current_stk_rpt == 1): ?>
                                                                <!--<li><a  href="<?php echo base_url(); ?>Reports/Stock/Stock_Diary">STOCK DIARY</a></li>-->
                                <?php endif; ?>      

                                <?php if ($currentUser[0]->Stock_report == 1): ?>
                                </ul>
                            <?php endif; ?>
                        </li>


                        <?php if ($currentUser[0]->Sales_report == 1): ?>
                            <!--                            <li><a href="javascript:;"><i class="fa fa-dollar"></i><span>SALES</span></a>
                        <?php endif; ?>
                        <?php if ($currentUser[0]->Sales_report == 1): ?>
                                                            <ul class="acc-menu">
                        <?php endif; ?>

                        <?php if ($currentUser[0]->product_rpt == 1): ?>
                                                                <li><a  href="<?php echo base_url(); ?>Reports/Sales/Sale_Invoice">PRODUCT</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->service_rpt == 1): ?>
                                                                                                                                        <li><a href="<?php echo base_url(); ?>Reports/Sales/Service_Invoice">SERVICE</a></li>
                        <?php endif; ?>
                        <?php if ($currentUser[0]->all_sales_rpt == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Reports/Sales/All_Invoices">ALL SALES</a></li>
                        <?php endif; ?>


                        <?php if ($currentUser[0]->all_sales_rpt == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Reports/Sales/Sales_details">SALES DETAIL</a></li>
                        <?php endif; ?>


                        <?php if ($currentUser[0]->Sales_report == 1): ?>
                                                            </ul>
                        <?php endif; ?>
                        </li>-->


                        <?php if ($currentUser[0]->Outstanding_report == 1): ?>
                            <!--                            <li><a href="javascript:;"><i class="fa fa-suitcase"></i><span>OUTSTANDING</span></a>
                        <?php endif; ?>
                        <?php if ($currentUser[0]->Outstanding_report == 1): ?>
                                                            <ul class="acc-menu">
                        <?php endif; ?>

                        <?php if ($currentUser[0]->customer_out_rpt == 1): ?>
                                                                <li><a  href="<?php echo base_url(); ?>Reports/Outstanding/Customer_Outstanding">CUSTOMER</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->customer_out_rpt == 1): ?>
                                                                <li><a  href="<?php echo base_url(); ?>Reports/Outstanding/Customer_Outstanding_Individual">CUSTOMER INDIVIDUAL</a></li>
                        <?php endif; ?>    

                        <?php if ($currentUser[0]->supplier_out_rpt == 1): ?>
                                                                <li><a href="<?php echo base_url(); ?>Reports/Outstanding/Supplier_Outstanding">SUPPLIER</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->Outstanding_report == 1): ?>
                                                            </ul>
                        <?php endif; ?>
                        </li>-->









                        <?php if ($currentUser[0]->tools == 1): ?>
                            <li class="nav-separator">TOOLS</li>
                        <?php endif; ?>

                        <ul class="acc-menu">

                            <?php if ($currentUser[0]->sys_backup == 1): ?>
                                <li><a href="<?php echo base_url(); ?>Tools/DB_Backup"><i class="fa fa-inbox"></i><span>SYSTEM BACKUP</span></a></li>
                            <?php endif; ?>


                            <li><a href="<?php echo base_url() . "index.php/login/logout/" ?>"><i class="fa fa-tasks"></i><span>LOGOUT</span></a></li>

                        </ul>


                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>