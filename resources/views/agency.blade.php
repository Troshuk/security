@extends('layouts.app')
@section('content')
<?php
$zipCode = isset($_GET['zipCode']) ? $_GET['zipCode'] : '';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agency Finder</div>

                <div class="card-body">
                    <form method="GET">
                        <div class="form-group row">
                            <label for="zip-code" class="col-md-4 col-form-label text-md-right">Zip Code</label>

                            <div class="col-md-6">
                                <input id="zipCode" class="form-control" value="{{ $zipCode }}" name="zipCode" autofocus>
                            </div>
                                <button id="submit" class="btn btn-primary">
                                    Find
                                </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if(!$zipCode)
                        All agencies
                    @elseif(count($agencies))
                        The agency for zip code: <b>{{ $zipCode }} <i>{{ $agencies[0]->city_name }}</i></b> is:
                    @else
                        Cannot find agency by this zip code: <b>{{ $zipCode }}</b>
                    @endif
                </div>
                <div class="card-body">
                    <table style="width:100%">
                      <tr>
                        <th>Type</th>
                        <th>Agency</th>
                        <th>Phone</th>
                      </tr>
                        @if($agencies)
                            @foreach($agencies as $agency)
                                <tr>
                                    <td>{{$agency->agencyType->name}}</td>
                                    <td>{{$agency->name}}</td>
                                    <td>{{$agency->phone}}</td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
