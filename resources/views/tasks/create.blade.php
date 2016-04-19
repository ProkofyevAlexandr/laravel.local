@extends('layouts.app')

@section('pageTitle', 'Add tasks')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="col-md-6">
                        <div class="panel-heading">Add task</div>
                        <div class="panel-body">
                            <div>
                                @if(isset ($errors))

                                @endif
                            </div>
                            <form action="{{route('tasks.store')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class = "form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <select name="status_priority_id" class = "form-control">
                                        <option value="0">Select status</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Date End</label>
                                    <input type="text" class="form-control" name="date_end">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" name="submit">Add task</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop