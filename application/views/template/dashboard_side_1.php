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
                            <a href="#"><img src="<?php echo base_url(); ?>assets/images/Employees/<?php echo $Image; ?>" class="avatar"></a>
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
                            <li><a href="<?php echo base_url(); ?>Dashboard/"><i class="fa fa-home"></i><span>DASHBOARD</span></a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->master_data == 1): ?>
                            <li><a href="javascript:;"><i class="fa fa-columns"></i><span>MASTER DATA</span><span class="badge badge-primary"></span></a>
                            <?php endif; ?> 

                            <?php if ($currentUser[0]->master_data == 1): ?>
                                <ul class="acc-menu">
                                <?php endif; ?>


                                <?php if ($currentUser[0]->cus_type == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Master/Customers_types/">CUSTOMER TYPES</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->product_type == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Master/Product_Types/">PRODUCT TYPES</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->customers == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Master/Customers/">CUSTOMERS</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->suppliers == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Master/Suppliers/">SUPPLIERS</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->Commissioners == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Master/Commissioners/">COMMISSIONERS</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->Commis_approve == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Master/Commissioners/Approve_list/">COMMISSIONERS APPROVE</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->technicians == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Master/Technician/">TECHNICIANS</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->tasks == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Master/Tasks/">TASKS</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->service_items == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Master/Items/">ITEMS</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->display_test == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Master/Display_text/">DISPLAY TEXT</a></li>
                                <?php endif; ?>




                                <?php if ($currentUser[0]->master_data == 1): ?>
                                </ul>
                            <?php endif; ?>

                        </li>


                        <?php if ($currentUser[0]->Inventory == 1): ?>
                            <li><a href="javascript:;"><i class="fa fa-dropbox"></i><span>INVENTORY ITEMS</span></a>
                            <?php endif; ?>

                            <?php if ($currentUser[0]->Inventory == 1): ?>  
                                <ul class="acc-menu">
                                <?php endif; ?>

                                <?php if ($currentUser[0]->add_inventory == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Inventory/Inventory">ADD PRODUCTS</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->add_services == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Inventory/Services">ADD SERVICES</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->view_inventory == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Inventory/Update_Inventory">UPDATE ITEMS</a></li>
                                <?php endif; ?>


                                <?php if ($currentUser[0]->view_b_inventory == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Inventory/Branch_Inventory">BRANCH INVENTORY</a></li>
                                <?php endif; ?>


                                <?php if ($currentUser[0]->Inventory == 1): ?>  
                                </ul>
                            <?php endif; ?>
                        </li>




                        <?php if ($currentUser[0]->stock == 1): ?>
                            <li><a href="javascript:;"><i class="fa fa-building-o"></i><span>STOCK</span></a>
                            <?php endif; ?>

                            <?php if ($currentUser[0]->stock == 1): ?>  
                                <ul class="acc-menu">
                                <?php endif; ?>

                                <?php if ($currentUser[0]->grn == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Stock_Grn/GRN">GOODS RECEIVE NOTE</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->stock_transfer == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Stock_Grn/Stock_T_Note/">GOODS TRANSFER NOTE</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->branch_transfer == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Stock_Grn/Stock_T_Branch/">GOODS BRANCH TRANSFER</a></li>
                                <?php endif; ?>    


                                <?php if ($currentUser[0]->stock_receive == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Stock_Grn/Stock_T_Note/search_stock_transfer/">GOODS RECEIVE</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->branch_receive == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Stock_Grn/Stock_T_Branch/search_stock_transfer/">GOODS RECEIVE BRANCH</a></li>
                                <?php endif; ?>


                                <?php if ($currentUser[0]->stock == 1): ?>  
                                </ul>
                            <?php endif; ?>
                        </li>



                        <?php if ($currentUser[0]->invoice == 1): ?>
                            <li><a href="javascript:;"><i class="fa fa-credit-card"></i><span>INVOICE</span></a>
                            <?php endif; ?>

                            <ul class="acc-menu">
                                <?php if ($currentUser[0]->add_invoice == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Invoice/Invoice">SALE INVOICE</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->service_invoice == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Invoice/Job_Invoice">SERVICE INVOICE</a></li>
                                <?php endif; ?>   


                                <?php if ($currentUser[0]->view_invoice == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Invoice/View_Invoice">VIEW INVOICES</a></li>
                                <?php endif; ?>

                            </ul>
                        </li>


                        <?php if ($currentUser[0]->job == 1): ?>
                            <li><a href="javascript:;"><i class="fa fa-newspaper-o"></i><span>JOB CARD</span></a>
                            <?php endif; ?>

                            <ul class="acc-menu">
                                <?php if ($currentUser[0]->job_card == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Job/New_Job">NEW JOB</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->job_part_issue == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Job/Job_Part_Issue">JOB PART ISSUE</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->view_job == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Job/View_Job">VIEW JOBS</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->job == 1): ?>  
                                </ul>
                            <?php endif; ?>
                        </li>


                        <?php if ($currentUser[0]->purchasing == 1): ?>
                            <li><a href="javascript:;"><i class="fa fa-money"></i><span>PURCHASING</span></a>
                            <?php endif; ?>

                            <ul class="acc-menu">
                                <?php if ($currentUser[0]->p_order == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Purchasing/Purchase_Order">PURCHASE ORDER</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->p_invoice_make == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Purchasing/Update_Purchase_Order">MAKE PURCHASE INVOICE</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->p_invoice == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Purchasing/p_inv_view">VIEW PURCHASE INVOICE</a></li>
                                <?php endif; ?>    

                                <?php if ($currentUser[0]->purchasing == 1): ?>   
                                </ul>
                            <?php endif; ?>  
                        </li>


                        <?php if ($currentUser[0]->Payments == 1): ?>
                            <li><a href="javascript:;"><i class="fa fa-credit-card"></i><span>PAYMENTS</span></a>
                            <?php endif; ?>

                            <ul class="acc-menu">
                                <?php if ($currentUser[0]->sup_pay == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Payments/General_payments">SUPPLIER PAYMENTS</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->cus_pay == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Payments/Customer_Payment">CUSTOMER PAYMENTS</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->Payments == 1): ?>
                                </ul>
                            <?php endif; ?>
                        </li>


                        <?php if ($currentUser[0]->Commissions == 1): ?>
                            <li><a href="javascript:;"><i class="fa fa-cc"></i><span>COMMISSIONS</span></a>
                            <?php endif; ?>

                            <ul class="acc-menu">
                                <?php if ($currentUser[0]->Approve_coms == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Commissions/Approve_Commissions">APPROVE COMMISSIONS</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->View_Coms == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Commissions/View_Commissions">VIEW COMMISSIONS</a></li>
                                <?php endif; ?>

                                <?php if ($currentUser[0]->Commissions == 1): ?>
                                </ul>
                            <?php endif; ?>
                        </li>



                        <?php if ($currentUser[0]->messages == 1): ?>
                <!--                            <li><a href="javascript:;"><i class="fa fa-envelope"></i><span>MESSAGES</span></a>
                        <?php endif; ?>
                            <ul class="acc-menu">
                        <?php if ($currentUser[0]->send_msg == 1): ?>
                                                    <li><a href="<?php echo base_url(); ?>Message/Send_Message">SEND MESSAGE</a></li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->rec_msg == 1): ?>
                                                    <li><a href="<?php echo base_url(); ?>Message/Receive_Message">RECEIVE MESSAGE</a></li>
                        <?php endif; ?>
                            </ul>
                        </li>-->


                        <?php if ($currentUser[0]->company == 1): ?>
                            <li><a href="javascript:;"><i class="fa fa-building-o"></i><span>COMPANY PROFILE</span></a>
                            <?php endif; ?>

                            <ul class="acc-menu">
                                <?php if ($currentUser[0]->company_profile == 1): ?>
                                    <li><a href="<?php echo base_url(); ?>Company_Profile/Company_Profile">COMPANY PROFILE</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>







                        <?php if ($currentUser[0]->tools == 1): ?>
                            <li class="nav-separator">TOOLS</li>
                        <?php endif; ?>

                        <?php if ($currentUser[0]->sys_backup == 1): ?>
                            <li><a href="<?php echo base_url(); ?>Tools/DB_Backup"><i class="fa fa-inbox"></i><span>SYSTEM BACKUP</span></a></li>
                        <?php endif; ?>


                        <li><a href="<?php echo base_url() . "index.php/login/logout/" ?>"><i class="fa fa-tasks"></i><span>LOGOUT</span></a></li>




                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>