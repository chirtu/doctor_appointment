<!DOCTYPE html>
<html lang="en">
  @include('admin.css')
  <body>
    <div class="container-scroller">
    
     @include('admin.sidebar') 
      <!-- partial -->
       @include('admin.navbar')

       <div class="container-fluid page-body-wrapper">

    <div class="container">
      <form action="">

        <div>
          <label for="doctor_name">Doctor Name</label>
          <input type="text" name="name" id="name" placeholder="write name of doctor">
        </div>
      </form>

    </div>
       
 
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
   @include('admin.script')
  </body>
</html>