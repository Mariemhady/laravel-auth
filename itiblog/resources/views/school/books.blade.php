@extends('layout.layout')

@section('danger')
    Books List
@endsection


@section('books')
     <?php
        echo $data[0]."<br>";
        echo $data[1]."<br>";
        echo $data[2]."<br>";
       foreach ($data as $value) {
           echo $value;
        }

    ?> 
     {{count($data)}}
    <h1 class="text-danger">blade syntax</h1>
    <ol>
        @foreach ($data as $item)
            @if ($item == "aya")
                @continue
            @endif

            @unless ($item == "aya")
            welcome 
            @endunless
            <li> {{strtoupper($item)}}</li>
        @endforeach
    </ol> 

    @if (count($data) == 2)
       the result is  == 3
    @else
        the result is  == 5
    @endif


    @unless (count($data) == 2)
        the result is  == 3
    @endunless
    

    @forelse ($data as $item)
        {{$item}}
    @empty
        no itmes found
    @endforelse


    @foreach ($data as $item)
    @if( $loop->first)
                The begain
       @endif
    
   <li> {{$loop->iteration}}{{$item}}</li>
   <li> {{$loop->index}}{{$item}}</li>


       @if( $loop->last)
                THE END
       @endif
    @endforeach

    @php
        $z = 0;
    @endphp
    @while ($z < 3)
      {{ "test".$z }} 
      @php
       $z++   
      @endphp
    @endwhile


@endsection
