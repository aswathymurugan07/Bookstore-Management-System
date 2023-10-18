<?php
  $title = "Contact";
  require_once "./template/header.php";
?>
 <body style="background-repeat:no-repeat; background-attachment: fixed;background-size: cover;background-image:url('https://images.unsplash.com/photo-1519327232521-1ea2c736d34d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80')"> 
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 text-center">
            <form class="form-horizontal"  >
                <fieldset>
                   
                    <img src="https://cdn4.iconfinder.com/data/icons/avatars-21/512/avatar-circle-human-male-5-512.png" height="200px" style="margin-bottom:50px;margin-left:30px">
                    <div class="form-group">
                        <label for="inputName" class="col-lg-2 control-label"></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputName" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label"></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label"></label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="textArea" placeholder="Feedback"></textarea>
                                                    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
 </body>