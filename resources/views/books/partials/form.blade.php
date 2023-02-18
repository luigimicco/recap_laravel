@if ($errors->any())
    <div class="alert alert-danger">
        <h3>Check errors</h3>
    </div>
@endif

<form action="{{ route($route, $book->id) }}" id="{{$idForm}}" method="POST">
    @csrf
    @method($methodRoute)
    <div class="card">
      <div class="card-header">
        <h2 class="text-center mb-2">{{$title}}</h2>
      </div>
      <div class="card-body">
        <div class="form-outline w-25 mb-3">
            <label for="ISBN" class="form-label">ISBN</label>
            <input type="text" class="form-control @error('ISBN') is-invalid @enderror" maxlength="13" id="ISBN" name="ISBN" value="{{ old('ISBN', $book->ISBN) }}">
            @error('ISBN')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror    
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror""  maxlength="200" id="title" name="title" value="{{ old('title',$book->title) }}">           
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror    

        </div>
        <div class="form-outline w-25 mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror""  maxlength="100" id="author" name="author" value="{{ old('author',$book->author) }}">           
            @error('author')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror    

        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror"" id="thumb" name="thumb" value="{{ old('thumb',$book->thumb) }}">    
            @error('thumb')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror    
       
        </div>
        <div class="row">
            <div class="col-4">
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror"" id="price" name="price" value="{{  old('price', $book->price) }}">
                    @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror    

                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="pages" class="form-label">Pages</label>
                    <input type="number" class="form-control @error('pages') is-invalid @enderror"" id="pages" name="pages" value="{{ old('pages', $book->pages) }}">
                    @error('pages')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror    

                </div>                
            </div>
            <div class="col-4">
                <div class="mb-3">
                    <label for="year" class="form-label">Year</label>
                    <input type="number" class="form-control @error('year') is-invalid @enderror"" id="year" name="year" value="{{  old('year', $book->year) }}">
                    @error('year')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror    
                </div>                
            </div>

        </div>



        <div class="mb-3">
          <input class="form-check-input" type="checkbox" value="1" {{ old('soldout', $book->soldout) ? 'checked' : '' }} name="soldout" id="soldout">
          <label class="form-check-label" for="soldout">Soldout</label>
        </div>
      </div>
      <div class="card-footer">
        <a href="{{ route('books.index')}}" class="btn btn-dark">Cancel</a>
        <button type="submit" class="btn btn-success {{$btnClass}}">Submit</button>
      </div>
    </div>
</form>

