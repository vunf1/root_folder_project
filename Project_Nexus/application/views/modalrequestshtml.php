<style>
    #div-create:hover{
    border:1px solid black;
}
</style>
<script>
    
    
    
    
</script>


  <?php foreach($datas as $row){ 
     ?> 


<div align="center" class="form-group">
    <a> Settings </a><br>
    
<div id="div-create">
<a >Url</a>

<input id='new_url' value="<?php echo $row->URL; ?>"   ></input><br> 
</div>
<div id="div-create">
<a >Serial</a>

<input id='new_serial' value="<?php echo $row->serial; ?>"  ></input><br> 
</div>
   
<div id="div-create">
<a >Hw Fingerprint</a>
<input id='new_hwfingerprint' value="<?php echo $row->hwfingerprint; ?>"   ></input><br> 

</div>

<div id="div-create">
<a >Total Cd's Burn</a>

<input id='new_totalcdsburned' value="<?php echo $row->totalcdsburned; ?>"   ></input><br> 
</div>
    
<div id="div-create">
<a >Date</a>
<input id='new_date' data-format="dd/MM/yyyy" type="text"  value="<?php echo $row->date; ?>" ></input><span class="add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span><br> 

</div>

<div id="div-create">
<a >Type</a>

<input id='new_type' value="<?php echo $row->type; ?>"   ></input><br> 
</div>

<button type='button' class='btn btn-default' data-dismiss='modal'  id='save_req' >Save</button>
<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
<button id='btdelete_req' data-title='<?php echo $row->Id; ?>' type='button' class='btn btn-default' data-dismiss='modal' >Delete</button><br>
  

<br>
</body> 
</div>

      <?php }; ?> 

