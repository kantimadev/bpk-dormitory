<!doctype html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Dormitory Management</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    </head>

    <body>
      <h1>---- BPK Dormitory Management ----</h1>

        {{ Form::open() }}
        <!-- <div>
          {{ Form::label('flattype', 'ประเภทแฟลต') }}
          {{ Form::radio('flattype','ข.', true, array('id'=>'flattype', 'class'=>'flattype') ) }}
          {{ Form::label('flattypelabel', 'ข') }}
          {{ Form::radio('flattype','ค.', '' , array('id'=>'flattype', 'class'=>'flattype')) }}
          {{ Form::label('flattypelabel', 'ค') }}


        </div> -->

        <div>
          {{ Form::label('flattype', 'ประเภทแฟลต') }}

          <select name="flattype" id="flattype">
            <option value="ข">ข</option>
            <option value="ค">ค</option>
          </select>
        </div>

        <div>
          {{ Form::label('flatname', 'แฟลต') }}

          <select name="flatname" id="flatname">
            @foreach($flatDefaults as $flatDefault)
            <option value="{{ $flatDefault->name }}">{{ $flatDefault->name }}</option>
            @endforeach
          </select>
        </div>



        {{ Form::close() }}


        <script type="text/javascript">

        $('#flattype').on('change', function(e) {

          console.log(e);
          var flattype_id = e.target.value;

          //ajax
          $.get('/ajax-flattype?flattype_id=' + flattype_id, function(data){
            $('#flatname').empty();
            $.each(data, function(index, flatObj){

              $('#flatname').append('<option value="'+flatObj.name+'">'+flatObj.name+'</option>');

            });
          });

        });
        </script>

    </body>


</html>
