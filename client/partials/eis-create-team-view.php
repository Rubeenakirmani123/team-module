<?php

/*
 * Project    : EIS Login Module
 * EAO IT Services Pvt. Ltd. | www.eaoservices.com
 * Copyright reserved @2017

 * File Description :

 * Created on : 13 Jul, 2017 | 4:52:51 PM
 * Author     : Bilal Wani
 * Email      : bilal.wani@eaoservices

 * History:
 * Author
 */

?>

<div class="container-fluid" align="center">
    <div class="eis-subscribe" id="eis-subscribe-screen">
       <h1> Create EIS  Team  </h1>
        <form action="" class="form-horizontal" method="get" >
            <div class="eis-input-group">
                <span class="eis-add-on"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
            </div>
            <br>
            <div class="eis-input-group">
                <span class="eis-add-on"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" class="form-control" name="designation" placeholder="Enter Designation" required>
            </div>
            <br>
            <div class="eis-input-group">
                <span class="eis-add-on"><span class="glyphicon glyphicon-user"></span></span>
                <input type="file" name="pic" accept ="image/*" required> 
            </div>
               <input type="text" value="<?=  MSG_CREATE_MEMBERS ?>" name="msg_id" hidden="">
            
            <br>
            
            <br>
            <button type="submit" class="btn btn-lg btn-info">Submit</button>
        </form>
    </div>
</div>

