<h1>New project</h1>

<p>
<div>
    {{ $lead->surname }}-{{ $lead->name }}-contacts
</div>
<div>
    <ul>
        <li>Name: {{ $lead->name }}</li>
        <li>Surname: {{ $lead->surname }}</li>
        <li>Phone: {{ $lead->phone }}</li>
        <li>Email: {{ $lead->email }}</li>
        <li>Message: {{ $lead->message }}</li>
    </ul>
</div>
</p>
