<?php 
  require_once '../config.php';
  require_once 'header.inc.php';
?>

<div class="container">

    <!-- Teaser -->
    <div class="teaser">
      <h4 id='date'></h4>
    </div><br><br><br>

    <!-- Intro -->
    <div class="teaser">
      <h1>Creating a Date Object in JavaScript</h1>
      <p>There are four ways of creating or instantiating a Date object in JavaScript. Let us use some variable 'x' for examples.</p>
    </div>

      <pre><b>
      1. var x = new Date();
      2. var x = new Date(dateString);
      3. var x = new Date(year, month, day, hours, minutes, …);
      4. var x = new Date(milliseconds);
      </pre></b><br><br><br><br>

    <!-- Example1 -->
    <div class="article">
      <h2>Date & Time in JavaScript: Use & Example</h2>
      <p>
        The Date object in JavaScript is used for manipulating date and time. 
        This lesson describes the existing four ways of instantiating a Date object, along with its methods get() and set() and different uses.
      </p>
    </div>

    <!-- Code Area 1 -->
    <div class="codeArea">
      <h2>Example:</h2>


      <div class="codeArea flex-container codeExample">
              <div class="col-6 code">
                <pre>
                  <code class = "language-css">
        var x = new Date();
                  </code>
                </pre>
              </div>
              
            <div class="col-6 output">
              <h4>Output:</h4>
              
              <div id="outputbmi"></div>
             <div class="" id="run0"></div>
              <button class="btn btn-run" onclick="run(0)">Run</button>
              <button class="btn btn-run" onclick="reset(0)">Reset</button>
            </div>
      </div>
    </div><br><br><br><br><br>

        <!-- Example2 -->
    <div class="article">
      <h2>new Date(dateString) Constructor</h2>
      <p>
        Using the given date string format, the date is created by this Date object.
      </p>
    </div>

    <!-- Code Area 2 -->
    <div class="codeArea">
      <h2>Example:</h2>

      <div class="codeArea flex-container codeExample">
              <div class="col-6 code">
                <pre>
                  <code class = "language-css">
var x = new Date(''November 13, 2015 10:11:00'')
                  </code>
                </pre>
              </div>
              
            <div class="col-6 output">
              <h4>Output:</h4>
              
              <div id="outputbmi"></div>
             <div class="" id="run1"></div>
              <button class="btn btn-run" onclick="run(1)">Run</button>
              <button class="btn btn-run" onclick="reset(1)">Reset</button>
            </div>
      </div>
    </div><br><br><br><br><br>


        <!-- Example3 -->
    <div class="article">
      <h2>new Date(year, month, day, hours, minutes, seconds, …)</h2>
      <p>
    In the above example, the parameters are ''year, month, day, hour, minute and second. JavaScript takes Month from 0 to 11. 
    January is 0, February is 2, ……December is 11; days from 0 to 23; hours, minutes and seconds from 0 to 59. 
    Thus the given parameter is converted to a meaningful date and time format.
    It is not necessary to specify all the parameters. You can specify only the desired parameters. 
    For example, var d = new Date(2018, 11, 26). Here, only the year, month and day are specified. 
    This displays the result as: Wed Dec 26, 2018, 00:00:00
      </p>
    </div>

    <!-- Code Area 3 -->
    <div class="codeArea">
      <h2>Example:</h2>

      <div class="codeArea flex-container codeExample">
              <div class="col-6 code">
                <pre>
                  <code class = "language-css">
var x = new Date(2018, 10, 20, 11, 12, 4);
                  </code>
                </pre>
              </div>
              
            <div class="col-6 output">
              <h4>Output:</h4>
              
              <div id="outputbmi"></div>
             <div class="" id="run2"></div>
              <button class="btn btn-run" onclick="run(2)">Run</button>
              <button class="btn btn-run" onclick="reset(2)">Reset</button>
            </div>
      </div>
    </div><br><br><br><br><br>

</div>

    <script src="../js/topic.T-hamza.js"></script>
    <script src="../js/topic.T-hamza.time.js"></script>


  

    <?php include 'footer.inc.php'; ?>