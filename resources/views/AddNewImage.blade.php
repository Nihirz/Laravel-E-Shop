@extends('layouts.backend.main')
@section('content')
   <form action="{{route('store.image')}}" method="POST" enctype="multipart/form-data" class="form-group ml-5 mt-3">
        @csrf
        <table>
            <tr>
                <th>Choose Image</th>
            </tr>
            <tr class="mt-3">
                <td>
                    <input type="file" name="image">
                </td>
            </tr>
            
            <tr>
                <th>Choose Your Categories</th>
            </tr>
            <tr>
                <td>
                    <select name="category">
                        <option selected disabled>-Select A Category-</option>
                        <option value="1">Home Appliances</option>
                        <option value="2">Entertainment</option>
                    </select>
                </td>
            </tr>
            <tr class="mt-3">
                <td>
                    <input type="submit" name="submit" value="SAVE" class="btn btn-success">
                </td>
            </tr>
        </table>
    </form>
@endsection