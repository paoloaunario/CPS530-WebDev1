<!DOCTYPE html>
<html>
<body>

<h1>Changing background colour with ASP!</h1>

<%
  Response.Cookies("visited")="1"
  visit = Request.Cookies("visited")

Response.Write("You visited at " & visit & ".<br>")

colour = Request.QueryString("Colour")
Response.Write("The background colour you have choosen is "& colour &"<br>")
%>
<body bgcolor="<%=colour%>">

</body>
</html>
