<?php
    include 'header.php';
?>
<style>
    .form-control{
        width: 50%;
    }
    .form-select{
        width: 50%;
    }
    .container{
        background-color: #F7C8E0;
        
    }
</style>
<center>
<div class="container mb-5 mt-5 pt-5 pb-5">
<form>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Judul Cerita</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>
    <div class="mb-3">
        <label for="">Sebab</label>
     <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    </div>
     <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Alasan</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form></div>
</center>