<form action="/logout" method="post">
	账号:<input type="text" name="user" /><br />
	密码:<input type="password" name="pwd" /><br />
	<input type="radio" name="usertype" value="1" />管理员
	<input type="radio" name="usertype" value="2" />老师
	<input type="radio" name="usertype" value="3" />学生<br />
	@csrf
	<input type="submit" value="提交"/>
</form>