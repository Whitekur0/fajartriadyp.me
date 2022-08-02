@extends('base')
@section('content')

<table class="table table-bordered border mt-5" style="text-align: center; color:#0a0522;">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Time</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>13.00</td>
        <td>Open</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>14.00</td>
        <td>Close</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>15.00</td>
        <td>Open</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>16.00</td>
        <td>Close</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>17.00</td>
        <td>Open</td>
      </tr>
    </tbody>
  </table>

  @endsection