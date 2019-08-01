      <div class="col-lg-2">

        <h5 class="my-4">Filter by category</h5>
        <div class="list-group sticky-top">
        	@foreach ($categories as $category)
          <a href="#" class="list-group-item">{{ $category-> categoryName }}</a>
          	@endforeach
        </div>
      </div>