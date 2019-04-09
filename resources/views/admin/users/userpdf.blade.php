<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>{{$user->name}}</h1>
	<p>
		<table width="600" border="0" cellpadding="0" cellspacing="0" style="color:rgb(64,64,64);line-height:18px;margin:20px">
    <tbody>

    <tr>
        <td style="font:13px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">

    <br><br>

<div style="font-size:10pt;padding:5px;font-weight:bold">Personal Details:</div>
<table width="100%" style="font-size:10pt;padding:5px;border-width:1px 0px;border-top-style:solid;border-bottom-style:solid;border-top-color:rgb(192,192,192);border-bottom-color:rgb(192,192,192);background-color:rgb(250,250,250);border-left-style:initial;border-left-color:initial;border-right-style:initial;border-right-color:initial" cellpadding="0" cellspacing="5" border="0">
    <tbody>
    <tr>
        <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Name:</td>
        <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$user->name}}</td>
    </tr>
    @if($user->contact_number != '')
    <tr>
        <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Contact Number:</td>
        <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$user->contact_number}}</td>
    </tr>
    @endif
    @if($user->nric_fin != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">NRIC/FIN:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$user->nric_fin}}</td>
	</tr>
    @endif
    @if($user->email != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Email:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$user->email}}</td>
	</tr>
    @endif
    @if($user->age != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Age:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$user->age}}</td>
	</tr>
    @endif
    @if($user->sex != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Sex:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$user->sex}}</td>
	</tr>
    @endif
    @if($user->marital_status != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Marital Status:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$user->marital_status}}</td>
	</tr>
    @endif
    @if($user->address_in_singapore != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Address in Singapore:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$user->address_in_singapore}}</td>
	</tr>
    @endif
    @if($user->address_in_india != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Address in India:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$user->address_in_india}}</td>
	</tr>
    @endif
    @if($user->parish_in_india != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Parishs in India:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$user->parish_in_india}}</td>
	</tr>
    @endif
    @if($user->diocese_in_india != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Diocese in India:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$user->diocese_in_india}}</td>
	</tr>
    @endif
    @if($user->family_living_in_india != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Family living in Singapore:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$user->family_living_in_india ==1 ? "Yes" : "No"}}</td>
	</tr>
    @endif

</tbody>
</table>
@if($user->family_living_in_india == 1)
@if(count($familyDetails)>0)
<div style="font-size:10pt;padding:5px;font-weight:bold">Family Details:</div>
<?php $i = 1;?>
@foreach($familyDetails as $data)
<table width="100%" style="font-size:10pt;padding:5px;border-width:1px 0px;border-top-style:solid;border-bottom-style:solid;border-top-color:rgb(192,192,192);border-bottom-color:rgb(192,192,192);background-color:rgb(250,250,250);border-left-style:initial;border-left-color:initial;border-right-style:initial;border-right-color:initial" cellpadding="0" cellspacing="5" border="0">
    <tbody>
<tr>
    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Member {{$i}}:</td>
    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$data['member_name']}}</td>
</tr>
<tr>
    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Relation:</td>
    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$data['relation']}}</td>
</tr>
<tr>
    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Sex:</td>
    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$data['sex']}}</td>
</tr>
</tbody>
</table>
<?php $i++; ?>
@endforeach
@endif
@endif


            <br><br><br>
        </td>
    </tr>
   

</tbody></table>
	</p>
</body>
</html>