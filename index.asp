<%EnableSessionState=False
host = Request.ServerVariables("HTTP_HOST")

if host = "migliore06.fr" or host = "www.migliore06.fr" then response.redirect("https://www.migliore06.fr/")

else
response.redirect("https://www.migliore06.fr/error.htm")
end if
%>