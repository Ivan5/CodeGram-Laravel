@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-qro1-1.cdninstagram.com/vp/5598b0ada442dbc48868501b68e2afa8/5D594055/t51.2885-19/s150x150/39613316_2121937551361031_2807744821475672064_n.jpg?_nc_ht=scontent-qro1-1.cdninstagram.com" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
        <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>1153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">
                {{ $user->name }}
            </div>
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus illum molestias praesentium officia excepturi ipsa hic iusto nobis totam quisquam repudiandae dolorem cum, consequatur id omnis suscipit incidunt eos? Voluptatibus.
            </div>
            <div>
                <a href="#">codeGram.com</a>
            </div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://scontent-qro1-1.cdninstagram.com/vp/db019a2ec4c62c3286b684f6fa7507db/5D6F1A49/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/37945378_337801236763394_5945292776196650815_n.jpg?_nc_ht=scontent-qro1-1.cdninstagram.com" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-qro1-1.cdninstagram.com/vp/4cdc656d9957e0488af45a8ea77c1ce9/5D6FEAC0/t51.2885-15/sh0.08/e35/c135.0.810.810a/s640x640/38052663_262391380926682_452586276214800384_n.jpg?_nc_ht=scontent-qro1-1.cdninstagram.com" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-qro1-1.cdninstagram.com/vp/aafd4e446f3df5586918bf078ed63d6d/5D5CA8D1/t51.2885-15/sh0.08/e35/c135.0.810.810a/s640x640/26268996_833616743483978_6306116965354176512_n.jpg?_nc_ht=scontent-qro1-1.cdninstagram.com" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection
