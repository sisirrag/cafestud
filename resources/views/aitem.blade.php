@extends("atheme")
@section("content")

<div class="inner-banner"></div>
    <div class="container">
      <div class="row mt-4">
        <div class="col">
        <center><h3><font color="white">ITEMS</font></h3></center>              
        </div>
      </div>
      <div class="row mt-4">
        <div class="col">        
              <h4><font color="white">Add/Remove</font></h4>
        </div>
      </div>
        <div class="row mt-4">            
            <div class="col">           

              <div class="input-group">
                <input type="text"  name="itemname" placeholder="Item Name" class="form-control"> &nbsp;
                
                <select class="form-select" name="itemtype" id="inputGroupSelect04" aria-label="Example select with button addon">
                  
                  <option value="Breakfast">Breakfast</option>
                  <option value="Meal">Meal</option>
                  <option value="Dinner">Dinner</option>
                </select>&nbsp;
                <button class="btn btn-outline-light" type="submit" >Add</button> &nbsp;
                <button class="btn btn-outline-secondary" type="button" onclick="alert('Removed Successfully');">Remove</button>
              </div>
              
            </div>
        </div>
        <div class="row mt-4">
          <div class="col">
          <h4><font color="white">View</font></h4>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col">
          
              <div class="input-group">
                <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                  <option selected>All</option>
                  <option value="Breakfast">Breakfast</option>
                  <option value="Meal">Meal</option>
                  <option value="Dinner">Dinner</option>
                </select>
                <a href="#" class="btn btn-outline-warning">Go</a>
              </div>
          </div>
          <div class="col">
          <table class="table table-dark table-hover mt-4" style="display: block;overflow-x: auto;white-space: nowrap;">
      <thead>
        
        <th>Item No</th>
        <th>Item Name</th>     
        
      </thead>
      @foreach($items as $row)
      <tr>            
            <td>{{$row['itemno']}} </td>
            <td>{{$row['itemname']}}</td>  
        </tr>
      @endforeach
      
    </table>
          </div>
        </div>
    </div>
    </form>
   @endsection