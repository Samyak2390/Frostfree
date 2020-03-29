<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'NOtFrostFree')
<img src="{{asset('images/logo.png')}}" class="logo" alt="FrostFree Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
