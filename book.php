<!DOCTYPE html>
<html>
  <head>
    <title>Ez Spin Laundry Shop</title>
    <link rel="icon" type="image/icon" href="favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      background-image: url(images/mochi.jpg);
      background-image: linear-gradient(rgba(132, 208, 233, 0.767),rgba(38, 189, 239, 0.521)), url(images/mochi.jpg);
      }
      form {
      width: 700px;
      padding: 20px;
      border-radius: 6px;
      background: #fff; 
      }
      p.top-info {
      margin: 10px 0;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #26bdef;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 8px 0 #26bdef;
      color: #26bdef;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox] {
      width: 0;
      visibility: hidden;
      }
      label.radio, label.checkbox {
      position: relative;
      display: inline-block;
      margin: 5px 20px 25px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before, label.checkbox:before{
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #26bdef;
      }
      label.checkbox:before{ border-radius:5px}
      input[type=radio]:checked + label:before, label.radio:hover:before,
      input[type=checkbox]:checked + label:before, label.checkbox:hover:before{
        border: 2px solid #3263cd;
      }
      label.radio:after, label.checkbox:after {
      content: "";
      position: absolute;
      width: 8px;
      height: 4px;
      top: 6px;
      left: 5px;
      background: transparent;
      border: 3px solid #26bdef;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after, input[type=checkbox]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #26bdef;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #26bdef ;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
   <form action="code.php" method="POST">
        <div class="item">
          <p>Name</p>
          <div class="name-item">
            <input type="text" name="first" id="first"placeholder="First" required/>
            <input type="text" name="last" id="last" placeholder="Last" required/>
          </div>
        </div>
        <div class="item">
         <p>Phone number</p>
         <input type="text" name="number" id="number" placeholder="0912-345-6789"required/>
       </div>
       <div class="item">
        <p>Email address</p>
        <input type="text" name="email" id="email" placeholder="ezspin@gmail.com" required/>
      </div>
        <div class="item">
          <p>Pick up date and time</p>
          <input type="datetime-local" name="pdate" id="pdate" required/>
        </div>
        <div class="item">
         <p>Pick up address</p>
         <div class="item">
           <input type="text" name="paddress" id="paddress" required/>
         </div>
       </div>
         <div class="item">
           <p>Delivery date and time<p>(NOTE: Date and time of preferred delivery At least two days after pickup)</p></p>
           <input type="datetime-local" name="ddate" id="ddate" required/>
         </div>
         <div class="item">
          <p>Delivery address</p>
          <div class="item">
            <input type="text" name="daddress" id="daddress"required/>
          </div>
        </div>
        <div class="question">
          <p>What services you want to avail?</p>
          <div class="question-answer">
            <div>
              <input type="checkbox" value="Wash Dry & Fold" id="checkbox_1" name="services[]"/>
              <label for="checkbox_1" class="checkbox"><span>Wash Dry & Fold</span></label>
            </div>
            <div>
              <input type="checkbox" value="Dry Cleaning" id="checkbox_2" name="services[]"/>
              <label for="checkbox_2" class="checkbox"><span>Dry Cleaning</span></label>
            </div>
            <div>
              <input type="checkbox" value="Hand Wash" id="checkbox_3" name="services[]"/>
              <label for="checkbox_3" class="checkbox"><span>Hand Wash</span></label>
            </div>
            <div>
              <input type="checkbox" value="Iron/Press" id="checkbox_4" name="services[]"/>
              <label for="checkbox_4" class="checkbox"><span>Iron/Press</span></label>
            </div>
          </div>
        </div>
        <div class="btn-block">
          <button type="submit" name="submit">Book</button>
        </div>
      </form>
    </div>
  </body>
</html>


