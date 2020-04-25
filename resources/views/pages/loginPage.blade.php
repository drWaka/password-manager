@section('pageSection')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 login-form">
                <form action="">
                    <div class="row">
                        <div class="col-12 label">
                            Username :
                        </div>
                        <div class="col-12 form-group">
                            <input type="text" name="username" class="form-control" placeholder="Enter Username">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 label">
                            Password :
                        </div>
                        <div class="col-12 form-group">
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endSection

@extends('templates.html-template')