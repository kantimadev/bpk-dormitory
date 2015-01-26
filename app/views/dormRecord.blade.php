<!doctype html>
<html>
    <head>
      <meta charset="utf-8">
    </head>

    <body>
      <h1>---- BPK Dormitory Management ----</h>
      <div>
        <select>
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
          <option value="mercedes">Mercedes</option>
          <option value="audi">Audi</option>
        </select>

        <select>
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
          <option value="mercedes">Mercedes</option>
          <option value="audi">Audi</option>
        </select>
      </div>


      <?php foreach($dorms as $dorm): ?>
        <tr>
          <!-- <td>{{ $dorm->roomName }}</td> -->
          <option value=$dorm[roomName]>{{ $dorm->roomName }}</option>
          <!-- echo '<option value="'.$dorm['roomName'].'">'.$dorm['roomName'].'</option>'; -->
        </tr>
      <?php endforeach; ?>



    </body>
</html>
