@foreach($photo as $value)
<a href='#'>
    <img src="{{asset('contenc/glava/1/00{ $value->photo }.png')}}" width=500>
    
</a>

          
@endforeach