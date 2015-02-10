@extends('layouts.default')

@section('content')
      <h1>BPK Dormitory Management</h1>
      <br>

      <table>
        <tr align="center">
          <td><h3>ห้อง</h3></td>
          <td><h3>แฟลต</h3></td>
          <td><h3>ชั้น</h3></td>
          <td><h3>ชื่อ</h3></td>
          <td><h3>หมายเลขประจำตัว</h3></td>
        </tr>
        @if ($dormRecords->count())
          @foreach ($dormRecords as $dormRecord)
            <tr>
              <td>{{ link_to("/dormRecords/{$dormRecord->roomName}", $dormRecord->roomName) }}</td>
              <td>{{ $dormRecord->flatName }}</td>
              <td>{{ $dormRecord->floor }}</td>
              <td>{{ $dormRecord->name }}</td>
              <td>{{ $dormRecord->empID }}</td>
            </tr>
            <tr>
          @endforeach
        @else
          <p>Unfortunately, there are no records. </p>
        @endif
      </table>

@stop
