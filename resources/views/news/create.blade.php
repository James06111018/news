<!DOCTYPE html>
<html lang="en">
<head>
  <title>News List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<form method="post" action="/news" class="form-horizontal">
    @csrf
    <fieldset>
    
    <!-- Form Name -->
    <legend>Create News</legend>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="title">Title</label>  
      <div class="col-md-4">
      <input id="title" name="title" type="text" placeholder="please enter title" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Textarea -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="context">Context</label>
      <div class="col-md-4">                     
        <textarea class="form-control" id="context" placeholder="please enter something" name="context" required=""></textarea>
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="start">Start Datetime</label>  
      <div class="col-md-4">
      <input id="start" name="start" type="text" placeholder="please enter start datetime" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="expired">Expired Datetime</label>  
      <div class="col-md-4">
      <input id="expired" name="expired" type="text" placeholder="please enter expired datetime" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="okButton"></label>
      <div class="col-md-8">
        <button type="submit" id="okButton" name="okButton" class="btn btn-success">Save</button>
        <a class="btn btn-danger" href='/home/index'>Cancel</a>
      </div>
    </div>
    
    </fieldset>
    </form>
</body>
</html>