@extends('welcome')

@section('title','Calculated | Antwickler')

@section('content')
    <h1 align="center">
        Pythagorean Calculated <br />
    </h1>
    <h2 align="center">Pythagorean equation: &nbsp;a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup></h2>

    <center>
      <table width="500" border="0" align="center">
        <tbody>
          <tr>
            <td><br>

              <h2 align="center">
                  {{session('valueA')}}<sup>2</sup> +
                  {{session('valueB')}}<sup>2</sup> = 
                  c<sup>2</sup> <br><br>

                  {{session('valueA2')}} +
                  {{session('valueB2')}} = 
                  c<sup>2</sup> <br><br>
              </h2>
              <h1 align="center">  
                  c<sup>2</sup> = {{session('total')}} <br>
                  c = {{session('total2')}}
              </h1>
              <br><br>
              
              <h4 align="center"><a href="/calculated">Back to calculate</a></h4>
                    
            </td>
          </tr>
        </tbody>
      </table>
    </center>

@endsection