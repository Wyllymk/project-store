
<?php
/**
 * Template Name: custom-Checkout
 */
?>
 <?php get_header();?>
 <?php
global $wpdb;
$table= $wpdb->prefix.'contact';
$records = $wpdb->get_results("SELECT * FROM $table");
?>
<style>
      .jumbotron{
        display: flex;
        border: 1px solid; 
        padding: 10px;
        margin-top: 20px;
    }
    .content{
        display: left;
        border: 1px solid;
    }
    .container2{
      margin-left: 30px;
        display: right;
        border: 1px solid;
        width: 600px;
    }
    .cont2{
      margin: 15px;
      margin-top: 20px;
      display: flex;
      flex-direction: row;
    }
    .cont-1{
      display: block;
      float: left;
    }
    .cont-2{
      display: block;
      float: right;
      margin-left: 40px;
    }
    .cont3{
      margin: 15px;
      margin-top: 20px;
    }
    .cont4{
      margin: 15px;
      margin-top: 20px;
    }
    .cont5{
      margin: 15px;
      margin-top: 20px;
    }
    .cont6{
      margin-top: 20px;
    }
    .cont-6{
      margin: 20px;
    }
    .cont-prod{
      display: flex;
      flex-direction: row;
    }
    .cont-prod1{
      display: flex;
      flex-direction: row;
      border: 1px solid;
      margin: 15px;
    }
    .cont-details{ 
      margin: 15px;
      padding: 10px;
      border: 1px solid;
    }
    .container3{
      text-align: center;
      display: block;
    }
    .cont-btn{
      float: right;
      margin: 20px;
    }
    .cont-prod img{
      width: 370px;
    }
    .cont-1a{
      border: 1px solid;
      width: 150px;
      height: 40px;
      border-radius: 2px;
    }
    .first{
      border: 1px solid;
      width: 150px;
      height: 40px;
      border-radius: 2px;
    }
    @media only screen and (max-width: 1000px) {
  .jumbotron{
        display: block;
        border: 1px solid; 
        padding: 10px;
        margin-top: 10px;
    }
    .container2{
      width: auto;
      display: block;
      border: 1px solid; 
      padding: 10px;
      margin-top: 10px;
    }
    .cont2{
      margin: 15px;
      margin-top: 20px;
      flex-direction: column;
    }
    .cont3{
      margin: 15px;
      margin-top: 20px;
    }
    .cont4{
      margin: 15px;
      margin-top: 20px;
    }
    .cont5{
      margin: 15px;
      margin-top: 20px;
    }
    .cont6{
      margin-top: 20px;
    }
    .cont-6{
      margin: 10px;
    }
    .cont-prod{
      display: block;
      flex-direction: row;
    }
    .cont-prod1{
      display: block;
      flex-direction: row;
      border: 1px solid;
      margin: 10px;
    }
    .cont-details{ 
      margin: 10px;
      padding: 10px;
      border: 1px solid;
    }
    .container3{
      text-align: start;
      display: flex;
    }
    .cont-3a{
      float:left;
    }
    .cont-3b{
      float:right;
      margin-left: 100px;
    }
    .cont-prod img{
      height: 200px;
      width: 250px;
    }
    .cont-1a{
      border: 1px solid;
      width: 120px;
      border-radius: 2px;
    }
    .first{
      border: 1px solid;
      width: 120px;
      border-radius: 2px;
    }
    .cont4a{
      width: 300px;
    }
}
</style>
 
<div class="jumbotron justify-content-center">
<div class="content">
<div class="cont1">
    <h2 style="margin-left: 10px;">1. Checkout</h2>
    <hr>
</div>
<div class="cont2">
    <form action="" method="get">
      <div class="cont-1">
      <label for="fullname">First Name *<br></label><br>
      <div class="cont-1a">
        <?php 
        foreach($records as $record){
        ?>
        <h4 style="margin: 5px;"><?php echo $record->fname;?></h4>
         <?php }?>
      </div>
       <br>
      </div>
    <div class="cont-2">
    <label for="lastname">Last Name *<br></label><br>
    <div class="first">
      <?php 
      foreach($records as $record){
        ?>
        <h4 style="margin: 5px;"><?php echo $record->lname;?></h4>
      <?php }?> 
    </div><br>
    </div>
    </form>
</div>
<div class="cont3">
   <p>Mobile phone number *</p>
   <div class="first">
      <?php 
      foreach($records as $record){
        ?>
        <h4 style="margin: 5px;"><?php echo $record->phone;?></h4>
      <?php }?> 
    </div><br>
</div>
<div class="cont4">
<p><label for="delivery">Delivery Address</label></p>
<textarea name="delivery" id="delivery" cols="40" rows="5">
  <?php 
      foreach($records as $record){
        ?>
        <?php echo $record->address;?>
      <?php }?> 
  </textarea>
</div>
<hr>
<h2 style="margin-left: 10px;">2. Delivery Method</h2>
<hr>
<div class="cont5">
    <p>Select delivery method below</p>
  <select style="width:200px; height: 40px;">
  <option value="pick-up-station">Pick Up Station</option>
        <option value="Shipping">Shipping</option>
        <option value="referall">Referall</option>
  </select>
</div>
<div class="cont6">
    <hr>
    <h2 style="margin-left: 10px;">3. Payment Method</h2>
    <hr> 
    <div class="cont-6">
    <p>Select payment method below</p>
    <select style="width:200px; height: 40px;">
    <option value="mpesa">Mpesa</option>
        <option value="Paypal">Paypal</option>
        <option value="Credit-card">Credit card</option>
  </select>
  </div>
</div>
</div>
<div class="container2">
    <h2 style="text-align: center;">ORDER SUMMARY</h2>
    <hr>
    <h2 style="text-align: center;">YOUR ORDER</h2>
    <hr>
    <div class="cont-prod1">
      <div class="cont-prod">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/gear.png" alt="">
      </div>
      <div class="cont-details">
        <h2>V6 Gear Box</h2>
        <hr>
        <h4>Ksh 160,000</h4>
        <hr>
        <h4>Qty 1</h4>
      </div>
    </div>
    <div class="cont-prod1">
      <div class="cont-prod">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/filter.jpg" alt="">
      </div>
      <div class="cont-details">
        <h2>All Purpose Filter</h2>
        <hr>
        <h4>Ksh 3000</h4>
        <hr>
        <h4>Qty 2</h4>
      </div>
    </div>
    <div class="container3">
      <div class="cont-3a">
      <h2>Sub Total: Ksh 166000</h2>
      </div>
      <div class="cont-3b">
      <a href="https://www.paypal.com/ke/signin"><button type="button" class="btn btn-secondary">Proceed</button></a> 
      </div>
    
    </div>
</div>

</div>
<?php get_footer(); ?>