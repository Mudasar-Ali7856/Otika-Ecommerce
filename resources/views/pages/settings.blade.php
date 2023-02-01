
@extends('layout.app')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    @if (session()->has('message'))
                        <div class="alert alert-success mt-3" role="alert">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="col-md-10 offset-md-1">
                        <form action="{{ route('settings') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="1">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Store Settings</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Store Name</label>
                                            <input type="name" class="form-control" value="{{$setting->name ?? ''}}" name="name" placeholder="Store Name">
                                            @if ($errors->has('name'))
                                                <div class="error text-danger">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" value="{{$setting->email ?? ''}}" name="email" placeholder="Email">
                                            @if ($errors->has('email'))
                                                <div class="error text-danger">
                                                    {{ $errors->first('email') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="">
                                        <label>Logo:</label>
                                        @if ($setting->image)
                                        <img style="height: 50px;" src="{{asset('/images/'.$setting->image)}}" alt="image">
                                    </div>
                                        @endif
                                        <input type="file" name="image" value="{{$setting->image ?? ''}}" class="form-control">
                                        @if ($errors->has('image'))
                                            <div class="error text-danger">
                                                {{ $errors->first('image') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="contact">Contact Number</label>
                                        <input type="contact" class="form-control" value="{{$setting->number ?? ''}}" name="number" placeholder="Contact Number">
                                        @if ($errors->has('number'))
                                            <div class="error text-danger">
                                                {{ $errors->first('number') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="url">Facebook Url</label>
                                            <input type="url" name="facebook" value="{{$setting->facebook ?? ''}}" class="form-control" placeholder="url">
                                            @if ($errors->has('facebook'))
                                                <div class="error text-danger">
                                                    {{ $errors->first('facebook') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="url">Instagram Url</label>
                                            <input type="url" name="instagram" value="{{$setting->instagram ?? ''}}" class="form-control" placeholder="url">
                                            @if ($errors->has('instagram'))
                                                <div class="error text-danger">
                                                    {{ $errors->first('instagram') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="url">Youtube Url</label>
                                            <input type="url" name="youtube" value="{{$setting->youtube ?? ''}}" class="form-control" placeholder="url">
                                            @if ($errors->has('youtube'))
                                                <div class="error text-danger">
                                                    {{ $errors->first('youtube') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="url">LinkedIn Url</label>
                                            <input type="url" name="linkedin" value="{{$setting->linkedin ?? ''}}" class="form-control" placeholder="url">
                                            @if ($errors->has('linkedin'))
                                                <div class="error text-danger">
                                                    {{ $errors->first('linkedin') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row mb-5">
                                            <label class="col-form-label text-md-right col-md-6">Description</label>
                                            <div class="col-sm-8">
                                              <textarea class="summernote" name="desription" value="{{$setting->desription ?? ''}}" id="task-textarea"></textarea>
                                              @if ($errors->has('desription'))
                                              <div class="error text-danger">
                                                  {{ $errors->first('desription') }}
                                              </div>
                                          @endif
                                            </div>
                                          </div>
                                    <div class="form-group">
                                        <label for="footer">CopyRight</label>
                                        <input type="text" name="copyright" value="{{$setting->copyright ?? ''}}" class="form-control" placeholder="CopyRight">
                                        @if ($errors->has('copyright'))
                                            <div class="error text-danger">
                                                {{ $errors->first('copyright') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">Submit</button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
<script>
    ClassicEditor
        .create( document.querySelector('#task-textarea') )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
