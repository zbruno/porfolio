<div class="single-project {{$name}}">
  <div class="row">
    <div class="col-lg-6 col-md-6">
      <a href="{{$url}}" target="_blank"><img src="{{$image}}" alt="" class="project-image"></a>
    </div>
    <div class="col-lg-6 col-md-6">
      <h3 class="dark-text">{{$title}}</h3>
      <div class="project-description">{{$text}}</div>
      <div class="project-information">
        <ul>
          <li><span class="dark-text">Date: </span> {{$date}}</li>
          <li><span class="dark-text">Fields: </span> {{$fields}}</li>
          <li><span class="dark-text">Client: </span> {{$client}}</li>
          <li><span class="dark-text">URL: </span><a href="{{$url}}" target="_blank">{{$linkText}}</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>