<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
  <!-- <form method="GET" action="request.php"> -->
    {{Form::open('user/profile', 'PUT');}}
    <select name="resource" id="resource">
      <option value="mostemailed">most emailed</option>
      <option value="mostviewed">most viewed</option>
      <option value="mostshared">most shared</option>
    </select>

    <select name="section" id="section">
      <option value="all-sections">All Sections</option>
      <option value="Arts">Arts</option>
      <option value="Automobiles">Automobiles</option>
      <option value="Autos">Autos</option>
      <option value="Books">Books</option>
      <option value="Booming">Booming</option>
      <option value="Business">Business</option>
      <option value="Business Day">Business Day</option>
    </select>
  </form>

  <div id="content"></div>


  <script type="text/x-handlebars-template" id="template">
    {{#each this}}
      <p>title: <a href="{{url}}">{{title}}</a></p>
      <p>byline: {{byline}}</p>
      <p>section: {{section}}</p>
      <p>==========</p>
      {{/each}}
  </script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="https://raw.github.com/wycats/handlebars.js/1.0.rc.2/dist/handlebars.js"></script>
  <script src="app.js"></script>

</body>

</html>