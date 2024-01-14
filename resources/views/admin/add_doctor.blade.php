<!DOCTYPE html>
<html lang="en">
<head>

<style type="text/css">

.label{
    display: inline-block;
    width: 200px;
}

</style>

    @include('admin.css')

</head>
<body>
    <div class="container-scroller">
        
    

    @include('admin.sidebar')

    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
        
        <div class="container" style="padding-top:100px;">

          <form action="{{url('upload_doctor')}}" method="" enctype="multipart/form-data">
    
            <div style="padding: 15px;">
    
              <label for="doctor_name">Doctor Name</label>
    
              <input type="text" name="name" id="name" 
              style="color: black;"
              placeholder="write the name">
    
            </div>
    
            <div style="padding: 15px;">
    
              <label for="phone">phone number</label>
    
              <input type="number" name="phone" id="phone" 
              style="color: black;"
              placeholder="write the phone number">
    
            </div>
    
            <div style="padding: 15px;">
    
              <label for="specialization">Specialization</label>
    
              <select name="specialization" id="" style="color: black">
                
                <option value="">--Select--</option>
                <option value="Eye" style="color: black">Eye</option>
                <option value="Dental" style="color: black">Dental</option>
                <option value="Heart" style="color: black">Heart</option>
                <option value="Women and Children" style="color: black">Women and Children</option>
    
              </select>
            </div>
    
            <div style="padding: 15px;">
    
              <label for="room_number">Room Number</label>
    
              <input type="text" name="room_number" id="room_number" 
              style="color: black;"
              placeholder="write the room number">
    
            </div>
    
            <div style="padding: 15px;">
    
              <label for="doctor_image">Doctor Image</label>
    
              <input type="file" name="image" id="doctor_image" 
              style="color: white;">
    
            </div>
    
            <div style="padding: 15px;">
              <input type="submit" value="Submit" class="btn btn-success">
    
            </div>
    
          </form>
    
        </div>
           
    </div>
</div>
</body>
</html>