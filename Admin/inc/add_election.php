<div class="row mt-3 ">
    <div class ="col-4 ">
        <h3>Add New Election</h3>
        <form method ="POST">
            <div class="form-group">
                <input type="text" name ="election_topic" placeholder="Election Topic" class="form-control"  required />
        </div>
        <div class="form-group">
                <input type="number" name ="number_of_candidates" placeholder="Number of Candidates" class="form-control"  required />
        </div>
        <div class="form-group">
                <input type="text" onfocus="this.type='date'" name ="starting_date" placeholder="Starting Date" class="form-control"  required />
        </div>
        <div class="form-group">
        <input type="text" onfocus="this.type='date'" name ="ending_date" placeholder="Ending Date" class="form-control"  required />
        </div>
        <input type="submit" value ="Add" name="addelectionbtn" class="btn btn-success mb-3" />
</form>
</div>
<div class ="col-8">
    <h3>Upcoming Elections</h3>
</div>
</div>