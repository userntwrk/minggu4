<link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css')}}">
	<div class="waxon_tm_about" id="article">
		<div class="container">
			<div class="inner">
				<div class="left">
					<img class="thumbnail" src="{{$id->image}}" alt="" />  <!-- Animation Image classes: thumbnail, thumbnail-2, thumbnail-3, thumbnail-4,-->
				</div>
				<div class="right">
					<div class="name">
						<h3>{{$id->id}} | <span class="bg">{{$id->title}}</span></h3>
						<span class="content">{{$id->content}}</span>
					</div>
					<div class="text"><br>
						<p>created_at : {{$id->created_at}}</p>
					</div>
					<div class="waxon_tm_button" data-position="left">  <!-- Position: left, center, right -->
							<span>updated_at : {{$id->updated_at}}</span>
					</div>
				</div>
			</div>
		</div>
	</div>
