<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
    {{Form::open('main/nyt', 'GET');}}
    {{Form::select('resource', array('mostemailed' => 'most emailed', 'mostviewed' => 'most viewed', 'mostshared' => 'most shared') ) }}
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

  @include('partials/handlebar-templates/item')
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="https://raw.github.com/wycats/handlebars.js/1.0.rc.2/dist/handlebars.js"></script>


<script>
  (function() {
(function(){
var template = Handlebars.compile($('#template').html());



$('#resource, #section').on('load change', function(){
  $('#content').empty();
  $.ajax({
    url: "{{ URL::to_action('main@nyt');}}",
    type: 'GET',
    dataType: 'json',
    data: {resource: $('#resource').val(), section : $('#section').val() },
    success: function(data, textStatus, xhr) {
      console.log(data);
      $('#content').html("total results: " + data.num_results + template(data.results));
    },
    error: function() {
      $('#content').html("There was an error");
    },
    ajaxStart: function(){
      $('#content').html('loading...');
      console.log('starting');
    },
    ajaxStop: function(){
      console.log('stopped');
    }
  });

})
})();
  }())
</script>
</body>

</html>