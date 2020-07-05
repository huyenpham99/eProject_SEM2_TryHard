<ul class="product-categories">
        @foreach(\App\Category::all() as $category)
            <li><a href="{{$category->getCategoryUrl()}}">{{$category->__get("category_name")}}</a></li>
        @endforeach
</ul>
