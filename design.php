
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <style>
	.candidate {
	    margin: auto;
	    width: 16vw;
	    padding: 10px;
	    cursor: pointer;
	    border-radius: 3px;
	    margin-bottom: 1em
	}
	.candidate:hover {
	    background-color: #80808030;
	    box-shadow: 2.5px 3px #00000063;
	}
	.candidate img {
	    height: 14vh;
	    width: 8vw;
	    margin: auto;
	}
	span.rem_btn {
	    position: absolute;
	    right: 0;
	    top: -1em;
	    z-index: 10;
	    display: none
	}
	span.rem_btn.active{
		display: block
	}
	
	
</style>
  
</head>
<body >


    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="" id="manage-vote">
                        <input type="hidden" name="voting_id" value="">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h3><b>Title</b></h3>
                            <small><b>Description</b></small>	
                        </div>
                        
                            <hr>
                            <div class="row mb-4">
                                <div class="col-md-12">
                                        <div class="text-center">
                                            <h3><b></b></h3>
                                        <small>Max Selection : <b></b></small>
    
                                        </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                           
                                <div class="candidate" style="position: relative;" data-cid = ''  data-max="" data-name="">
                                        <input type="checkbox"  value="" style="display: none">
                                    <span class="rem_btn">
                                        <label for="" class="btn btn-primary"><span class="fa fa-check"></span></label>
                                    </span>
                                    <div class="item"  data-id="">
                                    <div style="display: flex">
                                        <img src="assets/img/" alt="">
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <large class="text-center"><b></b></large>
    
                                    </div>
                                    </div>
                                </div>
                           
                            </div>
                     
                    </div>
                    <hr>
                    <button class="btn-block btn-primary">Sumbit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.candidate').click(function(){
            var chk = $(this).find('input[type="checkbox"]').prop("checked");
            
            if(chk == true){
                $(this).find('input[type="checkbox"]').prop("checked",false)
            }else{
                var arr_chk = $("input[name='opt_id["+$(this).attr('data-cid')+"][]']:checked").length
                if($(this).attr('data-max') == 1){
                $("input[name='opt_id["+$(this).attr('data-cid')+"][]']").prop("checked",false)
                $(this).find('input[type="checkbox"]').prop("checked",true)
                }else{
                if(arr_chk >= $(this).attr('data-max')){
                        alert_toast("Choose only "+$(this).attr('data-max')+" for "+$(this).attr('data-name')+" category","warning")
                        return false;
                    }
                }
                $(this).find('input[type="checkbox"]').prop("checked",true)
            }
            $('.candidate').each(function(){
                if($(this).find('input[type="checkbox"]').prop("checked") == true){
                    $(this).find('.rem_btn').addClass('active')
                }else{
                    $(this).find('.rem_btn').removeClass('active')
                }
            })
            
        })
        $('#manage-vote').submit(function(e){
            e.preventDefault()
            start_load();
            $.ajax({
                url:'ajax.php?action=submit_vote',
                method:'POST',
                data:$(this).serialize(),
                success:function(resp){
                    if(resp == 1){
                        alert_toast("Vote success fully submitted");
                        setTimeout(function(){
                            location.reload()
                        },1500)
                    }
                }
            })
        })
    </script>
