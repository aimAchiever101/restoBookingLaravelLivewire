<div class="picture1" style="color:gold;background-color:black;">
<h1 style="background-color:black;"class ="text-center">welcome</h1>
<div class="row mb-5">
    <div class="col-sm-8">
    <form wire:submit.prevent="user_info" class="text-center"style="background-color:black;
        margin-left:450px;font-size:25px;">
         <div >
                <label for="name">admin:</label>
                <input type="text"wire:model="name">
         </div>
    
    </form>
    </div>
</div>
<div class="row mt-5 mb-5">
    <div class="col-sm-10 text-center">
        <form wire:submit.prevent="staff_info"class="text-center"style="background-color:black;
        margin-left:200px;font-size:25px;">
            <div>
                <label for="cdate">Date:</label>
                <input type="date"wire:model="cdate">
            </div>
            <div>
                <label for="present">No of present staff today:</label>
                <input type="number"wire:model="present">
            </div>
            <div>
                <label for="absent">Name of absentees: </label>
                <input type="text"wire:model="absent">
            </div>
            <div>
                <label for="sale">Total Sale Today:</label>
                <input type="number"wire:model="sale">
            </div>
            <div>
                <input type="submit" value="add data">
            </div>
            <div>
                   <a href="/new-staff"style="color:silver">click here to add new staff</a>
            </div>
            
        </form>
    </div>

</div>
   
    
</div>
