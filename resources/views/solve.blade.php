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
            <td>
              <fieldset>
                <h3 align="center">From equation:&nbsp;&nbsp;&nbsp; a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup></h3>
                <h3 align="center">
                  <%
                    int a = Integer.parseInt(request.getParameter("valueA"));
                    int b = Integer.parseInt(request.getParameter("valueB"));
              
                    out.print("Variable:&nbsp;&nbsp;&nbsp; a = " + a);
                    out.print(", &nbsp;b = " + b);
                    out.print("<br>");
                    out.print("<br> " + a);
                    out.print("<sup>2</sup> + " + b);
                    out.print("<sup>2</sup> = c<sup>2</sup>");
                    out.print("<br>");
                    out.print("" + Math.pow(a,2));
                    out.print(" + " + Math.pow(b,2));
                    out.print(" = c<sup>2</sup>"+"<br>");
                    out.print("c<sup>2</sup> = " + (Math.pow(a,2)+Math.pow(b,2)));
                    out.print("<br>"+"c = " + Math.sqrt((Math.pow(a,2)+Math.pow(b,2))));
                    out.print("<br><br>");
                  %>
                    <p align="center"><a href="index.jsp"><input type="submit" value=" Back to Home " style="width:200px;height:40px"></a></p>
                  </h3>  
              </fieldset>
            </td>
          </tr>
        </tbody>
      </table>
    </center>

@endsection