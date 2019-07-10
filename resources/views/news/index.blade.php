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

<div class="container">
  <h2>News Table <a href="/news/create" class="btn btn-md btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> 新增</a></h2>
  <table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Start</th>
        <th>Expired</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($newsList as $news)
            <tr>
                <td>{{$news->title}}</td>
                <td>{{$news->content}}</td>
                <td>{{$news->startDatetime}}</td>
                <td>{{$news->expiredDatetime}} </td>
                <td>
                        <span class="pull-right">
                            <form method="post" action="/employees/{{$news->newsId}}"> 
                                <a href="/news/{{$news->newsId}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span> 修改</a> | 
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> 刪除</button>
                            </form>
                        </span>
                    </td>
            </tr>
        @endforeach
      
      
    </tbody>
  </table>
</div>

</body>
</html>
