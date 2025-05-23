<div class="py-5">
    <div class="container">
        <h2 class="text-center">{{ trans('website_trans.trend_category') }}</h2>

        <div class="owl-carousel trend_category trend_product owl-theme py-5">
            @foreach ($categories as $category)
                <div class="item">
                    <a href="{{ route('get_category_slug', $category->slug) }}">
                        <div class="card my-5" style="height: 600px">
                            <img src="{{ asset($category->image) }}" class=" card-img-top img-responsive"
                                style="height: 300px;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $category->meta_title }}</h5>
                                <p class="card-text">{{ Str::limit($category->meta_description) }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
</div>
