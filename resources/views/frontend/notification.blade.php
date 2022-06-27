@extends('frontend.app')

<div class="@section("class","singleclasspage")">
    @section("title2","MY PROFILE")
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@section('content')
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link  ms-0" href="/profile" >Profile</a>
        <a class="nav-link active" href="/notification"  >Notifications</a>
        <a class="nav-link " href="/changepassword"  >Change Password</a>
        <a class="nav-link" href="/feedback"  >Feedback</a>
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div class="card mb-4 ">
                    <div class="card-header">
                        <h5 class="card-title">My Notifications</h5>
                    </div>
                    <div class="card-body">
                    @foreach ($feedback as $item)
                        <div style="cursor:pointer;border-bottom:1px solid lightgray;" data-toggle="modal" data-target="#modal{{$item->id}}" class="row mb-2 pb-2">

                            <div class="col-sm-1" style="align-self:center;" ><i class="fa fa-bell" style="font-size:30px;" ></i></div>
                            <div class="col-sm-11"><div style="color:gray;">Feedback <span style="float:right">{{$item->created_at}}</span></div><div style="overflow:hidden;white-space: nowrap ;text-overflow: ellipsis;"> {{$item->feedback}}</div></div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="modal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                <div class="modal-body">
                                <h5>Feedback</h5><hr>
                                {{$item->feedback}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    </div>
            </div>

        </div>
        </div>
    </div>
</div>
@endsection
