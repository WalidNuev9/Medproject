@extends('layouts.app')
@section('title','dashboard')
@section('content')
<div class="col-md-10 offset-1 ">
    <div class="mb-4 pt-5">
        <h3 class="title">Messages Reçus</h3>
    </div>
    <div>
        <table class="table">
            <thead>
              <tr class="">
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Il y a</th>
                <th class="Messages" scope="col">Message</th>
              </tr>

            </thead>
            <tbody>
                @foreach ( $messages as $key => $message )
                <tr class="dashboard">
                    <th scope="row">{{$key +1}}</th>
                    <td>{{$message->name}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->created_at->diffForHumans()}}</td>
                    <td>{{$message->message}}</td>
                  </tr>
                @endforeach

            </tbody>
          </table>
    </div>
</div>
@endsection
