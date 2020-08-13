@extends('layout.app')
@section('content')
<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($inductees as $inductee)
       
            <tr>
              <td>{{$inductee->firstname}}</td>
              <td>{{$inductee->lastname}}</td>
              <td>cscs num</td>
            </tr>
        
        @empty
            <tr>No inductee yet</tr>
        @endforelse
    </tbody>
    </table>

@endsection


  
  
  
  
  
  
  
  
  
  
    
    
    
    
    
    
    
    
 