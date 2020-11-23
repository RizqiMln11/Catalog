<section class="s-extra">

        <div class="row">

             <!-- end popular -->

            <div class="col-four md-twelve tab-full end">
                <div class="row">
                    <div class="col-six md-twelve mob-full categories">
                        <h3>Categories</h3>
        
                        <ul class="linklist">
                            @foreach($categories as $category)
                            <li>
                                <a href="{{ route('category.single', ['id' => $category->id ]) }}"> {{ $category->name }} </a>
                            </li>
                         @endforeach
                        </ul>
                    </div> <!-- end categories -->
                </div>
            </div>
        </div> <!-- end row -->

    </section>