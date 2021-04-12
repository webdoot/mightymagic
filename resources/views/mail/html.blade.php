
<p>Subject &nbsp; : {{ $subject }} </p>

<p>
	Name &nbsp; &nbsp; : {{ $name }} <br>
	Email &nbsp; &nbsp; : {{ $email }} <br>
	Contact &nbsp;: {{ $contact }} <br>
	@if(isset($gender))
	Gender &nbsp; : {{ $gender }} <br>
	@endif
	@if(isset($category))
	Category : {{ $category }} <br>
	@endif
	@if(isset($info))
	Message &nbsp;: {{ $info }} <br>
	@endif
</p>

---------------------------------------------
<br><i>Client ip - {{$ip}} </i>