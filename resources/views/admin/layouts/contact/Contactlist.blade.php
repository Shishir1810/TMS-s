@extends('admin.welcome')
@section('contents')
<style>
    .setWidth{
        max-width:100px;
    }
    .concat div{
        overflow:hidden;
        -ms-text-overflow:ellipsis;
        -o-text-overflow:ellipsis;
        text-overflow:ellipsis;
        white-space:nowrap;
        width:inherit;
    }

    a:hover i {
            transform: scale(1.5);
        }
        .setWidth{
        max-width:100px;
    }
    .concat div{
        overflow:hidden;
        -ms-text-overflow:ellipsis;
        -o-text-overflow:ellipsis;
        text-overflow:ellipsis;
        white-space:nowrap;
        width:inherit;
    }

    </style>

    <div class="content-wrapper"style="overflow-y:scroll;">
    <h3 class="font-weight-bold">Contact List</h3>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-row">

    <div class="form-group col-md-6">

                    <table class="table">
                        <div class="row">
                            <div class="col-md-8 grid-margin">
                                <table class="table text-center" >
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Company name</th>
                                            <th style="width= 100px 1important;">Address</th>
                                            <th style="width= 100px 1important;">Phone</th>
                                            <th style="width= 100px 1important;">email</th>
                                            <th style="width= 100px 1important;">Country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($contacts as $key=>$contact)
                                      <tr>
                                        <th>{{$key+1}}</th>
                                        <td>{{$contact->company_name}}</td>
                                        <td>{{$contact->address}}</td>
                                        <td >{{$contact->phone}}</td>
                                        <td >{{$contact->email}}</td>
                                        <td >{{$contact->country}}</td>
                                      </tr>
                                      @endforeach
                                   </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
