<script type="text/x-handlebars-template" id="template">
	{{#each this}}
	  <p>title: <a href="{{url}}">{{title}}</a></p>
	  <p>byline: {{byline}}</p>
	  <p>section: {{section}}</p>
	  <p>==========</p>
	{{/each}}
</script>