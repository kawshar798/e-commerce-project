<?php
require_once "../vendor/autoload.php";
use App\classes\Order;
$order = new Order();
$query_result = $order->select_all_order_info();

?>

<div class="x_panel">
    <div class="x_title">
        <h2>Category manage</h2>

        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label></div></div></div><div class="row"><div class="col-sm-12">
                    <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Oder No</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >Customer Name</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >Order Total</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >Order status</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >Payment Type</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" > Payment Status</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Action</th>

                        </tr>
                        </thead>


                        <tbody>
                        <?php

                        if($query_result){
                            $i=1;

                            while($order_info = mysqli_fetch_assoc($query_result)){?>


                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td><?php echo $order_info['first_name'];?></td>
                                    <td><?php echo $order_info['order_total'];?></td>
                                    <td><?php echo $order_info['order_status'];?></td>
                                    <td><?php echo $order_info['payment_type'];?></td>
                                    <td><?php echo $order_info['payment_status'];?></td>
                                  

                                    <td>
                                            <a href="view_order.php?order_id=<?php echo $order_info['order_id'];?>" class="btn btn-info" title="Order View"><i class="fa fa-plus-square"></i></a>


                                            <a href="?status=published&&order_id=<?php echo $order_info['order_id'];?>" class="btn btn-warning" title="Published"><i class="fa fa-arrow-down"></i></a>




                                        <a href="edit_brand.php?order_id=<?php echo $order_info['order_id'];?>" class="btn btn-success" title="Edit"><i class="fa fa-edit"></i></a>
                                        <a href="?status=delete&&order_id=<?php echo $order_info['order_id'];?>" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>

                                    </td>
                                </tr>
                            <?php }
                        }



                        ?>


                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row"><div class="col-sm-5"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                </div>
                <div class="col-sm-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                        <ul class="pagination"><li class="paginate_button previous disabled" id="datatable_previous">
                                <a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous</a>
                            </li>
                            <li class="paginate_button active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a>
                            </li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0">2</a>
                            </li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0">3</a>
                            </li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0">4</a>
                            </li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0">5</a>
                            </li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0">6</a>
                            </li><li class="paginate_button next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0">Next</a></li></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>