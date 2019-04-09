<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>{{$userData['name']}}</h1>
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
        <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$userData['name']}}</td>
    </tr>
    @if($userData['contact_number'] != '')
    <tr>
        <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Contact Number:</td>
        <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$userData['contact_number']}}</td>
    </tr>
    @endif
    @if($userData['nric_fin']  != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">NRIC/FIN:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$userData['nric_fin']}}</td>
	</tr>
    @endif
    @if($userData['email']  != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Email:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$userData['email']}}</td>
	</tr>
    @endif
    @if($userData['age']  != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Age:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$userData['age']}}</td>
	</tr>
    @endif
    @if($userData['sex']  != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Sex:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$userData['sex']}}</td>
	</tr>
    @endif
    @if($userData['marital_status']  != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Marital Status:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$userData['marital_status']}}</td>
	</tr>
    @endif
    @if($userData['address_in_singapore']  != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Address in Singapore:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$userData['address_in_singapore']}}</td>
	</tr>
    @endif
    @if($userData['address_in_india']  != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Address in India:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$userData['address_in_india']}}</td>
	</tr>
    @endif
    @if($userData['parish_in_india'] != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Parishs in India:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$userData['parish_in_india']}}</td>
	</tr>
    @endif
    @if($userData['diocese_in_india'] != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Diocese in India:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$userData['diocese_in_india']}}</td>
	</tr>
    @endif
    @if($userData['singapore_living']  != '')
	<tr>
	    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Family living in Singapore:</td>
	    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$userData['singapore_living'] ==1 ? "Yes" : "No"}}</td>
	</tr>
    @endif

</tbody>
</table>
@if($userData['singapore_living'] == 1)
@if(count($userData['family_member'])>0)
<div style="font-size:10pt;padding:5px;font-weight:bold">Family Details:</div>
<?php $familyMembers = $userData['family_member']; ?>
@for($i=0; $i < count($familyMembers); $i++)
<?php $memberData = explode("_",$familyMembers[$i]); ?>

<table width="100%" style="font-size:10pt;padding:5px;border-width:1px 0px;border-top-style:solid;border-bottom-style:solid;border-top-color:rgb(192,192,192);border-bottom-color:rgb(192,192,192);background-color:rgb(250,250,250);border-left-style:initial;border-left-color:initial;border-right-style:initial;border-right-color:initial" cellpadding="0" cellspacing="5" border="0">
    <tbody>
<tr>
    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Member {{$i+1}}:</td>
    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$memberData[0]}}</td>
</tr>
<tr>
    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Relation:</td>
    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$memberData[1]}}</td>
</tr>
<tr>
    <td width="160" style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">Sex:</td>
    <td style="font:13px/18px &quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif">{{$memberData[2]}}</td>
</tr>
</tbody>
</table>

@endfor
@endif
@endif


            <br><br><br>
        </td>
    </tr>
   

</tbody></table>
	</p>
</body>
</html>