<?php

  /*
   * Project    : EIS Subscription Module
   * EAO IT Services Pvt. Ltd. | www.eaoservices.com
   * Copyright reserved @2017

   * File Description :

   * Created on : 3 Oct, 2017 | 11:02:17 PM
   * Author     : Bilal Wani
   * Email      : bilal.wani@eaoservices

   */

  session_start();
  $_SESSION["GET"] = $_GET;
  $_SESSION["POST"] = $_POST;
  $_SESSION["FILES"] = $_FILES;
  
  
  
  
  header("location: eis-team-controller.php");


