<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
      table,tr,td{
				border: 1px solid black;
				padding: 15px;
			}

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #drop-area {
              border: 2px dashed #ccc;
              border-radius: 20px;
              width: 480px;
              font-family: sans-serif;
              margin: 100px auto;
              padding: 20px;
            }
            #drop-area.highlight {
              border-color: purple;
            }
            p {
              margin-top: 0;
            }
            .my-form {
              margin-bottom: 10px;
            }
            #gallery {
              margin-top: 10px;
            }
            #gallery img {
              width: 150px;
              margin-bottom: 10px;
              margin-right: 10px;
              vertical-align: middle;
            }
            .button {
              display: inline-block;
              padding: 10px;
              background: #ccc;
              cursor: pointer;
              border-radius: 5px;
              border: 1px solid #ccc;
            }
            .button:hover {
              background: #ddd;
            }
            #fileElem {
              display: none;
            }



        </style>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                  <div align="center" style="padding:10px;">
                  <table cellspacing="1" cellpadding="3" >
                  <tr><th><input type="file" name="file" id="file" size="60"></th></tr>
                  <tr><td>

                    <div id="drop-area">

                    <form class="my-form">
                    <p>Upload multiple files with the file dialog or by dragging and dropping images onto the dashed region</p>
                    <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
                    <label class="button" for="fileElem">Select some files</label>
                    </form>

                    </div>



                  </td></tr>

                  <tr align="center"><td><input type="submit" id="open" class="button"></td></tr>
                  </table>
                  </div>
                  </div>



                  <div align="center">
	                  <table cellspacing="1" cellpadding="3">
	                     <tr>
	                        <td>
	                           <select name="cl1" onchange="myFunction()">
		                           <option value="FirstName">First Name</option>
		                           <option value="LastName" selected>LastName</option>
		                           <option value="emailid">EmailId</option>
		                           <option value="phonenumber">Contact</option>
	                            </select>
	                         </td>

	<td>
	<select name="cl2">
		<option value="FirstName">First Name</option>
		<option value="LastName" selected>LastName</option>
		<option value="emailid">EmailId</option>
		<option value="phonenumber">Contact</option>
	</select>
	</td>

	<td>
	<select name="cl3">
		<option value="id">Number</option>
		<option value="FirstName">First Name</option>
		<option value="LastName" selected>LastName</option>
		<option value="emailid">EmailId</option>
		<option value="phonenumber">Contact</option>
	</select>
	</td>

	<td>
	<select name="cl4">
		<option value="id">Number</option>
		<option value="FirstName">First Name</option>
		<option value="LastName" selected>LastName</option>
		<option value="emailid">EmailId</option>
		<option value="phonenumber">Contact</option>
	</select>
	</td>


	</tr>
	</table>


	</div>


            </div>
        </div>
    </body>
</html>
