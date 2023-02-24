<?php
/* Smarty version 4.3.0, created on 2023-02-24 11:08:15
  from 'C:\xampp\htdocs\Project\templates\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63f88c8fcb7788_06382189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '356a70adbc2e6cebce1fe66b1bb39a8e72a5e852' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project\\templates\\test.tpl',
      1 => 1677233292,
      2 => 'file',
    ),
    '389683eb6346273827acb32450effe5ae7c180c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project\\templates\\header.tpl',
      1 => 1677139103,
      2 => 'file',
    ),
    'af0cd90a97f6dda9e8ffe59b7da98d6f1771c7bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project\\templates\\footer.tpl',
      1 => 1677139227,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_63f88c8fcb7788_06382189 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>

<head>
    <title>Info from header file</title>
</head>

<body>
<h1>Hello from configure file</h1>
<h2>Hello from configure file</h2>

<pre>
    Name: Rajat Sachan
    Address: Some filler &amp; text
    Date: Feb 24, 2023
    </pre>

<select>
    <option value="1">name1</option>
<option value="2">name2</option>
<option value="3">name3</option>
<option value="4" selected="selected">name4</option>
<option value="5">name5</option>

</select>

    <h3>name1</h3>
    <h3>name2</h3>
    <h3>name3</h3>
    <h3>name4</h3>
    <h3>name5</h3>

    name: name1 - Phone: 9999

    name: name2 - Phone: 9999

    name: name3 - Phone: 9999

    name: name4 - Phone: 9999

    name: name5 - Phone: 9999


    <li>name1</li>
    <li>name2</li>
    <li>name3</li>
    <li>name4</li>
    <li>name5</li>


    <pre><li>name1-9999</li></pre>

    <pre><li>name2-9999</li></pre>

    <pre><li>name3-9999</li></pre>

    <pre><li>name4-9999</li></pre>

    <pre><li>name5-9999</li></pre>


<p>[{"name":"name1","phone":"9999"},{"name":"name2","phone":"9999"},{"name":"name3","phone":"9999"},{"name":"name4","phone":"9999"},{"name":"name5","phone":"9999"}]</p>



<a href="/Project/index.php?page=smarty">Click here to go to smarty page</a>

<h1>some constant</h1>

<h1>current dir: C:\xampp\htdocs\Project\templates<h1>



        <pre>
            address: Some filler & text concat this string
        char count: 15
        word count: 3
        Date: 2023-02-24
        default: Some filler & text
        escape: Some filler &amp; text

                Combining Modifiers: S O M E   F I L L E R   &   T E X T

                The first name is fname.The last name is lname.<ul><li>1</li><li>2</li><li>3</li></ul><ul>no iteration</ul><ul><li>red</li><li>green</li><li>blue</li></ul>

            access granted
    
    

        
        0<br />
        2<br />
        4<br />
        6<br />

        
        <label><input type="checkbox" name="id[]" value="1000" seperator="&lt;br/&gt;" />n1</label>
<label><input type="checkbox" name="id[]" value="1001" seperator="&lt;br/&gt;" />n2</label>
<label><input type="checkbox" name="id[]" value="1002" seperator="&lt;br/&gt;" />n3</label>
<label><input type="checkbox" name="id[]" value="1003" seperator="&lt;br/&gt;" />n4</label>

        <img src="https://kgo.googleusercontent.com/profile_vrt_raw_bytes_1587515358_10512.png" alt="" width="501" height="512" />

                <select name="Date_Month">
<option value="01">January</option>
<option value="02" selected="selected">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<select name="Date_Day">
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24" selected="selected">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="Date_Year">
<option value="2023" selected="selected">2023</option>
</select>

        <select name="Time_Hour">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11" selected="selected">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
</select>
<select name="Time_Minute">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08" selected="selected">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>
<select name="Time_Second">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15" selected="selected">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>



    </pre>







</body>

</html><?php }
}
