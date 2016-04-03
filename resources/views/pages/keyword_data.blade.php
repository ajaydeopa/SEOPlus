@extends('layouts.app', ['link' => 'Add URL'])

@section('content')

<div style="position: fixed; top: 100px; left: 30px;"><a href="{{ URL::to('url_rank/') }}"><button class="btn bgm-red btn-float waves-effect"><i class="zmdi zmdi-arrow-back"></i></button></a></div>

<div class="col-md-10 col-md-offset-1">

    <div class="card">
                                <div class="card-header  m-b-20">
                                    <h2>Serarch Results for <h3><div class="c-blue text-uppercase">{{ $keyword }}</div></h3></h2>

                                </div>

                                <div class="card-body card-padding">

                                        <blockquote class="m-b-25">

                                            <div class="clearfix"></div>
                                             @if($check == 'fail')
                    <h3>Sorry, some error ocuured. Please try again</h3>
                @else
                    @if(count($res) == 0)
                        <h4>No result in top 100</h4>
                                            <div class="clearfix"></div>
                    @else
                        <h4>Rank of {{ $domain }} for {{ $keyword }}:{{ $res[0]['rank'] }}</h4>
                                            <div class="clearfix"></div>
                                            <br>
                        <h4>Top links</h4>
                                            <div class="clearfix"></div>
                        @foreach($res as $i)
                            <h5><a href="{{ $i['url'] }}"> {{ $i['url'] }} </a></h5>
                            <h5><a href="{{ $i['url'] }}">{{ $i['url'] }}</a></h5>
                                            <div class="clearfix"></div>
                        @endforeach
                    @endif
                     @endif

                                        </blockquote>


                                   Details over
                            </div>
                        </div>
    </div>




@endsection
