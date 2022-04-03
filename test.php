<html>

<head>
    <title>PHP-Test</title>
    <style>
      table {
        margin: auto;
        width: 35%;
      }
      table,
      tr,
      th,
      td {
        border: 2px solid black;
        border-collapse: collapse;
      }
      th,
      td {
        padding: 5px;
      }
      caption {
        font-size: 20px;
        color: red;
        font-weight: bold;
        margin-bottom: 10px;
      }
      textarea {
        resize: none;
      }
    </style>
</head>

<body>
<form action="data.php" method="post">
      <table>
        <tr>
          <th colspan="2">Regestration Form</th>
        </tr>
        <tr>
          <th>
            <label for="firstname"> First Name </label>
          </th>
          <td>
            <input type="text" name="firstName" id="firstname" style="width: 250px;" />
          </td>
        </tr>
        <tr>
          <th>
            <label for="lastname"> Last Name </label>
          </th>
          <td>
            <input type="text" name="lastName" id="lastname" style="width: 250px;" />
          </td>
        </tr>
        <tr>
          <th>
            <label for="txt"> Address </label>
          </th>
          <td>
            	<textarea id="address" cols="31" name="address"></textarea>
          </td>
        </tr>
        <tr>
          <th>
            <label for="country"> Country </label>
          </th>
          <td>
            <select id="country" name="country" style="width: 250px;">
              <option>Monfia</option>
              <option>Cairo</option>
              <option>Alex</option>
            </select>
          </td>
        </tr>
        <tr>
          <th rowspan="2">
            <label> Gender </label>
          </th>
          <td>
            <input type="radio" name="gender" value="male" id="mal" />
            <label for="gen"> Male </label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" name="gender" value="female" id="fem" />
            <label for="fem"> Female </label>
          </td>
        </tr>
        <tr>
						<td  >
							<label for="skills">Skills</label>
						</td>
						<td>
                        <input type="checkbox" name="skills[]" value="php" id="php">
                        <label for="php">PHP</label>

                        <input type="checkbox" name="skills[]" value="mysql" id="mysql">
                        <label for="mysql">MYSQL</label>
                        <br>               
                        <input type="checkbox" name="skills[]" value="postgresql" id="postgresql">
                        <label for="postgresql">PostgreSQL</label>

                        <input type="checkbox" name="skills[]" value="j2se" id="j2se">
                        <label for="j2se">J2SE</label>
						</td>
					</tr>		
        <tr>
          <th>
            <label for="username"> User Name </label>
          </th>
          <td>
            <input type="text" name="userName" id="username"  style="width: 250px;"/>
          </td>
        </tr>
        
        <tr>
          <th>
            <label for="pass"> Password </label>
          </th>
          <td>
            <input type="password" name="password" id="pass"  style="width: 250px;"/>
          </td>
        </tr>
        
        <tr>
          <th>
            <label for="Department"> Department</label>
          </th>
          <td>
            <input type="text" name="Department" id="Department"style="width: 250px;" />
          </td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
          </td>
        </tr>
      </table>
    </form>
</body>

</html>