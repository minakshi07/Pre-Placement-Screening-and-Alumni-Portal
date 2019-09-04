
   <form action="/applyform.php" method="post">
     <div class="container">
       <h1> Job Application for Microsoft</h1>
       <p>Please fill in this form to apply to Microsoft.</p>
       <hr>
       <div class="col-md-6" style="margin-left:100px;">
         <h4> Select a post you want to apply for</h4><br>
      <select class="form-control" id="sel1" name="position" onchange="showUser(this.value)">
        <option>Business Analyst</option>
        <option>Frontend developer</option>
        <option>Backend developer</option>
        <option>Marketting analyst</option>
      </select>


     </div>
